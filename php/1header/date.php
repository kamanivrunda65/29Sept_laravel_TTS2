<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="snippet-table">
<thead valign="middle">
<tr valign="middle">
<th><i><tt class="parameter">format</tt></i><br>
 character</th>
<th>Description</th>
<th>Example returned values</th>
</tr>
</thead>
<tbody valign="middle" class="tbody">
<tr valign="middle">
<td align="center"><em class="emphasis">Day</em></td>
<td align="left">—</td>
<td align="left">—</td>
</tr>
<tr valign="middle">
<td align="left"><i>d</i></td>
<td align="left">Day of the month, 2 digits with leading zeros</td>
<td align="left"><i>01</i> to <i>31</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>D</i></td>
<td align="left">A textual representation of a day, three letters</td>
<td align="left"><i>Mon</i> through <i>Sun</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>j</i></td>
<td align="left">Day of the month without leading zeros</td>
<td align="left"><i>1</i> to <i>31</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>l</i> (lowercase ‘L’)</td>
<td align="left">A full textual representation of the day of the week</td>
<td align="left"><i>Sunday</i> through <i>Saturday</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>N</i></td>
<td align="left">ISO-8601 numeric representation of the day of the week (added in<br>
           PHP 5.1.0)</td>
<td align="left"><i>1</i> (for Monday) through <i>7</i> (for Sunday)</td>
</tr>
<tr valign="middle">
<td align="left"><i>S</i></td>
<td align="left">English ordinal suffix for the day of the month, 2 characters</td>
<td align="left">
            <i>st</i>, <i>nd</i>, <i>rd</i> or<br>
            <i>th</i>.  Works well with <i>j</i>
           </td>
</tr>
<tr valign="middle">
<td align="left"><i>w</i></td>
<td align="left">Numeric representation of the day of the week</td>
<td align="left"><i>0</i> (for Sunday) through <i>6</i> (for Saturday)</td>
</tr>
<tr valign="middle">
<td align="left"><i>z</i></td>
<td align="left">The day of the year (starting from 0)</td>
<td align="left"><i>0</i> through <i>365</i></td>
</tr>
<tr valign="middle">
<td align="center"><em class="emphasis">Week</em></td>
<td align="left">—</td>
<td align="left">—</td>
</tr>
<tr valign="middle">
<td align="left"><i>W</i></td>
<td align="left">ISO-8601 week number of year, weeks starting on Monday (added in PHP 4.1.0)</td>
<td align="left">Example: <i>42</i> (the 42nd week in the year)</td>
</tr>
<tr valign="middle">
<td align="center"><em class="emphasis">Month</em></td>
<td align="left">—</td>
<td align="left">—</td>
</tr>
<tr valign="middle">
<td align="left"><i>F</i></td>
<td align="left">A full textual representation of a month, such as January or March</td>
<td align="left"><i>January</i> through <i>December</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>m</i></td>
<td align="left">Numeric representation of a month, with leading zeros</td>
<td align="left"><i>01</i> through <i>12</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>M</i></td>
<td align="left">A short textual representation of a month, three letters</td>
<td align="left"><i>Jan</i> through <i>Dec</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>n</i></td>
<td align="left">Numeric representation of a month, without leading zeros</td>
<td align="left"><i>1</i> through <i>12</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>t</i></td>
<td align="left">Number of days in the given month</td>
<td align="left"><i>28</i> through <i>31</i></td>
</tr>
<tr valign="middle">
<td align="center"><em class="emphasis">Year</em></td>
<td align="left">—</td>
<td align="left">—</td>
</tr>
<tr valign="middle">
<td align="left"><i>L</i></td>
<td align="left">Whether it’s a leap year</td>
<td align="left"><i>1</i> if it is a leap year, <i>0</i> otherwise.</td>
</tr>
<tr valign="middle">
<td align="left"><i>o</i></td>
<td align="left">ISO-8601 year number. This has the same value as<br>
            <i>Y</i>, except that if the ISO week number<br>
            (<i>W</i>) belongs to the previous or next year, that year<br>
            is used instead. (added in PHP 5.1.0)</td>
