<<<<<<< HEAD



=======
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
<?php $__env->startSection('content'); ?>
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
          <div class="flex-grow-1">
<<<<<<< HEAD
              
=======

>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
          </div>
      </div>
  </div>
</div>
    <div class="content">
      <div  style="margin-left:20%;" class="block block-rounded col-md-9 col-lg-8 col-xl-6">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit School</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-12 space-y-0">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="<?php echo e(route('courses.updateSchool',$data->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="col-12 col-xl-12">
                      <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e($data->name); ?>" id="name" name="name" placeholder="Name">
                    </div>
<<<<<<< HEAD
                    <div class="col-12">
                        
                      <button type="submit" class="btn btn-dark">Update</button>
                    </div>
                  </form>
                 
=======
                    <div class="col-12 col-xl-12">
                      <input type="text" class="form-control form-control-alt text-uppercase" value="<?php echo e($data->initials); ?>" id="initials" name="initials" placeholder="Initials">
                    </div>
                    <div class="col-12 text-center p-3">
                      <button type="submit" class="btn btn-alt-success" data-toggle="click-ripple">Update School</button>
                    </div>
                  </form>

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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUM\Modules/Courses\Resources/views/school/editSchool.blade.php ENDPATH**/ ?>