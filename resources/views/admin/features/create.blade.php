 


@extends('admin.index')

@section('content')
       
      <!-- ======= Features Section ======= -->
      <section id="features" class="padd-section text-center wow fadeInUp">
      <div class="container">
        <div class="jumbotron">
          <div class="row mt-5">
            <div class="col-sm-8 offset-sm-2">
              <div class="container">
                <div class="section-title text-center">
                  <h2>Amazing Features.</h2>
                  <p class="separator">Integer cursus bibendum augue ac cursus .</p>
                </div>
              </div>

              <form action="{{route('admin.features.store')}}" method = "post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="src">Image</label>
                    <input type="file" name = "src" id = "src" class="custom-file-input" required>
                </div>
                <div class="form-group">
                  <label for="heading">Heading</label>
                  <input type="text" name = "heading" id = "heading" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" name = "description" id = "description" class="form-control" required>
                </div>
                
                
                <button type = "submit" class = "btn btn-success">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Get Features Section -->
@endsection


