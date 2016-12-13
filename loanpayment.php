<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

if(isset($_POST["adda"]))
{
$sql="INSERT INTO loanpayment (payment_id,	customer_id,	loan_amt,	interest,	total_amt,	paid,	balance,	paid_date)
VALUES
('$_POST[payment_id]','$_POST[customer_id]','$_POST[loan_amt]','$_POST[interest]','$_POST[total_amt]','$_POST[paid]','$_POST[balance]','$_POST[paydate]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}

if(isset($_POST["update"]))
{
	mysql_query("UPDATE loanpayment SET payment_id='$_POST[payment_id]',	customer_id='$_POST[customer_id]',	loan_amt='$_POST[loan_amt]',	interest='$_POST[interest]',	total_amt='$_POST[total_amt]',	paid='$_POST[paid]',	balance='$_POST[balance]',	paid_date='$_POST[paydate]' WHERE payment_id='$_POST[payment_id]'");
	

$updt= mysql_affected_rows();
if($updt==1)
{
$successresult="Record updated successfully";
}
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

    
<div id="toptabmenu">
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
       <h2>View Loan Payment</h2>

        	<form id="form1" name="form1" method="post" action="">
        	  <table align="CENTER" width="617" height="70" border="1" bordercolor="#87158A"CELLSPACING="2">
        	    <tr>
        	      <td width="63" height="42"><strong>Payment ID</strong></td>        	   
        	      <td width="90"><strong>Loan ID</strong></td>
        	      <td width="90"><strong>Amount</strong></td>
        	      <td width="118"><strong>Paid date</strong></td>

      	      </tr>
              <?php     $result = mysql_query("select * from loanpayment where customerid='$_SESSION[customerid]'");
			  while($arrvar = mysql_fetch_array($result))
			  {
                            echo " <tr>
        	      <td height='46'>$arrvar[paymentid]</td>
				  <td>$arrvar[loanid]</td>
				   <td>$arrvar[amount]</td>
				    <td>$arrvar[paymentdate]</td>
                                    </tr>";
			  }
			  ?>
      	    </table>
        	  <p>&nbsp;</p>
       	  </form>
    </div>
    
    <div id="sidebar">
         <h2>Pay Loans</h2>
                
                <ul>
                <li><a href="viewloanac.php">View Loan Account</a></li>
                <li><a href="makeloanpayment.php">Pay loan</a></li>
                <li><a href="loanpayment.php">View Loan Payments</a></li>
                </ul>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>