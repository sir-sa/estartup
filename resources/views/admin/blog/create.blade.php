


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
         
        <form action="{{route('admin.blog.store')}}" method = "post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="src">Image</label>
                <input type="file" name = "src" id = "src" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name = "description" id = "description" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="text" name = "date" id = "date" class="form-control" required>
            </div>
            
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>
   
      </section><!-- End Blog Section -->
@endsection
