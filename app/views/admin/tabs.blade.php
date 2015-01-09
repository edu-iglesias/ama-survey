@extends('layouts.admin_layout')

@section("title")
	Admin - Tabs
@stop

@section("section_header")
	Tabs
@stop

@section("content")

	@if(Session::get('success'))
	<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>{{ Session::get('success') }}</p>
        {{ Session::forget('success') }}
    </div>
    @endif
	
	<div class="form-group @if ($errors->has('email')) has-error @endif">
		{{ Form::open( ['role'=>'form'] ) }}

		<div class="col-md-3">
        	{{ Form::text('tab_name',null,['class' => 'form-control', 'placeholder' => 'Tab Name','maxlength'=>'50']) }}
        	@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    	</div>

    	{{ Form::submit("Create Tab", ['class'=>'btn btn-success','id'=>'submit']) }}

    	{{ Form::close() }}
    </div>

    <div class="col-md-8">
    	<table class="table">
    		<thead>
    			<th align="center">Tab Name</th>
    			<th>Actions</th>
    		</thead>
    		<tbody>

    			@if(count($tabs) == 0)
    				<tr>
    					<td colspan="2" align="center">There are no tabs</td>
    				</tr>
    			@else
    				@foreach($tabs as $tab)
    				<tr>
    					<td>
    						{{ $tab->tab_name; }}
    					</td>

    					<td>
	    					<a href="tabs/remove/{{$tab->id}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
	    					<a href="tabs/remove/{{$tab->id}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
	    				</td>
	    			<tr>
    				@endforeach

    			@endif
	    	
    		</tbody>
    	</table>
    	<center> {{ $tabs->links(); }} </center>
    </div>
@stop