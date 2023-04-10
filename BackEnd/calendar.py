import pandas as pd
import datetime as dt

# create a start and end date
start_date = dt.date(2023, 1, 1)
end_date = dt.date(2023, 12, 31)

# create a list of dates between the start and end date
date_range = pd.date_range(start_date, end_date)

# create a dictionary to hold the calendar data
calendar_data = {
    "Date": date_range,
    "Day_of_Week": date_range.day_name(),
    "Month": date_range.month_name(),
    "Year": date_range.year,
    "Week_Number": date_range.week,
}

# create a pandas dataframe from the dictionary
calendar_df = pd.DataFrame(calendar_data)

# print the first 10 rows of the dataframe
print(calendar_df.head(10))
