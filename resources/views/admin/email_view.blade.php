@extends('admin.layouts.app')


@section('content')


@push('style')
@once
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endonce
@endpush


<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 h2 font-weight-bold text-primary">Mail</h6>
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

      <form  method="POST" action="{{route('sendmail',$data->id)}}" >
          @csrf

          <div class="form-group row">

              <div class="col-sm-12">
                  <div class="form-group row">
                      <div class="col-sm-6">
                          <label for="greeting">Greeting* :</label>
                          <input style="color: white;" type="text" name="greeting"
                              class="form-control  @error('greeting') is-invalid @enderror"
                              value="{{ old('greeting')}}" id="greeting"
                             rezquired>
                          @error('greeting')
                          <span class="invalid-feedback ml-4" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                      <div class="col-sm-6">
                          <label for="body">Body* :</label>
                          <input style="color: white;" type="text" name="body"
                              class="form-control  @error('body') is-invalid @enderror"
                              value="{{ old('body')}}" id="body"
                              rezquired>
                          @error('body')
                          <span class="invalid-feedback ml-4" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
                  <hr>
                  <div class="form-group row mt-2">


                      <div class="col-sm-6">
                          <label for="actiontext">Action Text* :</label>
                          <input style="color: white;"  type="text" name="actiontext"
                              class="form-control  @error('actiontext') is-invalid @enderror"
                              id="actiontext" value="{{ old('actiontext')}}"
                               requzired>
                          @error('actiontext')
                          <span class="invalid-feedback ml-4" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                      <div class="col-sm-6">
                        <label for="actionurl">Action URL* :</label>
                        <input style="color: white;"  type="text" name="actionurl"
                            class="form-control  @error('actionurl') is-invalid @enderror"
                            id="actionurl" value="{{ old('actionurl')}}"
                             requzired>
                        @error('actionurl')
                        <span class="invalid-feedback ml-4" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row mt-2">


                    <div class="col-sm-6 offset-3">
                        <label class="offset-4" for="endpart">End Part* :</label>
                        <input style="color: white;"  type="text" name="endpart"
                            class="form-control  @error('endpart') is-invalid @enderror"
                            id="endpart" value="{{ old('endpart')}}"
                            requzired>
                        @error('endpart')
                        <span class="invalid-feedback ml-4" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                  <div class="form-group row">
                      <div class="col-sm-12 offset-4 mt-4">
                          <button class="btn  btn-success  btn-lg w-25 m-auto text-center">Send</button>
                      </div>
                  </div>
              </div>
          </div>
      </form>
  </div>
</div>







@endsection

