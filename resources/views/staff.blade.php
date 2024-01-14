<x-app-layout>

    <!-- ======= Staff Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="title-box-2">
                        <h5 class="title-left">
                         List of Staff Duty
                        </h5>
                      </div>

                      <button type="button" class="btn btn-primary" onclick="location.href='update-staff'">Update Staff</button>


                      <div class="col-sm-12">


                        <table class="table table-striped-columns">

                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Staff Name</th>
                                    <th scope="col">Staff Number</th>
                                    <th scope="col">Shift</th>
                                    <th scope="col">Duty</th>
                                  </tr>
                                </thead>
                                <tbody>

                                    {{-- @foreach ($staff as $staffmember)
                                <tr>
                                    <td>{{ $staffmember->staff_name}}</td>
                                    <td>{{ $staffmember->staff_number}}</td>
                                    <td>{{ $staffmember->shift}}</td>
                                    <td>{{ $staffmember->duty}}</td>
                                </tr>
                            @endforeach --}}

                                </tbody>
                              </table>

                          </table>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->
</x-app-layout>
