<?php

class TabsController extends BaseController 
{

	public function index()
	{
		$tabs = Tabs::paginate("10");
		return View::make('admin/tabs')
			->with('tabs', $tabs);
	}

	public function create()
	{
		$tab = new Tabs;
		$tabName = Input::get("tab_name");
		$tab->tab_name = $tabName;
		$tab->save();

		Session::put("success", "You have successfully created $tabName tab.");
		return Redirect::back();
	}

}
