 

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
                        
                        <form action="{{route('admin.fordiscount.show',$indexs->id)}}" method = "post">
                            @csrf
                            @method('GET')
                             
                                <div class="form-group">
                                    <strong>Image</strong>
                                {{$indexs->src}}  
                                </div>
                                <div class="form-group">
                                <strong>Heading</strong>
                                {{$indexs->heading}} 
                                </div>
                                <div class="form-group">
                                <strong>Description</strong>
                                {{$indexs->description }} 
                                </div>
                                 
                                <a href="/admin/fordiscount" class="btn btn-success">Go Back</a>
                            </form>
                        </div>
                </div>
            </div>
                

           

        </div>
      </div>

    </section><!-- End Get Started Section -->
@endsection