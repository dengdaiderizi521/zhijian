<?php
/**
  * 至简PHP开源框架
  * 版本：至简初学版
  * 官方网站：https://github.com/dengdaiderizi521/zhijian
  * 日期：2015-05-01
  * 示例文件，如果执行请修改方法中的table_name为真实表名
  */
class HomeModel extends BaseModel {
	function getTestData(){
		$result = $this->query("SELECT * FROM table_name LIMIT 0,1");
		if(!$result)  return false;
		$data = array();
		while ($row = mysql_fetch_assoc($result)) {	    //把查询结果重组成一个二维数组
			$data[] = $row;
		}
		mysql_free_result($result);
		return $data;
	}
}
?>