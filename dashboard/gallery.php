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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    
    
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
			
       
<!-- <style>
        /* Add some basic styling */
       

        /* Style for the navigation bar */
        .navbar {
            display: flex;
        }

        /* Style for each heading in the navigation bar */
        .navbar h2 {
            margin: 10px;
            padding: 10px;
            cursor: pointer;
            color: #3498db; /* Text color */
            background-color: #ecf0f1; /* Background color */
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .navbar h2.active {
            background-color: #3498db; /* Active background color */
            color: #fff; /* Active text color */
        }

        .data-container {
            display: none;
        }
    </style> -->
    <style>
    /* Reset some default styles */
    

    /* Set a background color for the whole page */
   

    /* Container styles */
    .tab-ctn {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .custom-table {
    margin-bottom: 0;  /* Remove any bottom margin */
}

.custom-tbody {
    margin-bottom: 0;  /* Remove any bottom margin */
}

    /* Table styles */
    .custom-table {
        width: 100%;
        border-collapse: collapse;
    }

    .custom-th,
    .custom-td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .custom-th {
        background-color: #3498db;
        color: #fff;
    }

    .custom-tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    

    /* Picture Gallery styles */
   

    /* Responsive styles */
    
    /* Larger sizes for desktop view */
  
   
</style>
    <style>
        /* Add some basic styling */
       

        /* Style for the navigation bar */
        .navbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; 
        }

        /* Style for each heading in the navigation bar */
        .navbar h2 {
            margin: 10px;
            padding: 10px;
            cursor: pointer;
            color: #000; /* Text color (black) */
            background-color: #ecf0f1; /* Background color */
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 1em; /* Relative font size */
        }

        .navbar h2.active {
            background-color: #3498db; /* Active background color */
            color: #fff; /* Active text color */
        }

        .data-container {
            display: none;
        }
        #singlesData {
            display: block;
        }
        /* Responsive styles */
        @media (max-width: 768px) {
            .navbar h2 {
                font-size: 0.8em; /* Adjust font size for smaller screens */
            }
        }
    </style>
    <style>
    .custom-table img {
        width: 500px; /* Default width for larger screens */
         /* Maintain aspect ratio */
        
    }

    @media (max-width: 768px) {
        /* Adjust image size for screens with a maximum width of 768px (typical for mobile devices) */
        .custom-table img {
            width: 80%; /* Set width to 100% of the container on smaller screens */
            height: auto; /* Maintain aspect ratio */
        }
    }

    .custom-th {
        text-align: center;
        background-color: #3498db;
        color: #fff;
    }

    .custom-tbody td {
        text-align: center;
        vertical-align: middle;
    
    }
