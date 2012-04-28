<div class="player">
<link href="code/jPlayer/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="code/jPlayer/js/jquery.min.js"></script>
<script type="text/javascript" src="code/jPlayer/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="code/jPlayer/js/jplayer.playlist.min.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_2",
		cssSelectorAncestor: "#jp_container_2"
	}, [
		<?PHP
		for ($i = 0; $i<$count; $i++) {
            $mp3 = $music[$i]['path'];
			$title = $music[$i]['name'];
			echo "{ title:'$title', mp3:'$mp3'}";
			if ($i != $count-1){
				echo ",";
			}
		}
		?>
	], {
		swfPath: "code/jPlayer/js",
		supplied: "mp3",
		wmode: "window"
	});
});
</script>
		<div id="jquery_jplayer_2" class="jp-jplayer"></div>

		<div id="jp_container_2" class="jp-audio">
			<div class="jp-type-playlist">
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>
						</div>
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-time-holder">
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
					</div>
					<ul class="jp-toggles">
						<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
						<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
						<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
						<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
					</ul>
				</div>
				<div class="jp-playlist">
					<ul style="overflow-y:auto;max-height:317px">
						<li></li>
					</ul>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>
        </div>
        <div class="text">
        <p>大办公室比较吵？ 想听音乐？</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;本地的音乐听腻了？想换换口味？</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在线听歌罚款100快？！！坑爹啊！</p>
        <p>欢迎来到 【爱帮内部音乐电台】</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;开始音乐分享之旅吧～</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;～don't tell Jerry～</p>
        <p>上传下载音乐【<a href="ftp://192.168.1.158/this_way_please">ftp://192.168.1.158</a>】</p>
        <p>ps：中文可能出现乱码，凑合听吧 =。=</p>
        <p><a href="http://192.168.1.158:8888">返回首页 猛击此处</a></p>
        </div>
