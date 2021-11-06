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
        <h6 class="m-0 h2 font-weight-bold text-primary">Appointment</h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dataTable" width="50%" cellspacing="0">
                <thead>
                    <tr>

                        <th style="color: white;">Customer Name</th>
                        <th style="color: white;">Email</th>
                        <th style="color: white;">Phone</th>
                        <th style="color: white;">Doctor Name</th>
                        <th style="color: white;">Date</th>
                        <th style="color: white;">Message</th>
                        <th style="color: white;">Status</th>
                        <th style="color: white;">Approve</th>
                        <th style="color: white;">Cancel</th>
                        <th style="color: white;">Send Mail</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th style="color: white;">Customer Name</th>
                        <th style="color: white;">Email</th>
                        <th style="color: white;">Phone</th>
                        <th style="color: white;">Doctor Name</th>
                        <th style="color: white;">Date</th>
                        <th style="color: white;">Message</th>
                        <th style="color: white;">Status</th>
                        <th style="color: white;">Approve</th>
                        <th style="color: white;">Cancel</th>
                        <th style="color: white;">Send Mail</th>
                    </tr>
                </tfoot>
                <tbody>

                  @foreach ($data as $appoint )



                    <tr class="text-success" align="center">

                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td><a class="btn btn-success" href="{{route('approve',$appoint->id)}}">Aprroved</a></td>
                        <td><a class="btn btn-danger" href="{{route('cancel',$appoint->id)}}">Canceled</a></td>
                        <td><a class="btn btn-primary" href="{{route('emailview',$appoint->id)}}">Send Mail</a></td>


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
