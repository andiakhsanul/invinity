@include('navbarcall')

<!-- Checkout Page Start -->
<div style="margin-top: 50px" class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="mb-4"></h1>
        <form action="{{ route('paper.submit') }}" method="post" id="paymentForm" enctype="multipart/form-data">
            @csrf
            <div class="row g-5">
                <div class="col-md-12 col-lg-6 col-xl-7">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td><strong>
                                        <h2>INVINITY (International Conference, Visual, Nature Serenity)</h2>
                                    </strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Important Information</h3>
                                    <h4>
                                        In addition to holding a conference, we also hold a competition that can be
                                        followed by all students and you will get International Certificate. The winner
                                        of this competition will get a prize and another certificate.
                                        <br><br>
                                        The Competition is Call for Paper (CfP)
                                        <br><br>
                                        <strong>#About CfP</strong>
                                        <br>
                                        1. International conferences will have proceedings (scientific journal output
                                        posters) which will be exhibited during the conference through a digital website
                                        / virtual space.
                                        <br>
                                        2. Invite external lecturers to support scientific work in their country, review
                                        & accommodate articles (sounding to international students).
                                        <br>
                                        3. Paper and poster will have a template from the lecturer, an approval letter
                                        will be made.
                                    </h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Registration Call for Paper (CfP)
                                        <br>
                                        Open Registration: 06 October
                                        <br>
                                        Close Registration: 01 November
                                    </h4>
                                </td>
                            <tr>
                                <td>
                                    <h3>Terms And Condition</h3>
                                    <h4>
                                        • Participants are active undergraduate students (Diploma and Bachelor) from all
                                        majors, public or private universities, and proven by active student card.<br>
                                        • Participants are individuals not teams.<br>
                                        • Participants are required to make payment and fill out the registration
                                        form.<br>
                                        • There is a registration fee for participants who register for the Paper
                                        Competition which is <strong>$5 (Rp 76.000)</strong>.<br>
                                        • Registered participants cannot be replaced for any reason.<br>
                                        • Participants create 2 outputs in Paper Competition (Full Paper & Poster).<br>
                                        • The Paper Competition will collect full paper for judging and posters for
                                        display.<br>
                                        • Participants send files according to the predetermined format.<br>
                                        • Papers and posters that are contested are the original work of the
                                        participants and have never been included or published.<br>
                                        • If in the future there is a copyright lawsuit, the committee is not
                                        responsible for this, the committee will assume that all designs included are
                                        the original work of the participants.
                                    </h4>
                                </td>
                            <tr>
                                <td>
                                    <h4>You can access the Template <a style="color: blue; text-decoration: underline;"
                                            href="https://drive.google.com/file/d/1-0XP8aeclDNM7YjLGBCe3-Z20RXM0dtG">here</a>
                                        Template Call for Paper.
                                    </h4>
                                </td>
                            </tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @if ($hasPapers->isNotEmpty())
                    <div class="col-md-12 col-lg-6 col-xl-5">
                        <div class="d-flex flex-column">
                            <h3>You have already submitted at <span
                                    class="text-primary">{{ $hasPapers->first()->created_at }}</span></h3>
                            <h5>Status:
                                @if ($hasPapers->first()->status == 0)
                                    <p class="m-0 p-0 font-weight-bold">Waiting</p>
                                @elseif ($hasPapers->first()->status == 1)
                                    <p class="m-0 p-0 font-weight-bold text-success">Approved</p>
                                @elseif ($hasPapers->first()->status == 2)
                                    <p class="m-0 p-0 font-weight-bold text-warning">Declined</p>
                                @else
                                    <p class="m-0 p-0 font-weight-bold text-danger">Unknown Status</p>
                                @endif
                            </h5>
                            <a href="{{ Storage::url($hasPapers->first()->payment_proof) }}"
                                class="btn btn-outline-secondary" target="_blank">My Payment Proof</a>
                            @if (!is_null($hasPapers->first()->reason))
                                <h5 class="mt-3">Reason : {{ $hasPapers->first()->reason }}</h5>
                            @endif
                            <p>Contact if you want to edit your submission</p>
                        </div>
                    </div>
                @else
                    @auth
                        <div class="col-md-12 col-lg-6 col-xl-5">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-item">
                                        <label class="form-label my-3">Full Name <sup>*</sup></label>
                                        <input type="text" class="form-control" name="full_name" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">

                                </div>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Nationality <sup>*</sup></label>
                                <input type="text" class="form-control" name="nationality" required>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Country Of Residence<sup>*</sup></label>
                                <input type="text" class="form-control" name="country_of_residence" required>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Institution</label>
                                <input type="text" class="form-control" name="institution">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Profession</label>
                                <div class="form-check">
                                    <input style="transform: scale(1.5);" class="form-check-input custom-radio"
                                        type="radio" name="profession" id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Lecturer
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input style="transform: scale(1.5);" class="form-check-input custom-radio"
                                        type="radio" name="profession" id="flexRadioDefault2" required>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Student
                                    </label>
                                </div>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Phone Number<sup>*</sup></label>
                                <input type="tel" class="form-control" name="phone_number" required>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Email<sup>*</sup></label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Student Number (for certificate)<sup>*</sup></label>
                                <input type="num" class="form-control" name="student_number" required>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Screenshot of proof of following
                                    Instagram<sup>*</sup></label>
                                <input class="form-control" type="file" id="formFile" name="screenshot_proof" required>
                            </div>

                            <div class="form-item">
                                <label class="form-label my-3" for="paymentDropdown">Payment</label>
                                <select class="form-select" id="paymentDropdown" name="payment_methods"
                                    aria-label="Payment options" required>
                                    <option selected disabled>Select Payment Method</option>
                                    <option value="Paypal">PAYPAL @pandikaardi</option>
                                    <option value="BRI">BRI 314301036962538 (a.n. Lidya Laksmi)</option>
                                    <option value="MANDIRI">MANDIRI 1420020567409 (a.n. Irsyad Nur Fauzan)</option>
                                    <option value="SEABANK">SEA BANK 901750960444 (a.n. Alysia Amalia)</option>
                                </select>
                            </div>

                            <div class="form-item">
                                <label for="formFile" class="form-label my-3">Upload payment<sup>*</sup></label>
                                <input class="form-control" name="payment_proof" type="file" id="formFile" required>
                            </div>

                            <button type="submit" class="btn btn-outline-primary my-3">Submit</button>
                        </div>
                    @endauth
                @endif
                @guest
                    <div class="col-md-12 col-lg-6 col-xl-5 border">
                        <div class="d-flex flex-column justify-content center align-items-center">
                            <h3 class="mt-5">-- Please <a href="{{ route('auth.login') }}"
                                    class="text-primary">LOGIN</a> First --
                            </h3>
                        </div>
                    </div>
                @endguest
        </form>

    </div>

</div>
</form>
</div>
@include('partial.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $('#paymentForm').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: '{{ route('paper.submit') }}',
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            title: "Are you sure?",
                            text: "You won't be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, upload it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "INVINITY (International Conference Visual, Nature, Serenity)",
                                    html: `We have received your registration.<br>Contact Persons:<br>Call Paper +62 895-1755-5799 (Aisya)`,
                                    icon: "success"
                                });
                            }
                        });
                    } else {
                        Swal.fire({
                            title: "Error",
                            text: response.error,
                            icon: "error"
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: "Error",
                        text: "There was an issue submitting the paper. Please try again.",
                        icon: "error"
                    });
                    console.log(xhr.responseText);
                }
            });

        });
    });
</script>


</body>

</body>

</html>
@include('partial.footer')
