@extends('app')
@section('content')
@if($blog)

<div class="form-group">
<h2>{{$blog->title}}</h2>
<p class="form-group">{{$blog->body}}</p>
</div>
<a href="{{url('blogs/destroy',$blog->id)}}">Delete</a>
{!! Form::open(['method'=>'DELETE','action' => ['BlogController@destroy',$blog->id]]) !!}
{!! Form::submit('Delete')!!}
{!! Form::close() !!}
@endif
@endsection