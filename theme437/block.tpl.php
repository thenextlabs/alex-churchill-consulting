<?php
// $Id: block.tpl.php,v 1.2 2007/08/07 08:39:36 goba Exp $
?>

<div class="<?php print "block block-$block->module" ?>" id="<?php print "block-$block->module-$block->delta"; ?>">
	<div class="bgr"><div class="block-bg">
		<div class="title">
			<div><div>
				<h3><?php print $block->subject ?></h3>
			</div></div>
		</div>
	
		<div class="indent">
			<?php print $block->content ?>
		</div>
	
	</div></div>
</div>
