@extends("layouts.app")

@section('content')
<h3> {{ Auth::user()->email }} </h3>
@endsection