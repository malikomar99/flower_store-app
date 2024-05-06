@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
<div class="col-md-3">
  <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        
          </tr>
        </thead>
        <tbody>
            @foreach ($order as $u)
          <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->firstname}}</td>
            <td>{{$u->email}}</td>
            {{-- <td><a onclick="return confirm('you want to delete user?')" href="{{route('delete.user', ['id=>$u->id'])}}" class="btn btn-danger">delete</a></td>
            <td><a href="{{route('admin.edit.user', ['id'=>$u->id])}}" class="btn btn-primary">update</a></td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
    
@endsection