 

@extends('admin.index')

@section('content')
    
                  
      
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

@endsection
