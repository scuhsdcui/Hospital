@extends('admin.layouts.app')


@section('content')


@push('style')
@once
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endonce
@endpush

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="card shadow mb-4 mt-5 ml-5 mr-5">
    <div class="card-header py-3">
        <h6 class="m-0 h2 font-weight-bold text-primary">Doctors</h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dataTable" width="50%" cellspacing="0">
                <thead>
                    <tr>

                        <th style="color: white;">Doctor Image</th>
                        <th style="color: white;">Doctor Name</th>
                        <th style="color: white;">Phone</th>
                        <th style="color: white;">Speciality</th>
                        <th style="color: white;">Room No.</th>
                        <th style="color: white;">Edit</th>
                        <th style="color: white;">Delete</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="color: white;">Doctor Image</th>
                        <th style="color: white;">Doctor Name</th>
                        <th style="color: white;">Phone</th>
                        <th style="color: white;">Speciality</th>
                        <th style="color: white;">Room No.</th>
                        <th style="color: white;">Edit</th>
                        <th style="color: white;">Delete</th>

                    </tr>
                </tfoot>
                <tbody>



                     @foreach ($data as $doctor)



                    <tr class="text-success" align="center">

                        <td><img src="doctor_image/{{$doctor->doctor_image}}" alt=""></td>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room_no}}</td>

                        <td><a class="btn btn-success" href="{{route('editdoc',$doctor->id)}}">Edit</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you Delete?')" href="{{route('deletedoc',$doctor->id)}}">Delete</a></td>


                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>








@endsection
@section('script')

<script>
    $(document).ready(function () {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $('#dataTable').DataTable();
    });
</script>

@endsection
