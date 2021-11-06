<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.partials.css')

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
        @include('admin.partials.body')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.partials.script')
  </body>
</html>