</style>

   <div class="navbar">
        <!-- Heading for Singles -->
        <h2 onclick="toggleData('singles', this)" class="active">
            <i class="fas fa-user"></i> Singles Below 50
        </h2>
        
        <!-- Heading for Doubles -->
        <h2 onclick="toggleData('doubles', this)">
            <i class="fas fa-user-group"></i> Doubles Below 50
        </h2>
        
        <!-- Heading for No One -->
        <h2 onclick="toggleData('noOne', this)">
            <i class="fas fa-user-group"></i> Doubles Above 50
        </h2>

        <!-- Additional Heading -->
        <h2 onclick="toggleData('heading5', this)">
            <i class="fas fa-user-group"></i> Doubles Above 65
        </h2>
    </div>

   


    <div id="singlesData" class="data-container">
        <!-- Your Singles data goes here --> 
                                    <div class="tab-ctn">
                                            <div class="normal-table-list mg-t-30">
                                              

                                          <div class="bsc-tbl-cds">
                                        
                                                    <!-- Pictures here  -->
                                          <table class="custom-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="custom-th">Match</th>
                                                            <th class="custom-th">Match_Images_played_in_the_Tournament</th>
                                                            <th class="custom-th">Players</th>
                                                            <th class="custom-th">Score</th>
                                                            <th class="custom-th">Winner</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="custom-tbody">
                                                                    <!-- Match 1 -->
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td><img class="imgmatch" src="img/m1.jpg" alt=""></td>
                                                                        <td>Ravi vs Raja.m</td>
                                                                        <td>9-3</td>
                                                                        <td>Ravi</td>
                                                                    </tr>

                                                                    <!-- Match 2 -->
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td><img class="imgmatch" src="img/m2.jpg" alt=""></td>
                                                                        <td>Ravi vs Sahul</td>
                                                                        <td>9-2</td>
                                                                        <td>Ravi</td>
                                                                    </tr>

                                                                    <!-- Match 3 -->
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td><img class="imgmatch" src="img/m3.jpg" alt=""></td>
                                                                        <td>Dr. Kiran Bhuddaraju vs Anu</td>
                                                                        <td>4-9</td>
                                                                        <td>Anu</td>
                                                                    </tr>

                                                                    <!-- Match 4 -->
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td><img class="imgmatch" src="img/m4.jpg" alt=""></td>
                                                                        <td>P. Subbaraju vs Chandu</td>
                                                                        <td>2-9</td>
                                                                        <td>Chandu</td>
                                                                    </tr>

                                                                    <!-- Match 5 -->
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td><img class="imgmatch" src="img/m5.jpg" alt=""></td>
                                                                        <td>Ranjith Namburi vs Murali</td>
                                                                        <td>9-5</td>
                                                                        <td>Ranjith</td>
                                                                    </tr>

                                                                    <!-- Match 7 -->
                                                                    <tr>
                                                                        <td>7</td>
                                                                        <td><img class="imgmatch" src="img/m7.jpg" alt=""></td>
                                                                        <td>Dr. Ravi babu vs Atchyuth varma</td>
                                                                        <td>9-2</td>
                                                                        <td>Dr Ravi babu</td>
                                                                    </tr>

                                                                    <!-- Match 8 -->
                                                                    <tr>
                                                                        <td>8</td>
                                                                        <td><img class="imgmatch" src="img/m8.jpg" alt=""></td>
                                                                        <td>Dr. Ravi babu vs Dr. Goutham Chakravarthy .V</td>
                                                                        <td>2-9</td>
                                                                        <td>Dr. Goutham Chakravarthy .V</td>
                                                                    </tr>

                                                                    <!-- Match 9 -->
                                                                    <tr>
                                                                        <td>9</td>
                                                                        <td><img class="imgmatch" src="img/m9.jpg" alt=""></td>
                                                                        <td>M Siva vs Bhargav Kumar V</td>
                                                                        <td>9-1</td>
                                                                        <td>M Siva</td>
                                                                    </tr>

                                                                    <!-- Match 10 -->
                                                                    <tr>
                                                                        <td>10</td>
                                                                        <td><img class="imgmatch" src="img/m10.jpg" alt=""></td>
                                                                        <td>Royal vs Sajeev</td>
                                                                        <td>6-9</td>
                                                                        <td>Sajeev</td>
                                                                    </tr>

                                                                    <!-- Match 16 -->
                                                                    <tr>
                                                                        <td>16</td>
                                                                        <td><img class="imgmatch" src="img/m16.jpg" alt=""></td>
                                                                        <td>Janiki Ram vs Ramakrishna</td>
                                                                        <td>7-9</td>
                                                                        <td>Ramakrishna</td>
                                                                    </tr>

                                                                    <!-- Match 17 -->
                                                                    <tr>
                                                                        <td>17</td>
                                                                        <td><img class="imgmatch" src="img/m17.jpg" alt=""></td>
                                                                        <td>Anu vs Chandu</td>
                                                                        <td>9-3</td>
                                                                        <td>Anu</td>
                                                                    </tr>

                                                                    <!-- Match 18 -->
                                                                    <tr>
                                                                        <td>18</td>
                                                                        <td><img class="imgmatch" src="img/m18.jpg" alt=""></td>
                                                                        <td>M Siva vs Sajeev</td>
                                                                        <td>9-5</td>
                                                                        <td>M Siva</td>
                                                                    </tr>

                                                                    <!-- Match 19 -->
                                                                    <tr>
                                                                        <td>19</td>
                                                                        <td><img class="imgmatch" src="img/m19.jpg" alt=""></td>
                                                                        <td>Ramkrishna jr vs Ramakrishna</td>
                                                                        <td>0-9</td>
                                                                        <td>Ramakrishna</td>
                                                                    </tr>

                                                                    <!-- Match 20 -->
                                                                    <tr>
                                                                        <td>20</td>
                                                                        <td><img class="imgmatch" src="img/m20.jpg" alt=""></td>
                                                                        <td>Dr. Uday Madhav . K vs Vamsi</td>
                                                                        <td>6-9</td>
                                                                        <td>Vamsi</td>
                                                                    </tr>

                                                                    <!-- Match 21 -->
                                                                    <tr>
                                                                        <td>21</td>
                                                                        <td><img class="imgmatch" src="img/m21.jpg" alt=""></td>
                                                                        <td>Ravi vs Anu</td>
                                                                        <td>9-3</td>
                                                                        <td>Ravi</td>
                                                                    </tr>

                                                                    <!-- Match 22 -->
                                                                    <tr>
                                                                        <td>22</td>
                                                                        <td><img class="imgmatch" src="img/m22.jpg" alt=""></td>
                                                                        <td>Ranjith Namburi vs Dr Pavan</td>
                                                                        <td>9-3</td>
                                                                        <td>Ranjith Namburi</td>
                                                                    </tr>

                                                                    <!-- Match 23 -->
                                                                    <tr>
                                                                        <td>23</td>
                                                                        <td><img class="imgmatch" src="img/m23.jpg" alt=""></td>
                                                                        <td>KSN Raju vs Ramesh Vegesna</td>
                                                                        <td>9-5</td>
                                                                        <td>KSN Raju</td>
                                                                    </tr>

                                                                    <!-- Match 24 -->
                                                                    <tr>
                                                                        <td>24</td>
                                                                        <td><img class="imgmatch" src="img/m24.jpg" alt=""></td>
                                                                        <td>Ranjith Namburi vs Dr. Goutham Chakravarthy .V</td>
                                                                        <td>1-9</td>
                                                                        <td>Dr. Goutham Chakravarthy .V</td>
                                                                    </tr>

                                                                    <!-- Match 25 -->
                                                                    <tr>
                                                                        <td>25</td>
                                                                        <td><img class="imgmatch" src="img/m25.jpg" alt=""></td>
                                                                        <td>M Siva vs KSN Raju</td>
                                                                        <td>9-5</td>
                                                                        <td>M Siva</td>
                                                                    </tr>

                                                                    <!-- Match 28 -->
                                                                    <tr>
                                                                        <td>28</td>
                                                                        <td><img class="imgmatch" src="img/m28.jpg" alt=""></td>
                                                                        <td>Vamsi vs Ramakrishna</td>
                                                                        <td>6-9</td>
                                                                        <td>Ramakrishna</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    <!-- Pictures here  -->

                                                   


                                            </div>

                                        </div>
                                </div>
    </div>


        <!-- Your Doubles data goes here -->
                                   
        <div id="doublesData" class="data-container">
                                                    <!-- Pictures here  -->
                                          <table class="custom-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="custom-th">Match</th>
                                                            <th class="custom-th">Match_Images_played_in_the_Tournament</th>
                                                            <th class="custom-th">Players</th>
                                                            <th class="custom-th">Score</th>
                                                            <th class="custom-th">Winner</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="custom-tbody">
                                                                    <!-- Match 1 -->
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td><img class="imgmatch" src="img/db50m1.jpg" alt=""></td>
                                                                        <td>M Siva & Gajapati vs
