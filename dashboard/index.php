<!doctype html>
<html class="no-js" lang="">
<?php

include "functions.php";

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BHIMAVARAM TENNIS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    
    
    <link rel="stylesheet" type="text/css" href="style1.css">
  <script>document.addEventListener("DOMContentLoaded", function() {
    // Simulate loading time (you can replace this with actual loading logic)
    setTimeout(function() {
        // Hide the loader
        document.querySelector('.loading-container').style.display = 'none';

        // Show the page content
        document.querySelector('.page-content').style.display = 'block';
    }, 1000); // Change 2000 to the desired loading time in milliseconds
});
</script>
    
</head>

<body>
<div class="loading-container">
    <img src="img/BO1.gif" alt="Description of the image" class="loading-image">

    <div class="typing-indicator">

    <div class="typing-circle"></div>
    <div class="typing-circle"></div>
    <div class="typing-circle"></div>
    <div class="typing-shadow"></div>
    <div class="typing-shadow"></div>
    <div class="typing-shadow"></div>
</div>
</div>
    
<!-- <div class="loader-wrapper">
   
        <div class="loader"></div>
    
</div> -->

<div class="page-content" style="display:none;">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
<?php include "header.php"; ?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
	
	<!-- HIGHLIGHTER <div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span style='font-size:x-small;'>New</span></div> -->
	
	
    <!-- Start Status area -->
<?php

	include "connect.php";
    
	if ($sconn->connect_error) {
    die("Connection failed: " . $sconn->connect_error); }
    //$query = "SELECT id, DATE_FORMAT(start, '%d'), MONTHNAME(start), description, dept, website, heading, YEAR(start) FROM news where id <= $id order by id desc limit 5";

	// prepare and bind
//    $stmt = $sconn->prepare("SELECT id, DATE_FORMAT(start, '%d'), MONTHNAME(start), description, dept, website, heading, YEAR(start) FROM news where id <= ? order by id desc limit 5");
    $stmt = $sconn->prepare("SELECT count(*) from players_d");
	
    //$stmt->bind_param("i", $id);
    $stmt->execute();
	$data = $stmt->get_result(); 
    $row = $data->fetch_row();
	
   $players=$row[0];
	  
   $sgt = $sconn->prepare("SELECT count(*) FROM `singles` WHERE win <> 0 and (pid1 <> 0 and pid2 <> 0);");
   $sgt->execute();
   $sg = $sgt->get_result(); 
   $sgres = $sg->fetch_row();
   $singles=$sgres[0];
   $dgt = $sconn->prepare("SELECT count(*) FROM `doubles` WHERE win <> 0 and (teamid1 <> 0 and teamid2 <> 0);");
   $dgt->execute();
   $dg = $dgt->get_result(); 
   $dgres = $dg->fetch_row();
   $doubles=$dgres[0];
   $tmatches=$singles+$doubles;

?>

    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="past-day-statis">
                            <h2>Bhimavaram Open 2024 @ A Glance</h2>
                            <p>Details of the Tournament Bhimavaram Open 21st Jan to 28th Jan 2024</p>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h2><span class="counter"><?php echo $players; ?></span></h2>
                                <p>Players Participated in Tournament</p>
                            </div>
                            <div class="past-statistic-graph">
                                <i class="fa fa-users fa-3x" style='color:#16A085;'></i>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h2><span class="counter">53</span></h2>
                                <p>Matches Played</p>
                            </div>
                            <div class="past-statistic-graph">
                                <i class="fa fa-hourglass-start fa-3x" style='color:#16A085;'></i>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h2><span class="counter">14</span></h2>
                                <p>Prizes Won</p>
                            </div>
                            <div class="past-statistic-graph">
                                <i class="fa fa-trophy fa-3x" style='color:#16A085;'></i>
                            </div>
                        </div>
                    </div>

                    <div class="search-engine-int sm-res-mg-t-30 tb-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="contact-hd search-hd-eg">
                            <h2>Tournament Toppers</h2>
                            <p>Best Performers of Bhimavaram Open</p>
                        </div>
                        <div class="search-eg-table">
							
							
							        <div class="accordion-stn">
                                    <div class="panel-group" data-collapse-color="nk-green" id="accordionGreen" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-one" aria-expanded="true">
															Singles Below 50
														</a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-one" class="collapse in" role="tabpanel">
                                                <div class="panel-body">
                                                                           <table class="table">
                                <thead>
                                    <tr>
                                        <th>Rank</th>
                                        <th>Player</th>
                                        <th class="text-right">Points</th>
                                    </tr>
                                </thead>
                                <tbody>
							<?php

	// prepare and bind
