
@extends('admin.index')

@section('content')
                   
 <!-- ======= Team Section ======= -->
 <section id="team" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Team Member</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>
   
    <div class="container">
      <div class="row">
        <form action="{{route('admin.team.store',$teams->id)}}" method = "post">
            @csrf
            <div class="form-group">
                <label for="src">Image</label>
            <input type="file" name = "src" id = "src" value=" {{$teams->src}} " class="form-control" required>
            </div>
            <div class="form-group">
              <label for="heading">Heading</label>
              <input type="text" name = "heading" id = "heading" value="{{$teams->heading}}" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name = "description" id = "description" value="{{$teams->description}}" class="form-control" required>
            </div>
             
            <button type = "submit" class = "btn btn-success">Submit</button>
          </form>

      </div>
    </div>
  </section><!-- End Team Section -->
@endsection