<?php

class AdminController extends BaseController 
{

	public function index()
	{
		return "This is the admin login page.";
	}

	public function dashboard()
	{
		return View::make('admin/index');
	}

	public function original()
	{
		return View::make('admin/original');
	}

	public function tabs()
	{
		$tabs = Tabs::paginate("10");
		return View::make('admin/tabs')
			->with('tabs', $tabs);
	}

}
