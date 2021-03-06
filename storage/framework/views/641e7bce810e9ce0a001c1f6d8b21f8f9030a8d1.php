

<?php $__env->startSection('content'); ?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="<?php echo e(asset('/css/admissions.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('/css/index.css')); ?>" rel="stylesheet" />
<script src = "<?php echo e(asset('/js/select.js')); ?>" defer></script>
<script src = "<?php echo e(asset('jquery.js')); ?>" ></script>

<div class = 'content-force'>
    <div id = 'search-section'>
        <div id = 'search-section-left'>
            <div id = 'level-parent'>
                <p>ATTENDANCE</p>
                <div id = 'level-approve'>
                     <i class='fas fa-filter' style = 'margin:1%'></i> <select class = 'select_approve' id = 'attendance_search' name = 'attendance_input'></select>
                </div>
            </div>
            <div id = 'level-parent'>
                <p>COURSE</p>
                <div id = 'level-approve'>
                     <i class='fas fa-filter' style = 'margin:1%'></i> <select class = 'select_approve' id = 'course_search' name = 'course_input'></select>
                </div>
            </div>
            <div id = 'level-parent'>
                <p>YEAR OF STUDY</p>
                <div id = 'level-approve'>
                     <i class='fas fa-filter' style = 'margin:1%'></i> <select class = 'select_approve' id = 'stage_search' name = 'stage_search'></select>
                </div>
            </div>
        </div>
    </div>
    <div id = 'level-page'>
        <span>PAGE</span><select class = 'select_approve' id = 'page_approve' name = 'page_approve' style = 'width : 20%;margin-left:40%;'></select>
    </div>
    <div id = 'candidate-page'></div>
</div>

<script src = "<?php echo e(asset('/js/build.js')); ?>"></script>
<script>
    retrievePost();
</script>

<!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('approval::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\TUM\Modules/Approval\Resources/views/dean/view.blade.php ENDPATH**/ ?>