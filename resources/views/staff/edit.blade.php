@extends('bootstrap-theme')

@section('content')

<h1>Edit Covid19 Recrod #{{ $staff->id }}</h1>

<form method="POST" action="{{ url('/staff/' . $staff->id) }}" enctype="multipart/form-data" style="width:50%">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    @include ('staff.form')

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Update">
    </div>

</form>
@endsection