Bhargav Kumar V & P. Subbaraju</td>
                                                                        <td>9-1	</td>
                                                                        <td>M Siva & Gajapati</td>
                                                                    </tr>

                                                                    <!-- Match 2 -->
                                                                   

                                                                    <!-- Match 3 -->
                                                                    <tr>
                                                                        <td>6</td>
                                                                        <td><img class="imgmatch" src="img/db50m6.jpg" alt=""></td>
                                                                        <td>Sahul & Atchyuth varma vs
Sajeev & Royal</td>
                                                                        <td>2-9	</td>
                                                                        <td>Sajeev & Royal</td>
                                                                    </tr>

                                                                    <!-- Match 4 -->
                                                                    <tr>
                                                                        <td>7</td>
                                                                        <td><img class="imgmatch" src="img/db50m7.jpg" alt=""></td>
                                                                        <td>	Dr Pavan & Gopi vs
Ranjith Namburi & Dr. Uday Madhav . K</td>
                                                                        <td>8-10	</td>
                                                                        <td>Ranjith Namburi & Dr. Uday Madhav . K</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8</td>
                                                                        <td><img class="imgmatch" src="img/db50m8.jpg" alt=""></td>
                                                                        <td>	Kiran & Vijay babu vs
KSN Raju & Ramakrishna
</td>
                                                                        <td>2-9		</td>
                                                                        <td>KSN Raju & Ramakrishna</td>
                                                                    </tr>
                                                                    <!-- Match 5 -->
                                                                    

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    <!-- Pictures here  -->

                                                   


                                            </div>

                                        </div>
                                </div>
    </div>

    <div id="noOneData" class="data-container">
        <!-- Your No One data goes here -->
        <div class="tab-ctn">
                                            <div class="normal-table-list mg-t-30">
                                              

                                          <div class="bsc-tbl-cds">
                                        
                                                    <!-- Pictures here  -->
                                          <table class="custom-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="custom-th">Match</th>
                                                            <th class="custom-th">Match_Images_played_in_the_Tournament</th>
                                                            <th class="custom-th">Players</th>
                                                            <th class="custom-th">Score</th>
                                                            <th class="custom-th">Winner</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="custom-tbody">
                                                                    <!-- Match 1 -->
                                                                    <tr>
                                                                        <td>16</td>
                                                                        <td><img class="imgmatch" src="img/da50m16.jpg" alt=""></td>
                                                                        <td>Lawyer Varma & Pandu vs
