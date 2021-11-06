<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="icon" href="{{asset('logos/logo_1.png')}}">
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>
<body>

  <!-- Back to top button -->
@include('patient.partials.topbar')
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
        <h6 class="m-0 font-weight-bold text-primary float-left"></h6>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="dataTable" width="50%" cellspacing="0">
                <thead>
                    <tr>

                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>status</th>
                        <th>Cancel Appointment</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>

                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>status</th>
                        <th>Cancel Appointment</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($appoint as $appoints )


                    <tr align="center">

                        <td>{{ $appoints->doctor}}</td>
                        <td>{{ $appoints->date}}</td>
                        <td>{{ $appoints->message}}</td>
                        <td>{{ $appoints->status}}</td>
                        <td><a class="btn btn-danger" onclick="return confirm('are you sure to cancel')" href="{{route('cancel_appoint',$appoints->id)}}"> Cancel</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $('#dataTable').DataTable();
    });
</script>



@include('patient.partials.script')

</body>
</html>

