<!DOCTYPE html>
<html>
<head>
	<title>ToDo List</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>ToDo List</h1>
					<ul>
						@foreach($todo as $td)
	                    <form action="{{ url('todo/'.$td->id_todo) }}" method="POST">
	                        {{ csrf_field() }} {{ method_field('DELETE') }}
	                        <li>{{ $td->item }}
	                            <input type="hidden" name="_method" value="DELETE">
	                            <a href="{{ route('todo.edit', $td->id_todo) }}" class="btn btn-xs btn-warning">Update</a>
	                            <button type="submit" name="delete" class="btn btn-danger">X</button>
	                        </li>
	                    @endforeach
                    	</form>
					</ul>
					@if(isset($todo_edit))
					<form action="{{ route('todo.update') }}" method="POST">
					<input type="hidden" name="id_todo" value="{{ $todo_edit->id_todo }}">
					@else
					<form action="todo" method="POST">
					@endif
						{{ csrf_field() }}	
						<div class="form-group">
							<input type="text" class="form-control" name="todo_item" placeholder="Item baru..." @if(isset($todo_edit)) value="{{ $todo_edit->item }}" @endif>
						</div>
						@if(isset($todo_edit))
						<button type="submit" class="btn btn-warning">Update</button>
						@else
						<button type="submit" class="btn btn-success">Add</button>
						@endif
				</form>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</div>
		</div>
	</div>
</body>
</html>