
<?php $__env->startSection('content'); ?>
    <!-- Page Content -->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('/css/index.css')); ?>" rel="stylesheet" />
    <script src = "<?php echo e(asset('/js/plugins/chart.js/Chart.min.js')); ?>" ></script>
    <script src = "<?php echo e(asset('/js/utils.js')); ?>" ></script>
    <script src = "<?php echo e(asset('jquery.js')); ?>" ></script>

    <div class="content-force">
        <div class="row">
            PENDING
        </div>
    </div>
    <!-- END Page Content -->

    <script src = "<?php echo e(asset('/js/build.js')); ?>"></script>
    <script>
        retrieveApplication({"status" : 0, "role" : 4});
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('approval::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\TUM\Modules/Approval\Resources/views/dean/pending.blade.php ENDPATH**/ ?>