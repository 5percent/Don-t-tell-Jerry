<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>dtj</title>
		<style type="text/css">
			body{background-color:#000;}
			.page{position:relative;left:-500px;margin-left:50%;width:1000px;color:#fff;font:18px Helvetica,Arial,Simsun,sans-serif}
			.top{margin:50px 0;height:100px;background:url("code/style1_nav.png") repeat-x scroll 0 0 transparent;}
			.top img{margin:-50px -60px 0 0;float:right;}
			.center{height:400px;background-color:#444;padding:0 0 0 100px;}
			.center img{margin:90px 0 0 -254px;float:left;}
			.center a{background:url("code/button1.png") no-repeat;height:28px;width:170px;display:block;text-align:center;text-decoration:none;margin:10px 10px 0 0;float:left;padding:30px 0;}
			.center a:hover{background:url("code/button.png") no-repeat;}
			.center a:visited{color:#fff;}
			.footer{font-size:12px;margin-top:5px;padding-left:820px;}
		</style>
	</head>
	<body>
		<div class="page">
				<div class="top">
						<img src="code/tom.png"/>
						<p style="padding:7px 0 0 15px">爱帮音乐电台</p>
						<p style="text-align:center;font-size:22px">Don't&nbsp;&nbsp;&nbsp;Tell&nbsp;&nbsp;&nbsp;Jerry</p>
				</div>
				<div class="center">
						<img src="code/jerry.png" />
                        <?PHP 
                        for ($i = 0; $i< $count && $i <20; $i++) {
                            $name = $dirArray[$i];
                            $value = str_replace("'","\'", $name);
                            echo "<a href='http://192.168.1.158:8888/?dir=$value'>$name</a>";
                        }
                        ?>
				</div>
			<div class="footer">provide by zlu@aibang.com</div>
		</div>
		
	</body>
</html>
