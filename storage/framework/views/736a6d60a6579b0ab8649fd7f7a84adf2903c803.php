<?php $__env->startSection('content'); ?>
    <!-- Page Content -->

    <link href="<?php echo e(asset('/css/index.css')); ?>" rel="stylesheet" />
    <script src = "<?php echo e(asset('/js/utils.js')); ?>" ></script>
    <script src = "<?php echo e(asset('jquery.js')); ?>" ></script>
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h5 fw-bold mb-2">
                        INTAKE COURSES
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class = "content-force">
        <div class = "row">
            COURSES
        </div>
    </div>
    <!-- END Page Content -->

    <script src = "<?php echo e(asset('/js/build.js')); ?>"></script>
    <script>
        showCourses();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('approval::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\TUM\Modules/Approval\Resources/views/cod/courses.blade.php ENDPATH**/ ?>