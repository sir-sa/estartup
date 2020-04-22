


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
        <form action="{{route('admin.team.store',$blogs->id)}}" method = "post">
            @csrf
            <div class="form-group">
                <label for="src">Image</label>
            <input type="file" name = "src" id = "src" value=" {{$blogs->src}} " class="form-control" required>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name = "description" id = "description" value="{{$blogs->description}}" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="text" name = "date" id = "date" value="{{$blogs->heading}}" class="form-control" required>
            </div>
           
             
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
   
      </section><!-- End Blog Section -->
@endsection
