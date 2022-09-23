 <option value="">---Select City---</option>
<?php if(isset($states)): ?>
<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option value="<?php echo e($state->id); ?>"><?php echo e($state->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/admin/master/city/option.blade.php ENDPATH**/ ?>