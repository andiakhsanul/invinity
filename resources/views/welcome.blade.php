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
                                <img src="img/poster.png" alt="" class="img-fluid" style="width: 100%;"> <!-- Pastikan gambar responsive dan memenuhi lebar penuh -->
                            </button>
                        </h5>
                    </div>
                    <div id="collapsePoster" class="collapse show" aria-labelledby="headingPoster">
                        <div class="card-body">
                            International Conference Visual Nature Serenity (INVINITY). The first International Conference of the Digital Office Management Study Program
                            Digital Office Management, Faculty of Vocational Studies, Universitas Airlangga.

                            This conference will include an international seminar with the theme "Tourism Transformation: Innovation, Trends, and Business Strategies for Sustainable Growth," as well as a Paper Competition with the theme "Applied Business Science."

                            For those participating in the paper competition, authors are expected to submit a complete paper and scientific poster using the template provided. Submission of papers and posters is mandatory for those participating in the paper competition. The best papers will be published in November 2025 / April 2026 in Tijab after going through a thorough review process and meeting journal criteria.

                            The 1st INVINITY will be held virtually on November 16, 2024.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- speakers_start -->
<div class="speakers_area">
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


<!-- speakers_start -->
<div class="speakers_area">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="serction_title_large mb-95">
                    <h3>
                        Moderators
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-md-6">
                <div class="single_speaker">
                    <div class="speaker_thumb">
                        <img src="img/speakers/3.jpg" alt="">
                    </div>
                    <div class="speaker_name text-center">
                        <h3>Ir. I Dewa Made Widia, MT.</h3>
                        <p>Lecturer at Universitas Brawijaya</p>
                    </div>
                </div>

            </div>
            <div class="col-xl-5 offset-xl-2 col-md-6">
                <div class="single_speaker">
                    <div class="speaker_thumb">
                        <img src="img/speakers/4.jpg" alt="">

                    </div>
                    <div class="speaker_name text-center">
                        <h3>Dr. Rahmat Yuliawan., SE., MM., AWP., CHRM., CPM Asia</h3>
                        <p>Head of Study Program D4 Digital Office Management<br>Universitas Airlangga - Indonesia</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- speakers_end-->

