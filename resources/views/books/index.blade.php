@extends('layout.app')

@section('body')
{{-- <div class="container my-5 d-flex justify-content-around">
    <div class="row">
    <div class="col-md-6 col-sm-12 col-lg-4">
        @foreach ($data as $item)
    <div class="card " style="width: 18rem;">
        <img src="img/{{$item->name_img}}" class="card-img-top" style="width:100%; height:200px;">
        <div class="card-body">
          <h4 class="card-title">{{$item->name}}</h4>
          <p class="card-text">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
          </p>
         
          <h5><b>Price : </b>EGP {{$item->price}}</h4>
            <h5><b>days : </b> {{$item->days}}</h4>
                <h5><b>total price</b>EGP {{$item->total}}</h4>


          
        </div>
        <form action="{{route('book.destroy', [$item->id])}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form> 

    </div>
    @endforeach
    </div>
</div>
</div> --}}

<div class="container my-5 d-flex justify-content-around">
  <div class="row">
    
   
     
     <table class="table"  >
    
      <tbody>
        @foreach ($data as $item)

        <tr>
          <td> <div class="mb-3">
            <img src="../img/{{$item->name_img}}" width="200px" height="200px">
            </div></td>

          <td> <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$item->name}}" readonly>
          </div></td>
          <td> <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">price of day</label>
            <input type="text" class="form-control" name="price" id="val1" value="{{$item->price}}" readonly>
            
            </div>    
          </td>
          <td> <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">days</label>
            <input type="text" class="form-control" name="price" id="val1" value="{{$item->days}}" readonly>
            
            </div>    
          </td>
          <td> <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">total price</label>
            <input type="text" class="form-control" name="price" id="val1" value="{{$item->total}}" readonly>
            
            </div>    
          </td>
              
          <td> <div class="mb-3">
            <form action="{{route('book.destroy',[$item->id])}}" method="POST">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger mt-4 ">x</button>
            </form>
            </div>    
          </td>
          {{-- <td> <div class="mb-3">
            
  
              <a href="{{route('book.edit',[$item->id])}}" class="btn btn-danger mt-4 ">update</a>
          
            </div>    
          </td> --}}
          
            
           
        </tr>
           
        @endforeach

      </tbody>
    </table> 
  

  </div>

</div>


</div>
@endsection

