

<?php $__env->startSection('content'); ?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="<?php echo e(asset('/css/admissions.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('/css/index.css')); ?>" rel="stylesheet" />
<script src = "<?php echo e(asset('/js/select.js')); ?>" defer></script>
<script src = "<?php echo e(asset('jquery.js')); ?>" ></script>

<div class = 'content-force'>
    <div id = 'search-section'>
        <div id = 'search-section-left'>
            <form accept-charset=utf8 id = 'search-form'>
                <input type = 'search' id = 'search-input' placeholder = 'Search Here'>
                <button type = 'submit' id = 'search-query-button'><i class='fas fa-search'></i></button>
            </form>
        </div>
    </div>
    <div id = 'candidate-page'>
        <div id = 'time-out'>
            <img src = '/Images/clipboard.svg'>
            Could not find data
        </div>
    </div>
</div>

<script src = "<?php echo e(asset('/js/build.js')); ?>"></script>

<!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('approval::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\TUM\Modules/Approval\Resources/views/dean/search.blade.php ENDPATH**/ ?>