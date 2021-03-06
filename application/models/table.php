<?php
/*
 * 示范文件
 * 数据库详细操作类，继承数据库类，在本例中类名必须以models_开头
 * 以什么开头取决于你在bootstrap.php中的设置
 * 一个表一个文件
 */
class models_table extends Database{
	public function __construct(){
		parent::__construct();
		$this->_table = 'front_user'; //表名
	}

	public function getData(){
		$this->_column = 'username';
		$this->_where = array('id'=>7);
		$data = $this->_getOne();
		var_dump($data);
		echo $this->_sql;
	}

	public function getDataAll(){
		$this->_column = 'id';
		$this->_where = array('username'=>'aaa');
		$this->_limit = 5;
		$data = $this->_getAll();
		var_dump($data);
		echo $this->_sql;
	}

	public function updateData(){
		$this->_value = array('username'=>'aaa');
		$this->_where = 'id=5';
		$rows = $this->_update();
		var_dump($rows);
		echo $this->_sql;
	}

	public function deleteData(){
		$this->_where = 'id=5';
		$rows = $this->_delete();
		var_dump($rows);
		echo $this->_sql;
	}

	public function insertData(){
		$this->_value = array('username'=>'abc', 'email'=>'aa');
		$lastId = $this->_insert();
		var_dump($lastId);
		echo $this->_sql;
	}
}