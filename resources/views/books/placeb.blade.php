@extends('layout.app')
  @section('body')

  <div class="container my-5 d-flex justify-content-around">
    <div class="row">
      <form action="{{route('book.store')}}" method="POST">
        @csrf
       
         <table class="table">
        
          <tbody>
          
            <tr>
              <td> <div class="mb-3">
                <img src="../img/{{$data->name_img}}" width="200px" height="200px">
                </div></td>
    
              <td> <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}" readonly>
              </div></td>
              <td> <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="text" class="form-control" name="price" id="val1" value="{{$data->price}}" readonly>
                <div class="mb-3">
        
                  <input type="hidden" class="form-control" name="name_img"  value="{{$data->name_img}}">
                  </div>
                </div></td>
              <td>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">num of ticket</label>
    
                <input type="number" value="1" id="val2"   class="form-control" ></div></td> 
              <td>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">total</label>
    
                <span id="result"  class="form-control"></span></td>
                </div>
                <td> <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label"></label><br><br>
                   <button type="submit" class="btn btn-primary">Submit</button>
                  </div></td>
            </tr>
              
           
          </tbody>
        </table> 
    
      </form>
  </div>
</div>

      <script>
        function total(){
          if(document.getElementById("val2").value>=1){
  num1 = document.getElementById("val1").value;
  num2 = document.getElementById("val2").value;
  document.getElementById("result").innerHTML = num1 * num2;
}else{
document.getElementById("result").innerHTML= num1;
}
}
        
      

        </script>
        @endsection
