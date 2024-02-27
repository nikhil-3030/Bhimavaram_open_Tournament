<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_password'])) {
    // User is not logged in, redirect to login page
    header("Location: admin.php");
    exit;
}

// Continue with the rest of your index.php code

// You can also use $_SESSION['user_password'] to access the user's password if needed
$userPassword = $_SESSION['user_password'];
?>

<?php
include 'nav.php';
?>
<main>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <div class="container-fluid px-4">
        <div class="container">
            <h2>Player Data</h2>
            <table>
                <thead>
                    <tr>

                        <th>Player ID</th>
                        <th>Player Name</th>
                        <th>Nick Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <!-- <th>Address</th>
                                <th>Mobileno</th> -->
                        <!-- <th>email</th>
                                <th>Matches</th>
                                <th>Points</th> -->
                        <!-- <th>Operation</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'connect.php';

                    $sql = "SELECT *  FROM players_d";

                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['pid']}</td>";
                        echo "<td>{$row['pname']}</td>";
                        echo "<td>{$row['pnickname']}</td>";
                        echo "<td>{$row['age']}</td>";
                        echo "<td>{$row['gender']}</td>";
                        // echo "<td>{$row['address']}</td>";
                        // echo "<td>{$row['mobileno']}</td>";
                        // // echo "<td>{$row['email']}</td>";
                        // echo "<td>{$row['mat']}</td>";
                        // echo "<td>{$row['points']}</td>";
                        echo "</td>";
                        // echo "<a href='edit.php?id={$row['pid']}' class='btn btn-primary m-2'>Edit</a>";
                        // echo "<a href='delete.php?id={$row['pid']}' class='btn btn-danger p=m-2' onclick='return confirm(\"Are you sure you want to delete this player?\")'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }

                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
</div>