<?php session_start();
if (!isset($_SESSION['email_address'])) {
    header("location: index.php"); //redirects to the index.php page if the session doesn't
    // exist because use doesn't have access to this page.
}
?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>

<div class="container">
    <h2>Your Profile</h2>
    <hr>
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <ul>
                <li><a>Profile</a></li>
                <li><a>Book Pitch</a></li>
            </ul>
        </div>
        <div class="col-md-8">
                    <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
            </span>
            <h3>Welcome <?php echo $_SESSION['email_address']; ?></h3>

        </div>
    </div>
</div>
<!-- /container -->

<footer>
    <div class="container">
        <p><img src="images/one_million_bottom_brand.png" alt="One Community_ One Million Lines_">
        </p>
    </div>
</footer>

<?php include 'partials/footer.php'; ?>
