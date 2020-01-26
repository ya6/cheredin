<?php


if ( !function_exists('current_lacale') )
{
	function current_lacale()
	{

	//	dump(App::getLocale());
	//	dd(session('lang'));

		if((session('lang')) != null)
     	{ 
			App::setLocale(session('lang'));
			
			return App::getLocale();;
		}

		else return 'ru';
	}

}
