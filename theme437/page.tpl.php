<?php // $Id: page.tpl.php,v 1.25 2008/01/24 09:42:53 Leo Exp $?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
	<title><?php print $head_title ?></title>
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta name="google-site-verification" content="ZkUo0B_XtaXNPefbk4nMtJH_tH8Hriijh5JDjEYPpSQ" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
	
	<?php print $head ?>
	<?php print $styles ?>
	<?php print $scripts ?>
	
	<script src="<?php print base_path() ?>/misc/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script.js"></script>
<script type="text/javascript">

var speed = 150            //vitesse d'écriture
var speed2 = 500       //temp de pause
// Ci-dessous : Rajoutez des messages sans oublier de changer le numéro du msg[…] 
msg = []

function upticker(){ 
	if (y > msg2.length - 1) {
		y = 0; setTimeout("upticker()",speed);}
	else{if (x > msg2[y].length) {
		msg = msg2[y];x = 0; y++;
		setTimeout("upticker()",speed2);
	}
	else {
		msg = msg2[y].substring(0,x++);
		setTimeout("upticker()",speed);
	}
	t.innerHTML = msg };
} 

setTimeout("upticker()",speed);

function init(){
	t=document.getElementById("ticker");
	msg[0]=t.innerHTML;msg2 = msg;x = y = 0;
	upticker()
}

window.onload=init

</script>

</head>

<body id="body">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div class="main">
		<div class="main-bg">
		
			<div class="main-width">
			
				<div class="header">
				
					<div class="search">
						<div class="indent">
						    
						    
						    
						    &nbsp;&nbsp;<a href="https://twitter.com/ivormonaco" class="twitter-follow-button" data-show-count="true" data-button="grey">Follow</a>
						    <script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
							
							
							<div class="follow">
							
							<?php print $top; ?>	
							</div>
							
							<?php if ($search_box): print $search_box;  endif; ?>
						</div>
					</div>
				
					<div class="logo">
						
							<h1 class="site-name">Alex & Churchill Consulting</h1>
						
					    <?php if ($site_slogan != ""): ?>
					    
							<div id="ticker" class="site_slogan"><?php print $site_slogan ?></div>
						<?php endif; ?>
						<div class="indent"><?php if ($logo) : ?>
							<h1><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" /></a></h1>
						<?php endif; ?>
						
						
						
						
						<?php if ($mission != ""): ?>
							<div id="mission"><?php print $mission ?></div>
						<?php endif; ?></div>
					</div>
						
				</div>
				
				<div class="content"><div class="content-bg">
					<div class="content-indent">
				
						
							<div class="column-left">
								
								<?php if (module_hook('yuimenu','menu') && ("tns" == variable_get('yuimenu_type','tns') || "tnm"==variable_get('yuimenu_type','tns')) ){?>
								
									<div class="main-menu">
										<div class="menu-bg">
										
											<?php print html_menu(variable_get('yuimenu_root','1') ); ?>
											
										</div>
									</div>
								<?php }?>
								
								<?php print $left?>
								
							</div>
						
						
						<?php if ($right != ""): ?>
							<div class="column-right">
								<?php print $right?>
							</div>	
						<?php endif; ?>
						
						<div class="column-center">
						
							<?php if ($is_front == "1"): ?>
								<?php 
									global $language ;
									$lang_name = $language->language ;
								?>
								<div class="flash">
									<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
										width="649" height="353">
										<param name="movie" value="<?php print base_path().path_to_theme() ?>/flash/<?php print $lang_name ?>/header_v8.swf?picUrl=<?php print base_path().path_to_theme() ?>/flash/<?php print $lang_name ?>/pic/&xmlUrl=<?php print base_path().path_to_theme() ?>/flash/<?php print $lang_name ?>/xml/&xmlUrl2=<?php print base_path().path_to_theme() ?>/flash/<?php print $lang_name ?>/xml/tfile_main_2.xml" />
										
										<param name="quality" value="high" />
										<param name="menu" value="false" />
										<param name="wmode" value="transparent"  />
										<!--[if !IE]><-->
											<object data="<?php print base_path().path_to_theme() ?>/flash/<?php print $lang_name ?>/header_v8.swf?picUrl=<?php print base_path().path_to_theme() ?>/flash/<?php print $lang_name ?>/pic/&xmlUrl=<?php print base_path().path_to_theme() ?>/flash/<?php print $lang_name ?>/xml/&xmlUrl2=<?php print base_path().path_to_theme() ?>/flash/<?php print $lang_name ?>/xml/tfile_main_2.xml"
											width="649" height="353" type="application/x-shockwave-flash">
											
											<param name="quality" value="high" />
											<param name="menu" value="false" />
											
											<param name="wmode" value="transparent"  />
											<param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
											FAIL (the browser should render some flash content, not this).
										</object>
										<!--><![endif]-->
									</object>
									
								</div>
							<?php endif; ?>
							
							<div class="column-center-bg">
								<?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
								<?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs title"' : '') .'>'. $title .'</h2>'; endif; ?>
								<?php if ($tabs): print $tabs .'</div>'; endif; ?>
								<?php if ($show_messages && $messages != ""): ?>
								<?php print $messages ?>
								<?php endif; ?>
								<?php if ($help != ""): ?>
									<div id="help"><?php print $help ?></div>
								<?php endif; ?>
								<!-- start main content -->
								<?php print $content; ?>
							</div>
							
						</div>
						
						<div class="footer"><div class="footer-bg">
							<div class="width">
								<div class="indent">
									<?php if ($footer_message || $footer) : ?>
										<?php print $footer_message;?> <?php print date("Y");?>&nbsp;
									<?php endif; ?>
								</div>
							</div>
						</div></div>
						
					</div>
				</div></div>
				
			</div>
		</div>
		
	</div>
	
	<?php print $closure;?>
	
</body></html>