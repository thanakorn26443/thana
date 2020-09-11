@extends('bootstrap-theme')

@section('content')
<h1>Covid19 #{{ $staff->id }}</h1>
<table class="table table-sm" style="width:50%">
    <tbody>
        <tr><th> ID </th><td>{{ $staff->id }}</td></tr>
        <tr><th> Name  </th><td> {{ $staff->date }} </td></tr>
        <tr><th> Age  </th><td> {{ $staff->country }} </td></tr>
        <tr><th> Salary   </th><td> {{ $staff->total }} </td></tr>
        <tr><th> Phone   </th><td> {{ $staff->active }} </td></tr>
        <tr><th> Action   </th><td> {{ $staff->death }} </td></tr>
    </tbody>
</table>
@endsection