<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_password'])) {
    // User is not logged in, redirect to login page
    header("Location: admin.php");
    exit;
}

include 'nav.php';
include 'connect.php';

// Function to sanitize input
function sanitizeInput($conn, $input)
{
    return mysqli_real_escape_string($conn, $input);
}

// Function to handle update logic
function updateMatchData($conn, $mid, $tid, $pid1, $pid2, $mdate, $mtime, $score1, $score2, $win)
{
    $updateQuery = "UPDATE singles SET tid = ?, pid1 = ?, pid2 = ?, mdate = ?, mtime = ?, score1 = ?, score2 = ?, win = ? WHERE mid = ?";
    $stmt = mysqli_prepare($conn, $updateQuery);

    if ($stmt === false) {
        // Check if preparing the statement failed
        echo "<script>alert('Error preparing update statement: " . mysqli_error($conn) . "');</script>";
    }

    mysqli_stmt_bind_param($stmt, "ssssssssi", $tid, $pid1, $pid2, $mdate, $mtime, $score1, $score2, $win, $mid);

    if (mysqli_stmt_execute($stmt)) {
        // Success response
        echo "<script>alert('Success!');</script>";
    } else {
        // Error response
        echo "<script>alert('Error updating match data: " . mysqli_stmt_error($stmt) . "');</script>";
    }

    mysqli_stmt_close($stmt);
}

// Process form submission
if (isset($_POST['update'])) {
    $mid = sanitizeInput($conn, $_POST['mid']);
    $tid = sanitizeInput($conn, $_POST['tid']);
    $pid1 = sanitizeInput($conn, $_POST['pid1']);
    $pid2 = sanitizeInput($conn, $_POST['pid2']);
    $mdate = sanitizeInput($conn, $_POST['mdate']);
    $mtime = sanitizeInput($conn, $_POST['mtime']);
    $score1 = sanitizeInput($conn, $_POST['score1']);
    $score2 = sanitizeInput($conn, $_POST['score2']);
    $win = sanitizeInput($conn, $_POST['win']);

    updateMatchData($conn, $mid, $tid, $pid1, $pid2, $mdate, $mtime, $score1, $score2, $win);
}

// Retrieve existing data from the database
if (isset($_GET['mid'])) {
    $id = sanitizeInput($conn, $_GET['mid']);
    $selectQuery = "SELECT * FROM singles WHERE mid = ?";
    $stmt = mysqli_prepare($conn, $selectQuery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        // Populate variables with existing data
        $mid = $row['mid'];
        $tid = $row['tid'];
        $pid1 = $row['pid1'];
        $pid2 = $row['pid2'];
        $mdate = $row['mdate'];
        $mtime = $row['mtime'];
        $score1 = $row['score1'];
        $score2 = $row['score2'];
        $win = $row['win'];

        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Error selecting data: " . mysqli_error($conn) . "');</script>";
    }
}
?>



<!DOCTYPE html>
<html>

<head>

    <title>Update Singles Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<?php
// Include your database connection code here
include "connect.php";

// Initialize variables to store existing data
$mid = "";
$tid = "";
$pid1 = "";
$pid2 = "";
$mdate = "";
$mtime = "";
$score1 = "";
$score2 = "";
$win = "";


if (isset($_POST['submit'])) {
    $mid = $_POST['mid'];
    $tid =  $_POST['tid'];
    $pid1 =  $_POST['pid1'];
    $pid2 =  $_POST['pid2'];
    $mdate =  $_POST['mdate'];
    $mtime =  $_POST['mtime'];
    $score1 = $_POST['score1'];
    $score2 =  $_POST['score2'];
    $win =  $_POST['win'];


    $updateQuery = "UPDATE singles SET
        tid = ?,
        pid1 = ?,
        pid2 = ?,
        mdate = ?,
         mtime = ?, 
        score1 = ?,
        score2 = ?,
        win = ?
        WHERE mid = ?";

    $stmt = mysqli_prepare($conn, $updateQuery);

    if ($stmt === false) {
        // Check if preparing the statement failed
        echo "Error preparing update statement: " . mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssssi", $tid,  $pid1, $pid2, $mdate, $mtime, $score1, $score2, $win,  $mid);

        if (mysqli_stmt_execute($stmt)) {
            // Success response
            echo json_encode(array('Match data updated successfully.'));
        } else {
            // Error response
            echo json_encode(array('status' => 'error', 'message' => 'Error updating match data: ' . mysqli_stmt_error($stmt)));
        }

        mysqli_stmt_close($stmt);
    }
} else {
    // Retrieve existing data from the database
    if (isset($_GET['mid'])) {
        $id = $_GET['mid'];
        $selectQuery = "SELECT * FROM singles WHERE mid = ?";
        $stmt = mysqli_prepare($conn, $selectQuery);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);

            // Populate variables with existing data
            $mid = $row['mid'];
            $tid = $row['tid'];
            $pid1 = $row['pid1'];
            $pid2 = $row['pid2'];
            $mdate = $row['mdate'];
            $mtime = $row['mtime'];
            $score1 = $row['score1'];
            $score2 = $row['score2'];
            $win = $row['win'];


            mysqli_stmt_close($stmt);
        } else {
            echo "Error selecting data: " . mysqli_error($conn);
        }
    }
}
?>



<!-- Your HTML form -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Match Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            display: inline-block;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-floating {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <h1>Update Match Data</h1>
    <form method="post">
        <div class="form-floating mb-3">
            <input class="form-control" id="inputmatchidToUpdate" type="text" placeholder="Matchid to Update" name="mid" value="<?php echo $mid; ?>" />
            <label for="inputmatchidToUpdate">Match id </label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="inputtournamentid" type="text" placeholder="tournamentid" name="tid" value="<?php echo $tid; ?>" required />
            <label for="inputtournamentid">Tournamentid</label>
        </div>

        <div class="form-floating mb-3">
            <input class="form-control" id="inputpid1" type="name" placeholder="playerid1" name="pid1" value="<?php echo $pid1; ?>" required />
            <label for="inputpid1">Playerid 1</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="inputpid2" type="name" placeholder="playerid2" name="pid2" value="<?php echo $pid2; ?>" required />
            <label for="inputpid2">Playerid 2</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="inputmatchdate" type="name" placeholder="Matchdate" name="mdate"  value="<?php echo $mdate; ?>" required />
            <label for="inputmatchdate">Matchdate</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="inputmatchtime" type="name" placeholder="matchtime" name="mtime" value="<?php echo $mtime; ?>" required />
            <label for="inputmatchtime">Match time</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="inputscore1" type="name" placeholder="score1" name="score1" value="<?php echo $score1; ?>" />
            <label for="inputscore">Score1</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="inputscore2" type="name" placeholder="score2" name="score2" value="<?php echo $score2; ?>" />
            <label for="inputscore">Score2</label>
        </div>


        <div class="form-floating mb-3">
            <input class="form-control" id="inputwin" type="name" placeholder="win" name="win" value="<?php echo $win; ?>" />
            <label for="inputwin">Win</label>
        </div>


        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <button class="btn btn-primary" type="submit" name="update">Update Data</button>

        </div>
        </div>
        </div>

        </main>