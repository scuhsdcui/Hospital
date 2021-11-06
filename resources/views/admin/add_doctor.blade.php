
@extends('admin.layouts.app')


@section('content')


@push('style')
@once
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endonce
@endpush


<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 h2 font-weight-bold text-primary">Add Doctor</h6>
  </div>
  <div class="card-body">
      @if(Session::has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ Session::get('message') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      @endif

      <form  method="POST" action="{{route('uploadDoctor')}}" enctype="multipart/form-data">
          @csrf

          <div class="form-group row">
              <div class="col-sm-3">
                  <div style="width:200px; height:200px; margin:auto" class="border bg-light">
                      <img class="" width='100%' height="100%" src="{{ asset('doctor_logo/avater.png') }}" alt=""
                          id="profile">
                  </div>
                  <input type="file" name="doctor_image"
                      class="mt-2 mb-2 form-control  @error('doctor_image') is-invalid @enderror"
                      value="{{ old('doctor_image')}}" id="doctor_image" rezquired>
                  @error('doctor_image')
                  <span class="invalid-feedback ml-4" role="alert">
                      <strong>{{ $message }}</strong>
</span>
                  @enderror

              </div>
              <div class="col-sm-9">
                  <div class="form-group row">
                      <div class="col-sm-6">
                          <label for="name">Doctor Name* :</label>
                          <input style="color: white;" type="text" name="name"
                              class="form-control  @error('name') is-invalid @enderror"
                              value="{{ old('name')}}" id="name"
                              placeholder="Doctor Name" rezquired>
                          @error('name')
                          <span class="invalid-feedback ml-4" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                      <div class="col-sm-6">
                          <label for="phone">Phone* :</label>
                          <input style="color: white;" type="text" name="phone"
                              class="form-control  @error('phone') is-invalid @enderror"
                              value="{{ old('phone')}}" id="phone"
                              placeholder="Phone" rezquired>
                          @error('phone')
                          <span class="invalid-feedback ml-4" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
                  <hr>
                  <div class="form-group row mt-2">
                      <div class="col-sm-6">
                          <label for="speciality">Speciality* :</label>
                          <select  style="color:white;" name="speciality" class="form-control custom-select  @error('speciality') is-invalid @enderror" id="speciality"
                                rezquired>
                                <option value="" disabled selected hidden>--Select--</option>
                                <option value="Skin">Skin</option>
                                <option value="Heart">Heart</option>
                                <option value="Eye">Eye</option>
                                <option value="Nutritionist">Nutritionist</option>
                                <option value="Psychologist">Psychologist</option>
                                <option value="Dentist">Dentist</option>
                                <option value="Sexologist">Sexologist</option>
                          </select>
                          @error('speciality')
                          <span class="invalid-feedback ml-4" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>

                      <div class="col-sm-6">
                          <label for="room_no">Room No.* :</label>
                          <input style="color: white;"  type="text" name="room_no"
                              class="form-control  @error('room_no') is-invalid @enderror"
                              id="room_no" value="{{ old('room_no')}}"
                              placeholder="Room No." requzired>
                          @error('room_no')
                          <span class="invalid-feedback ml-4" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-12 offset-4 mt-4">
                          <button class="btn  btn-success  btn-lg w-25 m-auto text-center">Save</button>
                      </div>
                  </div>
              </div>
          </div>
      </form>
  </div>
</div>










@endsection

