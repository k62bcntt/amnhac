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
<!DOCTYPE html>
<html lang="en" class="app">
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
        echo $this->Html->css(array('frontend/bootstrap','frontend/animate','frontend/app','frontend/font','frontend/simple-line-icons','both/font-awesome.min', 'frontend/jplayer.flat'));
        echo $this->Html->script(array('frontend/jquery.min'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body class="">
	<section class="vbox">
	<?php  
	echo $this->element('frontend/header');
	?>
		<section>
	        <section class="hbox stretch">
	        	<?php
		        echo $this->element('frontend/mainnav');
		        ?>
	       	    <section id="content">
		            <section class="hbox stretch">
		                <section>
		                    <section class="vbox">
					        <?php
					        echo $this->fetch('content');
					        echo $this->element('frontend/footer');
					        ?>
					        </section>
				        </section>
			        </section>
		        </section>
	       </section>
        </section>
	</section>
	<?php
    echo $this->Html->script(array('both/bootstrap','frontend/jquery.slimscroll.min','frontend/jquery.jplayer.min','frontend/jplayer.playlist.min','frontend/demo','both/app.js'));
    ?> 
</body>
</html>
