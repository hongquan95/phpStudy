<!DOCTYPE html>
<html>
<head>
  <title>Date and Time</title>
</head>
<body>
  <?php
    echo "Time = ". time()."<br/>";
    echo "MkTime = ". mktime(2,59,59,12,2,2018)."<br/>";
    echo "strTime = ". strtotime("22/03/1995"). "<br/>";
    echo "top =" . (checkdate(2,31,2000) ? 'true' : 'false' )."<br/>";

    $utime = strtotime('now');
    echo "Time now = ".$utime."<br/>";
    //format time
    $now = time();
    echo strftime("The time is %m/%d/%y",$now)."<br/>";
    echo  remove_zero(strftime("The time is *%m/*%d/%y",$now))."<br/>";

    function remove_zero($str = '')
    {
      $removed = str_replace("*0", "", $str);
      return $removed;
    }

    $mysql_time = strftime("%Y-%m-%d %H:%M:%S",$now);
    echo $mysql_time. "<br/>";
  ?>

</body>
</html>
