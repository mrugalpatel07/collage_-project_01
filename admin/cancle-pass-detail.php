<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['cpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['yes']))
  {
    $cid=$_GET['cancleid'];

try { 

$query = "DELETE FROM tblpass WHERE ID='$cid' LIMIT 1";
        $statement = $dbh->prepare($query);
        $query_execute = $statement->execute();

        if($query_execute)
        {
            echo '<script>alert("Pass detail has been deleted.")</script>';
echo "<script>window.location.href ='manage-pass.php'</script>";
        }
        else
        {
            echo '<script>alert("Error while deleting pass detail.")</script>';
echo "<script>window.location.href ='manage-pass.php'</script>";
        }
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}

if(isset($_POST['cancle'])) {
    header('Location: manage-pass.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Gate Pass Management System | Delete Pass</title>
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
                    <h1 class="page-header">Are you sure you want to delete pass ?</h1>
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
                                    <button type="submit" class="btn btn-primary" name="cancle" id="submit">Cancle</button> &nbsp
                                    <button type="submit" class="btn btn-primary" name="yes" id="submit">Yes</button>
                                    </form>
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