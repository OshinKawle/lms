<style>
.active{
    color: #8833ff;
}
</style> 
   <?php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);

    ?>
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div style="text-align: center;">
            <img src="<?php echo e(asset('img/AFFIXCITY-LOGO-PNG.png')); ?>" style="width:40px;" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text ms-4">Affixcity</h4>
        </div>
        <div>
            
        </div>
        
    </div>
        <ul class="metismenu" id="menu">
            <li>
                <a href="<?php echo e(url('/home')); ?>">
                    <div class="parent-icon">
                        <i class='bx bx-home'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['role-list','user-list'])): ?>
                <li data-bs-toggle="collapse" data-bs-target="#team" role="button" aria-expanded="false" aria-controls="team" class="<?php echo e(isset($segment1) ? ($segment1=='team' ? 'spendclose mm-active' : 'withoutclick') : 'withoutclick'); ?> " >
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='lni lni-network'></i></div>
                        <div class="menu-title">Affixcity Team</div>
                    </a>
                </li>
                <ul class=" <?php echo e(isset($segment1) ? ($segment1=='team' ? 'gk mm-show mm-collapse' : 'withoutclick1 collapse') : 'withoutclick1 collapse'); ?> " id="team">
                  <!--   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>   
                        <li class="list"> 
                            <a href="<?php echo e(url('/team/roles')); ?>"><i class="bx bx-right-arrow-alt"></i>Roles &amp; Permission</a>
                         </li>
                    <?php endif; ?> -->
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>     
                        <li> 
                            <a href="<?php echo e(url('/team/users')); ?>"><i class="bx bx-right-arrow-alt"></i>Users</a>
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

                    <?php endif; ?>            
                </ul>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['country-list','state-list','city-list','pincode-list','address-prof-list','id-prof-list','applied-for-list','shirtType-list','banner-list','booking-status-list','payment-status-list'])): ?>
             <li data-bs-toggle="collapse" data-bs-target="#user" role="button" aria-expanded="false" aria-controls="user" class="<?php echo e(isset($segment1) ? ($segment1=='master' ? 'spendclose mm-active' : 'withoutclick') : 'withoutclick'); ?> " >
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-user-pin' ></i>
                    </div>
                    <div class="menu-title">Master</div>
                </a>
            </li> 
             <ul class=" <?php echo e(isset($segment1) ? ($segment1=='master' ? 'gk mm-show mm-collapse' : 'withoutclick1 collapse') : 'withoutclick1 collapse'); ?>" id="user">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('booking-status-list')): ?> 
                    <li class=""> 
                        <a href="<?php echo e(url('master/bookingStatus')); ?>" >
                            <i class="bx bx-right-arrow-alt"></i>
                            Booking Status  List
                        </a>
                    </li>
                <?php endif; ?>
                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('booking-status-list')): ?> 
                    <li> 
                        <a href="<?php echo e(url('master/application/1/edit')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            Application Setting  
                        </a>
                    </li>
                <?php endif; ?>
                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payment-status-list')): ?> 
                    <li> 
                        <a href="<?php echo e(url('master/paymentStatus')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            Payment Status  List
                        </a>
                    </li>
                <?php endif; ?>

                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('banner-list')): ?> 
                    <li> 
                        <a href="<?php echo e(url('master/banner')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            Banner  List
                        </a>
                    </li>
                <?php endif; ?>
                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('shirtType-list')): ?> 
                    <li> 
                        <a href="<?php echo e(url('master/shirtType')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            Shirt Type  List
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country-list')): ?> 
                    <li> 
                        <a href="<?php echo e(url('master/country')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            Country  List
                        </a>
                    </li>
                <?php endif; ?>
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('state-list')): ?> 
                     <li> 
                        <a href="<?php echo e(url('master/state')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            State  List
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('city-list')): ?> 
                     <li> 
                        <a href="<?php echo e(url('master/city')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            City  List
                        </a>
                    </li>
                    <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pincode-list')): ?> 
                     <li> 
                        <a href="<?php echo e(url('master/pimcode')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            Pin Code  List
                        </a>
                    </li>
                    <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('address-prof-list')): ?> 
                     <li> 
                        <a href="<?php echo e(url('master/addressProofType')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            Address Prof Type List
                        </a>
                    </li>
                    <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('id-prof-list')): ?> 
                     <li> 
                        <a href="<?php echo e(url('master/idProfType')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            Id Prof Type  List
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('applied-for-list')): ?> 
                     <li> 
                        <a href="<?php echo e(url('master/appliedFor')); ?>">
                            <i class="bx bx-right-arrow-alt"></i>
                            Applied For  List
                        </a>
                    </li>
                <?php endif; ?> 
                </ul>   
                 <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['partner-registration-list'])): ?>
                <li data-bs-toggle="collapse" data-bs-target="#Customer" role="button" aria-expanded="false" aria-controls="Customer" class="<?php echo e(isset($segment1) ? ($segment1=='customer' ? 'spendclose mm-active' : 'withoutclick') : 'withoutclick'); ?> ">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-customer'></i></div>
                    <div class="menu-title">Customer &nbsp; </div>  
                     <?php if(checkAlret()): ?>
                    <span class="notification-dot"><?php echo e(checkAlret()); ?></span> 
                    <?php endif; ?>
                </a> 
                </li>
                <ul class=" <?php echo e(isset($segment1) ? ($segment1=='customer' ? 'gk mm-show mm-collapse' : 'withoutclick1 collapse') : 'withoutclick1 collapse'); ?>" id="Customer">  
                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('partner-registration-list')): ?>
                        <li> 
                            <a href="<?php echo e(url('customer/joinUsEnquiry')); ?>"><i class="bx bx-right-arrow-alt"></i>Join Enquiry &nbsp; <?php if(checkJoinUsAlret()): ?>
                    <span class="notification-dot">  <?php echo e(checkJoinUsAlret()); ?></span> 
                    <?php endif; ?></a> 
                        </li> 
                        <li> 
                            <a href="<?php echo e(url('customer/contact')); ?>"><i class="bx bx-right-arrow-alt"></i>Contact Us   &nbsp; <?php if(checkContactAlret()): ?>
                    <span class="notification-dot"><?php echo e(checkContactAlret()); ?></span> 
                    <?php endif; ?></a>
                          
                        </li>  
                           
                        <?php endif; ?>            
                </ul>
                <?php endif; ?> 
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['role-list','user-list'])): ?>
                <li data-bs-toggle="collapse" data-bs-target="#service" role="button" aria-expanded="false" aria-controls="service"  class="<?php echo e(isset($segment1) ? ($segment1=='service' ? 'spendclose mm-active' : 'withoutclick') : 'withoutclick'); ?> ">
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='lni lni-service'></i></div>
                        <div class="menu-title">Service</div>
                    </a>
                </li>
                <ul class=" <?php echo e(isset($segment1) ? ($segment1=='service' ? 'gk mm-show mm-collapse' : 'withoutclick1 collapse') : 'withoutclick1 collapse'); ?>" id="service">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>   
                        <li class="list"> 
                            <a href="<?php echo e(url('service/lists')); ?>"><i class="bx bx-right-arrow-alt"></i>Service List</a>
                         </li>
                    <?php endif; ?>
                     <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>   
                        <li class="list"> 
                            <a href="<?php echo e(url('service/type')); ?>"><i class="bx bx-right-arrow-alt"></i>Service Type</a>
                         </li>
                    <?php endif; ?>
                            
                </ul>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['partner-registration-list'])): ?>
                <li data-bs-toggle="collapse" data-bs-target="#partner" role="button" aria-expanded="false" aria-controls="partner" class="<?php echo e(isset($segment1) ? ($segment1=='partner' ? 'spendclose mm-active' : 'withoutclick') : 'withoutclick'); ?> ">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-handshake'></i></div>
                    <div class="menu-title">Partner</div>
                </a>
                </li>
                <ul class=" <?php echo e(isset($segment1) ? ($segment1=='partner' ? 'gk mm-show mm-collapse' : 'withoutclick1 collapse') : 'withoutclick1 collapse'); ?>"  id="partner">  
                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('partner-registration-list')): ?>
                        <li> 
                            <a href="<?php echo e(url('/partner/registration')); ?>"><i class="bx bx-right-arrow-alt"></i>Registration</a>
                        </li>  
                         <li> 
                            <a href="<?php echo e(url('/partner/registration-verify')); ?>"><i class="bx bx-right-arrow-alt"></i>Registration Verify</a>
                        </li>  
                        <?php endif; ?>            
                </ul>
                <?php endif; ?>   
                
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['partner-registration-list'])): ?>
                <li data-bs-toggle="collapse" data-bs-target="#Technican" role="button" aria-expanded="false" aria-controls="Technican" class="<?php echo e(isset($segment1) ? ($segment1=='technican' ? 'spendclose mm-active' : 'withoutclick') : 'withoutclick'); ?> ">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-bridge'></i></div>
                    <div class="menu-title">Technican</div>
                </a>
                </li>
                <ul class=" <?php echo e(isset($segment1) ? ($segment1=='technican' ? 'gk mm-show mm-collapse' : 'withoutclick1 collapse') : 'withoutclick1 collapse'); ?>"  id="Technican">  
                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('partner-registration-list')): ?>
                        <li> 
                            <a href="<?php echo e(url('technican/lists')); ?>"><i class="bx bx-right-arrow-alt"></i>List</a>
                        </li> 
                        <li> 
                            <a href="<?php echo e(url('technican/wallet')); ?>"><i class="bx bx-right-arrow-alt"></i>Wallet</a>
                        </li>

                         <li> 
                            <a href="<?php echo e(url('technican/attandance')); ?>"><i class="bx bx-right-arrow-alt"></i>Attandance</a>
                        </li> 

                         <li> 
                            <a href="<?php echo e(url('technican/income')); ?>"><i class="bx bx-right-arrow-alt"></i>Income</a>
                        </li> 
                         <li> 
                            <a href="<?php echo e(url('technican/income-history')); ?>"><i class="bx bx-right-arrow-alt"></i>Income History</a>
                        </li> 
                           
                        <?php endif; ?>            
                </ul>
                <?php endif; ?> 

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['partner-registration-list'])): ?>
                <li data-bs-toggle="collapse" data-bs-target="#Booking" role="button" aria-expanded="false" aria-controls="Booking" class="<?php echo e(isset($segment1) ? ($segment1=='bookings' ? 'spendclose mm-active' : 'withoutclick') : 'withoutclick'); ?> ">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-shopping-bag'></i></div>
                    <div class="menu-title">Booking</div>
                </a>
                </li>
                <ul class=" <?php echo e(isset($segment1) ? ($segment1=='bookings' ? 'gk mm-show mm-collapse' : 'withoutclick1 collapse') : 'withoutclick1 collapse'); ?>" id="Booking">  
                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('partner-registration-list')): ?>
                        <li> 
                            <a href="<?php echo e(url('bookings/list')); ?>"><i class="bx bx-right-arrow-alt"></i>Booking</a>
                        </li>  
                           
                        <?php endif; ?>            
                </ul>
                <?php endif; ?>   
        </ul>
</div>





<?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/include/sidebar.blade.php ENDPATH**/ ?>