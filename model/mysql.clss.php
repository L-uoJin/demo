<?php
define('MYSQL_PATH', $_SERVER['DOCUMENT_ROOT']);
class helper{
	public $con;
	static private $host=" ";
	static private $user=" ";
	static private $dbname=" ";
	static private $password=" ";
	public $mysqli; 
    public $c;
    public $dbconf;
    function  __construct(){
     $this->c = file_get_contents(MYSQL_PATH."/shudian/smarty/config/db.conf");
     $this->dbconf = json_decode( $this->c,true);//对 JSON 格式的字符串进行解码
     self::$host =  $this->dbconf["host"];
     self::$user =  $this->dbconf["user"];
    self:: $dbname= $this->dbconf["username"];
     self::$password= $this->dbconf["password"];
	$this->mysqli=new Mysqli(self::$host,self::$user,self::$password,self::$dbname);
	if($this->mysqli->connect_error){
		die("失败".$this->mysqli->connect_error);
	}
    $this->mysqli->query("set names utf8");
    }
	function dql($sql)
	{
		$arr=array();
		$i=0;
		$res1=$this->mysqli->query($sql) or die("操作sql失败".$this->mysqli->error);
		while($row1=$res1->fetch_assoc())
		{
		$arr[$i]= $row1;
		$i=$i+1;
		}
		$res1->free();
		return $arr;
	}
	function exectue_dml($sql)
    {
		$result1=$this->mysqli->query($sql) or  die("在连接数据库时失败".$this->mysqli->error);
		if(!$result1)
	    {
	      return 0;
	    }
	    else {
	    	if($this->mysqli->affected_rows>0)
	    	{
	    		return 1;
	    	}
	    	else return 2;
	    }
    }
 	function update_dml($table,$arr,$id)
    {
    	$sql="update ".$table." set ";
        foreach ($arr as $key => $value) {
        $sql.=$key."="."'".$value."'".",";
        }
        $sql = trim($sql, ',');
        $sql.="where id=".$id;
        $result1=$this->mysqli->query($sql) or  die("在连接数据库时失败".$this->mysqli->error);
		if(!$result1)
	    {
	      return 0;
	    }
	    else {
	    	if($this->mysqli->affected_rows>0)
	    	{
	    		return 1;
	    	}
	    	else return 2;
	    }
    }

    function insert_id()
    {
      return $this->mysqli->insert_id;
    }

function filed($sql)
{
	if ($result = $this->mysqli->query($sql)) {

    /* Get field information for all columns */
    while ($finfo = $result->fetch_field()) {  
        return $finfo;
}
}
}

/*INSERT INTO tb_form (`formid`, `commo_id`, `commo_name`, `commo_num`, `agoprice`, `fold`, `total`, `vendee`, `taker`, `address`, `tel`, `code`, `pay_method`, `del_method`, `formtime`, `state`) 
VALUES ('123456', '1', '龙王传说', '1', '18', '9', '18', 'cc', 'cc', '广东省中山市中山职业技术学院', '13145875412', '516700', '支付宝', '快递', CURRENT_TIMESTAMP, '0');*/
function insert_dml($table,$arr)
    {
    	$sql="insert into ".$table.'(';
        foreach ($arr as $key => $value) {
        $sql.=$key.",";
        }
        $sql = trim($sql, ',');
         $sql.=") values (";
       foreach ($arr as $key => $value) {
        $sql.="'".$value."',";
        }
        $sql = trim($sql, ',');
        $sql.=")";
        $result1=$this->mysqli->query($sql) or  die("在连接数据库时失败".$this->mysqli->error);
		if(!$result1)
	    {
	      return 0;
	    }
	    else {
	    	if($this->mysqli->affected_rows>0)
	    	{
	    		return 1;
	    	}
	    	else return 2;
	    }
    }
}
?>