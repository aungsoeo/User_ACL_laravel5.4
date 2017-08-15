@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a href="{{route('users.create')}}" class="btn btn-success">Create New User</a>
        </div>
    </div>
  </div>

  @if($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{$message}}</p>
      </div>
  @endif

  <table class="table table-bordered">
      <tr>
        <th>NO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>
        <th width="280px">Action</th>
      </tr>
      @foreach($data as $key=>$user)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              <label class="lable label-success">{{$user->roles->name}}</label>
            </td>
            <td>
                <a href="{{route('users.show',$user->id)}}" class="btn btn-info">Show</a>
                <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{  route('users.destroy',$user->id) }}" method="POST" style="display:inline;">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit"  value="Delete" class=" btn btn-danger">
                </form>

            </td>
        </tr>
      @endforeach
  </table>
    {!! $data->render() !!}
</div>

@endsection
