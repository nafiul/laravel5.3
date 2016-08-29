@extends('app')

@section('content')
{!! Form::open(['method' => 'PATCH','action' => ['BlogController@update',$blog->id]]) !!}
<div class="form-group">
    {!!Form::label('title','Title:')!!}
    {!!Form::text('title',$blog->title,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::label('body','Body:')!!}
    {!!Form::textarea('body',$blog->body,['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!!Form::submit('Update',['class'=>'form-control'])!!}
</div>
{!! Form::close() !!}
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
</ul>
@endif
@endsection