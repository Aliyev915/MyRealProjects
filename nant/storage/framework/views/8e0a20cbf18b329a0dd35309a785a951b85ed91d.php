<?php $__env->startSection('content'); ?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Apply</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Fullname</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->name); ?> <?php echo e($apply->person->lastname); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Email</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->email); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Phone</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->phone); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Birthplace</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->birthplace); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Birtday</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->birthday); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Citizenship</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->citizenship); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Nationality</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->nationality); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Mobile</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->mobile); ?>" disabled />
                        </div>
                    </div>
                    <?php if($apply->person->position_is_want != null): ?>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputName1">What position do you work at</label>
                                <input type="text" class="form-control" id="exampleInputName1"
                                    value="<?php echo e($apply->person->position_is_want); ?>" disabled />
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($apply->person->sector_is_want != null): ?>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputName1">What sector do you work at</label>
                                <input type="text" class="form-control" id="exampleInputName1"
                                    value="<?php echo e($apply->person->sector_is_want); ?>" disabled />
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Gender</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->gender); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Martial Status</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->martial_status); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Military Service</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->military_service); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Driving License</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="<?php echo e($apply->person->driving_license); ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Do you want to work external</label>
                            <input type="text" class="form-control" id="exampleInputName1" value="<?php if($apply->person->external): ?> Yes <?php else: ?> No <?php endif; ?>" disabled />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Do you work at the moment</label>
                            <input type="text" class="form-control" id="exampleInputName1" value="<?php if($apply->person->is_working): ?> Yes <?php else: ?> No <?php endif; ?>" disabled />
                        </div>
                    </div>
                </div>
                <?php if($apply->person->educations->count() != 0): ?>
                    <h4 class="card-title">Educations</h4>
                    <div class="row">
                        <?php $__currentLoopData = $apply->person->educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">School</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="<?php echo e($education->school); ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Graduate Year</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="<?php echo e($education->graduate); ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Speciality</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="<?php echo e($education->speciality); ?>" disabled />
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <?php if($apply->person->knowledges->count() != 0): ?>
                    <h4 class="card-title">Knowledges</h4>
                    <div class="row">
                        <?php $__currentLoopData = $apply->person->knowledges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $knowledge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Computer Operator</label>
                                    <textarea type="text" class="form-control" id="exampleInputName1"
                                        disabled><?php echo e($knowledge->comp_operator); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Computer Graphics</label>
                                    <textarea type="text" class="form-control" id="exampleInputName1"
                                        disabled><?php echo e($knowledge->comp_graphic); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Computer Programming</label>
                                    <textarea type="text" class="form-control" id="exampleInputName1"
                                        disabled><?php echo e($knowledge->comp_programming); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Technical Knowledge</label>
                                    <textarea type="text" class="form-control" id="exampleInputName1"
                                        disabled><?php echo e($knowledge->technical); ?></textarea>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <?php if($apply->person->languages->count() != 0): ?>
                    <h4 class="card-title">Languages</h4>
                    <div class="row">
                        <?php $__currentLoopData = $apply->person->languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Language</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="<?php echo e($language->name); ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Writing</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="<?php echo e($language->writing); ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Reading</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="<?php echo e($language->reading); ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Speaking</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="<?php echo e($language->speaking); ?>" disabled />
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <?php if($apply->person->experiences->count() != 0): ?>
                    <h4 class="card-title">Experiences</h4>
                    <div class="row">
                        <?php $__currentLoopData = $apply->person->experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Company</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="<?php echo e($experience->company); ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Position</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="<?php echo e($experience->position); ?>" disabled />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Duration</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="<?php echo e($experience->duration); ?>" disabled />
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <a class="btn btn-danger" href="/admin-user/apply/delete/<?php echo e($apply->id); ?>">Delete</a>
                <a class="btn btn-light" href="/admin-user/apply">Cancel</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nant\resources\views/admin/applies/detail.blade.php ENDPATH**/ ?>