<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::import('Vendor', 'simple_html_dom/simple_html_dom');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */

class AppController extends Controller {

	var $components = array('Session');
	var $helpers = array('Paginator','Html','Convert');
	public function beforeFilter() {
		parent::beforeFilter();
		define('fullBaseUrl', Configure::read('App.fullBaseUrl'));
		$this->uses = array('Author','Category','Book');
		$this->paginate = array();
		//Get All category
		$categories = $this->Category->find("threaded",array(
			'recursive' => 0,
			)
		);
		$this->set('categories',$categories);
		//Get Best Seller
		$bestSellers = $this->Book->find("all",array(
			'limit' => 5,
			'order' =>'rand()',
			));
		$this->set('bestSellers',$bestSellers);
	}
}
