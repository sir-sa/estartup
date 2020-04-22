 




@extends('admin.index')

@section('content')
                  <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">

          <h2>simple systeme fordiscount </h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>

        </div>
      </div>

      <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 offset-sm-2">
              <form action="{{route('admin.fordiscount.update',$indexs->id)}}" method = "post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="src">Image</label>
                    <input type="file" name = "src" id = "src" value=" {{$indexs->src}} " class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="heading">Heading</label>
                  <input type="text" name = "heading" id = "heading" value=" {{$indexs->heading}} " class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" name = "description" id = "description" value="{{$indexs->heading}} " class="form-control" required>
                </div>
                 
                <button type = "submit" class = "btn btn-success">Submit</button>
              </form>
            </div>
          </div>
    </div>
          

           

        </div>
      </div>

    </section><!-- End Get Started Section -->
   
@endsection