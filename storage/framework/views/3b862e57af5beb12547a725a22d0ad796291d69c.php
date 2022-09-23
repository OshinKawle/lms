 <!--JoinUs Popup Start-->
    <div id="joinus_popup" class="modal">
        <div class="modal-dialog">
            <div class="modal-content" style="border-color: black;">
                <div class="modal-header" style="border: none;">
                    <span id="joinus_close" class="close">&times;</span>
                </div>
                <form class="form-signin">
                    <h3 style="color: #2660b1; padding-bottom: 20px" class="row d-flex justify-content-center">
                        JOIN US
                    </h3>
                    <br />
                    <h3 style="color: #2660b1; padding-bottom: 20px; text-align: center;"
                        class="row d-flex justify-content-center">
                        AS A SERVICES PARTNER
                        AND EARN UNLIMITED
                    </h3>

                    <label>First name<span class="text-danger"> *</span></label>
                    <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter your first name"
                        required>
                    <br />

                    <label>Last name<span class="text-danger"> *</span></label>
                    <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter your last name"
                        required>
                    <br />

                    <label>Email ID<span class="text-danger"> *</span></label>
                    <input class="form-control" type="email" placeholder="Enter your Email address" required />
                    <br />

                    <label>Phone Number<span class="text-danger">
                            *</span></label>
                    <input class="form-control" type="tel" placeholder="Enter your Phone Number" required />
                    <br />

                    <label>Service Title<span class="text-danger">
                            *</span></label>
                    <input class="form-control" type="text" placeholder="AC Technician" required />
                    <br />

                    <label>You want to Join us as ?<span class="text-danger">
                            *</span></label>
                    <br />
                    <textarea id="ans" name="ans" placeholder="About Your Service" required
                        style="width: 100%;height: 100px;"></textarea>
                    <br /> <br />

                    <button type="submit" class="btn btn-lg btn-outline-primary form-control">REGISTER</button>

                    <h6 class="row justify-content-center py-5 mx-2">Do you have an Account? <span
                            onclick="ShowLogin();" style="color: #2660b1; margin-left: 5px; cursor: pointer;">
                            Login</span>
                    </h6>
                </form>
            </div>
        </div>
    </div>
    <!--JoinUs Popup End--><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/frontend/include/joinus_popup.blade.php ENDPATH**/ ?>