<script type="text/javascript">
	/*Start ajax Country Wise State*/
    function getState(country){
        let country_id  = country.value;
         // console.log(store_id);
        $.ajax({
            url: ' <?php echo e(url('master/country-wise-state')); ?>',
            method: "GET",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                "country_id": country_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#city_id').empty(); 
                
                $('#state_id').empty(); 
                $('#state_id').append(data);
                
            }
        })   
      
    }
    /*End ajax Country Wise State */

        /*Start ajax State Wise City*/
    function getCity(state){
        let state_id  = state.value;
        $.ajax({
            url: ' <?php echo e(url('master/state-wise-city')); ?>',
            method: "GET",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                "state_id": state_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#city_id').empty(); 
                $('#city_id').append(data);
                
            }
        })   
      
    }
    /*End ajax Country Wise State */
</script><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/admin/master/pincode/js.blade.php ENDPATH**/ ?>