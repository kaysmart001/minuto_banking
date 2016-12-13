<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if((!(isset($_SESSION['customerid'])))&&(!(isset($_SESSION['adminid']))))
    header('Location:login.php?error=nologin');

if(isset($_GET["mailid"]))
{
	mysql_query("DELETE FROM mail where mailid='$_GET[mailid]'");
	$recres = "Mail deleted Successfully...";
}
if(isset($_SESSION['adminid']))
$result = mysql_query("SELECT * FROM mail where reciverid='$_SESSION[adminid]'");
else if(isset($_SESSION['customerid']))
    $result= mysql_query("SELECT * FROM mail where reciverid='$_SESSION[customerid]'");
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

    
<!-- <div id="toptabmenu">
    
</div> -->
    <?php 
    if(isset($_SESSION['customerid'])) { 
            require_once('nav-loggedin-customer.php');
    } else if (isset($_SESSION['adminid'])) 
            require_once('nav-loggedin-admin.php');
    
  ?>
</div>

<div id="templatemo_main">
    <div id="sidecon">
         <h2 align="center">INBOX</h2>
         <form>
            <?php echo $recres; ?>
         <table width="600" border="1" id="brtable">
    
             
              <?php
		 echo " <tr>";
                echo " <th scope='col' width='45' >Delete</th>";
                echo " <th scope='col'>Read</th>";
                echo " <th scope='col'>SENDER</th>";
                echo " <th scope='col'>SUBJECT</th>";
                echo " <th scope='col'>TIME</th>";
                echo " </tr>";
         		while($row = mysql_fetch_array($result))
  				{ $rid=$row['senderid'];
                                  if (!($rid=='admin'))
                                  {
                                      $rres=  mysql_query("SELECT * FROM customers WHERE customerid='".$rid."'");
                                      $rresarr = mysql_fetch_array($rres);
                                      $recid = $rresarr['firstname']." ".$rresarr['lastname'];
                                  }
                                  else
                                      $recid=$rid;
    			echo " <tr>";
                echo " <th scope='col'><a href='mailinbox.php?mailid=$row[mailid]'>Delete</a></th>";
                echo " <th scope='col'><a href='mailread.php?mailid=$row[mailid]'>Read</a></th>";
                echo " <th scope='col'>$recid</th>";
                echo " <th scope='col'>$row[subject]</th>";
                echo " <th scope='col'>$row[mdatetime]</th>";
                echo " </tr>";
  				}
?>           
      </table>
       	  </form>
    </div>
    
    <div id="sidebar">
         <h2>Mails</h2>
                
                <ul>
               <li><a href="mailinbox.php"><strong>Inbox</strong></a></li>
                <li><strong><a href="mailcompose.php">Compose</a></strong></li>
                <li><strong><a href="mailsent.php">Sent mail</a></strong>
                </ul>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>