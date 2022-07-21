@extends('layout.app')
@section('body')
    

<div class="container my-5 d-flex justify-content-around">
  <div class="row">
  <form action="{{route('book.store')}}" method="POST">
    @csrf
   
     
     <table class="table"  >
    
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
              <label for="exampleInputEmail1" class="form-label">Arive</label>
              <input type="date"  id="val3"   class="form-control" >
            </div>
          </td>
          <td>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">leave</label>
              <input type="date"  id="val4"   class="form-control" >
            </div>
          </td>
          <td>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">days</label>
              <input type="hidden"  id="m"   class="form-control"   name="days" >
              
           <span id="result"  class="form-control" onmousemove="totalday()" name="days"></span>
          </div>
        </td>
              
          <td>
          
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">total</label>
              <input type="hidden"  id="x"   class="form-control"   name="total" >

            <span   id="tr"   class="form-control" onmousemove="total()" name="total" value="" readonly></span></td>
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


</div>


  <script>
    function total(){
num1 = document.getElementById("result").innerHTML;
num2 = document.getElementById("val1").value;
     c=document.getElementById("tr").innerHTML = num1 * num2 
    document.getElementById("x").value = c



    }

    
    function totalday(){


  let date1 = new Date (document.getElementById("val3").value);
  let date2 = new Date (document.getElementById("val4").value);
// console.log(date1 , date2);
if(date1.getTime() && date2.getTime()){



  let x = date2.getTime() - date1.getTime();
  // console.log(x);
  let z = x/(1000*3600*24);
  // console.log(z);
 d= document.getElementById("result").innerHTML=z;
  document.getElementById("m").value=d;

}
}
    </script>
    @endsection

    
    