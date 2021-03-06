@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <h2>Create New Role</h2>
                 </div>

                <div class="panel-body">
                  <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('item.index') }}"> Back</a>
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


                    <form  action="route('')" method="post">

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
