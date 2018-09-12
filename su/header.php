<?php
error_reporting(0);
session_start();
include("../config.php");
if($_SESSION['level'] == 'Administrator'){
  header("location: ../admin/index.php");
}else if($_SESSION['level'] == 'User'){
  header("location: ../user/index.php");
}else if($_SESSION['level'] == 'Operator'){
  header("location: ../operator/index.php");
}else if($_SESSION['level'] == 'Visitor'){
  header("location: ../guest/index.php");
}else if($_SESSION['level'] == ''){
  header("location: ../index.php");
}

//$qry2= MySQL_query("SELECT no_ticket from tbl_approve where eng_name=''");
//$not= mysql_fetch_array($qry2);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome to DRES</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-select/dist/css/bootstrap-select.css">

  <style>
  .div-decorator
{
    border-top:3px solid #428BCA;
    border-right:3px solid #D9534F;
    border-bottom:3px solid #5CB85C;
    border-left:3px solid #F0AD4E;
    margin:30px;
    border-radius:20px;
}
.div-heading
{
    border-bottom:1px dashed #5BC0DE;
    padding-top:15px;
    padding-bottom:15px;
    margin:0px;
    background-color:#F5F5F5;
    border-radius:20px 20px 0px 0px;
}
.heading
{
    color:#5FC9E5;
}
.div-content
{
    padding:30px
}
.btn-circle
{
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
.btn-circle.btn-lg
{
    width: 50px;
    height: 50px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.33;
    border-radius: 25px;
}
.btn-circle.btn-xl
{
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    font-size: 24px;
    line-height: 1.33;
    border-radius: 35px;
}

/* WRENCHING */
@keyframes wrench {
0%{transform:rotate(-12deg)}
8%{transform:rotate(12deg)}
10%{transform:rotate(24deg)}
18%{transform:rotate(-24deg)}
20%{transform:rotate(-24deg)}
28%{transform:rotate(24deg)}
30%{transform:rotate(24deg)}
38%{transform:rotate(-24deg)}
40%{transform:rotate(-24deg)}
48%{transform:rotate(24deg)}
50%{transform:rotate(24deg)}
58%{transform:rotate(-24deg)}
60%{transform:rotate(-24deg)}
68%{transform:rotate(24deg)}
75%,100%{transform:rotate(0deg)}
}
.faa-wrench.animated,
.faa-wrench.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-wrench {
animation: wrench 2.5s ease infinite;
transform-origin-x: 90%;
transform-origin-y: 35%;
transform-origin-z: initial;
}
.faa-wrench.animated.faa-fast,
.faa-wrench.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-wrench.faa-fast {
animation: wrench 1.2s ease infinite;
}
.faa-wrench.animated.faa-slow,
.faa-wrench.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-wrench.faa-slow {
animation: wrench 3.7s ease infinite;
}

/* BELL */
@keyframes ring {
0%{transform:rotate(-15deg)}
2%{transform:rotate(15deg)}
4%{transform:rotate(-18deg)}
6%{transform:rotate(18deg)}
8%{transform:rotate(-22deg)}
10%{transform:rotate(22deg)}
12%{transform:rotate(-18deg)}
14%{transform:rotate(18deg)}
16%{transform:rotate(-12deg)}
18%{transform:rotate(12deg)}
20%,100%{transform:rotate(0deg)}
}
.faa-ring.animated,
.faa-ring.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-ring {
animation: ring 2s ease infinite;
transform-origin-x: 50%;
transform-origin-y: 0px;
transform-origin-z: initial;
}
.faa-ring.animated.faa-fast,
.faa-ring.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-ring.faa-fast {
animation: ring 1s ease infinite;
}
.faa-ring.animated.faa-slow,
.faa-ring.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-ring.faa-slow {
animation: ring 3s ease infinite;
}

/* VERTICAL */
@keyframes vertical {
0%{transform:translate(0,-3px)}
4%{transform:translate(0,3px)}
8%{transform:translate(0,-3px)}
12%{transform:translate(0,3px)}
16%{transform:translate(0,-3px)}
20%{transform:translate(0,3px)}
22%,100%{transform:translate(0,0)}
}
.faa-vertical.animated,
.faa-vertical.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-vertical {
animation: vertical 2s ease infinite;
}
.faa-vertical.animated.faa-fast,
.faa-vertical.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-vertical.faa-fast {
animation: vertical 1s ease infinite;
}
.faa-vertical.animated.faa-slow,
.faa-vertical.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-vertical.faa-slow {
animation: vertical 4s ease infinite;
}

/* HORIZONTAL */
@keyframes horizontal {
0%{transform:translate(0,0)}
6%{transform:translate(5px,0)}
12%{transform:translate(0,0)}
18%{transform:translate(5px,0)}
24%{transform:translate(0,0)}
30%{transform:translate(5px,0)}
36%,100%{transform:translate(0,0)}
}
.faa-horizontal.animated,
.faa-horizontal.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-horizontal {
animation: horizontal 2s ease infinite;
}
.faa-horizontal.animated.faa-fast,
.faa-horizontal.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-horizontal.faa-fast {
animation: horizontal 1s ease infinite;
}
.faa-horizontal.animated.faa-slow,
.faa-horizontal.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-horizontal.faa-slow {
animation: horizontal 3s ease infinite;
}

/* FLASHING */
@keyframes flash {
0%,100%,50%{opacity:1}
25%,75%{opacity:0}
}
.faa-flash.animated,
.faa-flash.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-flash {
animation: flash 2s ease infinite;
}
.faa-flash.animated.faa-fast,
.faa-flash.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-flash.faa-fast {
animation: flash 1s ease infinite;
}
.faa-flash.animated.faa-slow,
.faa-flash.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-flash.faa-slow {
animation: flash 3s ease infinite;
}

/* BOUNCE */
@keyframes bounce {
0%,10%,20%,50%,80%,100%{transform:translateY(0)}
40%{transform:translateY(-15px)}
60%{transform:translateY(-15px)}
}
.faa-bounce.animated,
.faa-bounce.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-bounce {
animation: bounce 2s ease infinite;
}
.faa-bounce.animated.faa-fast,
.faa-bounce.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-bounce.faa-fast {
animation: bounce 1s ease infinite;
}
.faa-bounce.animated.faa-slow,
.faa-bounce.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-bounce.faa-slow {
animation: bounce 3s ease infinite;
}

/* SPIN */
@keyframes spin{
0%{transform:rotate(0deg)}
100%{transform:rotate(359deg)}
}
.faa-spin.animated,
.faa-spin.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-spin {
animation: spin 1.5s linear infinite;
}
.faa-spin.animated.faa-fast,
.faa-spin.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-spin.faa-fast {
animation: spin 0.7s linear infinite;
}
.faa-spin.animated.faa-slow,
.faa-spin.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-spin.faa-slow {
animation: spin 2.2s linear infinite;
}

/* FLOAT */
@keyframes float{
0%{transform: translateY(0)}
50%{transform: translateY(-6px)}
100%{transform: translateY(0)}
}
.faa-float.animated,
.faa-float.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-float {
animation: float 2s linear infinite;
}
.faa-float.animated.faa-fast,
.faa-float.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-float.faa-fast {
animation: float 1s linear infinite;
}
.faa-float.animated.faa-slow,
.faa-float.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-float.faa-slow {
animation: float 3s linear infinite;
}

/* PULSE */
@keyframes pulse {
0% {transform: scale(1.1)}
50% {transform: scale(0.8)}
100% {transform: scale(1.1)}
}
.faa-pulse.animated,
.faa-pulse.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-pulse {
animation: pulse 2s linear infinite;
}
.faa-pulse.animated.faa-fast,
.faa-pulse.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-pulse.faa-fast {
animation: pulse 1s linear infinite;
}
.faa-pulse.animated.faa-slow,
.faa-pulse.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-pulse.faa-slow {
animation: pulse 3s linear infinite;
}

/* SHAKE */
.faa-shake.animated,
.faa-shake.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-shake {
animation: wrench 2.5s ease infinite;
}
.faa-shake.animated.faa-fast,
.faa-shake.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-shake.faa-fast {
animation: wrench 1.2s ease infinite;
}
.faa-shake.animated.faa-slow,
.faa-shake.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-shake.faa-slow {
animation: wrench 3.7s ease infinite;
}

/* TADA */
@keyframes tada {
0% {transform: scale(1)}
10%,20% {transform:scale(.9) rotate(-8deg);}
30%,50%,70% {transform:scale(1.3) rotate(8deg)}
40%,60% {transform:scale(1.3) rotate(-8deg)}
80%,100% {transform:scale(1) rotate(0)}
}

.faa-tada.animated,
.faa-tada.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-tada {
animation: tada 2s linear infinite;
}
.faa-tada.animated.faa-fast,
.faa-tada.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-tada.faa-fast {
animation: tada 1s linear infinite;
}
.faa-tada.animated.faa-slow,
.faa-tada.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-tada.faa-slow {
animation: tada 3s linear infinite;
}

/* PASSING */
@keyframes passing {
0% {transform:translateX(-50%); opacity:0}
50% {transform:translateX(0%); opacity:1}
100% {transform:translateX(50%); opacity:0}
}

.faa-passing.animated,
.faa-passing.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-passing {
animation: passing 2s linear infinite;
}
.faa-passing.animated.faa-fast,
.faa-passing.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-passing.faa-fast {
animation: passing 1s linear infinite;
}
.faa-passing.animated.faa-slow,
.faa-passing.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-passing.faa-slow {
animation: passing 3s linear infinite;
}

/* PASSING REVERSE */

@keyframes passing-reverse {
0% {transform:translateX(50%); opacity:0}
50% {transform:translateX(0%); opacity:1}
100% {transform:translateX(-50%); opacity:0}
}

.faa-passing-reverse.animated,
.faa-passing-reverse.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-passing-reverse {
animation: passing-reverse 2s linear infinite;
}
.faa-passing-reverse.animated.faa-fast,
.faa-passing-reverse.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-passing-reverse.faa-fast {
animation: passing-reverse 1s linear infinite;
}
.faa-passing-reverse.animated.faa-slow,
.faa-passing-reverse.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-passing-reverse.faa-slow {
animation: passing-reverse 3s linear infinite;
}

/* WAVE */
@keyframes burst {
0% {opacity:.6}
50% {transform:scale(1.8);opacity:0}
100%{opacity:0}
}
.faa-burst.animated,
.faa-burst.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-burst {
animation: burst 2s infinite linear
}
.faa-burst.animated.faa-fast,
.faa-burst.animated-hover.faa-fast:hover,
.faa-parent.animated-hover:hover > .faa-burst.faa-fast {
animation: burst 1s infinite linear
}
.faa-burst.animated.faa-slow,
.faa-burst.animated-hover.faa-slow:hover,
.faa-parent.animated-hover:hover > .faa-burst.faa-slow {
animation: burst 3s infinite linear
}

  </style>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
</head>
<body class="hold-transition skin-green sidebar-mini sidebar-collapse">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DRES</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DRES</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

<?php
$qry=mysql_query("SELECT * FROM tbl_approve where eng_name='' ");
$num=mysql_num_rows($qry);
?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-fw fa-bell faa-ring animated"></i>
              <span class="label label-warning"><?php echo $num;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo $num;?> notification</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <?php while($res=mysql_fetch_array($qry)){ ?>
                  <li><!-- start message -->
                    <a href="notif_waiting_approval.php?ticket=<?php echo $res['no_ticket']?>">
                      <div class="pull-left">
                      <img src="../assets/image/header.png" class="user-image" alt="User Image" style="background-color: white;">
                      </div>
                      <h6>
                        <p>
                          Ticket number <?php echo $res['no_ticket']?> needs to approve
                       <?php //echo $num;?> <!--Tickets need(s) to Approve -->
                      </p>
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h6>
                      <p><?php echo $res['info']; ?></p>
                    </a>
                  </li>
                  <!-- end message -->
                  <?php } ?>
                </ul>
              </li>
              <li class="footer"><a href="waiting_approval.php">See All Notif</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../assets/image/header.png" class="user-image" alt="User Image" style="background-color: white;">
              <span class="hidden-xs"><?php echo $_SESSION['name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../assets/image/header.png" class="img-circle" alt="User Image"  style="background-color: white;">

                <p>
                  <?php echo $_SESSION['name']; ?>
                  <small><?php echo $_SESSION['level']; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="text-center">
                  <a href="../logout.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/image/header.png" style="background-color: white;" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['name']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="viewaction.php">
            <i class="fa fa-pencil"></i> <span>Action Tracker</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-clipboard"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lineview.php"><i class="fa fa-circle-o"></i> Master Line</a></li>
            <li><a href="materialview.php"><i class="fa fa-circle-o"></i> Master Material</a></li>
            <li><a href="deflist.php"><i class="fa fa-circle-o"></i> Master Defect</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Execution</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="waiting_approval.php"><i class="fa fa-circle-o"></i> Waiting List Approval</a></li>
            <li><a href="product_reject.php"><i class="fa fa-circle-o"></i> History</a></li>
          </ul>
        </li>
        <li>
          <a href="delegateForm.php">
            <i class="glyphicon glyphicon-share"></i> <span>Delegate Approval</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
