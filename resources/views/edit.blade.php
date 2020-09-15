@extends('layout')
@section('content')
<form method="POST" action="{{url('update')}}">
    @csrf
    <div class="col-sm-6">
       <input type="hidden" name="id" value="{{$data->id}}">
       
    <div class="form-group">
      <label>Name</label>
    <input type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Enter Restaurant Name">
      @error('name')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Enter Restaurant Email">
        @error('email')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="{{$data->address}}" class="form-control" placeholder="Enter Restaurant Address">
        @error('address')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
        @enderror
      </div>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"  name="food[]" value="chicken masala" 
        {{in_array('chicken masala', explode(",",$data->foods)) ? ' checked' : '' }}> chicken masala
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"  name="food[]" value="chicken tikka"
        {{in_array('chicken tikka', explode(",",$data->foods)) ? ' checked' : '' }}>chicken tikka
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"  name="food[]" value="panner handi"
        {{in_array('panner handi', explode(",",$data->foods)) ? ' checked' : '' }}>panner handi
      </div><br>
    
      <br>
      <div class="form-group">
        <select class="custom-select my-1 mr-sm-2" name="type">
          <option value="" selected>Select</option>
          <option value="Veg" {{('Veg'==$data->type)?' selected' : '' }}>Veg</option>
          <option value="Nonveg" {{('Nonveg'==$data->type)?' selected' : '' }}>Nonveg</option>
          <option value="Both" {{('Both'==$data->type)?' selected' : '' }}>Both</option>
        </select>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="roomtype" id="exampleRadios1" 
        value="AC"{{('AC'==$data->roomtype)?' checked' : '' }}>
        <label class="form-check-label" for="exampleRadios1">
          AC
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="roomtype" id="exampleRadios2" 
        value="Non AC" {{('Non AC'==$data->roomtype)?' checked' : '' }}>
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
    <button type="submit" class="btn btn-primary">Update Restaurant</button>
    </div>
  </form>
@stop