 <!--Map Popup Start-->
    <div id="datetime_popup" class="modal">
        <div class="modal-dialog">
            <div class="modal-content" style="border-color: black;">
                <div class="modal-header" style="border: none;">
                    <span id="map_close" class="close">&times;</span>
                </div>
                <form class="form-signin" style="max-width: 900px;">
                    <h3 style="text-align: center;">Address Details</h3>
                    <p style="text-align: center; font-weight: bold;"><span id="NewAddress"
                            style="text-align: center; "></span></p>
                        <label for="inputEmail" class="sr-only">Enter Name</label>
                        <input type="text" id="name" class="form-control input-mandatory" 
                            autofocus="" placeholder="Enter Name" required value="">
                            <br>
                            <label for="inputEmail" class="sr-only">House/Flat/Block no.</label>
                        <input type="text" id="house" class="form-control input-mandatory" placeholder="House/Flat/Block no."
                            autofocus="" required value="">
                            <br>
                            <label for="inputEmail" class="sr-only">Appartment/Road/Area</label>
                        <input type="text" id="apart" class="form-control input-mandatory" placeholder="Appartment/Road/Area" 
                            autofocus="" required value="">
                            <br>
                            <label for="inputEmail" class="sr-only">Direction To Road</label>
                        <input type="text" id="direction" class="form-control input-mandatory" placeholder="Direction To Road" 
                            autofocus="" value="">
                           
                            <br>
                    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="ProcedTocheck();"
                        style="border-radius:5rem; margin-top: 15px;">Proced</button>
                </form>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        function ProcedTocheck(){
            var name = $('#name').val();
            var house = $('#house').val();
            var apart = $('#apart').val();
            var direction = $('#direction').val();
            if((name == '' )|| (house == '' ) || (apart == '' )){
              swal('Please Enter mandatory field')
            }else{
                $('#name_address').val(name);
                $('#house_address').val(house);
                $('#apart_address').val(apart);
                $('#direction_address').val(direction);
      document.getElementById("datetime_popup").datetime_popup.style.display = "none";
                 ;
            }
            
        }
    </script><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/frontend/booking/datetime_popup.blade.php ENDPATH**/ ?>