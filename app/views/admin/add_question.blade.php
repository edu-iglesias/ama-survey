@extends('layouts.admin_layout')

@section("title")
	Admin - Dashboard
@stop

@section("section_header")
	Create Question
@stop

@section('content')
	<div class="form-group @if ($errors->has('email')) has-error @endif col-md-12">
		<a href="/admin/questions" class="btn btn-primary"><i class="fa fa-arrow-left"></i> back to list of questions</a>
	</div>

	{{ Form::open( ['role'=>'form'] ) }}

	<div class="form-group @if ($errors->has('email')) has-error @endif col-md-12">
		<div class="col-md-4">
			<b>Select Tab</b>
        	{{ Form::select('tab', $tabs,  Input::old('tab'), ['id'=>'tab','class'=>'form-control']) }}
        	@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    	</div>
    </div>

    <div class="form-group @if ($errors->has('email')) has-error @endif col-md-12">
		<div class="col-md-4">
			<b>Select Question Type</b>
        	<select name="question_type" class="form-control">
        		<option value="1">Multiple Choice</option>
        		<option value="2">Text</option>
        	</select>
        	@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    	</div>
    </div>

    <div class="form-group @if ($errors->has('email')) has-error @endif col-md-12">
		<div class="col-md-4">
			<b>Question</b>
        	{{ Form::textarea('question',null,['class' => 'form-control']) }}
        	@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    	</div>
    </div>

    <div class="form-group @if ($errors->has('email')) has-error @endif col-md-12">
		<div class="col-md-4" align="right">
        	{{ Form::submit("Create Question", ['class'=>'btn btn-success','id'=>'submit']) }}
    	</div>
    </div>


    {{ Form::close() }}

@stop