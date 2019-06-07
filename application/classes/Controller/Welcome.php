<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
    public $template = 'main';
	public function action_index()
	{
        $content = View::factory('welcome');

        // Передаем данные в шаблон welcome.php
        $content->age = 'больше 18';
        $content->name = 'Васька';

        // Передаем данные в шаблон по умолчанию - main.php
        $this->template->title = 'Работаем с Контроллером Шаблонов';
        $this->template->description = 'Учимся передавать данные в шаблоны';
        $this->template->content = $content;

	}

	public function action_test()
    {
        $description_main = Kohana::$config->load('mysite.description.main');
        $description_alt = Kohana::$config->load('mysite.description.alt');
        echo $description_main . '<br>' . $description_alt;
    }

} // End Welcome
