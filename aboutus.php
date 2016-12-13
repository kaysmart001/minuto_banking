<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php"); exit(0);
}
if(isset($_SESSION['adminid']))
{
    header("Location: admindashboard.php");
}
if (isset($_SESSION['employeeid']))
{
    header("Location:employeeacount.php");
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

    

<!--  <div id="toptabmenu">
    <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="branches.php">Branches</a></li>
        <li><a href="help.php">Help & FAQ</a></li>
        <li><a href="">Downloads</a>
            <ul>
                <li><a href="downloads/New_Account.pdf">New Account form</a></li>
                 <li><a href="">Loan Forms</a>
                 <ul>
                <li><a href="downloads/home_loan_application_form.pdf">Home Loan</a></li>
                 <li><a href="downloads/Car_Loan_Application_Form.pdf">Car Loan</a></li>
                  <li><a href="downloads/Education_Loan_Application_Form.pdf">Educational Loan</a></li>
            </ul>
                 </li>
                  <li><a href="downloads/ChequeBook_Request.pdf">Cheque book request</a></li>
            </ul>
        </li>
        <li><a href="contactus.php">Contact Us</a></li>
    </ul>
    
</div> -->
<?php require_once('nav.php') ?>
</div>

     <div id="templatemo_main"><span class="main_top"></span> 
        
<!-- 
       <div id="leftpanel"><img src="images/note.png" width="220" height="200"/>
              <span class="leftpaneltext">Contact us...</span>
        </div>

      <div id="rightpanel"></div> -->

       <div class="">
       <div class="container-fluid">
         <div class="col-md-8 col-md-offset-2">
           
           <form name="tempForm" class="form-horizontal">
             <fieldset>
               
               <div class="form-group">
                 <label class="col-md-4">Ernest Asare-Asiedu</label>
                 <div class="col-md-8">
                   <textarea readonly="" class="form-control" cols="9">Mentored by the best, skilled in formulating complex loggin and debuggin prowes is the project co-leader</textarea>
                 </div>
               </div>

               <div class="form-group">
                 <label class="col-md-4">Henry Miller</label>
                 <div class="col-md-8">
                   <textarea readonly="" class="form-control" cols='9'>Mentored by the best, skilled in formulating complex loggin and debuggin prowes is the project co-leader</textarea>
                 </div>
               </div>


             </fieldset>
           </form>

         </div>
       </div>
     </div>
    
 

    </div> 
    </div>
    <?php include'footer.php' ?>
    </body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>