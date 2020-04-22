


@extends('admin.index')

@section('content')
                   
 

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="padd-section wow fadeInUp">

        <div class="container">
          <div class="section-title text-center">
  
            <h2>Latest posts</h2>
            <p class="separator">Integer cursus bibendum augue ac cursus .</p>
  
          </div>
        </div>
        <a class="nav-link btn btn-info" href="{{url('admin/blog/create')}}" style="margin-left:82%">Add New service </a>
        <table class="table table-bordered" >
            <tr style="background:green">
              <th>Image</th>
              <th>Description</th>
              <th>Date</th>
              <th>Action</th>
              <th>Action</th>
                
 
            </tr>
          @foreach ($blogs as $blog)
            <body>
                <tr>
                    <td>{{$blog->src}}</td>
                    <td>{{$blog->description}}</td>
                    <td>{{$blog->date}}</td>
                     
                    <td><a href="{{route('admin.blog.edit', $blog->id)}}" class = "btn btn-info">Edit</a></td>
                         
                    <td>
                        <form action="{{ url('admin/blog/'.$blog->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td> 
                </tr>
            </body>
           
          @endforeach
        </table>
   
      </section><!-- End Blog Section -->
@endsection
