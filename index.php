
<?php
    include_once 'header.php';
?>

<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('form_login/images/imgidol2.jpg');"></div>
    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <div class="mb-4">
                        <h3>Sign In</h3>
                    </div>
                    <form action="action/login.php" method="post">
                        <div class="form-group first">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                            <?php if (isset($errors['username'])): ?>
                                <p class="text-danger"><?php echo $errors['username'] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group last mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <?php if (isset($errors['password'])): ?>
                                <p class="text-danger"><?php echo $errors['password'] ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="d-flex mb-5 align-items-center">
                            <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                <input type="checkbox" checked="checked"/>
                                <div class="control__indicator"></div>
                            </label>
                            <span class="ml-auto"><a href="tech.php" class="forgot-pass">Forgot Password</a></span>
                        </div>

                        <input type="submit" value="Log In" class="btn btn-block btn-primary">

                        <a href="view/register.php" class="btn btn-block btn-success" style="color: white">Register</a>
                        <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>


                        <div class="social-login">
                            <a href="https://www.facebook.com/" class="facebook btn d-flex justify-content-center align-items-center">
                                <span class="icon-facebook mr-3"></span> Login with Facebook
                            </a>
                            <a href="#" class="twitter btn d-flex justify-content-center align-items-center">
                                <span class="icon-twitter mr-3"></span> Login with  Twitter
                            </a>
                            <a href="#" class="google btn d-flex justify-content-center align-items-center">
                                <span class="icon-google mr-3"></span> Login with  Google
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

<?php
    include_once 'footer.php';