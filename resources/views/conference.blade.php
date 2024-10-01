@include('navbarcall')

<!-- Checkout Page Start -->
<div style="margin-top: 50px" class="container-fluid py-5">
    <div class="container py-5">
        <h1 class="mb-4"></h1>
        <form action="{{ route('seminar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-5">
                <div class="col-md-12 col-lg-6 col-xl-5">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong><h2>INVINITY (International Conference, Visual, Nature Serenity)</h2></strong></td>
                                </tr>
                                <tr>
                                    <td><h4>Registration for Participants: October 6th – November 14th 2024
                                        <br>
                                        Event Timing: November 16th 2024
                                        <br>
                                        Event Address: Zoom meeting
                                    </h4></td>
                                </tr>
                                <tr>
                                    <td><h4>Contact Persons: <br>Irma: +62 857-3218-6497 <br> Via: +62 858-1521-2879 <br>Email: invinityunair@gmail.com</h4></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-7">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="form-item">
                                <label class="form-label my-3">Full Name <sup>*</sup></label>
                                <input type="text" name="full_name" class="form-control" required maxlength="255">
                            </div>
                        </div>
                    </div>
                    <div class="form-item">
                        <label class="form-label my-3">Nationality <sup>*</sup></label>
                        <input type="text" name="nationality" class="form-control" required maxlength="255">
                    </div>
                    <div class="form-item">
                        <label class="form-label my-3">Country Of Residence<sup>*</sup></label>
                        <input type="text" name="country_of_residence" class="form-control" required maxlength="255">
                    </div>
                    <div class="form-item">
                        <label class="form-label my-3">Institution<sup>*</sup></label>
                        <input type="text" name="institution" class="form-control" required maxlength="255">
                    </div>
                    <div class="form-item">
                        <label class="form-label my-3">Profession<sup>*</sup></label>
                        <div class="form-check">
                            <input style="transform: scale(1.5);" class="form-check-input custom-radio" type="radio" name="profession" value="Lecturer" required>
                            <label class="form-check-label">
                                Lecturer
                            </label>
                        </div>
                        <div class="form-check">
                            <input style="transform: scale(1.5);" class="form-check-input custom-radio" type="radio" name="profession" value="Student" required>
                            <label class="form-check-label">
                                Student
                            </label>
                        </div>
                    </div>
                    <div class="form-item">
                        <label class="form-label my-3">Phone Number<sup>*</sup></label>
                        <input type="tel" name="phone_number" class="form-control" required>
                    </div>
                    <div class="form-item">
                        <label class="form-label my-3">Email<sup>*</sup></label>
                        <input type="email" name="email" class="form-control" required maxlength="255">
                    </div>
                    <div class="form-item">
                        <label class="form-label my-3">Student Number (for certificate)<sup>*</sup></label>
                        <input type="text" name="student_number" class="form-control" required maxlength="255">
                    </div>
                     <div class="form-item">
        <label for="formFile" class="form-label my-3">Screenshot of proof of following @invinityunair Instagram.<sup>*</sup></label>
        <input class="form-control" type="file" name="screenshot_proof" id="formFile" required>
    </div>
                    <button type="submit" class="btn btn-outline-primary my-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- <script>
    function showAlert() {
        swal({
            title: "INVINITY (International Conference Visual, Nature, Serenity)",
            content: {
                element: "div",
                attributes: {
                    innerHTML: "We have received your registration.<br>Please join grub first before submitting and get for more information. <br> https://chat.whatsapp.com/JFQso5e2oRwIjFCz0mSluh"
                },
            },
            icon: "success",
            button: "Ok!",
        });
    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}

@include('partial.footer')
