<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="container">
    <h2>Your Details</h2>
    <hr>
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            <div class="container login-container">

                <div class="login-form-1">
                    <form method="POST" action="register-function.php">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email_address" placeholder="Your Email *" value="<?php echo $_GET['email']; ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Your Password *" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address_line_1" placeholder="Address Line 1" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address_line_2" placeholder="Address Line 2" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="county" placeholder="County" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" placeholder="Mobile" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="register" class="btnSubmit" value="Register"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container -->

<footer>
    <div class="container">
        <p><img src="images/one_million_bottom_brand.png" alt="One Community_ One Million Lines_"></p>
    </div>
</footer>

<?php include 'partials/footer.php'; ?>
