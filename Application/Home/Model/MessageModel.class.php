<?php
namespace Home\Model;
use Think\Model\RelationModel;
	class MessageModel extends RelationModel{
		

		protected $_link = array(
        	'Message'=>array(
        		'mapping_type'=> self::BELONGS_TO,//关联数据的映射类型
				'class_name'=>'User',
				'foreign_key'=>'uid',//关联的外键名称
				'mapping_name'=>'user',//关联的数据名称，用于获取数据用。该名称不要和当前模型的字段有重复，否则会导致关联数据获取冲突
				'mapping_fields'=>'username',//关联要查询的字段
				'as_fields'=>'username',//直接把关联的字段值映射成数据对象中的某个字段

				),
    	 );


		
	}
?>