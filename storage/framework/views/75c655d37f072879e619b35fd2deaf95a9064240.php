<<<<<<< HEAD



=======
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
<?php $__env->startSection('content'); ?>
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
<<<<<<< HEAD
                <div class="flex-grow-1">
                    <h5 class="h5 fw-bold mb-0">
                        VIEW Courses
=======
                <div class="flex-grow-0">
                    <h5 class="h5 fw-bold mb-0">
                      COURSES AVAILABLE
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                    </h5>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Intakes</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            View selected intake
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
<<<<<<< HEAD
    
 
    <main id="main-container">
        <!-- Page Content -->
        
          <!-- Dynamic Table Responsive -->
          <div class="block block-rounded">
           
=======


    <main id="main-container">
        <!-- Page Content -->

          <!-- Dynamic Table Responsive -->
          <div class="block block-rounded">

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-12">
              <table class="table table-borderless table-striped table-vcenter js-dataTable-responsive">
<<<<<<< HEAD
                <thead>
                    
=======
                <span class="d-flex justify-content-end">
                  <a class="btn btn-alt-info btn-sm" href="<?php echo e(route('courses.showIntake')); ?>">Back</a>
              </span><br>
                <thead>

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                  <tr>
                    <th>Course Code</th>
                    <th>Courses</th>
                    <th>Department</th>
<<<<<<< HEAD
                    <th>Campus</th>
                    <th>Period</th>
                    <th colspan="3" class="text-center" >Action</th>
                  </tr>
                  
                </thead>
                <tbody>
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
=======
                    <th>Period</th>

                  </tr>

                </thead>
                <tbody>
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                         <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                            <td><?php echo e($item->course_code); ?></td>
                            <td><?php echo e($item->course_name); ?></td>
                            <td><?php echo e($item->department_id); ?></td>
<<<<<<< HEAD
                            <td><?php echo e($item->campus_id); ?></td>
                            <td><?php echo e($item->course_duration); ?></td>
                            <td><a href="" class="btn btn-sm btn-alt-secondary" data-toggle="click-ripple">view</a></td>
                            <td><a href="" class="btn btn-sm btn-alt-info" data-toggle="click-ripple">edit</a></td>
                            <td><a href="" class="btn btn-sm btn-alt-danger" data-toggle="click-ripple">delete</a></td>
=======
                            <td><?php echo e($item->course_duration); ?></td>



>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df

                         </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<<<<<<< HEAD
                
=======

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                </tbody>
              </table>
                </div>
            </div>
          </div>
          <!-- Dynamic Table Responsive -->
        </div>
        <!-- END Page Content -->
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUM\Modules/Courses\Resources/views/intake/viewIntake.blade.php ENDPATH**/ ?>