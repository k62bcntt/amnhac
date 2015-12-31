<?php 
	echo $this->Html->script(array('frontend/jwplayer/jwplayer','frontend/jwplayer/jwplayer.html5'));
?>
<script type="text/javascript">jwplayer.key="Dq2aWw/zQHdZWO1Px4qGgLVGlvl1E3638uJ+bQ==";</script>
<div id='content' class="jwplayer">Nội dung khi không có video</div>
<script type='text/javascript'>
	var baseurl = document.location.origin+'/du_an_ca_nhan/amnhac/app/webroot/';

    jwplayer("content").setup({
        volume: "100",
        menu: "true",
        control: "true",
        repeat: "true",
        allowscriptaccess: "always",
        wmode: "opaque",
        primary: 'html5',
        flashplayer: baseurl + "js/frontend/jwplayer/jwplayer.flash.swf",
        file: "http://stream2-hq.mp3.zdn.vn/KHYdldKjglwjAAAAA/1532bc757bed1c33badec96c643f9ba9/567c4138/2014/01/08/7/c/7c23302d68ae509cf6eda0881f721f05.mp3",
        width: "100%",
        height: "100%",
        fullscreen: "true"
    	});
    jwplayer("content").onDisplayClick(function() { jwplayer().setFullscreen(true); });
</script>
<style type="text/css">
	#content_wrapper
	{
		position: relative; 
		display: block; 
		width: 66% !important; 
		height: 80% !important;
	}
</style>t