<html>
<head>
    <link rel="stylesheet" href="calendar.css?v=<?php echo time(); ?>" type="text/css" />
    <style>
        .calendar-holder {
            display: inline-flex;
        }
    </style>
</head>
<body>
<?php
include 'Calendar.php';
include 'calendar2.php';
include 'Booking.php';
include 'BookableCell.php';
 
 
$booking = new Booking(
    'examsked',
    'localhost',
    'root',
    ''
);
 
$bookableCell = new BookableCell($booking);
 
$calendar = new Calendar();

$calendar2 = new Calendar2();
 
$calendar->attachObserver('showCell', $bookableCell);
 
$bookableCell->routeActions();
 
// echo $calendar->show(), $calendar2->show();


?>

<div class="calendar-holder">
    <p><?php echo $calendar->show() ?></p>
    <p><?php echo $calendar2->show() ?></p>
</div>

<div class="subject-holder">

</div>
</body>
</html>
