<?php
/**
 * Home Controller
 *
 * @license MIT
 * @copyright 2015 Tommy Teasdale
 */
namespace Apine\Controllers\User;

use Apine\MVC;
use Apine\Session as Session;
use Apine\Core\Encryption;

class HomeController extends MVC\Controller {
	
	public function index ($params) {
		
		$this->_view->set_title('Home');
		$this->_view->set_view('home/home');
		
		$this->_view->set_response_code(200);
		
		//$this->_view->set_param("array",array("terminate"=> "die"));
		
		if (Session\SessionManager::is_logged_in()) {
			$user = Session\SessionManager::get_user();
			$number_access = $user->get_property('access_nb');
			$user->set_property('access_nb', $number_access+1);
			$user->save();
			//print "Value of property \"access_nb\" => " . $user->get_property('access_nb');
			$this->_view->set_param("home_views", $user->get_property('access_nb'));
		}
		
		return $this->_view;
		
	}
	
	public function about () {
		
		$this->_view->set_title('About');
		$this->_view->set_view('home/about');
	
		$this->_view->set_response_code(200);
		
		return $this->_view;
		
	}
	
}