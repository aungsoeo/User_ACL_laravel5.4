@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2> Show User</h2></div>

                <div class="panel-body">
                  <div class="row">
                      <div class="col-lg-12 margin-tb">
                          <div class="pull-right">
                              <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $user->name }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                {{ $user->email }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Roles:</strong>
                                <label class="label label-success">{{ $user->roles->name }}</label>
                            </div>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
