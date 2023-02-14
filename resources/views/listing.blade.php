@extends('layout')

@section('content')

@unless(!isset($listing) && $listing == '')
<h1>{{$heading}}</h1>
<h2>{{$listing['title']}}</h2>
<p>{{$listing['description']}}</p>
@else
<p>No listing provided!</p>
@endunless

@endsection