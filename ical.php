<?php
$date      = $_GET['date'];
$startTime = $_GET['startTime'];
$endTime   = $_GET['endTime'];
$subject   = $_GET['subject'];
$desc      = $_GET['desc'];
$location  = $_GET['location'];


  $ical = "BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//hacksw/handcal//NONSGML v1.0//EN
BEGIN:VEVENT
UID:" . md5(uniqid(mt_rand(), true)) . "example.com
DTSTAMP:" . gmdate('Ymd').'T'. gmdate('His') . "Z
DTSTART:".$date."T".$startTime."00Z
DTEND:".$date."T".$endTime."00Z
SUMMARY:".$subject."
DESCRIPTION:".$desc."
CLASS:PUBLIC
LOCATION:".$location."
ORGANIZER:Unicam Magyarország Kft. <unicam@unicam.hu>
END:VEVENT
END:VCALENDAR";

  //set correct content-type-header
  header('Content-type: text/calendar; charset=utf-8');
  header('Content-Disposition: inline; filename=calendar.ics');
  echo $ical;
  exit;
?>
