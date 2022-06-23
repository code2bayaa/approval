
<?php $__env->startSection('content'); ?>
    <!-- Page Content -->

    <link href="<?php echo e(asset('/css/index.css')); ?>" rel="stylesheet" />
    <script src = "<?php echo e(asset('/js/plugins/chart.js/Chart.min.js')); ?>" ></script>
    <script src = "<?php echo e(asset('/js/utils.js')); ?>" ></script>
    <script src = "<?php echo e(asset('jquery.js')); ?>" ></script>

    <div class="content-force">
        <div class="cod">
            <h3>WELCOME, DEAN</h3>
        </div>
        <div id = 'preview-cod'>
            <section id = '/approval/pending'>
                <div id = 'name-preview'>
                    <h4><span id = 'pending-preview'></span> PENDING</h4>
                </div>
                <div class = 'card-build' style = 'background-color:#097B3E;'>
                    <img src = '<?php echo e(asset('/Images/apply.png')); ?>' alt = 'Application Card'>
                </div>
            </section>
            <section id = '/approval/approved'>
                <div id = 'name-preview'>
                   <h4><span id = 'approved-preview'></span> APPROVED</h4>
                </div>
                <div class = 'card-build' style = 'background-color:#d89837;'>
                    <img src = '<?php echo e(asset('/Images/cap.png')); ?>' alt = 'Application Card'>
                </div>
            </section>
            <section id = '/approval/rejected'>
                <div id = 'name-preview'>
                    <h4><span id = 'rejected-preview'></span> REJECTED</h4>
                </div>
                <div class = 'card-build' style = 'background-color:#097B3E;'>
                    <img src = '<?php echo e(asset('/Images/apply.png')); ?>' alt = 'Application Card'>
                </div>
            </section>
        </div>
        <div id = 'graph-cod'>
            <canvas id = 'pie-cod'></canvas>
            <canvas id = 'bar-cod'></canvas>
        </div>
    </div>
    <!-- END Page Content -->

    <script src = "<?php echo e(asset('/js/build.js')); ?>"></script>
    <script>
        buildGraph();
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('approval::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\TUM\Modules/Approval\Resources/views/dean/index.blade.php ENDPATH**/ ?>