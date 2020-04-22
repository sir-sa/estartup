 


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
            <a class="nav-link btn btn-info" href="{{url('admin/pricing/create')}}" style="margin-left:82%">Add New service </a>
            <table class="table table-bordered" >
                <tr style="background:green">
                  <th>heading</th>
                  <th>Cash</th>
                  <th>List1</th>
                  <th>List2</th>
                  <th>List3</th>
                  <th>List4</th>
                  <th>List5</th>
                  <th>Action</th>
                  <th>Action</th>
                   
                </tr>
      
              @foreach ( $prices as $price)
                <div class="row justify-content-center">
                <tr>
       
                         <td>{{$price->heading}}</td> 
                         <td>{{$price->cash}}</td>  
                         <td>{{$price->list1}}</td> 
                         <td>{{$price->list2}}</td>  
                         <td>{{$price->list3}}</td> 
                         <td>{{$price->list4}}</td>  
                         <td>{{$price->list5}}</td>  
                      
                        <td><a href="{{route('admin.pricing.edit', $price->id)}}" class = "btn btn-info">Edit</a></td>
                           
                          <td>
                          <form action="{{ url('admin/pricing/'.$price->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                         </td>  
                        </div>
                     
                </tr>
                @endforeach
            </table>
             
          </div>
        </div>
      </section><!-- End Pricing Section -->
@endsection
