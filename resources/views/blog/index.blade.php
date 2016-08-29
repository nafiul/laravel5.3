@extends('app')
@section('content')
@if($blogs)
@foreach($blogs->all() as $blog)
<div class="form-group">
<h2><a href="{{action('BlogController@show',[$blog->id])}}" >{{$blog->title}}</a></h2>
<p class="form-group">{{$blog->body}}</p>
</div>
@endforeach
@endif
@endsection