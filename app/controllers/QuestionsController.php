<?php

class QuestionsController extends BaseController 
{

	public function index()
	{
		$questions = DB::table('questions')->join('tabs', 'questions.tab_id', '=', 'tabs.id')->paginate(10);
		return View::make('admin/questions')
			->with('questions', $questions);
	}

	public function create()
	{
		$tabs = tabs::lists('tab_name', 'id');
		return View::make('admin/add_question')
			->with('tabs', $tabs);
	}

	public function do_create()
	{
		$question = new Questions;
		$question->tab_id = Input::get("tab");
		$question->question_type =Input::get("question_type");
		$question->question =Input::get("question");
		$question->save();
	}
}
