 

@extends('admin.index')

@section('content')
                {{-- <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">

          <h2>simple systeme fordiscount </h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>

        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <a class="nav-link btn btn-info" href="{{url('admin/fordiscount/create')}}" style="margin-left:82%">Add New service </a>
            
            <table class="table table-bordered" >
                <tr style="background:green">
                  <th>Image</th>
                  <th>Heading</th>
                  <th>Description</th>
                    
                  <th>Action</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                @foreach ($indexs as $index)
                <div class="col-md-6 col-lg-4">
                  <div class="feature-block">
                    <tr class = "text-center">
                      <td>{{$index->src}}</td>
                      <td>{{$index->heading}}</td>
                      <td>{{$index->description}}</td>
                      
                      <td><a href="{{route('admin.fordiscount.show',$index->id)}}" class = "btn btn-success">Show</a></td>
                      <td><a href="{{route('admin.fordiscount.edit', $index->id)}}" class = "btn btn-info">Edit</a></td>
                         
                        <td>
                        <form action="{{ url('admin/fordiscount/'.$index->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                       </td>   
                  </div>
                </div>
                @endforeach
                
              </table>
           </div>
         </div>

          

           

        </div>
      </div>

    </section><!-- End Get Started Section -->  --}}


    
    
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="container">
                    <div class="section-title text-center">
            
                      <h2>simple systeme fordiscount </h2>
                      <p class="separator">Integer cursus bibendum augue ac cursus .</p>
            
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                       
                       <a class="nav-link btn btn-info" href="{{url('admin/fordiscount/create')}}" style="margin-left:82%">Add New service </a>
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Action</th>
                            <th>Action</th>
                            <th>Action</th>
                              
                          </tr>
                        </thead>
                         
                         <tbody>
                          @foreach ($indexs as $index)
                            <tr class = "text-center">
                              <td><img src="{{$index->src}}" alt="image"></td>
                              <td>{{$index->heading}}</td>
                              <td>{{$index->description}}</td>
                              
                              <td><a href="{{route('admin.fordiscount.show',$index->id)}}" class = "btn btn-success">Show</a></td>
                              <td><a href="{{route('admin.fordiscount.edit', $index->id)}}" class = "btn btn-info">Edit</a></td>
                                 
                                <td>
                                <form action="{{ url('admin/fordiscount/'.$index->id)}}" method="post">
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
