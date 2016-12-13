<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}

$transactionarray = mysql_query("select * from transactions");
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
    <table width="880" border="1">
      <tr>	
        <th width="120" scope="col">TRANSACTION ID</th>
        <th width="95" scope="col">DATE</th>
        <th width="60" scope="col">PAYEE ID</th>
        <th width="95" scope="col">RECEIVER ID</th>
        <th width="104" scope="col">AMOUNT</th>
        <th width="128" scope="col">PAYMENT STATUS</th>
      </tr>
      
      <?php	
 while($transaction = mysql_fetch_array($transactionarray))
	  {
echo "
      <tr>
        <td>&nbsp;$transaction[transactionid]</td>
        <td>&nbsp;$transaction[paymentdate]</td>
        <td>&nbsp;$transaction[payeeid]</td>
        <td>&nbsp;$transaction[receiveid]</td>
        <td>&nbsp;$transaction[amount]</td>
		<td>&nbsp;$transaction[paymentstat]</td>
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