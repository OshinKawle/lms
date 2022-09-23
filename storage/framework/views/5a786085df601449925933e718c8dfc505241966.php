 <option value="">---Select Service List---</option>
<?php if(isset($services)): ?>
<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <option value="<?php echo e($state->id); ?>"><?php echo e(isset($state->appliedFor) ? $state->appliedFor->name : ''); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/admin/service/list/option.blade.php ENDPATH**/ ?>