 

@extends('admin.index')

@section('content')
                   <!-- ======= Screenshots Us Section ======= -->
<section id="about-us" class="about-us padd-section wow fadeInUp">
  <div class="container">
    <form action="{{route('admin.screenshot.store')}}" method = "post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <label for="src">Image</label>
          <input type="file" name = "src" id = "src" class="form-control" required>
      </div>
     
       
      <button type = "submit" class = "btn btn-success">Submit</button>
    </form>


   </section><!-- End Get Screenshots Section -->
@endsection
