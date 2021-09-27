<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--  -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/loginstyle.css">
</head>
<!-- container -->
<section class="showcase">
    <div class="container">
        <form action="<?php echo base_url(); ?>registration" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class=" col-md-8 col-lg-6 pb-5" style="margin-left: 236px;">
                    <div class="row">
                        <ul style="color: #CB0000"><?php echo validation_errors('<li>', '</li>'); ?>
                    </div>
                    <!--Form with header-->
                    <div class="card  " style="width: 310px;height: 265px;">
                        <!-- <div class="card-header p-0"> -->
                        <div class="bg-login-page text-white text-center py-2">
                            <h3><i class="fas fa-user-plus"></i> Registration</h3>
                        </div>
                        <!-- </div> -->
                        <div class="card-body p-3">
                            <!--Body-->
                            <!-- <div class="form-group finput"> -->
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="username">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-mobile"></i></div>
                                </div>
                                <input type="text" class="form-control" name="mobile" placeholder="mobile" maxlength="10">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                                </div>
                                <input type="text" class="form-control" name="email" placeholder="Email *">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password *">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" id="contact-send-a" class="btn btn-info btn-block rounded-0 py-2">Register</button>
                        </div>
                        <span>Already Register? <a href="<?php echo base_url() ?>login">Login</a></span>
                    </div>

                </div>
            </div>
    </div>
    </form>
    </div>
</section>