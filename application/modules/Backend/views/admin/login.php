
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
     <link rel="stylesheet" href="assets/css/loginstyle.css" >
 </head>
 <section class="showcase">
     <div class="container">
         <!-- <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>CodeIgniter Login and Registration System using MySQL with Bootstrap 4</h2>
      </div>  -->
         <form action="<?php echo base_url(); ?>login" class="" id="register" method="post" accept-charset="utf-8">

             <div class="row justify-content-center">
                 <div class="col-12 col-md-8 col-lg-6 pb-5">
                     <div class="row"><?php echo validation_errors('<div class="col-12 col-md-12 "><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div></div>'); ?></div>
                     <!--Form with header-->
                     <div class="card border-info rounded-0">
                         <div class="card-header p-0">
                             <div class="bg-login-page text-white text-center py-2">
                                 <h3><i class="fa fa-user"></i> Login</h3>
                             </div>
                         </div>
                         <div class="card-body p-3">
                             <!--Body-->
                             <div class="form-group">
                                 <div class="input-group mb-2">
                                     <div class="input-group-prepend">
                                         <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                     </div>
                                     <input type="text" class="form-control" id="email" name="email" placeholder="Email *" value="">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group mb-2">
                                     <div class="input-group-prepend">
                                         <div class="input-group-text"><i class="fa fa-key text-info" aria-hidden="true"></i></div>
                                     </div>
                                     <input type="password" class="form-control" id="password" name="password" placeholder="Password *" value="">
                                 </div>
                             </div>



                             <div class="text-center">
                                 <button type="submit" id="contact-send-a" class="btn btn-info btn-block rounded-0 py-2">Login</button>
                             </div>
                             <br>
                             <span>Not a user? <a href="<?php echo base_url() ?>Registration">Register Now</a></span>
                         </div>
                     </div>
                 </div>
             </div>
             <?php
                // echo  form_close() 
                ?>
         </form>
     </div>
 </section>

 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $("#register").validate({

        rules: {
            email: {
                required: true,
                email: true
            },
            password: "required"
        },

        messages: {
            email: "Please Enter a valid email address",
            password: "Please Enter your password",
        },


    });
</script>