//  $stmt = $sconn->prepare("SELECT id, DATE_FORMAT(start, '%d'), MONTHNAME(start), description, dept, website, heading, YEAR(start) FROM news where id <= ? order by id desc limit 5");
    $ptmt = $sconn->prepare("SELECT pid, sum(points) as tot FROM `points` where category=1 group by pid order by tot desc LIMIT  2;");
	
    //$ptmt->bind_param("i", 1);
    $ptmt->execute();
	$pdata = $ptmt->get_result(); 

	$rnk=0;$prev=0;								   
	while($points = $pdata->fetch_row())
	     {
		   $player=get_playername($points[0]);
		   $pts=$points[1];
		   $pid=$points[0];
		   if($prev != $pts) {$rnk++;}
		   echo "<tr>";
	       echo "<th>#".$rnk."</th>";
	       echo "<th><a href='profiles.php?pid=$pid'>".$player."</a></th>";
	       echo "<td>".$pts."</td>";
		   echo "</tr>"; 
		   $prev=$pts;
	}
									
									
	?>
									
									
									
                                </tbody>
                            </table>

												</div>
                                            </div>
                                        </div>
                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-two" aria-expanded="false">
															Doubles Below 50
														</a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-two" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                            <table class="table">
                                <thead>
                                        <th>Rank</th>
                                        <th>Player</th>
                                        <th class="text-right">Points</th>
                                </thead>
                                <tbody>
							<?php

	// prepare and bind
//  $stmt = $sconn->prepare("SELECT id, DATE_FORMAT(start, '%d'), MONTHNAME(start), description, dept, website, heading, YEAR(start) FROM news where id <= ? order by id desc limit 5");
    $ptmt = $sconn->prepare("SELECT pid, sum(points) as tot FROM `points` where category=2 group by pid order by tot desc LIMIT 4;");
	
    //$ptmt->bind_param("i", 1);
    $ptmt->execute();
	$pdata = $ptmt->get_result(); 

	$rnk=0;$prev=0;								   
	while($points = $pdata->fetch_row())
	     {
		   $player=get_playername($points[0]);
		   $pts=$points[1];
		   if($prev != $pts) {$rnk++;}
		   echo "<tr>";
	       echo "<th>#".$rnk."</th>";
	       echo "<th>".$player."</th>";
	       echo "<td>".$pts."</td>";
		   echo "</tr>"; 
		   $prev=$pts;
	}
									
									
	?>

								</tbody>
                            </table>

												</div>
                                            </div>
                                        </div>
                                         <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-three" aria-expanded="false">
															Doubles Above 50
														</a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-three" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                            <table class="table">
                                <thead>
                                        <th>Rank</th>
                                        <th>Player</th>
                                        <th class="text-right">Points</th>
                                </thead>
                                <tbody>
							<?php

	// prepare and bind
