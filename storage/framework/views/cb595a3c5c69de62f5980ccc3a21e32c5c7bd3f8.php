<div class="container-fluid" id="contactus">
            <div class="container contact" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-lg-7 Contact-us">
                        <h1><span style="color: #084ba9">Contact </span>Us</h1>
                        <div class="card">
                            <div class="card-body" style="background: transparent;">
                                <form method="post" action="<?php echo e(url('/contactus')); ?>"   class="addsstatus" autocomplete="off" enctype="multipart/form-data">
                                 <?php echo csrf_field(); ?>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input id="ContactName" placeholder="Full Name" class="form-control" type="text" name="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" name="email" class="form-control" id="ContactEmail"
                                                placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input name="phone" id="ContactMobile" placeholder="Mobile No." class="form-control"
                                                pattern="[0-9]+" required="required" type="tel"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                                        </div>
                                        <div class="form-group col-md-6">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea id="ContactComment" cols="40" rows="5" placeholder="Your Message"
                                                class="form-control" name="message"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <button type="submit" class="btn btn-primary"
                                            style="border-radius: 2rem;">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-5 Contact-info">
                        <div class="address">
                            <img src="<?php echo e(url('frontend/Image/mail icon.png')); ?>" style="height: 4rem; margin-left:2rem;">
                            <h5 style="margin-left: 2rem;">Contact</h5>
                            <ul class="list-unstyled">
                                <li> T-Mobile Customer Relations</li>
                                <li> PO Box 37380</li>
                                <li> Albuquerque, NM 87176-7380</li>
                            </ul>

                        </div>
                        <div class="email">
                            <h5 style="margin-left: 2rem;">Email:</h5>
                            <ul class="list-unstyled">
                                <li> info@email.com</li>
                                <li> info@email.com</li>
                            </ul>
                        </div>
                        <div class="phone">
                            <h5 style="margin-left: 2rem;">Customer Care</h5>
                            <ul class="list-unstyled">
                                <li> +91- 8800XXXXXX34</li>
                                <li> +91- 8800XXXXXX34</li>
                            </ul>
                        </div>
                        <hr style="border-style: none;">
                        <div class="social" style="color: #5a5a5a;">
                            <ul class="social-network social-circle">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#" class="icoinsta" title="instagram"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/frontend/home/contact.blade.php ENDPATH**/ ?>