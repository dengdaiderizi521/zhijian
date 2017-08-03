<?php
/**
  * 至简PHP开源框架
  * 版本：至简初学版
  * 官方网站：https://github.com/dengdaiderizi521/zhijian
  * 日期：2017-07-31
  */
class BaseModel {

	private $_link; //定义类属性

	//构造方法，初始化数据库连接
	function __construct() {

		//设置数据库服务器地址，用户名，密码并连接数据库
		$this->_link = mysqli_connect('mysql_host_name','mysql_username','mysql_username') or die('数据库服务器连接失败');

		//设置数据库字符集
		mysqli_query($this->_link, 'set names utf8');

		//选择数据库
		mysqli_select_db($this->_link, 'dbname');
	}

	/**
	 * 析构方法，释放资源，关闭数据库连接
	 */
	function __destruct(){
		@mysqli_close($this->_link);
	}
	
	/**
	  * 执行SQL语句
	  * 返回结果集
	  */
	final public function query($sql) {
		if(empty($this->_link)) return false;			//如果连接为空则返回FALSE
		$result = mysql_query($this->_link, $sql);
		return $result;
	}
}
?>