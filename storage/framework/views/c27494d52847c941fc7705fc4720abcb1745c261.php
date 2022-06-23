<<<<<<< HEAD
=======

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
<?php $__env->startSection('content'); ?>
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-0">
                <div class="flex-grow-0">
                    <h5 class="h5 fw-bold mb-0">
                        Courses
                    </h5>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Courses</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            All Courses
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
            <table class="table table-borderless table-striped js-dataTable-responsive">
<<<<<<< HEAD
                <?php if(count($data)>0): ?>
=======
                <?php if(count($active)>0): ?>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                    <tr>
                        <th>Course name</th>
                        <th>Department</th>
                        <th>School</th>
                        <th>Campus</th>
                        <th>Intake</th>
                        <th>Duration</th>
<<<<<<< HEAD
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
=======
                        <th colspan="2">Action</th>
                    </tr>
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                                <td> <?php echo e($item->course_name); ?></td>
                                <td> <?php echo e($item->department_id); ?></td>
                                <td> <?php echo e($item->school_id); ?></td>
                                <td> <?php echo e($item->campus_id); ?></td>
<<<<<<< HEAD
                                <td> <?php echo e($item->$intake); ?></td>
                                <td> <?php echo e($item->course_duration); ?></td>
                                <td nowrap=""> <a class="btn btn-sm btn-alt-secondary" href="<?php echo e(route('application.viewOne', $item->id)); ?>">View </a> </td>
                                <td nowrap=""> <a class="btn btn-sm btn-alt-info" href="<?php echo e(route('application.apply', $item->id)); ?>">Apply now </a> </td>
                            </tr>
=======
                                <td></td>
                                <td> <?php echo e($item->course_duration); ?></td>
                                <td nowrap=""> <a class="btn btn-sm btn-alt-secondary" href="<?php echo e(route('application.viewOne', $item->id)); ?>">View </a> </td>
                                <td nowrap=""> <a class="btn btn-sm btn-alt-info" href="<?php echo e(route('application.apply', $item->id)); ?>">Apply now </a> </td>
                           </tr>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <tr>
                    <small class="text-center text-muted">There are no courses on offer</small>
                </tr>
                <?php endif; ?>
        </table>
        </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('application::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUM\Modules/Application\Resources/views/applicant/courses.blade.php ENDPATH**/ ?>