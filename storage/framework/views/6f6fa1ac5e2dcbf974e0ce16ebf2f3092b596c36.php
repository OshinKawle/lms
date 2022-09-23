<div id="home" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <li data-target="#home" data-slide-to="<?php echo e($key); ?>" class="<?php echo e($key==0 ? 'active' : ''); ?>"></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </ol>
    <div class="carousel-inner">
        <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <div class="carousel-item <?php echo e($key==0 ? 'active' :''); ?>">
                <div class="text-left carousel-caption">
                    <h1>AFFIXCITY</h1>
                    <h2>The Service Your Trust</h2>
                    <p>Get Service at your doorstep on your budget</p>
                </div>
                <img class="d-block w-100" src="<?php echo e(url($banners->image)); ?>" alt="First slide">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <a class="carousel-control-prev" href="#home" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#home" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><?php /**PATH /home/profglobal/public_html/demoafficity/resources/views/frontend/home/banner.blade.php ENDPATH**/ ?>