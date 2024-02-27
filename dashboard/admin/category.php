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
<?php
include 'connect.php';
?>
<main>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Category Details</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                        <div class="form-floating mb-3">
                                <input class="form-control" id="inputcategoryid" type="name" placeholder="catid" name="catid" required />
                                <label for="inputcategoryid">Categoryid</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputcategory" type="name" placeholder="category" name="category" required />
                                <label for="inputcategory">Category</label>
                            </div>

                           

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>


                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'connect.php';

    if (isset($_POST['submit'])) {
        // Sanitize input to prevent SQL injection
        $catid = $_POST['catid'];
        $category = $_POST['category'];
      

        $insertQuery = "INSERT INTO category(catid,category) VALUES ('$catid','$category')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "<script>alert('Success!');</script>";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    
       
    }
    ?>

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