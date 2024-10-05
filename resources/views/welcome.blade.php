@include('partial.navbar')
<!-- slider_area_start -->
<div class="slider_area slider_bg_1">
    <div class="slider_text">
        <div class="container">
            <div class="position_relv">
                <h1 class="opcity_text d-none d-lg-block">CONFERENCE</h1>
                <div class="row">
                    <div class="col-xl-9">
                        <div class="title_text">
                            {{-- <h3>Digital Design <br>
                                    Conference <br>
                                    2019 NYC</h3> --}}
                            {{-- <a href="#" class="boxed-btn-white">Let's Join</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="countDOwn_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-4 col-lg-4">
                    <div class="single_date">
                        <i class="ti-location-pin"></i>
                        <span>Surabaya, Indonesia</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_date">
                        <i class="ti-alarm-clock"></i>
                        <span>6 October - 16 November 2024</span>
                    </div>
                </div>

                <div class="col-xl-5 col-md-4 col-lg-5">
                    <div class="single_date">
                        <span id="clock"></span>
                    </div>



                </div>


            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- about_area_start -->
<div class="about_area">
    <div class="shape-1 d-none d-xl-block">
        <img src="img/about/shap1.png" alt="">
    </div>
    <div class="shape-2 d-none d-xl-block">
        <img src="img/about/shap2.png" alt="">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-6">
                <div class="about_thumb">
                    <img src="img/about/about.png" alt="">
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-md-6">
                <div class="about_info">
                    <div class="section_title">
                        <span class="sub_heading">Welcome To</span>
                        <h3>Invinity (International <br>Conference Visual <br>Nature Serenity)</h3>
                    </div>
                    <p>INVINITY is an international conference featuring seminars and a paper competition, focused on
                        exploring innovations, trends, and sustainable business strategies in tourism.
                        This event invites participants from around the world to share insights and compete through
                        academic papers, all conducted virtually via Zoom.</p>
                    <a href="{{ route('about') }}" class="boxed-btn-red">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end -->

<div class="container2">
    <h1 class="time">Important Dates</h1>
    <div class="timeline">

        <!-- Event 1 -->
        <div class="timeline-event timeline-event-left">

            <h3>Open Registration for International Conference</h3>
            <span class="date">October 6th – November 14th, 2024</span>
        </div>

        <!-- Event 2 -->
        <div class="timeline-event timeline-event-right">

            <h3>Invinity Call For Paper Registration </h3>
            <span class="date">October 6th – November 1th, 2024</span>
        </div>

        <!-- Event 3 -->
        <div class="timeline-event timeline-event-left">

            <h3>International Conference</h3>
            <span class="date">November 16th, 2024</span>
        </div>



    </div>
</div>



<div class="faq_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="serction_title_large mb-95">
                    <h3>
                        Poster
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card text-center"> <!-- Tambahkan class text-center -->
                    <div class="card-header" id="headingPoster">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsePoster"
                                aria-expanded="true" aria-controls="collapsePoster">
                                <img src="img/speakers/1.jpg" alt="" class="img-fluid" style="max-width: 100%; height: auto;"> <!-- Pastikan gambar responsive -->
                            </button>
                        </h5>
                    </div>
                    <div id="collapsePoster" class="collapse show" aria-labelledby="headingPoster">
                        <div class="card-body">
                            This is a detailed description of the poster. You can add more information here, such as the purpose, design elements, or any other relevant content.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- speakers_start -->
<div class="speakers_area">
    <h1 class="horizontal_text d-none d-lg-block">
        Speakers
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="serction_title_large mb-95">
                    <h3>
                        Speakers
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-md-6">
                <div class="single_speaker">
                    <div class="speaker_thumb">
                        <img src="img/speakers/1.jpg" alt="">
                        {{-- <div class="hover_overlay">
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="speaker_name text-center">
                        <h3>André Sylvestre, MSc</h3>
                        <p>Senior Corporate Advisor, Phoenix Corporate Finance, Toronto, Ontario, Canada</p>
                    </div>
                </div>

            </div>
            <div class="col-xl-5 offset-xl-2 col-md-6">
                <div class="single_speaker">
                    <div class="speaker_thumb">
                        <img src="img/speakers/2.jpg" alt="">

                    </div>
                    <div class="speaker_name text-center">
                        <h3>Dr. A. Faidlal Rahman, SE.Par., M.Sc., CHE.</h3>
                        <p>Dosen Universitas Brawijaya</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- speakers_end-->



{{--
    <!-- brand_area_start -->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand_active owl-carousel">
                        <div class="single_brand text-center">
                            <img src="img/barnd/1.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/2.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/3.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/4.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/5.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand_area_end --> --}}





@include('partial.footer')



<!-- JS here -->
<script>
    function clock() {
        var now = new Date();
        var eventDate = new Date('November 16, 2024 00:00:00');
        var currentTime = now.getTime();
        var eventTime = eventDate.getTime();
        var remTime = eventTime - currentTime;

        var seconds = Math.floor(remTime / 1000);
        var minutes = Math.floor(seconds / 60);
        var hours = Math.floor(minutes / 60);
        var days = Math.floor(hours / 24);

        hours = hours % 24;
        minutes = minutes % 60;
        seconds = seconds % 60;

        hours = hours < 10 ? '0' + hours : hours;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        document.getElementById("clock").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    }

    setInterval(clock, 1000);
    clock(); // initial call to display clock immediately
</script>



<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/plugins.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>

</body>

</html>
