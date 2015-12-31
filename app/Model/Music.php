<?php
App::uses('AppModel', 'Model');
App::uses('Sanitize', 'Utility');
Class Music extends AppModel 
{
	public $useTable = 'musics';
    public $name = 'Music';
    public $primaryKey = 'id';
    public $validate = array();
    public $actsAs = array('Containable');
    public $hasOne = array();
    public $hasMany = array();
    public $belongsTo = array(
        // 'User' => array(
        //     'className' => 'User',
        //     'foreignKey' => 'idFrom',
        //     'counterCache' => true
        // )
    );
    public function beforeFind($query){}
    public function afterValidate(){}
    public function beforeSave($options = array()){}
    public function afterSave($created,$options = array()){}
    public function beforeDelete($cascade = true){}
    public function afterDelete(){}
    public function onError(){}
    public function Validate_Music_Create()
    {
    	if($this->validates($this->validate))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}