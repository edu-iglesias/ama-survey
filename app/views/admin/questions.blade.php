@extends('layouts.admin_layout')

@section("title")
    Admin - Questions
@stop

@section("section_header")
    Questions
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
        <a href="questions/create" class="btn btn-success"><i class="fa fa-plus"></i> Add Question</a>
    </div>

    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <td width="25%"><b>Tab</b></td>
                    <td width="25%"><b>Question Type</b></td>
                    <td width="25%"><b>Question</b></td>
                    <td width="25%"><b>Action</b></td>
                </tr>
            </thead>
            <tbody>

                @if(count($questions) == 0)
                    <tr>
                        <td colspan="4" align="center">There are no questions</td>
                    </tr>
                @else
                    @foreach($questions as $question)
                    <tr>
                        <td>
                           {{ $question->tab_name}}
                        </td>

                        <td>
                            @if($question->question_type == 1)
                                Multiple Choice
                            @else
                                Text
                            @endif
                        </td>

                        <td>
                            {{ $question->question }}
                        </td>

                        <td>
                            <a href="questions/edit/{{$question->id}}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="questions/remove/{{$question->id}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fa fa-times"></i></a>
                        </td>
                    <tr>
                    @endforeach

                @endif
            
            </tbody>
        </table>
        <center> {{ $questions->links(); }} </center>
    </div>
@stop