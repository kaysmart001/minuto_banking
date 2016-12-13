<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location:login.php");
}
$custarray = mysql_query("select * from customers");
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

    


<!-- <div  id="toptabmenu">
    <ul>
            <li><a href="admindashboard.php">Dashboard</a></li>
            <li><a href="viewbranch.php">Settings</a></li>
            <li><a href="viewcustomer.php">customers</a></li>
            <li><a href="viewtransaction.php">Transactions</a></li>
            <li><a href="mailinbox.php">Mail</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    
</div> --> 

<?php require_once('nav-loggedin.php') ?>

</div>

<div id="templatemo_main">
    <div id="sidecon">
        <?php if(($_REQUEST['suc'])==1) echo "<h1>Deleted Successfully</h1>"?>
    <table width="900" border="1" id="brtable">
        <tr>
            <th colspan="8"><a href="customer.php"><strong>Add Customer</strong></a></th>
        </tr>
        <br/><br/>
    <tr>
      <th width="100" scope="col">CUSTOMER ID</th>
      <th width="89" scope="col">LOGIN ID</th>
      <th width="102" scope="col">NAME</th>
      <th width="108" scope="col">ACCOUNT <br /> STATUS</th>
      <th width="108" scope="col">LOCATION</th>
      <th width="159" scope="col">ACCOPEN DATE</th>
      <th width="125" scope="col">LAST LOGIN</th>
      <th width="70" scope="col">MORE</th>
    </tr>
    <?php	
 while($customer = mysql_fetch_array($custarray))
	  {
echo " <tr>
      <td>&nbsp;$customer[customerid]</td>
      <td>&nbsp;$customer[loginid]</td>
      <td>$customer[firstname]&nbsp;$customer[lastname]</td>
        <td>&nbsp;$customer[accstatus]</td>
      <td>&nbsp;$customer[city]<br> $customer[state]<br> $customer[country]</td>
     <td>&nbsp;$customer[accopendate]</td>
      <td>&nbsp;$customer[lastlogin]</td>
	  <th>&nbsp;<a href='customerinf.php?custid=$customer[customerid]'>MORE</a>&nbsp;</th>
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