

<?php $__env->startSection('content'); ?>

    <style>
        .img{
            background-image: url("/media/photos/photo33@2x.jpg");
            background-size: cover;

        }
        .block{
            background-color: rgb(0,0, 0,0.5);
        }
        .form-check-label{
            color: whitesmoke;
        }
    </style>
    <div  id="page-container">

        <!-- Main Container -->
        <main class="img" id="main-container">
            <!-- Page Content -->
            <div class="hero-static d-flex align-items-center">
                <div class="content">
                    <div class="row justify-content-center push">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign In Block -->
                            <div class="block block-rounded mb-0">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">APPLICANT PORTAL | Register</h3>
                                    <div class="block-options">
                                        <a class="btn-block-option fs-sm" href="<?php echo e(route('root')); ?>">I have an account.</a>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-0 px-md-1 px-md-5 py-md-1">
                                        <form class="js-validation-signin" method="post" action="<?php echo e(route('application.signup')); ?>">
                                            <?php echo csrf_field(); ?>
                                        <div class="py-3">
                                            <div class="mb-4">
                                                <label class="form-label" style="color: snow !important;">Email Address</label>
                                                <input type="email" class="form-control form-control-alt form-control-lg" id="email" name="email" placeholder="Enter your phone number" required value="<?php echo e(old('email')); ?>">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" style="color: snow !important;">Phone Number</label>
                                                <input type="text" class="form-control form-control-alt form-control-lg" id="pnumber" name="pnumber" placeholder="Enter your phone number" required value="<?php echo e(old('pnumber')); ?>">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" style="color: snow !important;">Create Password</label>
                                                <input type="password" class="form-control form-control-alt form-control-lg" id="password" name="password" placeholder="Create password" required>
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" style="color: snow !important;">Confirm Password</label>
                                                <input type="password" class="form-control form-control-alt form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" style="color: snow !important;"class="form-check-label">I'm not a robot</label>
                                                <input type="text" class="form-control form-control-alt form-control-lg" id="captcha" name="captcha" placeholder="Confirm captcha below" required>
                                            </div>
                                            <div class="mb-4">
                                                <div class="captcha">
                                                    <span class = "capcha_api"><?php echo captcha_img(); ?></span>
                                                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                                                        &#x21bb;
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="row mb-4">
                                                <div class="col-md-12 col-xl-12">
                                                    <button type="submit" class="btn w-100 btn-alt-primary">
                                                        <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Create
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    <!-- END Sign In Form -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign In Block -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: '<?php echo e(route('application.reloadCaptcha')); ?>',
                success: function (data) {
                    $(".capcha_api").html(data.captcha);
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('application::layouts.simple', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\TUM\Modules/Application\Resources/views/auth/signup.blade.php ENDPATH**/ ?>