//  $stmt = $sconn->prepare("SELECT id, DATE_FORMAT(start, '%d'), MONTHNAME(start), description, dept, website, heading, YEAR(start) FROM news where id <= ? order by id desc limit 5");
    $ptmt = $sconn->prepare("SELECT pid, sum(points) as tot FROM `points` where category=3 group by pid order by tot desc LIMIT 4;");
	
    //$ptmt->bind_param("i", 1);
    $ptmt->execute();
	$pdata = $ptmt->get_result(); 

	$rnk=0;$prev=0;								   
	while($points = $pdata->fetch_row())
	     {
		   $player=get_playername($points[0]);
		   $pts=$points[1];
		   if($prev != $pts) {$rnk++;}
		   echo "<tr>";
	       echo "<th>#".$rnk."</th>";
	       echo "<th>".$player."</th>";
	       echo "<td>".$pts."</td>";
		   echo "</tr>"; 
		   $prev=$pts;
	}
									
									
	?>

								</tbody>
                            </table>

												</div>
                                            </div>
                                        </div>
                                         <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-four" aria-expanded="false">
															Doubles Above 65
														</a>
                                                </h4>
                                            </div>
                                            <div id="accordionGreen-four" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                            <table class="table">
                                <thead>
                                        <th>Rank</th>
                                        <th>Player</th>
                                        <th class="text-right">Points</th>
                                </thead>
                                <tbody>
							<?php

	// prepare and bind
//  $stmt = $sconn->prepare("SELECT id, DATE_FORMAT(start, '%d'), MONTHNAME(start), description, dept, website, heading, YEAR(start) FROM news where id <= ? order by id desc limit 5");
    $ptmt = $sconn->prepare("SELECT pid, sum(points) as tot FROM `points` where category=4 group by pid order by tot desc LIMIT 4;");
	
    //$ptmt->bind_param("i", 1);
    $ptmt->execute();
	$pdata = $ptmt->get_result(); 

	$rnk=0;$prev=0;								   
	while($points = $pdata->fetch_row())
	     {
		   $player=get_playername($points[0]);
		   $pts=$points[1];
		   if($prev != $pts) {$rnk++;}
		   echo "<tr>";
	       echo "<th>#".$rnk."</th>";
	       echo "<th>".$player."</th>";
	       echo "<td>".$pts."</td>";
		   echo "</tr>"; 
		   $prev=$pts;
	}
									
									
	?>

								</tbody>
                            </table>

												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

					
							
							
                        </div>
                    </div>
 

                </div>
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="widget-tabs-int">
                        <div class="tab-hd">
                            <h2>Leaderboard</h2>
                            <p>Findout the Results of Bhimavaram Open Matches</p>
                        </div>
                        <div class="widget-tabs-list">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Singles Below 50</a></li>
                                <li><a data-toggle="tab" href="#menu1">Doubles Below 50</a></li>
                                <li><a data-toggle="tab" href="#menu2">Doubles Above 50</a></li>
                                <li><a data-toggle="tab" href="#menu3">Doubles Above 65</a></li>
                            </ul>
                            <div class="tab-content tab-custom-st">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="tab-ctn">

                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h4>Singles Below 50 Results</h4>
							<?php

	// prepare and bind
    $stmt = $sconn->prepare("SELECT mid, DATE_FORMAT(mdate, '%a %D %b'), DATE_FORMAT(mtime, '%h:%i %p'), pid1, pid2, score1,score2,win, timestamp FROM `singles` where win <> 0 order by mdate desc, mtime desc;");
	
    //$stmt->bind_param("i", $id);
    $stmt->execute();
	$data = $stmt->get_result(); 


