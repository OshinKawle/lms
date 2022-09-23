 <!--Login Popup Start-->

    <div id="login_popup" class="modal">
        <div class="modal-dialog">
           <div class="login_signup" id="login_signup">
            <div class="modal-content" style="border-color: black;">
                <div class="modal-header" style="border: none;">
                    <span id="login_close" class="close">&times;</span>
                </div>
               
                    <form method="post" action="<?php echo e(url('master/appliedFor')); ?>"  onsubmit="return validateForm('addsstatus')" class="addsstatus form-signin" autocomplete="off" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <img src="<?php echo e(url('frontend/Image/AFFIXCITYLOGO.png')); ?>" class="mb-4" alt="" width="90" height="80" ;
                            style="margin-left: 6.5rem;">
                        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;">Please sign in</h1>
                        <label for="inputEmail" class="sr-only">Mobile Number</label>
                        <input type="text" id="inputEmail" class="form-control input-mandatory" placeholder="Mobile Number" onblur="phoneFormat1(this, event);" onkeydown="phoneFormat(this, event);"
                            autofocus="" required>
                        <br />
                        <button class="btn btn-lg btn-primary btn-block" type="button" style="border-radius:5rem;" onclick="sendOtp()">Get otp
                </div>
            </div>

        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="<?php echo e(asset('js/formValidation.js')); ?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php echo toastr_js(); ?>
<?php echo app('toastr')->render(); ?>
<script type="text/javascript">
    function sendOtp(){
        let mobile = $("#inputEmail").val(); 
         if(mobile==''){
            swal('Please Enter mobile number');
         }else{

           $.ajax({ 
            type: 'POST', 
              url: ' <?php echo e(url('otp_send')); ?>', 
              data:  {
                "_token": "<?php echo e(csrf_token()); ?>",
                "mobile": mobile,
               }, 
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, 
              success: function (data) {
                swal('Successfully Send Otp');
                 $('#login_signup').empty(); 
                $('#login_signup').append(data);
                
              } 
            });  
      
        }
    }
</script><?php /**PATH /home/profglobal/public_html/demoafficity/resources/views/frontend/include/login_popup.blade.php ENDPATH**/ ?>