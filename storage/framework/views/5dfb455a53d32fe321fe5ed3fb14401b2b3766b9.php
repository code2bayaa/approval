<<<<<<< HEAD


=======
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
<?php $__env->startSection('content'); ?>
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
          <div class="flex-grow-1">
              <h4 class="h3 fw-bold mb-2">
                  Edit Course
              </h4>
          </div>
      </div>
  </div>
</div>
    <div class="content">
<<<<<<< HEAD
      <div  style="margin-left:20%;" class="block block-rounded col-md-9 col-lg-8 col-xl-6">
=======
      <div class="block block-rounded">
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
            <div class="block-header block-header-default">
              <h3 class="block-title">Add Course</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
<<<<<<< HEAD
                <div class="col-lg-12 space-y-0">
=======
                <div class="col-lg-8 space-y-0">
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="<?php echo e(route('courses.updateCourse',$data->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
<<<<<<< HEAD
                    <div class="col-12 col-xl-12">
                      <select name="campus" id="campus"class="form-control form-control-alt text-uppercase">
                        <option  selected value="<?php echo e($data->campus_id); ?>"><?php echo e($data->campus_id); ?></option>
                        <?php $__currentLoopData = $campuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($campus->name); ?>"><?php echo e($campus->name); ?></option>        
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                   
                    <div class="col-12 col-xl-12">
                      <select name="school"  class="form-control form-control-alt text-uppercase">
                        <option selected value="<?php echo e($data->school_id); ?>"> <?php echo e($data->school_id); ?></option>
                        <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($school->name); ?>"><?php echo e($school->name); ?></option>        
=======

                    <div class="col-12 col-xl-12">
                      <select name="school" id="school" value="<?php echo e($data->school); ?>" class="form-control form-control-alt text-uppercase">
                        <option selected disabled> Select School</option>
                        <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($school->name); ?>"><?php echo e($school->name); ?></option>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <div class="col-12 col-xl-12">
<<<<<<< HEAD
                      <select name="department" value="<?php echo e($data->department_id); ?>" class="form-control form-control-alt text-uppercase">
                        <option selected value="<?php echo e($data->department_id); ?>"> <?php echo e($data->department_id); ?></option>
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($department->name); ?>"><?php echo e($department->name); ?></option>        
=======
                      <select name="department" id="department" value="<?php echo e($data->department); ?>" class="form-control form-control-alt text-uppercase">
                        <option selected disabled> Select Department</option>
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($department->name); ?>"><?php echo e($department->name); ?></option>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                    <div class="col-12 col-xl-12">
<<<<<<< HEAD
                      <input type="text" class="form-control form-control-alt text-uppercase"  value="<?php echo e($data->course_name); ?>"  id="course_name" name="course_name" placeholder="Course Name">
                    </div>
                    <div class="col-12 col-xl-12">
                        <input type="text" class="form-control form-control-alt text-uppercase"  value="<?php echo e($data->course_code); ?>"  id="course_code" name="course_code" placeholder="Course Code">
                      </div>
                      <div class="col-12 col-xl-12">
                        <input type="text" class="form-control form-control-alt text-uppercase"  value="<?php echo e($data->course_duration); ?>"  id="course_duration" name="course_duration" placeholder="Course Duration">
                      </div>
                      <div class="col-12 col-xl-12">
                        <input type="text" class="form-control form-control-alt text-uppercase"  value="<?php echo e($data->course_requirements); ?>"  id="course_requirements" name="course_requirements" placeholder="Course Requirements">
                      </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-dark">Update</button>
                    </div>
                  </form>
                 
=======
                      <input type = "text" class = "form-control form-control-alt text-uppercase" id = "course_name"value = "<?php echo e($data->course_name); ?>" name="course_name" placeholder="Course Name">
                    </div>
                    <div class="col-12 col-xl-12">
                        <input type = "text" class = "form-control form-control-alt text-uppercase" id = "course_code" value = "<?php echo e($data->course_code); ?>" name="course_code" placeholder="Course Code">
                      </div>
                      <div class="col-12 col-xl-12">
                        <input type = "text" class = "form-control form-control-alt text-uppercase" id = "course_duration" value = "<?php echo e($data->course_duration); ?>"name="course_duration" placeholder="Course Duration">
                      </div>
                      <div class="col-12 col-xl-12">
                        <textarea value = "<?php echo e($data->course_requirements); ?>" class = "form-control form-control-alt text-uppercase" id="course_requirements" name="course_requirements" placeholder="Course Requirements"></textarea>
                      </div>
                      </div>
                <div class="col-lg-4">
                    <div class="col-12 col-xl-12">
                      <input type="text" value = "<?php echo e($data->subject1); ?>" class="form-control form-control-alt text-uppercase" id="subject1" name="subject1" placeholder="subject1">
                    </div>
                    <br>
                    <div class="col-12 col-xl-12">
                      <input type="text"value = "<?php echo e($data->subject2); ?>"class="form-control form-control-alt text-uppercase" id="subject2" name="subject2" placeholder="subject2">
                    </div><br>
                    <div class="col-12 col-xl-12">
                      <select value = "<?php echo e($data->subject3); ?>" name="subject3" id="subject3"class="form-control form-control-alt form-select text-uppercase">
                      <option value="" selected disabled>Choose One Humanity</option>
                      <option value="Geo">Geo</option>
                      <option value="His">His</option>
                      <option value="CRE">CRE</option>
                    </select>
                    </div><br>
                    <div class="col-12 col-xl-12">
                      <select value = "<?php echo e($data->subject4); ?>" name="subject4" id="subject4"class="form-control form-select form-control-alt text-uppercase">
                      <option value="" selected disabled>Choose One Science</option>
                      <option value="Phy">Phy</option>
                      <option value="Chem">Chem</option>
                      <option value="Bio">Bio</option>
                    </select>
                    </div><br>

                    
                </div>
                      <div class="col-12 text-center p-3">
                        <button type="submit" class="btn btn-alt-success" data-toggle="click-ripple">Update Course</button>
                      </div>
                  </form>

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
                </div>
              </div>
            </div>
          </div>
<<<<<<< HEAD
    </div> 
=======
    </div>
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUM\Modules/Courses\Resources/views/course/editCourse.blade.php ENDPATH**/ ?>