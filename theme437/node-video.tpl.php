<?php
// $Id: node.tpl.php,v 1.4 2007/08/07 08:39:36 goba Exp $
?>
		<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
			<div class="indent">
				<?php if ($page == 0): ?>
					<div class="title">
						<?php print $picture ?>
						<br><br>
						<h1><a href="<?php print $node_url ?>"><?php print $title ?></a></h1>
						
						<div class="date"><?php print $submitted ?></div>	
						
					</div>
				<?php endif; ?>
		
				<div class="taxonomy"><?php print $terms ?></div>
			
				<div class="text-box">
				<?php print $field_videocast[0]['view']; ?>
				<p><?php print $node->content['body']['#value']; ?></p>
				
				</div>
				
				<?php if ($links): ?>
					<div class="post-links"><?php print $links ?></div>
				<?php endif; ?>
				
					
			</div>
		</div>
		
		
		