?>

                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Match</th>
                                        <th>Score</th>
                                        <th>Date/Time</th>
                                    </tr>
                                </thead>
                                <tbody>
								
									<?php
								 while($match1 = $data->fetch_row())
								 {
								  if($match1[2]=="12:00 AM")
								   {
									$timing="BYE";   
								   }
								   else
								   {
                                    $timing=$match1[1]."-".$match1[2];
								   }									   

  								   echo "<tr>";
								   $mid=$match1[0];
                                   echo "<td>".$mid."</td>";
								   $pid1=$match1[3];$pid2=$match1[4];$win=$match1[7];
								   $score=$match1[5]."-".$match1[6];
                                   if($pid1 != 0) {$player1=get_playername($pid1);} else {$player1="BYE"; $score='BYE';}
								   if($pid2 != 0) {$player2=get_playername($pid2);} else {$player2="BYE"; $score='BYE';}
                                   if($pid1==$win)
								   {
                                    $player1="<span style='color:green'><b>".$player1."</b></span><span style='font-size:9px;'>(Winner)</span>";
								   }  									   
                                   else if($pid2==$win)
								   {
                                    $player2="<span style='color:green'><b>".$player2."</b></span><span style='font-size:9px;'>(Winner)</span>";
								   }  									   
								   echo "<td>".$player1." vs ".$player2."</td>";
								   echo "<td>".$score."</td>";
                                   echo "<td>".$timing."</td>";
                                   echo "</tr>";
								 }									 
								
								?>
										
                                </tbody>
                            </table>
                        </div>
                    </div>


                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="tab-ctn">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h4>Doubles Below 50 Results</h4>
							<?php

	// prepare and bind
//  $stmt = $sconn->prepare("SELECT id, DATE_FORMAT(start, '%d'), MONTHNAME(start), description, dept, website, heading, YEAR(start) FROM news where id <= ? order by id desc limit 5");
    $stmt = $sconn->prepare("SELECT mid, DATE_FORMAT(mdate, '%a %D %b'), DATE_FORMAT(mtime, '%h:%i %p'), teamid1, teamid2, score1, score2, win, timestamp FROM `doubles` where win <> 0  and catid=2 order by mdate desc,mtime desc;");
	
    //$stmt->bind_param("i", $id);
    $stmt->execute();
	$data = $stmt->get_result(); 


?>

                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Match</th>
                                        <th>Score</th>
                                        <th>Date/Time</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
								 while($match1 = $data->fetch_row())
								 {
 							       if($match1[2]=="12:00 AM")
								    {
									 $timing="BYE";   
								    }
								    else
								    {
                                     $timing=$match1[1]."-".$match1[2];
								    }									   
									 
  								   echo "<tr>";
								   $teamid1=$match1[3];$teamid2=$match1[4];$win=$match1[7];
								   $score=$match1[5]."-".$match1[6];
                                   if($teamid1 != 0) {$team1=get_teamnames($teamid1);} else {$team1="BYE"; $score='BYE';}
								   if($teamid2 != 0) {$team2=get_teamnames($teamid2);} else {$team2="BYE"; $score='BYE';}
                                    
                                   if($teamid1==$win)
								   {
                                    $team1="<span style='color:green'><b>".$team1."</b></span><span style='font-size:9px;'>(Winners)</span>";
								   }  									   
                                   else if($teamid2==$win)
								   {
                                    $team2="<span style='color:green'><b>".$team2."</b></span><span style='font-size:9px;'>(Winners)</span>";
								   }  			
								   $mid=$match1[0];
								   echo "<td>".$mid."</td>";
								   echo "<td>".$team1." vs<br>".$team2."</td>";
								   echo "<td>".$score."</td>";
                                   echo "<td>".$timing."</td>";
                                   echo "</tr>";
								 }									 
								
								?>
								
                                </tbody>
                            </table>
                        </div>
                    </div>

                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="tab-ctn">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h4>Doubles Above 50 Results</h4>
							<?php

	// prepare and bind
//  $stmt = $sconn->prepare("SELECT id, DATE_FORMAT(start, '%d'), MONTHNAME(start), description, dept, website, heading, YEAR(start) FROM news where id <= ? order by id desc limit 5");
    $stmt = $sconn->prepare("SELECT mid, DATE_FORMAT(mdate, '%a %D %b'), DATE_FORMAT(mtime, '%h:%i %p'), teamid1, teamid2, score1, score2, win, timestamp FROM `doubles` where win <> 0  and catid=3 order by mdate desc,mtime desc;");
	
    //$stmt->bind_param("i", $id);
    $stmt->execute();
	$data = $stmt->get_result(); 


