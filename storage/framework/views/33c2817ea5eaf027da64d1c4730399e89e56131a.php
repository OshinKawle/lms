<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
 /* z-index: 1;*/ /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes  zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 22%;
  right: 22%;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media  only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<script type="text/javascript">

    // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
$(".img-fluid").click(function(){
   modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}

$("#id_f_image").change(function() {
  readURlIdFImage(this);
});

function readURlIdFImage(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#id_prof_f_img').attr('src', e.target.result);
      $("#id_prof_f_img").css("display", "block");
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}


$("#id_b_image").change(function() {
  readURlIdBImage(this);
});

function readURlIdBImage(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#id_prof_b_img').attr('src', e.target.result);
      $("#id_prof_b_img").css("display", "block");
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}


$("#address_f_image").change(function() {
  readURlAddresFImage(this);
});

function readURlAddresFImage(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#address_prof_f_img').attr('src', e.target.result);
      $("#address_prof_f_img").css("display", "block");
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}


$("#address_b_image").change(function() {
  readURlAddresBImage(this);
});

function readURlAddresBImage(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#address_prof_b_img').attr('src', e.target.result);
      $("#address_prof_b_img").css("display", "block");
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}


$("#applicatimage").change(function() {
  readURlApplicantImage(this);
});

function readURlApplicantImage(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#applicant_image').attr('src', e.target.result);
      $("#applicant_image").css("display", "block");
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}


</script>


  <script type="text/javascript">
  /*Start ajax Country Wise State*/
    function getPincode(pincode){
        let pimcode_id  = pincode.value;
         // console.log(store_id);
        $.ajax({
            url: ' <?php echo e(url('master/pincode-wise-city')); ?>',
            method: "GET",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                "pimcode_id": pimcode_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#state_id').val(data.state);
                $('#city_id').val(data.city);
                
            }
        })   
      
    }
    /*End ajax Country Wise State */
</script>


<?php /**PATH F:\xampp\htdocs\affixcity\resources\views/admin/partner/registrtaion/js.blade.php ENDPATH**/ ?>