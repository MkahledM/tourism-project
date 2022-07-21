 @extends('layout.app')

 @section('body') 

<form action="{{route('place.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" >
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" >
        </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" >
        </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Location</label>
        <input type="text" class="form-control" name="location" >
        </div>


      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name Img</label>
        <input type="text" class="form-control" name="name_img" >
        </div>

        <!-- <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name Img2</label>
          <input type="text" class="form-control" name="name_img2" >
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name Img3</label>
            <input type="text" class="form-control" name="name_img3" >
            </div> -->

    
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
 @endsection 
