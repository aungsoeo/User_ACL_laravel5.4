@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Edit New User</h2></div>

                <div class="panel-body">
                  <div class="row">
                      <div class="col-lg-12 margin-tb">
                          <div class="pull-right">
                              <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                          </div>
                      </div>
                  </div>

                  @if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>

                  @endif

                  <form action="{{ route('users.update', $user->id)}}" method="post">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Name:</strong>
                                    <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $user->name}}">
                              </div>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Email:</strong>
                                  <input type="email" name="email" placeholder="Email" class="form-control" value="{{ $user->email}}">
                              </div>

                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Password:</strong>
                                  <input type="password" name="password" placeholder="Password" class="form-control"   >
                              </div>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Confirm Password:</strong>
                                  <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control">
                              </div>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-12">

                              <div class="form-group">
                                  <strong>Role:</strong>
                                  <select  name="role_id" class="form-control" >

                                    <option value="{{$user->role_id}}">{{ $user->roles->name}}</option>
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{ $role->name}}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                          <button type="submit" class="btn btn-primary">Update</button>

                          </div>

                    </div>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
