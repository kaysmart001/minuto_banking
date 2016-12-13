<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

?>
<html>
<head>
<link href="images/favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MinutoFinance</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script>
function validateForm()
{
var x=document.forms["form1"]["trpass"].value;
var y=document.forms["form1"]["password"].value;

if (x==null || x=="")
  {
  alert("User id must be filled out");
  return false;
  }
  if (y==null || y=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>


</head>
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
       <form id="form1" name="form1" method="post" action="makeloanpayment2.php" onsubmit="return validateForm()">
          
              <h2>Pay loan</h2>
           	  <table width="513" height="177" border="1">
        	    <tr>
        	      <td><strong>Loan Account Number</strong></td>
        	      <td><label>
                  
        	        <select name="payto" id="payto">
        	        	<?php
                                          $result=mysql_query("SELECT * FROM loan WHERE customerid='$_SESSION[customerid]'");
					  while($arrvar = mysql_fetch_array($result))
			  			{
						echo "<option value='$arrvar[loanid]'>$arrvar[loanid]</option>";
			  			}
                                ?>
      	            </select>
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Enter the amount : </strong> </td>
        	      <td><label>
        	        <input type="text" name="pay_amt" id="pay_amt" />
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td colspan="2"><div align="right">
        	        <input type="submit" name="pay" id="pay" value="Pay" />
        	      </div></td>
       	        </tr>
      	    </table>
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