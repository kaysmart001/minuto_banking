<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}
$loantypearray = mysql_query("select * from loantype");
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
        <br/><br/><br/>
        <table width="883" border="1" id="brtable">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
    <tr>
        <th colspan="4"><a href="addloan.php">Add new loan type</a></th>
    </tr>
        </table>
        <br/><br/><br/>
    <table height="37" border="1">
      <tr>
        <th width="112" scope="col">LOAN TYPE</th>
        <th width="82" scope="col">PREFIX</th>
        <th width="186" scope="col">MAXIMUM AMT</th>
        <th width="161" scope="col">MINIMUM AMT</th>
        <th width="98" scope="col">INTEREST</th>
        <th width="119" scope="col">STATUS</th>
      </tr>
      <?php	
 while($loantypes = mysql_fetch_array($loantypearray))
	  {
echo "
      <tr>
        <td>&nbsp;$loantypes[loantype]</td>
        <td>&nbsp;$loantypes[prefix]</td>
        <td>&nbsp;$loantypes[maximumamt]</td>
        <td>&nbsp;$loantypes[minimumamt]</td>
        <td>&nbsp;$loantypes[interest]</td>
        <td>&nbsp;$loantypes[status]</td>
        
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