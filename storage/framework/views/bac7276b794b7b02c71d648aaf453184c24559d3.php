
<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div class="content">
        <!-- Stats -->
        <div class="row">
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
<<<<<<< HEAD
                <a class="block block-rounded block-link-pop border-start border-primary border-4" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Courses on offer</div>
                        <div class="fs-2 fw-normal text-dark">1,200</div>
=======
                <a class="block block-rounded block-link-pop border-start border-primary border-4" href="<?php echo e(route('courses.offer')); ?>">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Courses on offer</div>
                        <div class="fs-2 fw-normal text-dark">
                            <?php echo e($courses); ?>

                        </div>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-start border-primary border-4" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Applications</div>
<<<<<<< HEAD
                        <div class="fs-2 fw-normal text-dark">665 <span class="badge rounded-pill bg-info" style="font-size: x-small !important;"><i class="fa fa-fw fa-message"></i> New </span></div>
=======
                        <div class="fs-2 fw-normal text-dark"><?php echo e($applications); ?> <span class="badge rounded-pill bg-info" style="font-size: x-small !important;"><i class="fa fa-fw fa-message"></i> New </span></div>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-start border-primary border-4" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Notifications</div>
                        <div class="fs-2 fw-normal text-dark">9+ <span class="badge rounded-pill bg-info" style="font-size: x-small !important;"><i class="fa fa-fw fa-message"></i> New</span> </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
<<<<<<< HEAD
                <a class="block block-rounded block-link-pop border-start border-primary border-4" href="javascript:void(0)">
=======
                <a class="block block-rounded block-link-pop border-start border-primary border-4" href="<?php echo e(route('courses.profile')); ?>">
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                    <div class="block-content block-content-full">
                        <div class="fs-sm fw-semibold text-uppercase text-muted">My Profile</div>
                        <div class="fs-2 fw-normal text-dark"><i class="fa fa-user-gear"></i> </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Stats -->
    </div>
    <!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUM\resources\views/admin/index.blade.php ENDPATH**/ ?>