<td align="left">Examples: <i>1999</i> or <i>2003</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>Y</i></td>
<td align="left">A full numeric representation of a year, 4 digits</td>
<td align="left">Examples: <i>1999</i> or <i>2003</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>y</i></td>
<td align="left">A two digit representation of a year</td>
<td align="left">Examples: <i>99</i> or <i>03</i></td>
</tr>
<tr valign="middle">
<td align="center"><em class="emphasis">Time</em></td>
<td align="left">—</td>
<td align="left">—</td>
</tr>
<tr valign="middle">
<td align="left"><i>a</i></td>
<td align="left">Lowercase Ante meridiem and Post meridiem</td>
<td align="left"><i>am</i> or <i>pm</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>A</i></td>
<td align="left">Uppercase Ante meridiem and Post meridiem</td>
<td align="left"><i>AM</i> or <i>PM</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>B</i></td>
<td align="left">Swatch Internet time</td>
<td align="left"><i>000</i> through <i>999</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>g</i></td>
<td align="left">12-hour format of an hour without leading zeros</td>
<td align="left"><i>1</i> through <i>12</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>G</i></td>
<td align="left">24-hour format of an hour without leading zeros</td>
<td align="left"><i>0</i> through <i>23</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>h</i></td>
<td align="left">12-hour format of an hour with leading zeros</td>
<td align="left"><i>01</i> through <i>12</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>H</i></td>
<td align="left">24-hour format of an hour with leading zeros</td>
<td align="left"><i>00</i> through <i>23</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>i</i></td>
<td align="left">Minutes with leading zeros</td>
<td align="left"><i>00</i> to <i>59</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>s</i></td>
<td align="left">Seconds, with leading zeros</td>
<td align="left"><i>00</i> through <i>59</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>u</i></td>
<td align="left">Microseconds (added in PHP 5.2.2)</td>
<td align="left">Example: <i>654321</i></td>
</tr>
<tr valign="middle">
<td align="center"><em class="emphasis">Timezone</em></td>
<td align="left">—</td>
<td align="left">—</td>
</tr>
<tr valign="middle">
<td align="left"><i>e</i></td>
<td align="left">Timezone identifier (added in PHP 5.1.0)</td>
<td align="left">Examples: <i>UTC</i>, <i>GMT</i>, <i>Atlantic/Azores</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>I</i> (capital i)</td>
<td align="left">Whether or not the date is in daylight saving time</td>
<td align="left"><i>1</i> if Daylight Saving Time, <i>0</i> otherwise.</td>
</tr>
<tr valign="middle">
<td align="left"><i>O</i></td>
<td align="left">Difference to Greenwich time (GMT) in hours</td>
<td align="left">Example: <i>+0200</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>P</i></td>
<td align="left">Difference to Greenwich time (GMT) with colon between hours and minutes (added in PHP 5.1.3)</td>
<td align="left">Example: <i>+02:00</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>T</i></td>
<td align="left">Timezone abbreviation</td>
<td align="left">Examples: <i>EST</i>, <i>MDT</i> …</td>
</tr>
<tr valign="middle">
<td align="left"><i>Z</i></td>
<td align="left">Timezone offset in seconds. The offset for timezones west of UTC is always<br>
           negative, and for those east of UTC is always positive.</td>
<td align="left"><i>-43200</i> through <i>50400</i></td>
</tr>
<tr valign="middle">
<td align="center"><em class="emphasis">Full Date/Time</em></td>
<td align="left">—</td>
<td align="left">—</td>
</tr>
<tr valign="middle">
<td align="left"><i>c</i></td>
<td align="left">ISO 8601 date (added in PHP 5)</td>
<td align="left">2004-02-12T15:19:21+00:00</td>
</tr>
<tr valign="middle">
<td align="left"><i>r</i></td>
<td align="left"><a class="link external" href="http://www.faqs.org/rfcs/rfc2822" rel="noopener">» RFC 2822</a> formatted date</td>
<td align="left">Example: <i>Thu, 21 Dec 2000 16:01:07 +0200</i></td>
</tr>
<tr valign="middle">
<td align="left"><i>U</i></td>
<td align="left">Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)</td>
<td align="left">See also <a class="function" href="function.time.php">time()</a></td>
</tr>
</tbody>
</table>
<?php
date_default_timezone_set('Asia/Kolkata');

echo date("l,j/n");
echo "<br>";
echo date("D,d F");
echo "<br>";
echo date("d-m-y");
echo "<br>";
echo date("L ")."1 for leap year,o for not";
echo "<br>";
echo date("dS -m-y H:i:s");
echo "<br>";
echo time();
echo "<br>";
echo "Custom date by timestamp";
// echo date('m/d/Y', 1299446702);
echo date('m/d/Y g:i:s A',time());
echo "<br>";
$var = '24/11/2022';
$date = str_replace('/', '-', $var);

$dateE = "24-11-2022";
echo $dateE.": timestamp-";

echo strtotime($dateE);
echo "<br>";
echo date('dSM,Y g:i:s A l',strtotime($dateE));

?>
</body>
</html>