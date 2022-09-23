<script type="text/javascript">
	/*Start ajax Country Wise State*/
    function getServiceList(service){
        let service_id  = service.value;
         // console.log(store_id);
        $.ajax({
            url: ' <?php echo e(url('service/service-wise-serviselist')); ?>',
            method: "GET",
            data: {
                "_token": "<?php echo e(csrf_token()); ?>",
                "service_id": service_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#service_list_id').empty(); 
                $('#service_list_id').append(data);
                
            }
        })   
      
    }
    /*End ajax Country Wise State */
</script><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/admin/service/type/js.blade.php ENDPATH**/ ?>