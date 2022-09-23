  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <a class="navbar-brand"><img src="<?php echo e(url('frontend/Image/AFFIXCITYLOGO.png')); ?>" class=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-left: auto; flex-flow: wrap;">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/#home')); ?>">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/#services')); ?>">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/#whychoose')); ?>">WHY CHOOSE US</a>
            </li>
            <li class="nav-item">
            <li><a class="nav-link" href="<?php echo e(url('/#contactus')); ?>">CONTACT US</a>
            </li>
            <li class="nav-item">
                <button type="button" onclick="ShowJoinUs();" class="btn btn-outline-primary btn-btn1">JOIN
                    US</button>
            </li>
            <li class="nav-item">
                <button type="button" onclick="ShowLogin();"
                    class="btn btn-primary btn-btn1">LOGIN/SIGNUP</button>
            </li>
        </ul>
    </div>
</nav><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/frontend/include/header.blade.php ENDPATH**/ ?>