Appana & vissu</td>
                                                                        <td>9-7	</td>
                                                                        <td>Lawyer Varma & Pandu </td>
                                                                    </tr>

                                                                    <!-- Match 2 -->
                                                                    <tr>
                                                                        <td>17</td>
                                                                        <td><img class="imgmatch" src="img/da50m17.jpg" alt=""></td>
                                                                        <td>	Lawyer Varma & Pandu vs
Tatavarthi Raju & Bala Showry</td>
                                                                        <td>9-1	</td>
                                                                        <td>Lawyer Varma & Pandu </td>
                                                                    </tr>

                                                                    <!-- Match 3 -->
                                                                    <tr>
                                                                        <td>19</td>
                                                                        <td><img class="imgmatch" src="img/da50m19.jpg" alt=""></td>
                                                                        <td>Siva & Kopalle Srinu vs
Tatavarthi Raju & Bala Showry</td>
                                                                        <td>10-8	</td>
                                                                        <td>Siva & Kopalle Srinu</td>
                                                                    </tr>

                                                                    <!-- Match 4 -->
                                                                    <tr>
                                                                        <td>20</td>
                                                                        <td><img class="imgmatch" src="img/da50m20.jpg" alt=""></td>
                                                                        <td>Appana & vissu vs
Tatavarthi Raju & Bala Showry</td>
                                                                        <td>9-2	</td>
                                                                        <td>Appana & vissu </td>
                                                                    </tr>

                                                                    <!-- Match 5 -->
                                                                   

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    <!-- Pictures here  -->

                                                   


                                            </div>

                                        </div>
    </div>
    
    <div id="heading5Data" class="data-container">
        <!-- Your Heading 5 data goes here -->
        <div class="tab-ctn">
                                            <div class="normal-table-list mg-t-30">
                                              

                                          <div class="bsc-tbl-cds">
                                        
                                                    <!-- Pictures here  -->
                                          <table class="custom-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="custom-th">Match</th>
                                                            <th class="custom-th">Match_Images_played_in_the_Tournament</th>
                                                            <th class="custom-th">Players</th>
                                                            <th class="custom-th">Score</th>
                                                            <th class="custom-th">Winner</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="custom-tbody">
                                                                    <!-- Match 1 -->
                                                                    <tr>
                                                                        <td>9</td>
                                                                        <td><img class="imgmatch" src="img/da65m9.jpg" alt=""></td>
                                                                        <td>	Sharma & Satyanarna vs
