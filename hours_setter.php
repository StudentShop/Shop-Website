<?php
################################################################################
# This script sets the hours automatically on /index.php & /about/hours.php.   #
# It should work with only minor adjustments until the spring semester of 2021 #
################################################################################

//Set date ranges for alternative hours here
//Full timestamp necessary YYYY-MM-DD HH:MM:SS
$alt_hours_1 = [
    ["2015-08-28 00:00", "2015-08-04 23:59:59"],
];

//Set how to display alt_hours_1 here
$alternative_hours_1 =  '<p>Monday: Closed<br />
   Tuesday: Closed<br />
   Wed-Thur: 8am to 4pm
   Fri: Closed<br />
   Weekend: Closed</p>';

//Set date ranges for a week of different alternative hours following a week of alternative hours here
//Full timestamp necessary YYYY-MM-DD HH:MM:SS
$alt_hours_2 = [
    ["2014-08-29 00:00", "2014-09-04 23:59:59"],
];

//Set how to display alt_hours_2 here
$alternative_hours_2 = '<p>Monday: Closed<br />
   Tuesday: Closed<br />
   Wed-Fri: 8am to 9pm<br />
   Weekend: Closed</p>';

//Set date ranges for the shop being closed all week below
//NOT FOR INDIVIDUAL DAYS!, use alt_hours_1 & alt_hours_2 for that
//Full timestamp necessary YYYY-MM-DD HH:MM:SS
$shop_closed = [
    ["2015-08-15 00:00", "2015-08-21 23:59:59"],
];

//Shop closed all week
$closed = '<p>Mon-Fri: Closed<br />
   Weekend: Closed<br />
   See why: <a href="/events/index.php">events page</a></p>';

//Date ranges for semester hours, including accounting for spring breaks, through spring 2021
//Full timestamp necessary YYYY-MM-DD HH:MM:SS
$sem_hours = [
/*2014 Fall start & end*/ ["2014-09-02 00:00", "2014-12-10 23:59:59"],
/*2015 Spring start & spring break start*/["2015-01-20 00:00", "2015-03-28 00:00"],
/*2015 Spring break end & spring end*/["2015-04-06 00:00", "2015-05-08 23:59:59"],
/*2015 Fall start & end*/["2015-09-02 00:00", "2015-12-15 23:59:59"],
/*2016 Spring start & spring break start*/["2016-01-19 00:00", "2016-03-19 00:00"],
/*2016 Spring break end & spring end*/["2016-03-28 00:00", "2016-05-06 23:59:59"],
/*2016 Fall start & end*/["2016-09-02 00:00", "2016-12-15 23:59:59"],
/*2017 Spring start & spring break start*/["2017-01-23 00:00", "2017-03-18 00:00"],
/*2017 Spring break end & spring end*/["2017-03-27 00:00", "2017-05-11 23:59:59"],
/*2017 Fall start & end*/["2017-09-05 00:00", "2017-12-15 23:59:59"],
/*2018 Spring start & spring break start*/["2018-01-22 00:00", "2018-03-24 00:00"],
/*2018 Spring break end & spring end*/["2018-04-02 00:00", "2018-05-10 23:59:59"],
/*2018 Fall start & end*/["2018-09-04 00:00", "2018-12-14 23:59:59"],
/*2019 Spring start & spring break start*/["2019-01-22 00:00", "2019-03-16 00:00"],
/*2019 Spring break end & spring end*/["2019-03-25 00:00", "2019-05-10 23:59:59"],
/*2019 Fall start & end*/["2019-09-03 00:00", "2019-12-13 23:59:59"],
/*2020 Spring start & spring break start*/["2020-01-21 00:00", "2020-03-14 00:00"],
/*2020 Spring break end & spring end*/["2020-03-23 00:00", "2020-05-08 23:59:59"],
/*2020 Fall start & end*/["2020-09-02 00:00", "2020-12-15 59:59:59"],
/*2021 Spring start & spring break start*/["2021-01-19 00:00", "2021-03-27 00:00"],
/*2021 Spring break end & spring end*/["2021-04-05 00:00", "2021-05-07 23:59:59"],
];

//Times the shop is open during Fall/Spring Semester
$semester_hours = '<p>Mon-Thurs: 8am to 9pm<br />
   Friday: 8am to 4pm<br />
   Weekend: Closed</p>';

//Times the shop is open during Winter/Summer/Spring/etc. breaks
$break_hours = '<p>Mon-Fri: 8am to 4pm<br />
   Weekend: Closed</p>';

//*******************************************************************************

//Returns TRUE if today falls between the first timestamp and the second timestamp as defined by $timestamp_range
function today_in_range($timestamp_range) {

    $length = count($timestamp_range);
    reset($timestamp_range);
    for ($i = 0; $i < $length; $i++) {
        if ((time() >= strtotime($timestamp_range[$i][0])) && (time() <= strtotime($timestamp_range[$i][1]))) {
            return TRUE;
        }
    }
}

/*
Sadly this slightly nicer version only works in PHP 5.5, which we don't have yet. :(

//Returns true if today falls between start timestamp and end timestamp as defined by $timestamp_range
function today_in_range($timestamp_range) {
    foreach ($timestamp_range as list($a, $b)) {
        if ((time() >= strtotime($a)) && (time() <= strtotime($b))) {
            return TRUE;
        }
    }
}
*/

//Find out what the shop hours should be set to today and then display them.
//Note: this should be obvious, but these statements must be in this order
if (today_in_range($shop_closed)) {
    echo $closed;
} elseif (today_in_range($alt_hours_1)) {
    echo $alternative_hours_1;
} elseif (today_in_range($alt_hours_2)) {
    echo $alternative_hours_2;
} elseif (today_in_range($sem_hours)) {
    echo $semester_hours;
} else {
    echo $break_hours;
}

?>
