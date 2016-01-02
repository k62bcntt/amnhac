<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('frontend/style','frontend/layout','frontend/prettyPhoto'));
        echo $this->Html->script(array('frontend/jquery.min'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body id="page1">
	<div id="main">
		<?php  
		echo $this->element('frontend/header');
		echo $this->element('frontend/slide');
		echo $this->fetch('frontend/content');
		?>
		<div class="af clear"></div>
	</div>
	<?php  
		// echo $this->element('frontend/footer');
	?>
	<?php
    echo $this->Html->script(array('frontend/cufon-yui','frontend/cufon-replace','frontend/Josefin_Sans_600.font','frontend/Lobster_400.font','frontend/sprites','frontend/jquery.jplayer.min','frontend/jquery.jplayer.settings','frontend/gSlider','frontend/jquery.easing.1.3','frontend/jquery.prettyPhoto'));
    ?> 
<script type="text/javascript">Cufon.now()
$(function(){
	$('nav,.more,.header-more').sprites()

	$('.header-slider').gSlider({
		prevBu:'.hs-prev',
		nextBu:'.hs-next'
	})
})
$(window).load(function(){
	$('.tumbvr')._fw({tumbvr:{
		duration:2000,
		easing:'easeOutQuart'
	}})
	.bind('click',function(){
		location="index-3.html"
	})
	
	$('a[rel=prettyPhoto]').each(function(){
		var th=$(this),
			pb
		th
			.append(pb=$('<span class="playbutt"></span>').css({opacity:.7}))
		pb
			.bind('mouseenter',function(){
				$(this)
					.stop()
					.animate({opacity:.9})
			})
			.bind('mouseleave',function(){
				$(this)
					.stop()
					.animate({opacity:.7})
			})
	})
	.prettyPhoto({theme:'dark_square'})
})
</script>
</body>
</html>
