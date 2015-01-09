<?php

class TabsSeeder extends Seeder
{
	public function run()
	{
		DB::table('tabs')->delete();

		$tab = new Tabs;
		$tab->tab_name = "STUDENT PLAN";
		$tab->save();

		$tab = new Tabs;
		$tab->tab_name = "SATISFACTION WITH PROGRAM, QUALITY OF INTERACTION AND COURSE";
		$tab->save();

		$tab = new Tabs;
		$tab->tab_name = "UNIVERSITY RESOURCES AND STUDENT LIFE";
		$tab->save();

		$tab = new Tabs;
		$tab->tab_name = "GENERAL ASSESSMENT";
		$tab->save();

		$tab = new Tabs;
		$tab->tab_name = "PERSONAL DEMOGRAPHIC";
		$tab->save();

		$tab = new Tabs;
		$tab->tab_name = "PERSONAL DEMOGRAPHIC 2";
		$tab->save();

		$tab = new Tabs;
		$tab->tab_name = "PERSONAL DEMOGRAPHIC 3";
		$tab->save();


	}

}
