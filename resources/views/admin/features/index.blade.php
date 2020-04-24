 
 


@extends('admin.index')

@section('content')
     {{-- <!-- ======= Features Section ======= -->
<section id="features" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>Amazing Features.</h2>
      <p class="separator">Integer cursus bibendum augue ac cursus .</p>
    </div>
  </div>
  <a class="nav-link btn btn-info" href="{{url('admin/features/create')}}" style="margin-left:82%">Add New Manager </a>
      <table class="table table-bordered" >
        <tr style="background:green">
          <th>Image</th>
          <th>Heading</th>
          <th>Description</th>
          <th>Action</th>
          <th>Action</th>
            
      
        </tr>
        <div class="col-md-6 col-lg-4">
            <div class="feature-block">
                @foreach ($features as $feature)
                    <tr class = "text-center">
                    <td>{{$feature->src}}</td>
                    <td>{{$feature->heading}}</td>
                    <td>{{$feature->description}}</td>
                    
                    
                    <td><a href="{{route('admin.features.edit', $feature->id)}}" class = "btn btn-info">Edit</a></td>
                        
                        <td>
                        <form action="{{ url('admin/features/'.$feature->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>   
              @endforeach
          </div>
        </div>
        
      </table>
       
      <!-- End Get Features Section --> --}}
      

      
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="container">
                <div class="section-title text-center">
                  <h2>Amazing Features.</h2>
                  <p class="separator">Integer cursus bibendum augue ac cursus .</p>
                </div>
              </div>>
              <div class="card-body">
                <div class="table-responsive">
                   
                   <a class="nav-link btn btn-info" href="{{url('admin/features/create')}}" style="margin-left:82%">Add New service </a>
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Heading</th>
                        <th>Description</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                     
                     <tbody>
                      @foreach ($features as $feature)
                        <tr class = "text-center">
                        <td><img src="{{$feature->src}}" alt="image"></td>
                        <td>{{$feature->heading}}</td>
                        <td>{{$feature->description}}</td>
                        
                        
                         <td><a href="{{route('admin.features.edit', $feature->id)}}" class = "btn btn-info">Edit</a></td>
                            
                         <td>
                            <form action="{{ url('admin/features/'.$feature->id)}}" method="post">
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

