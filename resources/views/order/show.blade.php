@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Order {{ $order->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/order') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/order/' . $order->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('order' . '/' . $order->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Order" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $order->id }}</td>
                                    </tr>
                                    <tr><th> User Id </th><td> {{ $order->user_id }} </td></tr><tr><th> Remark </th><td> {{ $order->remark }} </td></tr><tr><th> Total </th><td> {{ $order->total }} </td></tr><tr><th> Status </th><td> {{ $order->status }} </td></tr><tr><th> Checking At </th><td> {{ $order->checking_at }} </td></tr><tr><th> Paid At </th><td> {{ $order->paid_at }} </td></tr><tr><th> Cancelled At </th><td> {{ $order->cancelled_at }} </td></tr><tr><th> Completed At </th><td> {{ $order->completed_at }} </td></tr><tr><th> Tracking </th><td> {{ $order->tracking }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                @php
                    $orderproduct = $order->order_products;
                @endphp

                <div class="card mt-4">
                    <div class="card-header">รายละเอียด Order {{ $order->id }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th>#order id</th>
                                        <th>Date</th>
                                        <th>User id</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Tracking</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->created_at }}</td><td>{{ $item->user->name }}</td><td>{{ $item->total }}</td>
                                        <td>@switch($item->status)
                                            @case("created") 
                                                <div>รอหลักฐานการชำระเงิน</div>
                                                <a class="btn btn-sm btn-warning" href="{{ url('payment/create?order_id='.$item->id) }}">ส่งหลักฐาน</a>
                                                @break
                                            @case("checking") 
                                                <div>รอตรวจสอบ</div>
                                                @break
                                            @case("paid") 
                                                <div>ชำระเงินแล้ว</div>
                                                @break
                                            @case("completed") 
                                                <div>ส่งสินค้าแล้ว</div>
                                                @break
                                        @endswitch
                                        </td>
                                        <td>{{ $item->tracking }}</td>
                                        <td>
                                            <a href="{{ url('/order/' . $item->id) }}" title="View Order"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/order/' . $item->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/order' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Order" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
@endsection
