@extends('layout')


@section('content')
<h2>List Page</h2>

@if(Session::get('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
   {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($data as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>
          <a href="edit/{{$item->id}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
          <a href="delete/{{$item->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
      </tr>
      @endforeach
      <tr>
        <td colspan="5" style="text-align: center"> {{$data->links() }}</td>
      </tr>
    </tbody>
  </table>
@stop
