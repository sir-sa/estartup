
@extends('admin.index')

@section('content')
                   
{{-- <!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-8">

          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <a class="nav-link btn btn-info" href="{{url('admin/testimonial/create')}}" style="margin-left:82%">Add New service </a>
                <table class="table table-bordered" >
                    <tr style="background:green">
                       
                      <th>Heading</th>
                      <th>Description</th>
                        
                      <th>Action</th>
                      <th>Action</th>
                      <th>Action</th>
                    </tr>
                  @foreach ($testimonials as $testimonial)
                    <body>
                        <tr>
                            
                            <td>{{$testimonial->heading}}</td>
                            <td>{{$testimonial->description}}</td>
                            <td><a href="{{route('admin.testimonial.show',$testimonial->id)}}" class = "btn btn-success">Show</a></td>
                            <td><a href="{{route('admin.testimonial.edit', $testimonial->id)}}" class = "btn btn-info">Edit</a></td>
                                 
                            <td>
                                <form action="{{ url('admin/testimonial/'.$testimonial->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td> 
                        </tr>
                    </body>
                   
                  @endforeach
                </table>
                
              </div>
 
            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Testimonials Section --> --}}





  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="container">
      <div class="section-title text-center">
  
        <h2>Testimonials Section</h2>
         
  
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
         
         <a class="nav-link btn btn-info" href="{{url('admin/testimonial/create')}}" style="margin-left:82%">Add New service </a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Heading</th>
              <th>Description</th>
              <th>Action</th>
              <th>Action</th>
              <th>Action</th>
                        
                
                
            </tr>
          </thead>
           
           <tbody>
            @foreach ($testimonials as $testimonial)
              <tr class = "text-center">
                <td>{{$testimonial->heading}}</td>
                <td>{{$testimonial->description}}</td>
                <td><a href="{{route('admin.testimonial.show',$testimonial->id)}}" class = "btn btn-success">Show</a></td>
                <td><a href="{{route('admin.testimonial.edit', $testimonial->id)}}" class = "btn btn-info">Edit</a></td>
                                 
                <td>
                  <form action="{{ url('admin/testimonial/'.$testimonial->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td> 
           @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  </div>
  <!-- /.container-fluid -->


  @endsection


