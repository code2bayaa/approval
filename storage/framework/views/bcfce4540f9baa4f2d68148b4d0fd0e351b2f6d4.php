<<<<<<< HEAD


<?php $__env->startSection('content'); ?> 
=======
<?php $__env->startSection('content'); ?>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
          <div class="flex-grow-1">
              <h4 class="h3 fw-bold mb-2">
<<<<<<< HEAD
                  
=======

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
              </h4>
          </div>
          <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                      <a class="link-fx" href="javascript:void(0)">Classes</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    <a  href="showClasses">View Classes</a>
                  </li>
              </ol>
          </nav>
      </div>
  </div>
</div>
    <div class="content">
      <div  style="margin-left:20%;" class="block block-rounded col-md-9 col-lg-8 col-xl-6">
            <div class="block-header block-header-default">
              <h3 class="block-title">ADD CLASS</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-12 space-y-0">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="<?php echo e(route('courses.storeClasses')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
<<<<<<< HEAD
                    
                    <div class="col-12 col-xl-12">
                      <input type="text" value="<?php echo e(old('name')); ?>" class="form-control form-control-alt text-uppercase" id="name" name="name" placeholder="Name">
                    </div>
=======

                    <div class="col-12 col-xl-12">
                      <select name="attendance" value="<?php echo e(old('attendance')); ?>" class="form-control form-control-alt">
                        <option selected disabled> Select Attendance</option>
                        <?php $__currentLoopData = $attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($attendance->attendance_name); ?>"><?php echo e($attendance->attendance_name); ?></option>
                            <input type="hidden" name="attendance_code" value="<?php echo e($attendance->attendance_code); ?>">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <div class="col-12 col-xl-12">
                      <select name="intake_from" class="form-control form-control-alt">
                        <option selected disabled>Select Intake</option>
                        <?php $__currentLoopData = $intakes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $intake): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($intake->intake_from); ?>"><?php echo e(Carbon\Carbon::parse($intake->intake_from)->format('M-Y')); ?> - <?php echo e(Carbon\Carbon::parse($intake->intake_to)->format('M-Y')); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <div class="col-12 col-xl-12">
                      <select name="course" id="course" class="form-control form-control-alt">
                        <option selected disabled> Select Course</option>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($course->course_name); ?>"><?php echo e($course->course_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="course_code" value="<?php echo e($course->course_code); ?>">
                        <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">
                      </select>
                    </div>

                    
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                    <div class="col-12 text-center p-3">
                      <button type="submit" class="btn btn-alt-success" data-toggle="click-ripple">Create Class</button>
                    </div>
                  </form>
<<<<<<< HEAD
                 
=======

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                </div>
              </div>
            </div>
          </div>
<<<<<<< HEAD
    </div> 
<?php $__env->stopSection(); ?>
=======
    </div>
<?php $__env->stopSection(); ?>

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUM\Modules/Courses\Resources/views/class/addClasses.blade.php ENDPATH**/ ?>