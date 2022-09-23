 <!--Login Popup Start-->
    <div id="login_popup" class="modal">
        <div class="modal-dialog">

            <div class="modal-content" style="border-color: black;">
                <div class="modal-header" style="border: none;">
                    <span id="login_close" class="close">&times;</span>
                </div>

                <form class="form-signin">
                    <img src="<?php echo e(url('frontend/Image/AFFIXCITYLOGO.png')); ?>" class="mb-4" alt="" width="90" height="80" ;
                        style="margin-left: 6.5rem;">
                    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required=""
                        autofocus="">
                    <br />

                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                    <br />

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="forgot text-muted" href="#" style="text-decoration: none;">Forgot password?</a>
                            <br><br>
                            <span style="text-align: center;">
                                <p class="forgot text-muted">-Or Sign up with-</p>
                            </span>
                        </label>
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <ion-icon name="logo-facebook"></ion-icon>

                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                            <li><a href="#" class="icoinsta" title="google"><i class="fab fa-google"></i></a></li>
                            <i class="fab fa-google-square"></i>
                        </ul>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" style="border-radius:5rem;">Sign
                        in</button>
                </form>

            </div>

        </div>
    </div>
    <!--Login Popup End--><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/frontend/include/login_popup.blade.php ENDPATH**/ ?>