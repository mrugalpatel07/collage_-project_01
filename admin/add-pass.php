<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$createdby=$_SESSION['login'];
$fname=$_POST['fullname'];
$cnum=$_POST['cnumber'];
$email=$_POST['email'];
$itype=$_POST['identitytype'];
$icnum=$_POST['icnum'];
$cat=$_POST['category'];
$fdate=(string)$_POST['fromdate'];
$tdate=(string)$_POST['todate'];
$enrollmentnumber=$_POST['enrollmentnumber'];

$fdate[10] = $tdate[10] =' ';
$fdate .= ":00";
$tdate .= ":00";

$passnum=mt_rand(100000000, 999999999);
$sql="insert into tblpass(PassNumber,FullName,ContactNumber,Email,IdentityType,IdentityCardno,Category,FromDate,ToDate,CreatedBy,enrollmentnumber)values(:passnum,:fname,:cnum,:email,:itype,:icnum,:cat,:fdate,:tdate,:createdby,:enrollmentnumber)";
$query=$dbh->prepare($sql);
$query->bindParam(':passnum',$passnum,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':cnum',$cnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':itype',$itype,PDO::PARAM_STR);
$query->bindParam(':icnum',$icnum,PDO::PARAM_STR);
$query->bindParam(':cat',$cat,PDO::PARAM_STR);
$query->bindParam(':fdate',$fdate,PDO::PARAM_STR);
$query->bindParam(':tdate',$tdate,PDO::PARAM_STR);
$query->bindParam(':createdby',$createdby,PDO::PARAM_STR);
$query->bindParam(':enrollmentnumber',$enrollmentnumber,PDO::PARAM_STR);

 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Pass detail has been added.")</script>';
    echo "<script>window.location.href ='add-pass.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  

}
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Gate Pass Management System | Add Pass</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />



</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
      <?php include_once('includes/header.php');?>
        <!-- end navbar top -->

        <!-- navbar side -->
        <?php include_once('includes/sidebar.php');?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add Pass</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" enctype="multipart/form-data"> 
                                    
    <div class="form-group"> <label for="exampleInputEmail1">Full Name</label> <input type="text" name="fullname" value="" class="form-control" required='true' placeholder="Enter Full Name"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Enrollment Number</label> <input type="text" name="enrollmentnumber" value="" class="form-control" required='true' maxlength="16" placeholder="Enter Enrollment Number"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Contact Number</label> <input type="text" name="cnumber" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+" placeholder="Enter Mobile Number"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Email Address</label> <input type="email" name="email" value="" class="form-control" required='true' placeholder="Enter Email"> </div>
    <div class="form-group"> <label for="exampleInputEmail1">Semester</label><select type="text" name="identitytype" value="" class="form-control" required='true'>
<option value="">Choose Semester</option>
<option value="Sem 1">Sem 1</option>
<option value="Sem 2">Sem 2</option>
<option value="Sem 3">Sem 3</option>
<option value="Sem 4">Sem 4</option>
<option value="Sem 5">Sem 5</option>
<option value="Sem 6">Sem 6</option>

     </select></div>
    <!--<div class="form-group"> <label for="exampleInputEmail1">Identity Card No.</label> <input type="text" name="icnum" value="" class="form-control" required='true'> </div>-->
     <div class="form-group"> <label for="exampleInputEmail1">Role</label><select type="text" name="category" value="" class="form-control" required='true'>
<?php 

$sql2 = "SELECT * from   tblcategory";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->CategoryName);?>"><?php echo htmlentities($row->CategoryName);?></option>
 <?php } ?>
     </select></div>
<div class="form-group"> <label for="exampleInputEmail1">From</label> <input type="datetime-local" name="fromdate" value="" class="form-control" required='true'> </div>
<div class="form-group"> <label for="exampleInputEmail1">To</label> <input type="datetime-local" name="todate" value="" class="form-control" required='true'> </div>

     <p style="padding-left: 450px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Add</button></p> </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
<?php }  ?>