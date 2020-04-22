
@extends('admin.index')

@section('content')
                   
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-8">

          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                 
                <form action="{{route('admin.testimonial.store',$testimonials->id)}}" method = "post">
                    @csrf
                    
                    <div class="form-group">
                      <label for="heading">Heading</label>
                      <input type="text" name = "heading" id = "heading" value="{{$testimonials->heading}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" name = "description" id = "description" value="{{$testimonials->description}}" class="form-control" required>
                    </div>
                     
                    <button type = "submit" class = "btn btn-success">Submit</button>
                  </form>
                
              </div>

              <div class="btm-btm">
 
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Testimonials Section -->
@endsection
