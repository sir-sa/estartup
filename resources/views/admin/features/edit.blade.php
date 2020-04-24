 


@extends('admin.index')

@section('content')
       
      <!-- ======= Features Section ======= -->
      <section id="features" class="padd-section text-center wow fadeInUp">

        <div class="container">
          <div class="section-title text-center">
            <h2>Amazing Features.</h2>
            <p class="separator">Integer cursus bibendum augue ac cursus .</p>
          </div>
        </div>
        <form action="{{route('admin.features.update',$features->id)}}" method = "post" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="form-group">
              <label for="src">Image</label>
              <input type="file" name = "src" id = "src" value=" {{$features->src}} " class="form-control" required>
          </div>
          <div class="form-group">
            <label for="heading">Heading</label>
            <input type="text" name = "heading" id = "heading" value=" {{$features->heading}} " class="form-control" required>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name = "description" id = "description" value="{{$features->heading}} " class="form-control" required>
          </div>
           
          <button type = "submit" class = "btn btn-success">Submit</button>
        </form>


        <!-- End Get Features Section -->
@endsection


