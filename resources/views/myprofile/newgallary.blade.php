<!-- View stored in resources/views/greeting.blade.php -->
<html>
<body>
<h1>Hello, ธนากร ชุลี</h1>
<a href = "{{ url('gallery/ant') }}">
    <img src = "{{$ant}}" height = "150">
</a>
<a href = "{{ url('gallery/bird') }}">
    <img src = "{{$bird}}" height = "150">
</a>
</body>
</html>