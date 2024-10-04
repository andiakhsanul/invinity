@include('navbarcall')

<!-- Main Container -->
<div style="margin-top: 200px" class="container1">
    <form action="{{ route('paper.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Row 1: Call for Paper Section -->
        <div class="row">
            <div class="col-md-12 header1">
                <h1 style="color: white">CALL FOR PAPER AND POSTER COMPETITION</h1>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
            @if (session('success'))
                <div class="alert alert-success">
                    <p class="text-center">{{ session('success') }}</p>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger w-100">
                    <p class="text-center" style="font-weight: 500">{{ session('error') }}</p>
                </div>
            @endif
            <div class="col-md-12">

                <h2>CALL FOR PAPER</h2>
                <p>This is a competition that tests participants' ability to write scientific papers. The paper itself
                    is a writing that discusses a particular topic supported by strong data and arguments. Paper can
                    also be interpreted as a summary of a research conducted. In this competition we also incorporated a
                    poster competition. Where participants who have made a paper will also apply it in a poster for
                    display. Later there will be best paper & best poster get cash money of $50 through Paypal
                    transactions.</p>
                <h3>Main theme for paper competition:</h3>
                <p><strong>Applied Business Science</strong></p>

                <h3>General requirements</h3>
                <ul>
                    <li>Participants are active undergraduate students (Diploma and Bachelor) from all majors, public or
                        private universities, and proven by active student card.</li>
                    <li>Participants are individuals not teams.</li>
                    <li>Participants are required to make payment and fill out the registration form.</li>
                    <li>There is a registration fee for participants who register for the Paper Competition which is $5
                        (Rp 76.000).</li>
                    <li>Registered participants cannot be replaced for any reason.</li>
                    <li>Participants create 2 outputs in Paper Competition (Full Paper & Poster).</li>
                    <li>The Paper Competition will collect full paper for judging and posters for display.</li>
                    <li>Participants send files according to the predetermined format.</li>
                    <li>Papers and posters that are contested are the original work of the participants and have never
                        been included or published.</li>
                    <li>If in the future there is a copyright lawsuit, the committee is not responsible for this, the
                        committee will assume that all designs included are the original work of the participants.</li>
                </ul>

                <h3>Technical Guidelines for Paper Competition</h3>
                <ul>
                    <li>The competition starts on …</li>
                    <li>The themes used in the paper are “Applied Business Science”.</li>
                    <li>The manuscript must be original and unpublished.</li>
                    <li>The manuscripts are typed with 1 space on A4 sized paper.</li>
                    <li>Abstract (Insert an abstract of 150-250 words).</li>
                    <li>The font type used is Times New Roman size 11 pt.</li>
                    <li>Margin rules: 4 cm from the left side, 3 cm from the right side, 4 cm from the top border, and 3
                        cm from the bottom border.</li>
                    <li>The title of the paper is typed in capital letters and bold in the center without underlining.
                    </li>
                    <li>The manuscript is typed in 2 columns.</li>
                    <li>The manuscript file is sent in MS Word format.</li>
                    <li>The manuscript is written in English with effective and academic language.</li>
                </ul>

                <p><strong>Template for Paper Competition:</strong></p>
                <p><a href="https://bit.ly/TemplateCallForPapperInvinity" target="_blank"><u>Here</u></a></p>

                <div class="mb-3">
                    <label class="form-label">Upload Full Paper:</label>
                    @auth
                        @if ($hasDocument && is_null($hasDocument->document) && is_null($hasDocument->poster))
                            <input class="form-control" name="document" type="file" id="formFile" required>
                        @else
                            <div class="d-flex flex-column">
                                @if ($hasDocument)
                                    <h3>You have already submitted at <span
                                            class="text-primary">{{ $hasDocument->created_at }}</span></h3>
                                    <a href="{{ Storage::url($hasDocument->document) }}" class="btn btn-outline-secondary"
                                        target="_blank">
                                        View document
                                    </a>
                                    <p>Contact if you want to edit your submission</p>
                                @elseif (is_null($hasDocument))
                                    <div class="alert alert-warning">
                                        <h5>Please upload your payment first</h5>
                                    </div>
                                @else
                                    <input class="form-control" name="document" type="file" id="formFile" required>
                                @endif
                            </div>
                        @endif
                    @endauth
                    @guest
                        <p class="text-center bg-light" style="font-weight: 600;">
                            -- Please <a href="{{ route('auth.login') }}" class="text-primary">LOGIN</a> First --
                        </p>
                    @endguest

                </div>

            </div>
        </div>

        <!-- Row 2: Poster Competition Section -->
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-12">
                <h2>POSTER COMPETITION</h2>
                <p>The poster competition is designed to provide an alternative to oral presentations for paper
                    submissions. Participants will create visual representations of their research to be displayed at
                    the conference. This format allows for a more concise and impactful presentation of findings. By
                    condensing their findings into a concise and informative graphic, participants can effectively
                    communicate their key points to a wide audience. The poster competition offers a unique opportunity
                    for researchers to explore creative ways to present their work and receive valuable feedback.</p>

                <h3>General requirements</h3>
                <ul>
                    <li>The decision of the jury is absolute and inviolable.</li>
                    <li>Scientific posters are the result of original research that has never been published before in
                        any media and has never been included in a similar competition.</li>
                    <li>If there is evidence of a violation, the work will be disqualified or cancelled.</li>
                    <li>The committee has the right and authority to publish scientific posters while still stating the
                        author's name.</li>
                    <li>Technical and visualisation styles are free, original, and do not use elements that violate
                        copyright and ethics.</li>
                    <li>The design is attractive with free colours.</li>
                </ul>

                <h3>Format of scientific poster</h3>
                <ul>
                    <li>Title of the scientific poster.</li>
                    <li>Short and clear title.</li>
                    <li>Name of creator, faculty, and university.</li>
                    <li>Background, containing the appointment of the problem studied, an explanation of the importance
                        and attractiveness of the work.</li>
                    <li>Objective.</li>
                    <li>Methods.</li>
                    <li>Research results.</li>
                    <li>Conclusions and suggestions.</li>
                </ul>

                <h4>Posters must fulfil the following criteria:</h4>
                <ul>
                    <li>Visible.</li>
                    <li>Interesting.</li>
                    <li>Structured.</li>
                    <li>Useful.</li>
                    <li>Accurate.</li>
                    <li>Legitimate.</li>
                </ul>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Poster:</label>
                    @auth
                        @if ($hasDocument && is_null($hasDocument->document) && is_null($hasDocument->poster))
                            <input class="form-control" name="poster" type="file" id="formFile" required>
                        @else
                            <div class="d-flex flex-column">
                                @if ($hasDocument)
                                    <h3>You have already submitted at <span
                                            class="text-primary">{{ $hasDocument->created_at }}</span></h3>
                                    <a href="{{ Storage::url($hasDocument->poster) }}" class="btn btn-outline-secondary"
                                        target="_blank">
                                        View poster
                                    </a>
                                    <p>Contact if you want to edit your submission</p>
                                @elseif (is_null($hasDocument))
                                    <div class="alert alert-warning">
                                        <h5>Please upload your payment first</h5>
                                    </div>
                                @else
                                    <input class="form-control" name="poster" type="file" id="formFile" required>
                                @endif
                            </div>
                        @endif
                    @endauth
                    @guest
                        <p class="text-center bg-light" style="font-weight: 600;">
                            -- Please <a href="{{ route('auth.login') }}" class="text-primary">LOGIN</a> First --
                        </p>
                    @endguest
                </div>

                <p><strong>Contact Person (CP):</strong> invinityunair@gmail.com</p>
            </div>
        </div>
        @auth
            <button type="submit" type="button" class="btn btn-outline-primary my-3">Submit</button>
        @endauth
        @guest
            -- Please <a href="{{ route('auth.login') }}" class="text-primary">LOGIN</a> First --
        @endguest

    </form>
</div>


@include('partial.footer')

<script>
    function showAlert() {
        swal({
            title: "INVINITY (International Conference Visual, Nature, Serenity)",
            content: {
                element: "div",
                attributes: {
                    innerHTML: "We have received your paper and poster.<br>Contact Persons:<br>Call Paper +62 895-1755-5799 (Aisya)"
                },
            },
            icon: "success",
            button: "Ok!",
        });
    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
