<footer class="footer text-left">
    <div class="container py-4 py-sm-5">
        <div class="d-flex justify-content-between pt-lg-3  footer-bottom-cpy">
            <div class="copy-right-w3ls">
                <p>© 2018 Recognize. All rights reserved | Design by
                    <a href="https://www.facebook.com/saikiran.sangani"> Sai Kiran Sangani </a>

                </p>
            </div>
            <div class="social-content pb-md-0 pb-4">
                <ul class="social-icons text-center d-flex">
                    <li class="ml-lg-5">
                        <a href="https://www.facebook.com/saikiran.sangani">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/saikiransangani">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/saikiransangani/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/sai-kiran-sangani-b45b1662/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/118186504108513372520">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--//footer-->

<!--model-forms-->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- banner-type-text -->
<script src='js/aos.js'></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });

</script>
<!-- sticky nav bar-->
<script>
    $(() => {

        //On Scroll Functionality
        $(window).scroll(() => {
            var windowTop = $(window).scrollTop();
            windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
            windowTop > 100 ? $('ul.nav-honey').css('top', '50px') : $('ul.nav-honey').css('top', '160px');
        });

        //Click Logo To Scroll To Top
        $('#logo').on('click', () => {
            $('html,body').animate({
                scrollTop: 0
            }, 500);
        });

        //            //Smooth Scrolling Using Navigation Menu
        //            $('a[href*="#"]').on('click', function(e) {
        //                $('html,body').animate({
        //                    scrollTop: $($(this).attr('href')).offset().top - 100
        //                }, 500);
        //                e.preventDefault();
        //            });

        //Toggle Menu
        $('#menu-toggle').on('click', () => {
            $('#menu-toggle').toggleClass('closeMenu');
            $('ul').toggleClass('showMenu');

            $('li').on('click', () => {
                $('ul').removeClass('showMenu');
                $('#menu-toggle').removeClass('closeMenu');
            });
        });

    });

</script>
<!-- //sticky nav bar -->
<!-- Include jQuery Timeline Plugin -->
<script src="js/jquery.roadmap.js"></script>

<script>
    $(document).ready(function () {

        var events = [{
            date: 'Jan 2017 - Present',
            content: 'Freelance <small>Web Designer and Network Administrator</small>'
        },
            {
                date: '2016 - 2018',
                content: 'Sapienza University of Rome <small>Masters in Computer Science</small>'
            },
            {
                date: '2016 - 2018',
                content: 'CISCO <small>CCNA Certification</small>'
            },
            {
                date: '2015 - 2016',
                content: '[24]7 pvt ltd <small>Social Media Advisor</small>'
            },
            {
                date: '2014 - 2015',
                content: 'Stansource Inc  <small>IT Consultant</small>'
            },
            {
                date: '2013 - 2015',
                content: 'Stansource Inc  <small>Graphic Design</small>'
            },

            {
                date: '2013 - 2014',
                content: 'Stansource Inc.  <small>Junior Software Engineer</small>'
            },

            {
                date: '2009 - 2013',
                content: 'Jawaharlal Nehru Technological University <small>Computer Science Bachelors</small>'
            },
            {
                date: '2007 - 2009',
                content: 'Intermediate Education <small>Maths, Physics and Chemistry</small>'
            },
            {
                date: '2006 - 2007',
                content: 'High School <small>Maths, Social Studies and Science</small>'
            },

        ];

        $('#my-timeline').roadmap(events, {
            eventsPerSlide: 6,
            slide: 1,
            prevArrow: '<i class="fas fa-chevron-left"></i>',
            nextArrow: '<i class="fas fa-chevron-right"></i>'
        });
    });

</script>
<!-- simpleLightbox -->
<script src="js/simpleLightbox.js"></script>
<script>
    $('.proj_gallery_grid a').simpleLightbox();

</script>
<!-- //simpleLightbox -->
<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();

</script>
<!-- //stats -->

<!--/ start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });

</script>
<script>
    $(document).ready(function () {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });

</script>
<!--// end-smoth-scrolling -->

<!-- //js -->

<script src="js/bootstrap.js"></script>

</body>

</html>
