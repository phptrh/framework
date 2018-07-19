<?php
/**
 * @name SampleModel
 * @desc sample数据获取类, 可以访问数据库，文件，其它系统等
 * @author x2nnu6qmzcxip7v\administrator
 */
class BaseModel {
	protected $db;
    public function __construct() {
    	$this->db=new PDO('mysql:dbname=framework','root','9644');
    }   
    
    public function get($sql) {
        $stam=$this->db->query($sql);
        return $stam->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($sql) {
        return $this->db->exec($sql);
    }
}