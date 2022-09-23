 
<?php $__env->startSection("wrapper"); ?>
 <div class="container-fluid popup">
            <div class="innerpopup container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                        <div class="service-content-left" id="div_left"
                            style="background-image: url(<?php echo e(url('frontend/Image/service/service-bg-02.png')); ?>);">
                            <div class="service-pattern">
                                <img src="<?php echo e(url('frontend/Image/service/service-pattern.png')); ?>" alt="">
                            </div>
                            <div class="single-service-title">
                                <h3><span style="color: #4285F4"><strong
                                            id="InnerServiceTitle1">Home</strong></span>&nbsp;<strong
                                        id="InnerServiceTitle2">Appliances</strong></h3>
                                <form action="#">
                                    <div id="radio_wrapper"></div>
                                    <div id="select_wrapper"></div>

                                    <div class="row" id="UnitInputDiv" style="display: none; margin-right: 20px;">
                                        <label for="service_unit" class="col-lg-6" style="font-weight: bold;">Number of
                                            AC:</label>
                                        <input class="form-control col-lg-6" type="number" value="1" id="service_unit"
                                            min="1" name="service_unit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                        <div class="service-content-right">
                            <h3><span style="margin-left: 7%"><strong>Booking</strong></span><strong> Details</strong>
                            </h3>
                            <br />
                            <ul>
                                <li>
                                    <p>Address <span id="ServiceAddress" style="margin-left: 5%"></span></p>
                                </li>
                                <li>
                                    <h6>Service <span id="ServiceSelected" style="margin-left: 6%"></span></h6>
                                </li><br />
                                <li>
                                    <h6>Date <span id="ServiceDate" style="margin-left: 10%"></span></h6>
                                </li><br />
                                <li>
                                    <h6>Time <span id="ServiceTime" style="margin-left: 10%"></spx an>
                                    </h6>
                                </li><br />
                                <div id="UnitDetailDiv" style="display: none;">
                                    <li>
                                        <h6>N<span style="text-decoration: none;">o</span> Of AC <span id="ServiceUnit"
                                                style="margin-left: 6%"></span></h6>
                                    </li>
                                </div>
                                <br />
                                <li>
                                    <h6>Total <span id="ServiceAmount" style="margin-left: 9%"></span></h6>
                                </li>
                                <a id="btnPay" disabled>Pay</a>
                            </ul>
                        </div>
                    </div>

                </div>
                <p id="service_note" style="display: none; color: black;font-size: 18px;font-weight: bold;">Note :
                    Reflected Price are only for our
                    technician's (Partner's) visit charges with basic service.
                </p>
            </div>
        </div>
    <?php echo $__env->make('frontend.booking.map_popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("script"); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/frontend/booking/index.blade.php ENDPATH**/ ?>