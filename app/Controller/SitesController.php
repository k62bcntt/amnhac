<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
App::uses('ConnectionManager', 'Model');
App::import('Vendor','amnhac/functions');
class SitesController extends AppController
{
	public $components = array();
	public $helpers = array();
	public $name = 'Sites';
	public $uses = array();
	public function beforeFilter()
	{
		parent::beforeFilter();
	}
	public function afterFilter(){}
	public function beforeRender(){}
	public function index()
	{
		$this->layout = 'layout-frontend';
		$this->set('title_for_layout','Trang chủ');
	}
	public function admin_index()
	{
		$this->layout = 'layout-backend';
		$this->set('title_for_layout','Trang quản lý');
	}
}