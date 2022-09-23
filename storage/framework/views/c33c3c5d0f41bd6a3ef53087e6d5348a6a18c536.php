<style type="text/css">
    .otp{
display: inline-flex;
margin:10% 0;
}
.otp input{
width: 50%;
height: 50%;
text-align: center;
}
</style>

<div class="modal-content" style="border-color: black;">
    <div class="modal-header" style="border: none;">
        <span id="login_close" class="close">&times;</span>
    </div>
               
    <form method="post" action="#"  onsubmit="return validateForm('addsstatus')" class="addsstatus digit-group form-signin" autocomplete="off" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <img src="<?php echo e(url('frontend/Image/AFFIXCITYLOGO.png')); ?>" class="mb-4" alt="" width="90" height="80" ;
            style="margin-left: 6.5rem;">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;">Please Verify OTP</h1>
        <div class="otp">
    <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />

    <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />

    <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
    <span class="splitter">&ndash;</span>

    <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />

    <input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />

    <input type="text" id="digit-6" name="digit-6" data-previous="digit-7" />
</div>
 <span>Second Remaining : <h1><span id="time"> </span></h1>
    </span>
        <button class="btn btn-lg btn-primary btn-block" type="button" style="border-radius:5rem;" onclick="otpVerify()">Verify</button>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function(){
    $('.digit-group').find('input').each(function() {
    $(this).attr('maxlength', 1);
    $(this).on('keyup', function(e) {
        var parent = $($(this).parent());
        
        if(e.keyCode === 8 || e.keyCode === 37) {
            var prev = parent.find('input#' + $(this).data('previous'));
            
            if(prev.length) {
                $(prev).select();
            }
        } else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
            var next = parent.find('input#' + $(this).data('next'));
            
            if(next.length) {
                $(next).select();
            } else {
                if(parent.data('autosubmit')) {
                    parent.submit();
                }
            }
        }
    });
});
    var counter = 120;
    var interval = setInterval(function() {
        counter--;
        // Display 'counter' wherever you want to display it.
        if (counter <= 0) {
                clearInterval(interval);
            $('#timer').html("<h3>Count down complete</h3>");  
            return;
        }else{
            $('#time').text(counter);
          // console.log("Seconds Remaining " + counter);
        }
    }, 1000);




    });

    function otpVerify(){
        let digit1 = $("#digit-1").val();
        let digit2 = $("#digit-2").val();
        let digit3 = $("#digit-3").val();
        let digit4 = $("#digit-4").val();
        let digit5 = $("#digit-5").val();
        let digit6 = $("#digit-6").val();
        let otp = digit1+''+digit2+''+digit3+''+digit4+''+digit5+digit6;
         $.ajax({ 
            type: 'POST', 
              url: ' <?php echo e(url('otp_verify')); ?>', 
              data:  {
                "_token": "<?php echo e(csrf_token()); ?>",
                "otp": otp,
               }, 
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, 
              success: function (data) {
        
                if(data=='ok'){
                    alert('Successfully Send Otp');
                    location.reload();
                  
                }else{
                    swal('otp Not Match')
                }
                
              } 
            }); 

    }
</script><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/frontend/include/otp.blade.php ENDPATH**/ ?>