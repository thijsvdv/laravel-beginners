@extends('app')

@section('content')
<div class="title">About us</div>

<h2>Say hello to...</h2>

@foreach($team as $member)
    <p>{{ $member }}</p>
@endforeach

@stop