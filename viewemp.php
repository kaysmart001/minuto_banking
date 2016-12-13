<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location:login.php");
}
$emparray = mysql_query("select * from employees");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MinutoFinance</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="images/favicon.ico" rel="shortcut icon">
</head>
<body>
    
    <div><img src="images/batman1.png" id="batimg1"><img src="images/batman1.png" id="batimg2"></div>
    <div id="bodycontent">

<div id="templatemo_wrapper">

    

<!-- 
<!-- <div  id="toptabmenu">
    <ul>
            <li><a href="admindashboard.php">Dashboard</a></li>
            <li><a href="viewbranch.php">Settings</a></li>
            <li><a href="viewcustomer.php">customers</a></li>
            <li><a href="viewtransaction.php">Transactions</a></li>
            <li><a href="mailinbox.php">Mail</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    
</div> --> -->
</div>

<div id="templatemo_main">
    <div id="sidecon">
       <table width="883" border="1" id="brtable">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
  </table>
    <table border="1" id="brtable">
    	<tr>
      <th colspan="6" scope="col"><a href="addemployee.php">ADD EMPLOYEE</a></th>
    </tr>
      <tr>
        <th width="105" scope="col">EMPLOYEE ID</th>
        <th width="93" scope="col">EMP NAME</th>
        <th width="144" scope="col">EMAIL ID</th>
        <th width="188" scope="col">CONTACT NO</th>
        <th width="132" scope="col">JOIN DATE</th>
      </tr>
      <?php	
 while($employee = mysql_fetch_array($emparray))
	  {
echo "
      <tr>
        <td>&nbsp;$employee[empid]</td>
        <td>&nbsp;$employee[employee_name]</td>
        <td>&nbsp;$employee[emailid]</td>
        <td>&nbsp;$employee[contactno]</td>
        <td>&nbsp;$employee[createdat]</td>
      </tr>";
	  }
	  ?>
    </table>
    </div>
    
    
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>