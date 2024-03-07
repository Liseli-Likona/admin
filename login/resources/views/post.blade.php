@extends('template')
@section('content')
<h1> you are seeing this because you are admin</h1>
@can('admin')
<button class="bg-red-500"> delete</button>
@endcan

@endsection
