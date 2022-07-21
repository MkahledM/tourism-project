@extends('layout.app')
@section('body')

{{-- @dd($data) --}}
    <div class="container my-5 ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
<form action="{{route('place.update',[$data->id])}}" method="POST">
@method("PUT")
@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$data->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">price</label>
    <input type="text" class="form-control" name="price" value="{{$data->price}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" class="form-control" name="description"  value="{{$data->description}}" >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">location</label>
        <input type="text" class="form-control" name="location"  value="{{$data->location}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">image</label>
            <input type="text" class="form-control" name="name_img"  value="{{$data->name_img}}" >
            </div>
            <div class="mb-3">
               <button type="submit">submit</button>
                </div>


</form>
      </div>
    </div>
  </div>





@endsection