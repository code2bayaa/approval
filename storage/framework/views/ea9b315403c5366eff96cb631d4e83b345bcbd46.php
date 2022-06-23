
<?php $__env->startSection('content'); ?>
    <!-- Page Content -->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('/css/index.css')); ?>" rel="stylesheet" />
    <script src = "<?php echo e(asset('jquery.js')); ?>" ></script>

    <div class="content-force">
        <div class="row">
            REJECTED
        </div>
    </div>
    <!-- END Page Content -->

    <script src = "<?php echo e(asset('/js/build.js')); ?>"></script>
    <script>
        retrieveApplication({"status" : 2, "role" : 4});
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('approval::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\TUM\Modules/Approval\Resources/views/dean/rejected.blade.php ENDPATH**/ ?>