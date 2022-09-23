 
 <!--Map Popup Start-->
    <div id="map_popup" class="modal">
        <div class="modal-dialog">
            <div class="modal-content" style="border-color: black;">
                <div class="modal-header" style="border: none;">
                    <span id="map_close" class="close">&times;</span>
                </div>
                <form class="form-signin" style="max-width: 900px;">
                    <h3 style="text-align: center;">Confirm your Location</h3>

                    <div id="map"></div>

                    <p style="text-align: center; font-weight: bold;">Address:- <span id="MapAddress"
                            style="text-align: center; "></span></p>
                    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="ConfirmLocation();"
                        style="border-radius:5rem; margin-top: 15px;">CONFIRM Location</button>
                </form>
            </div>
        </div>
    </div>
    <!--Map Popup End--><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/frontend/booking/map_popup.blade.php ENDPATH**/ ?>