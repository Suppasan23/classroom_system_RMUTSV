<?php
$link = @mysqli_connect("linuxdb2.rmutsv.ac.th", "eng_sql", "@8It;bL;dii,Lkl9iN@", "eng_sql_classroom")
 			or die(mysqli_connect_error()."</body></html>");

mysqli_set_charset($link, "utf8");
?>
