<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <!--plugins-->
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
    <!--app JS-->
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    
<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <!--plugins-->
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <!--app JS-->
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script src="<?php echo e(asset('js/formValidation.js')); ?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
$(function() {
   $('input[name="search_daterange"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="search_daterange"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="search_daterange"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });
});
</script>

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


<script type="text/javascript">
 

   $(document).ready(function() {
    $('.spendclose').click(function () {
        $(this).closest('.spendclose').toggleClass('mm-active');
        $('.gk').toggleClass('mm-show');
        $('.gk').toggleClass('mm-collapse');
        $('.gk').toggleClass('show');
        $('.gk').toggleClass('main');
    });

$('.withoutclick').click(function () {
      $('.withoutclick1').toggleClass('show');
        $('.withoutclick1').toggleClass('main1');
    });
  
});



</script>
<style type="text/css">
    .main {
   display: none;
}
 .main1 {
   display: none;
}
 
</style>

    <?php echo $__env->make("include.theme-control", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\vesta\resources\views/include/script.blade.php ENDPATH**/ ?>