
<?php $__env->startSection('content'); ?>
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        Update your personal details
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Profile</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Update profile
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="d-flex justify-content-center">
            <span class="alert alert-danger"> <i class="fa fa-info-circle"></i> Please ensure that you update your profile within 72hours or the account will be deleted permanently. </span>
        </div>
        <div class="block block-rounded">
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Form Grid with Labels -->
                        <form method="POST" action="<?php echo e(route('application.save')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row g-3">
                                <div class="col-3">
                                    <label class="form-label">Title</label>
                                    <select class="form-control" name="title" required>
                                        <option selected="selected" disabled class="text-center"> -- select title --</option>
                                        <option <?php if(old('title') === 'Mr.'): ?> selected="selected" <?php endif; ?> value="Mr."> Mr.</option>
                                        <option <?php if(old('title') === 'Miss.'): ?> selected="selected" <?php endif; ?> value="Miss."> Miss. </option>
                                        <option <?php if(old('title') === 'Ms.'): ?> selected="selected" <?php endif; ?> value="Ms."> Ms. </option>
                                        <option <?php if(old('title') === 'Mrs.'): ?> selected="selected" <?php endif; ?> value="Mrs."> Mrs. </option>
                                        <option <?php if(old('title') === 'Dr.'): ?> selected="selected" <?php endif; ?> value="Dr.">Dr.</option>
                                        <option <?php if(old('title') === 'Prof.'): ?> selected="selected" <?php endif; ?> value="Prof."> Prof. </option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">First name</label>
                                    <input type="text" class="form-control" name="fname" required value="<?php echo e(old('fname')); ?>">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" name="mname" value="<?php echo e(old('mname')); ?>">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Surname</label>
                                    <input type="text" class="form-control" name="sname" value="<?php echo e(old('sname')); ?>" required>
                                </div>
                                <input type="hidden" value="<?php echo e(Auth::user()->mobile); ?>" name="index_number">
                                <input type="hidden" value="<?php echo e(Auth::user()->id_number); ?>" name="id_number">
                                <div class="col-3">
                                    <label class="form-label">Marital status</label>
                                    <select name="status" class="form-control" required>
                                        <option disabled selected class="text-center">-- select -- </option>
                                        <option <?php if(old('status') === 'Single'): ?> selected="selected" <?php endif; ?> value="single" >Single</option>
                                        <option <?php if(old('status') === 'Married'): ?> selected="selected" <?php endif; ?> value="married">Married</option>
                                        <option <?php if(old('status') === 'Divorced'): ?> selected="selected" <?php endif; ?> value="divorced" >Divorced</option>
                                        <option <?php if(old('status') === 'Separated'): ?> selected="selected" <?php endif; ?> value="separated" >Separated</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Date of birth</label>
                                    <input type="date" class="form-control" name="dob" value="<?php echo e(old('dob')); ?>" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Gender</label>
                                    <div class="space-x-0">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" value="Male" <?php if(old('gender') === 'Male'): ?> checked <?php endif; ?> required>
                                                <label class="form-check-label">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" value="Female" <?php if(old('gender') === 'Female'): ?> checked <?php endif; ?> required>
                                                <label class="form-check-label">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" value="Other" <?php if(old('gender') === 'Other'): ?> checked <?php endif; ?> required>
                                                <label class="form-check-label">Other</label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Living with a disability? </label>
                                    <div class="space-x-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disabled" value="No" <?php if(old('disabled') === 'No'): ?> checked <?php endif; ?> required>
                                        <label class="form-check-label">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="disabled" value="Yes" <?php if(old('disabled') === 'Yes'): ?> checked <?php endif; ?> required>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Nature of disability</label>
                                    <textarea class="form-control" name="disability" rows="1" placeholder="Describe here kind of disability" value="<?php echo e(old('disability')); ?>"></textarea>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Index/Registration number</label>
                                    <input type="text" class="form-control" name="index_number" value="<?php echo e(old('index_number')); ?>" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Alternative phone</label>
                                    <input type="text" class="form-control" name="alt_number" value="<?php echo e(old('alt_number')); ?>" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">ID/BIRTH CERT/Passport Number</label>
                                    <input type="text" class="form-control" name="id_number" value="<?php echo e(old('id_number')); ?>" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Physical address</label>
                                    <input type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Nationality</label>
                                    <input type="text" class="form-control" name="nationality" value="<?php echo e(old('nationality')); ?>" required>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">County</label>
                                    <input type="text" class="form-control" name="county" required value="<?php echo e(old('county')); ?>">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Sub-County</label>
                                    <input type="text" class="form-control" name="subcounty" value="<?php echo e(old('subcounty')); ?>">
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Town</label>
                                    <input type="text" class="form-control" name="town" required value="<?php echo e(old('town')); ?>">
                                </div>
                                <div class="d-flex justify-content-md-center">
                                    <div class="col-md-4">
                                        <button class="form-control btn btn-alt-info col-3" type="submit"> Save </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END Form Grid with Labels -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('application::layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\TUM\Modules/Application\Resources/views/applicant/updatePage.blade.php ENDPATH**/ ?>