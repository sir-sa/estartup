 


@extends('admin.index')

@section('content')
                   
 
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="padd-section text-center wow fadeInUp">

        <div class="container">
          <div class="section-title text-center">
  
            <h2>Meet With Price</h2>
            <p class="separator">Integer cursus bibendum augue ac cursus .</p>
  
          </div>
        </div>
 
        <div class="container">
          <div class="row">
             
            <form action="{{route('admin.pricing.update',$prices->id)}}" method = "post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="heading">Heading</label>
                    <input type="text" name ="heading" id ="heading" value=" {{$prices->src}} " class="form-control" required>
                </div>
                
                <div class="form-group">
                  <label for="cash">Cash</label>
                  <input type="text" name = "cash" id = "cash" value="{{$prices->cash}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="list1">List1</label>
                    <input type="text" name = "list1" id = "list1" value=" {{$prices->list1}} " class="form-control" required>
                </div>
               
                <div class="form-group">
                    <label for="list2">List2</label>
                    <input type="text" name = "list2" id = "list2" value=" {{$prices->list2}} " class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="list3">List3</label>
                    <input type="text" name = "list3" id = "list3" value=" {{$prices->list3}} " class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="list4">List4</label>
                    <input type="text" name = "list4" id = "list4" value=" {{$prices->list4}} " class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="list5">List5</label>
                    <input type="text" name = "list5" id = "list5" value=" {{$prices->list5}} " class="form-control" required>
                </div>
                 
                <button type = "submit" class = "btn btn-success">Submit</button>
              </form>
             
          </div>
        </div>
      </section><!-- End Pricing Section -->
@endsection
