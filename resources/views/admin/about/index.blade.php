  
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

          
       
      
                <!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
        <a class="nav-link btn btn-info" href="{{url('admin/about/create')}}" style="margin-left:82%">Add New service </a>
        <table class="table table-bordered" >
            <tr style="background:green">
              <th>Image</th>
              <th>Description</th>
              <th>List1</th>
              <th>List2</th>
              <th>List3</th>
              <th>List4</th>
              <th>List5</th>
              <th>Action</th>
              <th>Action</th>
               
            </tr>
  
          @foreach ( $abouts as $about )
            <div class="row justify-content-center">
            <tr>

                <div class="col-md-5 col-lg-3">
                     <td>{{$about->src}}</td> 
                </div>
        
                <div class="col-md-7 col-lg-5">
                    <div class="about-content">
        
                    <h2><span>eStartup</span>UI Design Mobile </h2>
                     <td>{{$about->description}}</td>  
                    
        
                    <ul class="list-unstyled">
                         <td>{{$about->list1}}</td> 
                         <td>{{$about->list2}}</td>  
                         <td>{{$about->list3}}</td> 
                         <td>{{$about->list4}}</td>  
                         <td>{{$about->list5}}</td>  
                    </ul>
                  
                    <td><a href="{{route('admin.about.edit', $about->id)}}" class = "btn btn-info">Edit</a></td>
                       
                      <td>
                      <form action="{{ url('admin/about/'.$about->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                     </td>  
                    </div>
                </div>
            </tr>
            @endforeach
        </table>


     </section><!-- End Get About Section -->

            
           
          
     
    
          
            

          
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
