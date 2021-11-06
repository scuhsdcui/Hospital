<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      @include('admin.partials.css')
      @stack('style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.partials.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

        @include('admin.partials.topbar')
        <!-- partial -->
        <!-- main-panel  -->
        <div class="main-panel">
            <!--  content-wrapper -->
            <div class="content-wrapper ">
                  @yield('content')
            </div>
            {{-- content-wrapper ends --}}


             <!-- partial:partials/_navbar.html -->
            @include('admin.partials.footer')
             <!-- partial -->
      </div>
      <!-- main-panel ends -->

    </div>
    {{-- container fluid --}}



    </div>
    <!-- container-scroller ends -->
    @include('admin.partials.script')
  </body>
</html>
