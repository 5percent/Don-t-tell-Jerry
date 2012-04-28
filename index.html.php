<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>don't tell Jerry</title>
		<style type="text/css">
			body{background-color:#000;}
			.page{position:relative;left:-500px;margin-left:50%;width:1000px;color:#fff;font:18px Helvetica,Arial,Simsun,sans-serif}
			.top{margin:50px 0;height:100px;background:url("code/style1_nav.png") repeat-x scroll 0 0 transparent;}
			.top img{margin:-50px -60px 0 0;float:right;}
			.center{height:400px;background-color:#444;padding:0 0 0 100px;}
			.center img{margin:90px 0 0 -254px;float:left;}
			.center .list a{background:url("code/button1.png") no-repeat;height:28px;width:170px;display:block;text-align:center;text-decoration:none;margin:10px 10px 0 0;float:left;padding:30px 0;}
			.center .list a:hover{background:url("code/button.png") no-repeat;}
			.center .list a:visited{color:#fff;}
            .center .text {margin:0 0 0 70px;float:left;}
            .center .text a{color:#259aca;text-decoration:none;}
            .center .text a:visited{color:#259aca;}
            .center .text a:hover{color:#FE8C19;}
            .center .player {margin-left:80px;float:left;}
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
                        if (!$_GET || !$_GET['dir']) {
                            $dirArray[]=NULL;
                            if (false !== ($handle = opendir("/srv/ftp/this_way_please"))) {
                                $i = 0;
                                while (false !== ($file = readdir($handle) )) {
                                    if ($file != "." && $file != "..") {
                                        $dirArray[$i]=$file;
                                        $i++;
                                    }   
                                }   
                                closedir($handle);
                            }   
                            $count = count($dirArray);
                            include_once("list.html.php");
                        }
                        else {
                            $dir = $_GET['dir'];
                            $music = getMp3($dir);
                            $count = count($music);
                            include_once("player.html.php");
                        }
                        ?>
				</div>
			<div class="footer">provide by zlu@aibang.com</div>
		</div>
		
	</body>
</html>
<?PHP
function getFileTree($path){
    $tree = array();
	if (false !== ($handle = opendir($path))) {
		$i = 0;
		while (false !== ($file = readdir($handle) )) {
			if ($file != "." && $file != "..") {
				$childPath = $path .'/'. $file;
				if (is_dir($childPath)) {
					$tree = array_merge($tree, getFileTree($childPath));
				}   
				else {
					$tree[$i]['name']=$file;
					$tree[$i]['path']=$path .'/'. $file;
					$i++;
				}   
			}   
		}   
		closedir($handle);
	}   

	return $tree;
}
function getMp3($dir) {
	$path = "/srv/ftp/this_way_please/" . $dir ;
	$files = getFileTree($path);
	$music = array();
	$num = 0;
	for ($i = 0; $i<count($files); $i++) {
		if (stripos($files[$i]['name'], '.mp3')) {
			$music[$num]['path'] = str_replace('/srv/ftp/', '' , $files[$i]['path']);	
			$music[$num]['path'] = str_replace("'", "\'" , $music[$num]['path']);	
            $pathArray = explode("/", $music[$num]['path']);
            if (is_array($pathArray)) {
                foreach ($pathArray as &$each) {
                    $each = rawurlencode($each);
                }
            }
            $music[$num]['path'] = implode("/", $pathArray);
			$music[$num]['name'] = str_replace('.mp3', '' , $files[$i]['name']);	
			$music[$num]['name'] = str_replace("'", "\'" , $music[$num]['name']);	
			$num++;
		}
	}

	return $music;
}
?>
