<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$results = mysql_query("SELECT * FROM accounts where customerid='98683'");
while($arrow = mysql_fetch_array($results))
{
	$acno = $arrow[accno];
	$status = $arrow[accstatus];	
	$accopen = $arrow[accopendate];	
	$acctype = $arrow[accounttype];	
	$accbal = $arrow[accountbalance];
}
?>
<html>
<head>
<link href="images/favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MinutoFinance</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /></head>
<body>
    
    <div><img src="images/batman1.png" id="batimg1"><img src="images/batman1.png" id="batimg2"></div>
    <div id="bodycontent">

<div id="templatemo_wrapper">

    
<div  id="toptabmenu">
    <ul>
            <li><a href="accountalerts.php">My accounts</a></li>
            <li><a href="transferfunds.php">Transfer funds</a></li>
            <li><a href="payloans.php">Pay loans</a></li>
            <li><a href="mailinbox.php">Mails</a></li>
            <li><a href="changetranspass.php">Personalise</a></li>
            <li><a href="logout.php">logout</a></li>
    </ul>
    
</div>
</div>

<div id="templatemo_main">
    <div id="sidecon">
        <h2>Account Details</h2>
     		 <table width="560" border="1">
     		   <tr>
     		     <th colspan="2" scope="col"><?php echo $_SESSION[customername] ?></th>
   		     </tr>
     		   <tr>
     		     <td width="282" height="38">ACCOUNT NUMBER</td>
     		     <td width="262">&nbsp;<?php echo $acno ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="36">ACCOUNT TYPE</td>
     		     <td>&nbsp;<?php echo $acctype ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="37">ACCOUNT STATUS</td>
     		     <td>&nbsp;<?php echo $status ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="34">ACCOUNT HOLDER</td>
     		     <td>&nbsp;<?php echo $_SESSION[customername] ?></td>
   		     </tr>
     		   <tr>
     		     <td height="34">ACCOUNT OPEN DATE</td>
     		     <td>&nbsp;<?php echo $accopen ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="39">ACCOUNT BALANCE</td>
     		     <td>&nbsp;<?php echo $accbal ; ?></td>
   		     </tr>
   		   </table>
    </div>
    
    <div id="sidebar">
        <h2>My Accounts</h2>
               
                <ul>
                <li><a href="accountsummary.php">Accounts summary</a></li>
                <li><a href="ministatements.php">Mini statement</a></li>
                <li><a href="accdetails.php">Account details</a></li>
                <li><a href="stateacc.php">Statements of accounts</a><p>&nbsp;</p></li>
                </ul>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>