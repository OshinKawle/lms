 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script>
        $(document).ready(function () {
            $('.students').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script>



    <script>
        $(document).ready(function () {
            $('#head__top').on('click', function () {
                if ($('#innerCollapse').is(':visible')) {
                    $('#innerCollapse').hide();
                }
            });
            $('#head__sub').on('click', function () {
                $('#innerCollapse').fadeToggle(300);
            });
        });

    </script><?php /**PATH D:\oshin\xampp\htdocs\lms\resources\views/include/script.blade.php ENDPATH**/ ?>