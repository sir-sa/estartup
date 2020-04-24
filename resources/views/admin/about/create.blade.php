 


@extends('admin.index')

@section('content')
    
           
                <!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us padd-section wow fadeInUp">
  <div class="container">
      <div class="container">
          <div class="row mt-5">
              <div class="col-sm-8 offset-sm-2">
                <form action="{{route('admin.about.store')}}" method = "post" enctype="multipart/form-data">
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
                    <label for="list1">List1</label>
                    <input type="text" name = "list1" id = "list1" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="list2">List2</label>
                      <input type="text" name = "list2" id = "list2" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="list3">List3</label>
                      <input type="text" name = "list3" id = "list3" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="list4">List4</label>
                      <input type="text" name = "list4" id = "list4" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="list5">List5</label>
                      <input type="text" name = "list5" id = "list5" class="form-control" required>
                  </div>
                   
                  <button type = "submit" class = "btn btn-success">Submit</button>
                </form>
              </div>
            </div>
      </div>
            

   </section><!-- End Get About Section -->
@endsection