  <!-- main-panel  -->
 <div class="main-panel">
     <!-- content-wrapper ends -->
          <div class="content-wrapper">

            <div class="row">
              <div class="col-xl-2 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0  " style="color:white; ">
                              @isset($data)
                                {{$data['doctor']}}
                              @endisset
                          </h3>

                        </div>
                      </div>
                      <div class="col-4 " >
                        <div class="icon icon-box-success  ">
                          <span class="mdi mdi-stethoscope icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Doctors</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                               @isset($data)
                            {{$data['patient']}}
                          @endisset</h3>

                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-account icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Patient</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                            @isset($data)
                            {{$data['appoint']}}
                          @endisset
                          </h3>

                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-timetable icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Appointments</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                            @isset($data)
                            {{$data['pending']}}
                          @endisset
                          </h3>

                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-danger">
                          <span class="mdi mdi-timer-sand icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Pending Appointments</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                            @isset($data)
                            {{$data['approve']}}
                          @endisset
                          </h3>

                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-checkbox-marked-circle icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Approved Appointments</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">
                            @isset($data)
                            {{$data['cancel']}}
                          @endisset
                          </h3>

                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-danger ">
                          <span class=" mdi mdi-close-circle-outline icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Canceled Appointments</h6>
                  </div>
                </div>
              </div>
            </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          <!-- partial -->
        </div>
         <!-- main-panel ends -->
