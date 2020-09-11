@extends('bootstrap-theme')
@section('content')
<h1 class="text-center">&nbsp;Staff</h1>
<a href="{{ url('/staff/create') }}" class="btn btn-sm btn-success mr-4">New Record</a> 
<form action="{{ url('/staff') }}" method="GET" class="my-4">
    <input name="search" id="search" value="{{ request('search') }}" />
    <button type="submit">Search</button>
</form>
<table class="table table-sm table-bordered text-left" style="width:80%">
    <tr class="text-center">
        <th>#</th> <th>Name</th> <th>Age</th> <th>Salary</th> <th>Phone</th> <th>Action</th>
    </tr>
    @foreach($staffs as $item)
    <tr class="text-center">
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->age }}</td>
        <td>{{ $item->salary }}</td>
        <td>{{ $item->phone }}</td>
        <td class="text-center">
            <a href="{{ url('/staff/'.$item->id ) }}" class="btn btn-sm btn-primary">View</a>
            <a href="{{ url('/staff/'.$item->id.'/edit' ) }}" class="btn btn-sm btn-warning">Edit</a>
            <form method="POST" action="{{ url('/staff' . '/' . $item->id) }}" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirm delete?')">
                    Delete
                </button>
            </form>

        </td>
    </tr>
    @endforeach
</table>
<div class="mt-4">{{ $staffs->appends(['search' => request('search')])->links() }}</div>
@endsection
