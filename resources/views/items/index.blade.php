@extends('layouts.app')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Items CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('item-create')
	            <a class="btn btn-success" href="{{ route('item.create') }}"> Create New Item</a>
	            @endpermission
	        </div>
	    </div>
	</div>

	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Description</th>
			<th width="280px">Action</th>
		</tr>

	@foreach ($items as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td>{{ $item->description }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('item.show',$item->id) }}">Show</a>

			@permission('item-edit')
			<a class="btn btn-primary" href="{{ route('item.edit',$item->id) }}">Edit</a>
			@endpermission

			@permission('item-delete')
				<form action="{{  route('item.destroy',$item->id) }}" method="POST" style="display:inline;">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<input type="submit"  value="Delete" class=" btn btn-danger">
				</form>
      @endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $items->render() !!}

@endsection
