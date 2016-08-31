# zhijian
至简PHP开源框架

感谢您下载使用至简PHP开源框架初学版2.0

##安装使用说明：

使用查询字符串的方式访问

	http://example.com?c=home&m=index&_param=other

	c表示controller, m表示method

使用段的方式(需开启Apache的mod_rewrite.so)

__需注意:从第三个段开始之后的所有内容均会传递给`_param`__

	http://example.com/home/index/other
	

©https://github.com/dengdaiderizi521/zhijian

至简PHP开源框架遵循Apache2开源协议发布。Apache Licence是著名的非盈利开源组织Apache采用的协议。

该协议和BSD类似，鼓励代码共享和尊重原作者的著作权，同样允许代码修改，再作为开源或商业软件发布。

如果您的项目有使用到mysql数据库，请到baseModel中设置数据库服务器信息。我们有提供示例。

