@extends('app')

@section('content')
{!! Form::open(['action' => 'BlogController@store']) !!}
<div class="form-group">
{!!Form::label('title','Title:')!!}
{!!Form::text('title',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
{!!Form::label('body','Body:')!!}
{!!Form::textarea('body',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
{!!Form::submit('Save',['class'=>'form-control'])!!}
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