<?php

class PagesController extends BaseController {

	public function home() {
		
		$name = 'earnnest';
		
		return View::make('hello')->with('name', $name);
		
	}

}