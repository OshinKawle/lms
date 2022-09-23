 <div class="services" id="services"
            style="background-Image: url(<?php echo e(url('frontend/Image/service/service-icon-bg.png')); ?>);background-size: cover;background-repeat: no-repeat;">
    <div class="container services_container">
        <strong>
            <h1><span style="color: #084ba9">Our</span> Services</h1>
        </strong>
        <div class="row d-flex justify-content-center servicespd">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$servicess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-2 col-sm-12 services-item"
                    style="background-Image: url(<?php echo e(url('frontend/Image/service/service-bg-05.png')); ?>)"; background-repeat: no-repeat; background-size: cover">
                    <img src="<?php echo e(url($servicess->image)); ?>" class="img-fluid py-4">
                    <strong>
                        <?php 
                         $name = explode(" ",$servicess->name);
                        ?>
                        <?php if(count($name)>1): ?>
                        <p style="font-size: 20px;"><?php echo e($name[0]); ?><br><?php echo e($name[1]); ?></p>
                        <?php else: ?>
                         <p style="font-size: 20px;"><?php echo e($servicess->name); ?></p>
                        <?php endif; ?>
                       
                    </strong>
                    <p><?php echo e($servicess->description); ?></p>
                     <?php if(Auth::user()): ?>
                        <a href="<?php echo e(url('booking')); ?>"  class="btn btn-outline-primary btn-btn3 mt-4"> BOOK
                        NOW</a>
                    <?php else: ?>
                     <a href="#"  class="btn btn-outline-primary btn-btn3 mt-4" onclick="ShowLogin();"> BOOK
                        NOW</a>
                    <?php endif; ?>
                    
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH /home/profglobal/public_html/demoafficity/resources/views/frontend/home/services.blade.php ENDPATH**/ ?>