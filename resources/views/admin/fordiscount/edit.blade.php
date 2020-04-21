  
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
  <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/modal-video/css/modal-video.min.css') }}" rel="stylesheet">
   <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
 
   <!-- Template Main CSS File -->
   <link href="{{asset('css/app.css')}}" rel="stylesheet">
   <link href="{{asset('css/style.css')}}" rel="stylesheet">
   

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
     
             
        
     

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

       
      

       

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admin Screens:</h6>
            <a class="collapse-item" href="{{route('admin.fordiscount.index')}}">Fordiscount</a>
            <a class="collapse-item" href="{{route('admin.about.index')}}">About</a>
            <a class="collapse-item" href="{{route('admin.features.index')}}">Features</a>
            <a class="collapse-item" href="{{route('admin.features.index')}}">Screensots</a>
            <a class="collapse-item" href="{{route('admin.screenshot.index')}}">Team</a>
            <a class="collapse-item" href="{{route('admin.testimonial.index')}}">Testimonials</a>
            <a class="collapse-item" href="{{route('admin.pricing.index')}}">Pricing</a>
            <a class="collapse-item" href="{{route('admin.blog.index')}}">Blog</a>
            <a class="collapse-item" href="{{route('admin.contacts.index')}}">Contacts</a>
             
          </div>
        </div>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

 
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
 
          </div>

          <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">

          <h2>simple systeme fordiscount </h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>

        </div>
      </div>

      <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 offset-sm-2">
              <form action="{{route('admin.fordiscount.update',$indexs->id)}}" method = "post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="src">Image</label>
                    <input type="file" name = "src" id = "src" value=" {{$indexs->src}} " class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="heading">Heading</label>
                  <input type="text" name = "heading" id = "heading" value=" {{$indexs->heading}} " class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" name = "description" id = "description" value="{{$indexs->heading}} " class="form-control" required>
                </div>
                 
                <button type = "submit" class = "btn btn-success">Submit</button>
              </form>
            </div>
          </div>
    </div>
          

           

        </div>
      </div>

    </section><!-- End Get Started Section -->

            
           
          
     
    
            
        </div>
            

          
    <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('admin/js/demo/chart-pie-demo.js')}}"></script>


   <!-- Vendor JS Files -->
   <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
   <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
   <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
   <script src="{{asset('vendor/modal-video/js/modal-video.min.js')}}"></script>
   <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
   <script src="{{asset('vendor/superfish/superfish.min.js')}}"></script>
   <script src="{{asset('vendor/hoverIntent/hoverIntent.js')}}"></script>
 
   <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>
 

</body>

</html>
