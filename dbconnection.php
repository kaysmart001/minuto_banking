<?php
$con = mysql_connect("sql311.epizy.com","epiz_33459705","hvZgW4p2guu7");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("epiz_33459705_bank_db");
?>
