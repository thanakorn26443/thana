<form method="POST" action="{{ url('/order-product') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input class="form-control" name="order_id" type="number" id="order_id" value="{{ isset($orderproduct->order_id) ? $orderproduct->order_id : ''}}" >
    <input class="form-control" name="product_id" type="number" id="product_id" value="{{ isset($orderproduct->product_id) ? $orderproduct->product_id : ''}}" >
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($orderproduct->user_id) ? $orderproduct->user_id : ''}}" >
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($orderproduct->quantity) ? $orderproduct->quantity : ''}}" >
    <input class="form-control" name="price" type="number" id="price" value="{{ isset($orderproduct->price) ? $orderproduct->price : ''}}" >
    <input class="form-control" name="total" type="number" id="total" value="{{ isset($orderproduct->total) ? $orderproduct->total : ''}}" >
</form>