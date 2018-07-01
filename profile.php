<?php
include 'connect_to_database.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: index.php");// send to login page
   exit;
}
$sql="SELECT * FROM user WHERE username = '".$_SESSION['username']."'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==0){
}else{
 while($row=mysql_fetch_array($result)){ 
?>
<html>
<body>
<html>
<head>
<link rel ="stylesheet" type="text/css" href ="style3.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/insta.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Instagram</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="nav-collapse">
            
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <!-- The Profile picture inserted via div class below, with shaping provided by Bootstrap -->
                        <div class="img-rounded profile-img"><img src="images/<?php echo $row['profile_pic'];?>" style="height:30px;width:30px;"></div>
                        <?php echo $_SESSION['username'];?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Settings</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="logout.php">Log out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php }}?> 
<br><br><br><br><br><br>

<?php 
$sql="SELECT * FROM post";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==0){
}else{
 while($row=mysql_fetch_array($result)){ ?>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-5 box padding30">
	<img src="upload/<?php echo $row['post_image'];?>" style="height:300px;width:450px;">
    <br><br>
	<input type="text"><input type="button" value="submit">
	</div>
  </div>
</div>
<br><br><br>
<?php }}?>


</body>
</head>
</html>
  
 