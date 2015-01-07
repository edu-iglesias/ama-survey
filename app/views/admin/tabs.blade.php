@extends('layouts.admin_layout')

@section("title")
	Admin - Tabs
@stop

@section("section_header")
	Tabs
@stop

@section("content")

	<div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
    </div>
	
	<div class="form-group @if ($errors->has('email')) has-error @endif">
		<div class="col-md-3">
        {{ Form::text('email',null,['class' => 'form-control', 'placeholder' => 'Tab Name','maxlength'=>'50']) }}
        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    	</div>
    	{{ Form::submit("Create Tab", ['class'=>'btn btn-success']) }}
    </div>

    <div class="col-md-8">
    	<table class="table">
    		<thead>
    			<th>Tab Name</th>
    			<th>Actions</th>
    		</thead>
    		<tbody>
	    		<tr>
	    			<td>hahaha</td>
	    			<td>
	    				{{ Form::button("Edit", ['class'=>'btn btn-warning']) }}
	    				{{ Form::button("Delete", ['class'=>'btn btn-danger']) }}

	    			</td>
	    		</tr>

	    		<tr>
	    			<td>hahaha</td>
	    			<td>
	    				{{ Form::button("Edit", ['class'=>'btn btn-warning']) }}
	    				{{ Form::button("Delete", ['class'=>'btn btn-danger']) }}

	    			</td>
	    		</tr>

	    		<tr>
	    			<td>hahaha</td>
	    			<td>
	    				{{ Form::button("Edit", ['class'=>'btn btn-warning']) }}
	    				{{ Form::button("Delete", ['class'=>'btn btn-danger']) }}

	    			</td>
	    		</tr>
    		</tbody>
    	</table>
    </div>
@stop