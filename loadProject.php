<?php
require_once 'config.php';
require_once 'db.php';

$projId = $_GET["name"];

//getting the project name
$sql = "SELECT * from projects where project_id = '{$projId}'";
$stmt = $db->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$projName = $row['project_name'];
$subProjName = '';
$subProject = 0;
$subProjectId = null;

if (is_null($row['sub_proj'])) {
  //no sub projects
  $subProject = 0;
  $currentProjName = $projName;
} else {
  $subProject = 1;
  //sub projects are there, check to see what is required from the url
  //also explode and form the navigation
  if (isset ($_GET["subProject"]))
    $subProjectId = $_GET["subProject"];

  //get the project name of the sub project 
  $sql = "SELECT project_name from sub_projects where project_id = '{$subProjectId}'";
  $stmt1 = $db->query($sql);
  $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
  $currentProjName = $row1['project_name'];
  
  //other navigational elements are
  $subProj = $row['sub_proj'];
  $nav = explode(";", $subProj);
  $num = count($nav);
}


  

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Somesh's Portfolio</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<!-- The full width container. -->
    <div class="container-fluid">
      <div class="row full">
        <div class="col-md-1 projectList white">
          <div class="row">
            
          </div>
        </div>
        <div class="col-md-10 projectDescription">
          <div class="row">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: white;">
              
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="color: #47a3da; padding-top: 13px;"><b><span class="glyphicon glyphicon-arrow-left" style="padding-right: 10px; padding-left: 5px;"></span><span style="padding-right: 20px;">BACK</span></b></a>
                    <!-- <a class="navbar-brand" href="#" style="color: #47a3da;"></a> -->

                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php if($subProject) { ?>
                    <span class="navbar-text" style="
                        margin-top: 11px;
                        margin-bottom: 0px;
                        margin-right: 15px;
                        margin-left: 0px;
                    "><strong><?php echo($projName); ?></strong></span>
                    <? } ?>
                    <ul class="nav navbar-nav">
                      <?php if($subProject) { 
                        for($i=0; $i<$num; $i++){
                          $name = $nav[$i];
                          //echo $name;
                          $sql = "SELECT project_name from sub_projects where project_id = '{$name}'";
                          $stmt2 = $db->query($sql);
                          $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
                          $subProjName = $row2['project_name'];
                      ?>
                      <li id="<?php echo($name) ?>"><a href="<?php echo('loadProject.php?name='.$projId.'&subProject='.$name); ?>"><?php echo($subProjName); ?></a></li>
                      <?php } } else{ ?>
                      <li class="navbar-text" style="
                        margin-top: 11px;
                        margin-bottom: 0px;
                        margin-right: 15px;
                        margin-left: 0px;"><strong><?php echo($projName); ?></strong></li>
                      <?php } ?>
                    </ul>
                  </div><!-- /.navbar-collapse -->
            </nav>
          </div>
          <div class="row" style="padding-top: 70px;">
            <div class="col-md-9">
              <!-- <div class="page-header"> -->
              <!-- insert the data using the php -->  
              <?php 
                $sql = "SELECT project_description from description where project_name = '{$currentProjName}'";
                $stmt3 = $db->query($sql);
                $row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
                $desc = $row3['project_description'];
                echo ($desc);
              ?>


          </div> <!-- ending col-md-9 -->
        </div>
    </div><!--  ending row full -->
  </div><!--  ending container fluid -->
  
 	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script type="text/javascript">
      var projid = '<?php echo($projId);?>';
      var subProjId = '<?php if(!is_null($subProjectId)){echo($subProjectId);}else{echo 0;}?>';
      //alert(subProjId);
      $("#"+projid).css({"opacity": "1"});
      $("#"+subProjId).addClass("active");
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="bootstrap/js/jquery.mixitup.min.js"></script>
  </body>
</html>