 


@extends('admin.index')

@section('content')
                   
 <!-- ======= Team Section ======= -->
 {{-- <section id="team" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Team Member</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>
    <a class="nav-link btn btn-info" href="{{url('admin/team/create')}}" style="margin-left:82%">Add New service </a>
    <div class="container">
      <div class="row">
        <table class="table table-bordered" >
            <tr style="background:green">
              <th>Image</th>
              <th>Heading</th>
              <th>Description</th>
                
              <th>Action</th>
              <th>Action</th>
              <th>Action</th>
            </tr>
          @foreach ($teams as $team)
            <body>
                <tr>
                    <td>{{$team->src}}</td>
                    <td>{{$team->heading}}</td>
                    <td>{{$team->description}}</td>
                    <td><a href="{{route('admin.team.show',$team->id)}}" class = "btn btn-success">Show</a></td>
                    <td><a href="{{route('admin.team.edit', $team->id)}}" class = "btn btn-info">Edit</a></td>
                         
                    <td>
                        <form action="{{ url('admin/team/'.$team->id)}}" method="post">
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
  </section>
  
  <!-- End Team Section --> --}}






  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="container">
      <div class="section-title text-center">
  
        <h2>Team Member</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
  
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
         
         <a class="nav-link btn btn-info" href="{{url('admin/team/create')}}" style="margin-left:82%">Add New service </a>
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
            @foreach ($teams as $team)
              <tr class = "text-center"> 
                <td><img src="{{$team->src}}" alt="image" class=""></td>
                <td>{{$team->heading}}</td>
                <td>{{$team->description}}</td>
                <td><a href="{{route('admin.team.show',$team->id)}}" class = "btn btn-success">Show</a></td>
                <td><a href="{{route('admin.team.edit', $team->id)}}" class = "btn btn-info">Edit</a></td>
                     
                <td>
                    <form action="{{ url('admin/team/'.$team->id)}}" method="post">
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




