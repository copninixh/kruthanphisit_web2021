<!--start js files-->
<script defer src="assets/js/brands.js"></script>
<script defer src="assets/js/solid.js"></script>
<script defer src="assets/js/fontawesome.js"></script>
<script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-kit.js" type="text/javascript"></script>
<!--end js files-->

    <!-- Owl Carousel-->
    <script src="assets/dist/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-one').owlCarousel({
                loop:false,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:2,
                        nav:false
                    },
                    1000:{
                        items:2,
                        nav:false,
                        loop:false
                    },
                    1200:{
                        items:3,
                        nav:false,
                        loop:false
                    }
                }
            });

            $('.owl-two').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:3,
                        nav:false
                    },
                    600:{
                        items:5,
                        nav:false
                    },
                    1000:{
                        items:5,
                        nav:false,
                        loop:false
                    }
                }
            });

            $('.owl-three').owlCarousel({
                loop:false,
                margin:20,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:1,
                        nav:false
                    },
                    1000:{
                        items:2,
                        nav:false,
                        loop:false
                    },
                    1200:{
                        items:3,
                        nav:false,
                        loop:false
                    }
                },
            });
        });
    </script>
