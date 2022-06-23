<?php $__env->startSection('content'); ?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="<?php echo e(asset('css/admissions.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('css/index.css')); ?>" rel="stylesheet" />
<script src = "<?php echo e(asset('js/select.js')); ?>" defer></script>
<script src = "<?php echo e(asset('js/jquery.js')); ?>" ></script>

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h1 class="h5 fw-bold mb-2">
                    VIEW INTAKE
                </h1>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)" id = 'intake_name'></a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page" id = 'intake_program'></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class = 'content-force'>
    <div id = 'search-section'>
        <div id = 'search-section-left'>
            <div id = 'level-parent'>
                <p>Attendance</p>
                <div id = 'level-approve'>
                     <i class='fas fa-filter' style = 'margin:1%'></i> <select class = 'select_approve' id = 'attendance_search' name = 'attendance_input'></select>
                </div>
            </div>
            <div id = 'level-parent'>
                <p>Course</p>
                <div id = 'level-approve'>
                     <i class='fas fa-filter' style = 'margin:1%'></i> <select class = 'select_approve' id = 'course_search' name = 'course_input'></select>
                </div>
            </div>
            <div id = 'level-parent'>
                <p>Year of Study</p>
                <div id = 'level-approve'>
                     <i class='fas fa-filter' style = 'margin:1%'></i> <select class = 'select_approve' id = 'stage_search' name = 'stage_search'></select>
                </div>
            </div>
        </div>
    </div>
    <div id = 'level-page'>
        <span>Page</span><select class = 'select_approve' id = 'page_approve' name = 'page_approve' style = 'width : 20%;margin-left:40%;'></select>
    </div>
    <div id = 'candidate-page'></div>
</div>

<script src = "<?php echo e(asset('js/build.js')); ?>"></script>
<script>
    retrievePost();
</script>

<!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('approval::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\TUM\Modules/Approval\Resources/views/cod/view.blade.php ENDPATH**/ ?>