Rama krishnam Raju & Undi Siva</td>
                                                                        <td>4-7	</td>
                                                                        <td>Rama krishnam Raju & Undi Siva</td>
                                                                    </tr>

                                                                    <!-- Match 2 -->
                                                                    <tr>
                                                                        <td>10</td>
                                                                        <td><img class="imgmatch" src="img/da65m10.jpg" alt=""></td>
                                                                        <td>Sharma & Satyanarna vs
Dr VRK Raju & Dr Chalapati Rao</td>
                                                                        <td>7-0	</td>
                                                                        <td>Sharma & Satyanarna</td>
                                                                    </tr>

                                                                    <!-- Match 3 -->
                                                                    <tr>
                                                                        <td>12</td>
                                                                        <td><img class="imgmatch" src="img/da65m12.jpg" alt=""></td>
                                                                        <td>Rama krishnam Raju & Undi Siva vs
Dr VRK Raju & Dr Chalapati Rao</td>
                                                                        <td>7-0	</td>
                                                                        <td>Rama krishnam Raju & Undi Siva </td>
                                                                    </tr>

                                                                    <!-- Match 4 -->
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td><img class="imgmatch" src="img/da65m13.jpg" alt=""></td>
                                                                        <td>Rama krishnam Raju & Undi Siva vs
Dr Ranga Prasad & K Varma</td>
                                                                        <td>4-7	</td>
                                                                        <td>Dr Ranga Prasad & K Varma</td>
                                                                    </tr>

                                                                    <!-- Match 5 -->
                                                                    

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    <!-- Pictures here  -->

                                                   


                                            </div>

                                        </div>
    </div>

    <script>
        // JavaScript function to toggle visibility of data containers
        function toggleData(dataType, clickedHeading) {
            // Remove 'active' class from all headings
            var allHeadings = document.querySelectorAll('.navbar h2');
            allHeadings.forEach(function(heading) {
                heading.classList.remove('active');
            });

            // Add 'active' class to the clicked heading
            clickedHeading.classList.add('active');

            // Hide all data containers
            var allDataContainers = document.querySelectorAll('.data-container');
            allDataContainers.forEach(function(container) {
                container.style.display = 'none';
            });

            // Show the selected data container
            var dataContainer = document.getElementById(dataType + 'Data');
            if (dataContainer.style.display === '' || dataContainer.style.display === 'none') {
                dataContainer.style.display = 'block';
            } else {
                dataContainer.style.display = 'none';
            }
        }
    </script>
        
<!-- <ul class="nav nav-tabs">
<li class="active" ><a data-toggle="tab" href="#menu">Picture Gallery</a></li>

                                <li ><a data-toggle="tab" href="#menu4">Singles Below 50</a></li>
                                <li ><a data-toggle="tab" href="#menu5">Doubles Below 50</a></li>

                            </ul> -->
           
                      
                  
      
    <!-- End Sale Statistic area-->

<?php include "footer.php"; ?>

</div>
</body>

</html>
