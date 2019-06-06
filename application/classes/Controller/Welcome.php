<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
//	    $data = [
//	        'name' => 'Васька',
//            'age' => 25
//        ];
//	    $this->response->body(View::factory('welcome', $data));

//        $view = View::factory('welcome');
//        $view->name = 'Васька';
//        $view->age = '25';

//        $view = View::factory('welcome')
//            ->set('name', 'Васька')
//            ->set('age', 25);

//        $view = View::factory('welcome')
//            ->bind('name', $name)
//            ->bind('age', $age);
//
//        $name = 'Васька';
//        $age = 25;

        $view = View::factory('welcome')
            ->bind('age', $age);
        $age = 'больше 18';
        //$view->name = 'Васька';
        $this->response->body($view);
	}

	public function action_test()
    {
        $description_main = Kohana::$config->load('mysite.description.main');
        $description_alt = Kohana::$config->load('mysite.description.alt');
        echo $description_main . '<br>' . $description_alt;
    }

} // End Welcome
