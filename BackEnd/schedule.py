import calendar
import datetime

def schedule_exam(days, subjects):
    # Define the year for which you want to schedule the exam
    year = datetime.date.today().year
    
    # Generate the calendar for the specified year
    cal = calendar.Calendar()
    
    # Initialize a dictionary to store the scheduled subjects
    schedule = {}
    
    # Loop through each day of the exam and the corresponding subject
    for i, subject in enumerate(subjects):
        # Calculate the date for the current day of the exam
        date = (datetime.date(year, 1, 1) + datetime.timedelta(days=i)).strftime('%d/%m/%Y')
        
        # If the date is not a weekend or a national holiday, schedule the subject
        if not is_weekend(date) and not is_holiday(date):
            schedule[date] = subject
    
    # Generate the calendar for the specified year
    cal = calendar.monthcalendar(year, 1)
    
    # Loop through each day in the calendar and mark the scheduled dates with green color
    for week in cal:
        for i, day in enumerate(week):
            if day != 0:
                date = datetime.date(year, 1, day).strftime('%d/%m/%Y')
                
                if date in schedule:
                    print('\033[92m' + str(day).rjust(2) + '\033[0m', end=' ')
                else:
                    print(str(day).rjust(2), end=' ')
            else:
                print('  ', end=' ')
        print()
    
def is_weekend(date_str):
    # Convert the date string to a datetime object
    date = datetime.datetime.strptime(date_str, '%d/%m/%Y')
    
    # Check if the date is a weekend (Saturday or Sunday)
    return date.weekday() >= 5

def is_holiday(date_str):
    # Define a list of Indian national holidays
    indian_holidays = [
        datetime.date(datetime.date.today().year, 1, 26), # Republic Day
        datetime.date(datetime.date.today().year, 10, 2), # Gandhi Jayanti
        datetime.date(datetime.date.today().year, 12, 25) # Christmas
    ]
    
    # Convert the date string to a datetime object
    date = datetime.datetime.strptime(date_str, '%d/%m/%Y').date()
    
    # Check if the date is a national holiday
    return date in indian_holidays
