<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <!--plugins-->
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <!--app JS-->
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script src="<?php echo e(asset('js/formValidation.js')); ?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  
<script src="<?php echo e(asset('plugins/select2/dist/js/select2.min.js')); ?>"></script>
      <script src="<?php echo e(asset('frontend/js/innerpage.js')); ?>"></script>
    <script>
        $(".topbar").addClass('topbar d-flex align-items-center bg-dark shadow-none border-light-2 border-bottom');
        $(".nav-link").addClass('text-white');
        $(".user-name").addClass('text-white');
    </script>

  
    <script>
        $("html").attr("class","color-sidebar sidebarcolor3 color-header headercolor1");
    </script>

    <?php echo toastr_js(); ?>
<?php echo app('toastr')->render(); ?>
    <script type="text/javascript">
            $(document).ready(function() {
    $('.select2').select2({
        width: '100%'
     });
  $('.selectmultiple2').select2({
        placeholder: {
            id: '-1', 
            text: 'Select Service List'
          },
        width: '100%'
     });

   $('.selectmultiple3').select2({
        placeholder: {
            id: '-1', 
            text: 'Select Applied For'
          },
        width: '100%'
     });
        
});

    </script>
      
     <script type="text/javascript">
        $(function() {
    $("#dob").datepicker({
    onSelect: function(value, ui) {
        var today = new Date(),
            age = today.getFullYear() - ui.selectedYear;
        $('#age').val(age);
    },
       
    dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
    });
      
});
     </script>

    <?php echo $__env->make("include.theme-control", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/include/script.blade.php ENDPATH**/ ?>