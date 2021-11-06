<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form action="{{route('appointment')}}" method="POST" class="main-form">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control
             @error('name') is-invalid @enderror" value="{{ old('name')}}" placeholder="Full name">
             @error('name')
             <span class="invalid-feedback ml-4" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
             @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control
             @error('email') is-invalid @enderror" value="{{ old('email')}}" placeholder="Email address..">
             @error('email')
             <span class="invalid-feedback ml-4" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
             @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control
            @error('date') is-invalid @enderror" value="{{ old('date')}}">
            @error('date')
            <span class="invalid-feedback ml-4" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="doctor" class="custom-select
             @error('doctor') is-invalid @enderror" value="{{ old('doctor')}}">
                <option>---select doctor---</option>
                @foreach ($doctor as $doctors )
                <option value="{{$doctors->name}}">{{$doctors->name}}
                    __speciality__{{$doctors->speciality}}</option>
                @endforeach


            </select>
            @error('doctor')
            <span class="invalid-feedback ml-4" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="number" name="phone" class="form-control
              @error('phone') is-invalid @enderror" value="{{ old('phone')}}" placeholder="Number..">
              @error('phone')
              <span class="invalid-feedback ml-4" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control
             @error('message') is-invalid
             @enderror" value="{{ old('message')}}" rows="6" placeholder="Enter message.."></textarea>
             @error('message')
             <span class="invalid-feedback ml-4" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
             @enderror
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->