?>

                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Match</th>
                                        <th>Score</th>
                                        <th>Date/Time</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
								 while($match1 = $data->fetch_row())
								 {
 							       if($match1[2]=="12:00 AM")
								    {
									 $timing="BYE";   
								    }
								    else
								    {
                                     $timing=$match1[1]."-".$match1[2];
								    }									   
									 
  								   echo "<tr>";
								   $teamid1=$match1[3];$teamid2=$match1[4];$win=$match1[7];
								   $score=$match1[5]."-".$match1[6];
                                   if($teamid1 != 0) {$team1=get_teamnames($teamid1);} else {$team1="BYE"; $score='BYE';}
								   if($teamid2 != 0) {$team2=get_teamnames($teamid2);} else {$team2="BYE"; $score='BYE';}
                                    
                                   if($teamid1==$win)
								   {
                                    $team1="<span style='color:green'><b>".$team1."</b></span><span style='font-size:9px;'>(Winners)</span>";
								   }  									   
                                   else if($teamid2==$win)
								   {
                                    $team2="<span style='color:green'><b>".$team2."</b></span><span style='font-size:9px;'>(Winners)</span>";
								   }  			
								   $mid=$match1[0];
								   echo "<td>".$mid."</td>";
								   echo "<td>".$team1." vs<br>".$team2."</td>";
								   echo "<td>".$score."</td>";
                                   echo "<td>".$timing."</td>";
                                   echo "</tr>";
								 }									 
								
								?>
								
                                </tbody>
                            </table>
                       </div>
                    </div>

                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <div class="tab-ctn">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h4>Doubles Above 65 Results</h4>
							<?php

	// prepare and bind
//  $stmt = $sconn->prepare("SELECT id, DATE_FORMAT(start, '%d'), MONTHNAME(start), description, dept, website, heading, YEAR(start) FROM news where id <= ? order by id desc limit 5");
    $stmt = $sconn->prepare("SELECT mid, DATE_FORMAT(mdate, '%a %D %b'), DATE_FORMAT(mtime, '%h:%i %p'), teamid1, teamid2, score1, score2, win, timestamp FROM `doubles` where win <> 0  and catid=4 order by mdate desc, mtime desc;");
	
    //$stmt->bind_param("i", $id);
    $stmt->execute();
	$data = $stmt->get_result(); 


?>

                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Match</th>
                                        <th>Score</th>
                                        <th>Date/Time</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
								 while($match1 = $data->fetch_row())
								 {
 							       if($match1[2]=="12:00 AM")
								    {
									 $timing="BYE";   
								    }
								    else
								    {
                                     $timing=$match1[1]."-".$match1[2];
								    }									   
									 
  								   echo "<tr>";
								   $teamid1=$match1[3];$teamid2=$match1[4];$win=$match1[7];
								   $score=$match1[5]."-".$match1[6];
                                   if($teamid1 != 0) {$team1=get_teamnames($teamid1);} else {$team1="BYE"; $score='BYE';}
								   if($teamid2 != 0) {$team2=get_teamnames($teamid2);} else {$team2="BYE"; $score='BYE';}
                                    
                                   if($teamid1==$win)
								   {
                                    $team1="<span style='color:green'><b>".$team1."</b></span><span style='font-size:9px;'>(Winners)</span>";
								   }  									   
                                   else if($teamid2==$win)
								   {
                                    $team2="<span style='color:green'><b>".$team2."</b></span><span style='font-size:9px;'>(Winners)</span>";
								   }  			
								   $mid=$match1[0];
								   echo "<td>".$mid."</td>";
								   echo "<td>".$team1." vs<br>".$team2."</td>";
								   echo "<td>".$score."</td>";
                                   echo "<td>".$timing."</td>";
                                   echo "</tr>";
								 }									 
								
								?>
								
                                </tbody>
                            </table>
                        </div>
                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->

<?php include "footer.php"; ?>

</div>
</body>

</html>
