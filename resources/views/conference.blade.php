
@include('navbarcall')

        <!-- Checkout Page Start -->
        <div style="margin-top: 50px" class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="mb-4"></h1>
                <form action="#">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-6 col-xl-5">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
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
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">

                                </div>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Nationality <sup>*</sup></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Country Of Residence<sup>*</sup></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Institution</label>
                                <input type="text" class="form-control">
                            <div class="form-item">
                                <label class="form-label my-3">Profession</label>
                                <div class="form-check">
                                    <input style="transform: scale(1.5);" class="form-check-input custom-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Lecturer
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input style="transform: scale(1.5);" class="form-check-input custom-radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Student
                                    </label>
                                </div>
                            </div>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Phone Number<sup>*</sup></label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Email<sup>*</sup></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Student Number (for certificate)<sup>*</sup></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-item">
                                <label for="formFile" class="form-label my-3">Screenshot of proof of following @invinityunair Instagram.<sup>*</sup></label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <button onclick="showAlert()" type="button" class="btn btn-outline-primary my-3">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        @include('partial.footer')

  <script>
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
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        </body>
      </html>
