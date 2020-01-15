<?php
$arr = $data["list_timekeeping"];
$_SESSION['check'] = $data["check_today_timekeeping"];

?>
<?php
/* draws a calendar */
function draw_calendar($month, $year, $arr)
{

  // Timekeeping of A User
  // echo "<pre>";
  // print_r($arr["list_timekeeping"]);
  // echo "</pre>";
  // echo $arr["list_timekeeping"][0]["Ngay_CC"];
  $length = sizeof($arr["list_timekeeping"]);

  //End Timekeeping of A User

  date_default_timezone_set("Asia/Ho_Chi_Minh");
  /* draw table */
  $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

  /* table headings */
  $headings = array('Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật');
  $calendar .= '<tr class="calendar-row">
      <td class="calendar-day-head">' . implode('</td>
      <td class="calendar-day-head">', $headings) . '</td>
    </tr></div>';

  /* days and weeks vars now ... */
  $running_day = date('w', mktime(0, 0, 0, $month, 1, $year)) - 1;
  $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
  $days_in_this_week = 1;
  $day_counter = 0;
  $dates_array = array();

  $name_today = date("Y");
  $month_today = date("m");
  $day_today = date("d");
  /* row for week one */
  $calendar .= '<tr class="calendar-row">';

  /* print "blank" days until the first of the current week */
  for ($x = 0; $x < $running_day; $x++) : $calendar .= '<td class="calendar-day-np"> </td>';
    $days_in_this_week++;
  endfor; /* keep going with days.... */
  for ($list_day = 1; $list_day <= $days_in_month; $list_day++) : $calendar .= '<td class="calendar-day">'; /* add in the day number */

    //My edit here
    $calendar .= '<div class="">';
    for ($i = 0; $i < $length; $i++) {
      $status = $arr["list_timekeeping"][$i]["Status"];
      $day = explode("-", $arr["list_timekeeping"][$i]["Ngay_CC"]);
      $day[2];
      if ($name_today == $day[0]) {
        if ($list_day == $day[2] && $_SESSION["check"] == 'true') {
          if ($status == 1) {
            $calendar .= "Đã chấm công";
          }
        }
      }
    }
    if ($list_day == $day_today && $_SESSION["check"] == 'false') {
      $calendar .= '<div class="day-timekeeping">'
        . '<form action="insert_Timekeeping/' . $_SESSION['username'] . '" method="POST">
                  <div class="form-group">
                      <input type="hidden" name="times" value="' . date("H:i:s") . '">
                      <input type="hidden" name="dtoday" value="' . date("Y/m/d") . '">
                      <button name="timekeeping" class="btn bg-danger">Điểm danh</button>
                  </div>
              </form>'
        . '</div>';
    }

    $calendar .= '</div>';

    //End of My edit here
    $calendar .= '<div class="day-number">' . $list_day . '</div>';
    /** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !! IF MATCHES FOUND, PRINT THEM !! **/ $calendar .= str_repeat('<p>
        </p>', 2);

    $calendar .= '</td>';
    if ($running_day == 6) :
      $calendar .= '</tr>';
      if (($day_counter + 1) != $days_in_month) :
        $calendar .= '<tr class="calendar-row">';
      endif;
      $running_day = -1;
      $days_in_this_week = 0;
    endif;
    $days_in_this_week++;
    $running_day++;
    $day_counter++;
  endfor;

  /* finish the rest of the days in the week */
  if ($days_in_this_week < 8) : for ($x = 1; $x <= (8 - $days_in_this_week); $x++) : $calendar .= '<td class="calendar-day-np"> </td>';
    endfor;
  endif; /* final row */
  $calendar .= '</tr>'; /* end the table */
  $calendar .= '</table>'; /* all done, return result */
  return $calendar;
}

/* sample usages */
echo "<div class='container-calendar'>";
echo "<div class='month'>";
$month = date('m');
$year = date('Y');
echo "<h2>Tháng $month $year</h2>";
echo "</div>";
echo draw_calendar($month, $year, $data);
echo "</div>";

?>