<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
App::uses('ConnectionManager', 'Model');
App::import('Vendor','amnhac/functions');
App::import('Vendor','amnhac/ssp');
class MusicsController extends AppController
{
	public $components = array();
	public $helpers = array();
	public $name = 'Musics';
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
	public function list_song()
	{
		$this->layout = null;
		$this->autoRender = false;
		$dataSource = ConnectionManager::getDataSource('default');
		$table = 'musics';
		$primaryKey = 'id';
		$columns = array(
			array(
				'db'        => 'id',
				'field'     => 'id',
				'dt'        => 0,
				'formatter' => function($d,$row){
					return "<input class='checkboxed' type='checkbox' name='userid[]' value='{$d}'/>";
				}
			),
			array(
				'db'        => 'image',
				'field'     => 'image',
				'dt'        => 1,
				'formatter' => function($d,$row)
				{
					if(empty($d))
					{
						// $view = new View();
						// return $view->Html->image('avataruser/avatarDefault.png',array('width'=>'70px','height'=>'70px'));
						return $d;
					}
					else
					{	
						return "<img src='{$d}' width='70px' height='70px' />";
					}
				}
			),
			array(
		    	'db'        => 'id',
		    	'field'     => 'id',
		    	'dt'        => 2,
		    	'formatter' => function($d,$row)
		    	{
		    		$str = "<div class='btn-group btn-group-xs'><a href='".Router::url(array('controller'=>'musics','action'=>'edit_song','admin'=>true,'id'=>$d))."' class='btn btn-success'>";
		    		$str .= "<i class='fa fa-edit'></i></a></div>&nbsp;";
		    		$str .= "<div class='btn-group btn-group-xs'>";
		    		$str .= "<button class='btn btn-danger removemusic' title='Xóa bài hát' musicid='".$d."' type='button' id='remove-".$d."'><i class='fa fa-trash'></i>Xoá</button></div>";
		    		return $str;
		    	}
		    ),
			array(
				'db'        => 'name',
				'field'     => 'name',
				'dt'        => 3,
				'formatter' => function($d,$row){
					return $d;
				}
			),
			array(
				'db'        => 'type',
				'field'     => 'type',
				'dt'        => 4,
				'formatter' => function($d,$row){
					return $d;
				}
			),
			array(
				'db'        => 'idTacgia',
				'field'     => 'idTacgia',
				'dt'        => 5,
				'formatter' => function($d,$row){
					return $d;
				}
			),
			array(
				'db'        => 'namSangtac',
				'field'     => 'namSangtac',
				'dt'        => 6,
				'formatter' => function($d,$row){
					return $d;
				}
			),
			array(
				'db'        => 'moTa',
				'field'     => 'moTa',
				'dt'        => 7,
				'formatter' => function($d,$row){
					return $d;
				}
			),
			array(
				'db'        => 'created',
				'field'     => 'created',
				'dt'        => 8,
				'formatter' => function($d,$row){
					return $d;
				}
			)
		);
		$sql_details = array(
		    'user' => $dataSource->config['login'],
		    'pass' => $dataSource->config['password'],
		    'db'   => $dataSource->config['database'],
		    'host' => $dataSource->config['host']
		);
		App::import('Vendor','amnhac/ssp');
		$joinQuery = "FROM musics";
		echo json_encode(SSP::simple($_GET,$sql_details,$table,$primaryKey,$columns,$joinQuery));
	}
	public function add_song()
	{
		$this->layout = 'layout-backend';
		$this->set('title_for_layout','Thêm bài hát');
		$alert = null;
		if($this->Music->Validate_Music_Create())
		{
			$this->Music->set($this->request->data);
			if($this->request->is(array('post','put')))
			{
				$this->Music->create();
				if($this->Music->save($this->request->data))
				{
					$alert = 1;
				} else {
					$alert = 2;
				}
			}
		}
		$this->set(compact('alert'));
	}
}