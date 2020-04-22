 




@extends('admin.index')

@section('content')
    <!-- ======= Screenshots Section ======= -->
<section id="screenshots" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>App Gallery</h2>
      <p class="separator">Integer cursus bibendum augue ac cursus .</p>
    </div>
  </div>

  <div class="container">
    
    <a class="nav-link btn btn-info" href="{{url('admin/screenshot/create')}}" style="margin-left:82%">Add New service </a>
          
    <table  class="table table-bordered">
    <div class="owl-carousel owl-theme">

        <div>
          <tr style="background:green">
            <th>Image</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
          @foreach ($screenshots as $screenshot)
            <tr>
               <td>{{$screenshot->src}}</td>
               <td><a href="{{route('admin.fordiscount.show',$screenshot->id)}}" class = "btn btn-success">Show</a></td>
               <td><a href="{{route('admin.fordiscount.edit',$screenshot->id)}}" class = "btn btn-info">Edit</a></td>
                         
               <td>
                  <form action="{{ url('admin/fordiscount/'.$screenshot->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>   
            </tr>
             
          </div>
          @endforeach
      </table>
           
              
        </div>
      </div>

</section><!-- End Screenshots Section -->
@endsection
