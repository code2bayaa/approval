<<<<<<< HEAD


=======
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
<?php $__env->startSection('content'); ?>

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <div class="flex-grow-1">
                <h5 class="h5 fw-bold mb-0">
                    CLASSES
                </h5>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Classes</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        View classes
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
 <!-- Main Container -->
<<<<<<< HEAD
 
<main id="main-container">
    <!-- Page Content -->
   
      <!-- Dynamic Table Responsive -->
      <div class="block block-rounded">
       
        <div class="block-content block-content-full">
          <div class="row">
            <div class="col-12">
          <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
=======

<main id="main-container">
    <!-- Page Content -->

      <!-- Dynamic Table Responsive -->
      <div class="block block-rounded">

        <div class="block-content block-content-full">
          <div class="row">
            <div class="col-12">
          <table class="table table-borderless table-striped table-vcenter js-dataTable-responsive">
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
            <span class="d-flex justify-content-end">
                <a class="btn btn-alt-info btn-sm" href="<?php echo e(route('courses.addClasses')); ?>">Create</a>
            </span><br>
            <thead>
              <tr>
                <th>Classes</th>
<<<<<<< HEAD
=======
                <th>Attendance</th>
                <th colspan="3" class="text-center" >Action</th>
                <th tyle="text-transform: uppercase">Course</th>
                
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
              </tr>
            </thead>
            <tbody><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
<<<<<<< HEAD
                <td class="fw-semibold fs-sm"><?php echo e($class->name); ?></td>
                <td> <a class="btn btn-sm btn-alt-info" href="<?php echo e(route('courses.editClasses', $class->id)); ?>">edit</a> </td>
                <td> <a class="btn btn-sm btn-alt-danger" href="<?php echo e(route('courses.destroyClasses', $class->id)); ?>">delete</a> </td> 
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
            </tbody>
          </table>
=======

                <td class="fw-semibold fs-sm text-uppercase"><?php echo e($class->name); ?></td>
                <td class="fw-semibold fs-sm"><?php echo e($class->attendance_id); ?></td>
                <td style="text-transform: uppercase"class="fw-semibold fs-sm"><?php echo e($class->course_id); ?></td>
                <td> <a class="btn btn-sm btn-alt-info" href="<?php echo e(route('courses.editClasses', $class->id)); ?>">edit</a> </td>
                <td> <a class="btn btn-sm btn-alt-danger" href="<?php echo e(route('courses.destroyClasses', $class->id)); ?>">delete</a> </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
          </table>
          <?php echo e($data->links('pagination::bootstrap-5')); ?>

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
            </div>
        </div>
      </div>
      <!-- Dynamic Table Responsive -->
    </div>
    <!-- END Page Content -->
</main>
  <!-- END Main Container -->
<?php $__env->stopSection(); ?>
<<<<<<< HEAD
=======

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUM\Modules/Courses\Resources/views/class/showClasses.blade.php ENDPATH**/ ?>