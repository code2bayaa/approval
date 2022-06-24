<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <!-- Approved Page -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('css/index.css')); ?>" rel="stylesheet" />
    <script src = "<?php echo e(asset('js/jquery.js')); ?>" ></script>
    <div class="bg-body-light">
        <div class="content content-full">
            <div class = "d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h5 fw-bold mb-2">
                        APPROVALS
                    </h1>
                </div>
                <nav class = "flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label = "breadcrumb">
                    <ol class = "breadcrumb breadcrumb-alt">
                        <li class = "breadcrumb-item">
                            <a class = "link-fx" href = "javascript:void(0)">Location</a>
                        </li>
                        <li class = "breadcrumb-item" aria-current = "page">
                            APPROVED
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content-force">
        <div class="row">
            APPROVED
        </div>
    </div>
    <!-- END Page Content -->

    <script src = "<?php echo e(asset('js/build.js')); ?>"></script>
    <script>
        retrieveApplication({"status" : 1, "role" : 2});
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('approval::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\TUM\Modules/Approval\Resources/views/cod/approved.blade.php ENDPATH**/ ?>