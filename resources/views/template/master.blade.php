<!DOCTYPE html>
<html>
 @include('template.sub-template.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('template.sub-template.header')
@include('template.sub-template.rightaside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
	@yield('header')
	@yield('content')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('template.sub-template.footer')
<!-- jQuery 3 -->
@include('template.sub-template.script')
</body>
</html>
