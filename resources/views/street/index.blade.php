@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Street</div>
                    <div class="card-body">
                        <a href="{{ url('/street/create') }}" class="btn btn-success btn-sm" title="Add New Street">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/street') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th><th>Street</th><th>City</th><th>State</th><th>Zip Code</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($street as $item)
                                    <tr class="text-center">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->street }}</td><td>{{ $item->city }}</td><td>{{ $item->state }}</td><td>{{ $item->zip_code }}</td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $street->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
