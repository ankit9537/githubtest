@extends('layout')
@section('content')
<form method="POST" action="add" enctype="multipart/form-data">
    @csrf
    <div class="col-sm-6">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter Restaurant Name">
      @error('name')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Restaurant Email">
        @error('email')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Restaurant Address">
        @error('address')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
        @enderror
      </div>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"  name="food[]" value="chicken masala"> chicken masala
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"  name="food[]" value="chicken tikka">chicken tikka
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"  name="food[]" value="panner handi">panner handi
      </div><br>
      <br>
      <div class="form-group">
      <select class="custom-select my-1 mr-sm-2" name="type">
        <option selected>Select</option>
        <option value="Veg">Veg</option>
        <option value="Nonveg">Nonveg</option>
        <option value="Both">Both</option>
      </select>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="roomtype" id="exampleRadios1" value="AC">
      <label class="form-check-label" for="exampleRadios1">
        AC
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="roomtype" id="exampleRadios2" value="Non AC">
      <label class="form-check-label" for="exampleRadios2">
        Non AC
      </label>
    </div>
    
      <div class="form-group"><br>
        <input type="file" name="image" id="image" class="form-control">
        @error('file')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Add Restaurant</button>
    </div>
  </form>
@stop