<h1>Profile : {{ $profile->id }}</h1>
<div>
	<strong>Name : </strong>
	<input value="{{ $profile->name }}" />
</div>
<div>
	<strong>Last Name : </strong>
	<input value="{{ $profile->lastname }}" />	
</div>
<div>
    <strong>Email : </strong>
    <input value="{{ $profile->email }}" />
</div>
<div>{{ $others }}</div>
<div><button type="submit">Save</button></div>