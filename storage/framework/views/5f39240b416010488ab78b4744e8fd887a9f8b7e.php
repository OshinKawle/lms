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
            <img src="<?php echo e(asset('img/Sidebar-Logo.png')); ?>" style="width: 70%;" alt="logo icon">
        </div>
        <div>
            
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
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
           <!--  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['role-list','user-list'])): ?>
                <li data-bs-toggle="collapse" data-bs-target="#team" role="button" aria-expanded="false" aria-controls="team">
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='lni lni-network'></i></div>
                        <div class="menu-title">Affixcity Team</div>
                    </a>
                </li>
                <ul class="collapse" id="team">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>   
                        <li class="list"> 
                            <a href="<?php echo e(url('/team/roles')); ?>"><i class="bx bx-right-arrow-alt"></i>Roles &amp; Permission</a>
                         </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>     
                        <li> 
                            <a href="<?php echo e(url('/team/users')); ?>"><i class="bx bx-right-arrow-alt"></i>Users</a>
                        </li>  
                    <?php endif; ?>            
                </ul>
            <?php endif; ?> -->
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['country-list','state-list','city-list','pincode-list','address-prof-list','id-prof-list','applied-for-list','shirtType-list','banner-list','booking-status-list','payment-status-list'])): ?>
             <li data-bs-toggle="collapse" data-bs-target="#user" role="button" aria-expanded="false" aria-controls="user">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-user-pin' ></i>
                    </div>
                    <div class="menu-title">Master</div>
                </a>
            </li> 
             <ul class="collapse" id="user">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('booking-status-list')): ?> 
                    <li> 
                        <a href="<?php echo e(url('master/bookingStatus')); ?>">
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
                <li data-bs-toggle="collapse" data-bs-target="#Customer" role="button" aria-expanded="false" aria-controls="Customer">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-network'></i></div>
                    <div class="menu-title">Customer</div>
                </a>
                </li>
                <ul class="collapse" id="Customer">  
                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('partner-registration-list')): ?>
                        <li> 
                            <a href="<?php echo e(url('customer/joinUsEnquiry')); ?>"><i class="bx bx-right-arrow-alt"></i>Join Enquiry</a>
                        </li> 
                        <li> 
                            <a href="<?php echo e(url('customer/contact')); ?>"><i class="bx bx-right-arrow-alt"></i>Contact Us</a>
                        </li>  
                           
                        <?php endif; ?>            
                </ul>
                <?php endif; ?> 
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['role-list','user-list'])): ?>
                <li data-bs-toggle="collapse" data-bs-target="#service" role="button" aria-expanded="false" aria-controls="service">
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='lni lni-network'></i></div>
                        <div class="menu-title">Service</div>
                    </a>
                </li>
                <ul class="collapse" id="service">
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
                <li data-bs-toggle="collapse" data-bs-target="#partner" role="button" aria-expanded="false" aria-controls="partner">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-network'></i></div>
                    <div class="menu-title">Partner</div>
                </a>
                </li>
                <ul class="collapse" id="partner">  
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
                <li data-bs-toggle="collapse" data-bs-target="#Technican" role="button" aria-expanded="false" aria-controls="Technican">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-network'></i></div>
                    <div class="menu-title">Technican</div>
                </a>
                </li>
                <ul class="collapse" id="Technican">  
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
                           
                        <?php endif; ?>            
                </ul>
                <?php endif; ?> 

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['partner-registration-list'])): ?>
                <li data-bs-toggle="collapse" data-bs-target="#Booking" role="button" aria-expanded="false" aria-controls="Booking">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-network'></i></div>
                    <div class="menu-title">Booking</div>
                </a>
                </li>
                <ul class="collapse" id="Booking">  
                       <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('partner-registration-list')): ?>
                        <li> 
                            <a href="<?php echo e(url('bookings/list')); ?>"><i class="bx bx-right-arrow-alt"></i>Booking</a>
                        </li>  
                           
                        <?php endif; ?>            
                </ul>
                <?php endif; ?>   
        </ul>
</div>



<?php /**PATH /home/profglobal/public_html/demoafficity/resources/views/include/sidebar.blade.php ENDPATH**/ ?>