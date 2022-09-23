<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="top-menu ms-auto">   
            </div>
            <div class="user-box dropdown border-light-2">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-info ps-3">
                       <p class="user-name mb-0"><?php echo e(Auth::user()->name); ?></p> 
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li>
                         <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="ik ik-power dropdown-icon"></i> 
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header><?php /**PATH /home/profglobal/public_html/demoafficity/resources/views/include/header.blade.php ENDPATH**/ ?>