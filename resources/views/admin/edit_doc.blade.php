
@extends('admin.layouts.app')


@section('content')


@push('style')
@once
<link rel="stylesheet" href="{{asset('css/style.css')}}">

@endonce
@endpush


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 h2 font-weight-bold text-primary">Edit Doctor</h6>
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

        <form  method="Post" action="{{route('updatedoc',$data->id)}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <div class="col-sm-3">
                    <label>old image</label>
                    <div style="width:200px; height:200px; margin:auto" class="border bg-light">

                        <img class="" width='100%' height="100%" src="doctor_image/{{$data->doctor_image}}" alt=""
                            id="profile">
                    </div><br>
                    <label>change image</label>
                    <input type="file" name="doctor_image"
                        class="mt-2 mb-2 form-control  @error('doctor_image') is-invalid @enderror"
                        value="{{ $data->doctor_image}}" id="doctor_image" rezquired>
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
                                value="{{ $data->name}}" id="name"
                                rezquired>
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
                                value="{{ $data->phone}}" id="phone"
                                 rezquired>
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
                            <input style="color: white;" type="text" name="speciality"
                            class="form-control  @error('speciality') is-invalid @enderror"
                            value="{{ $data->speciality}}" id="phone"
                             rezquired>

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
                                id="room_no" value="{{ $data->room_no}}"
                                 requzired>
                            @error('room_no')
                            <span class="invalid-feedback ml-4" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 offset-4 mt-5">
                            <button class="btn  btn-success  btn-lg w-25 m-auto text-center">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>










  @endsection