<!-- faq_area_Start -->
<div class="faq_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="serction_title_large mb-95">
                    <h3>
                        Frequently Asked Questions
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="accordion">

                    <!-- Seminar FAQ Heading -->
                    <div class="faq_section_heading">
                        <h4>Seminar FAQs</h4>
                    </div>

                    <!-- Seminar FAQ 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOneSeminar">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOneSeminar"
                                    aria-expanded="true" aria-controls="collapseOneSeminar">
                                    <img src="img/barnd/info.png" alt=""> What is Invinity (International Conference Visual Nature Serenity)?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOneSeminar" class="collapse show" aria-labelledby="headingOneSeminar" data-parent="#accordion">
                            <div class="card-body">
                                Invinity is an international conference event to share knowledge and experiences in the field of Transforming Tourism: Innovative Trends and Business Strategies for Sustainable Growth, with speakers and participants from various countries.
                            </div>
                        </div>
                    </div>

                    <!-- Seminar FAQ 2 -->
                    <div class="card">
                        <div class="card-header" id="headingTwoSeminar">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwoSeminar"
                                    aria-expanded="false" aria-controls="collapseTwoSeminar">
                                    <img src="img/barnd/info.png" alt=""> Who can register for this international conference?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwoSeminar" class="collapse" aria-labelledby="headingTwoSeminar" data-parent="#accordion">
                            <div class="card-body">
                                This international conference is open to all international students, and academics who are interested in "Tourism Transformation: Innovation, Trends, and Business Strategies for Sustainable Growth".
                            </div>
                        </div>
                    </div>

                    <!-- Seminar FAQ 3 -->
                    <div class="card">
                        <div class="card-header" id="headingThreeSeminar">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThreeSeminar"
                                    aria-expanded="false" aria-controls="collapseThreeSeminar">
                                    <img src="img/barnd/info.png" alt=""> How to register?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThreeSeminar" class="collapse" aria-labelledby="headingThreeSeminar" data-parent="#accordion">
                            <div class="card-body">
                                You can register via the registration form available on our website. Please make sure to fill in all the required information.
                            </div>
                        </div>
                    </div>

                    <!-- Seminar FAQ 4 -->
                    <div class="card">
                        <div class="card-header" id="headingFourSeminar">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourSeminar"
                                    aria-expanded="false" aria-controls="collapseFourSeminar">
                                    <img src="img/barnd/info.png" alt=""> Is there a registration fee for this international conference?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFourSeminar" class="collapse" aria-labelledby="headingFourSeminar" data-parent="#accordion">
                            <div class="card-body">
                                No, but if you want to participate in the paper competition and poster competition, there will be a fee.
                            </div>
                        </div>
                    </div>

                    <!-- Seminar FAQ 5 -->
                    <div class="card">
                        <div class="card-header" id="headingFiveSeminar">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFiveSeminar"
                                    aria-expanded="false" aria-controls="collapseFiveSeminar">
                                    <img src="img/barnd/info.png" alt=""> Is there a limit to the number of participants?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFiveSeminar" class="collapse" aria-labelledby="headingFiveSeminar" data-parent="#accordion">
                            <div class="card-body">
                                Yes, the number of participants is limited to maintain effective interaction. Registration will be closed once the quota is met.
                            </div>
                        </div>
                    </div>

                    <!-- Seminar FAQ 6 -->
                    <div class="card">
                        <div class="card-header" id="headingSixSeminar">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixSeminar"
                                    aria-expanded="false" aria-controls="collapseSixSeminar">
                                    <img src="img/barnd/info.png" alt=""> Will this seminar be held online or offline?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSixSeminar" class="collapse" aria-labelledby="headingSixSeminar" data-parent="#accordion">
                            <div class="card-body">
                                This seminar will be held online via Zoom.
                            </div>
                        </div>
                    </div>

                    <!-- Paper Competition Heading -->
                    <div class="faq_section_heading">
                        <h4>Paper Competition FAQs</h4>
                    </div>

                    <!-- Paper FAQ 1 -->
                    <div class="card">
                        <div class="card-header" id="headingOnePaper">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOnePaper"
                                    aria-expanded="true" aria-controls="collapseOnePaper">
                                    <img src="img/barnd/info.png" alt=""> Is it okay to upload works that I made several years ago?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOnePaper" class="collapse" aria-labelledby="headingOnePaper" data-parent="#accordion">
                            <div class="card-body">
                                No, it is not. The works entered in this competition must be new works and have never been entered in any competition.
                            </div>
                        </div>
                    </div>

                    <!-- Paper FAQ 2 -->
                    <div class="card">
                        <div class="card-header" id="headingTwoPaper">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwoPaper"
                                    aria-expanded="false" aria-controls="collapseTwoPaper">
                                    <img src="img/barnd/info.png" alt=""> Can I submit more than 1 work in one competition?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwoPaper" class="collapse" aria-labelledby="headingTwoPaper" data-parent="#accordion">
                            <div class="card-body">
                                Only 1 work is required in the form of paper and poster submissions for each participant.
                            </div>
                        </div>
                    </div>

                    <!-- Paper FAQ 3 -->
                    <div class="card">
                        <div class="card-header" id="headingThreePaper">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThreePaper"
                                    aria-expanded="false" aria-controls="collapseThreePaper">
                                    <img src="img/barnd/info.png" alt=""> Are paper competition participants required to participate in the poster competition?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThreePaper" class="collapse" aria-labelledby="headingThreePaper" data-parent="#accordion">
                            <div class="card-body">
                                Of course, because the poster competition will be used as a substitute for the presentation of the paper that the participants have made.
                            </div>
                        </div>
                    </div>

                    <!-- Paper FAQ 4 -->
                    <div class="card">
                        <div class="card-header" id="headingFourPaper">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourPaper"
                                    aria-expanded="false" aria-controls="collapseFourPaper">
                                    <img src="img/barnd/info.png" alt=""> When do participants attach their work after registering?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFourPaper" class="collapse" aria-labelledby="headingFourPaper" data-parent="#accordion">
                            <div class="card-body">
                                Registration and collection of works have the same deadline. Participants can immediately submit their work after registering until the deadline on November 1, 2024.
                            </div>
                        </div>
                    </div>

                    <!-- Paper FAQ 5 -->
                    <div class="card">
                        <div class="card-header" id="headingFivePaper">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFivePaper"
                                    aria-expanded="false" aria-controls="collapseFivePaper">
                                    <img src="img/barnd/info.png" alt=""> When will the competition announcement be made?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFivePaper" class="collapse" aria-labelledby="headingFivePaper" data-parent="#accordion">
                            <div class="card-body">
                                The announcement of the competition will be made on November 16, 2024 in conjunction with the International Conference.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq_area_end -->


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
