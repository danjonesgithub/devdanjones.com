<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$canEdit = $this->item->params->get('access-edit');
$info    = $params->get('info_block_position', 0);

// Check if associations are implemented. If they are, define the parameter.
$assocParam = (JLanguageAssociations::isEnabled() && $params->get('show_associations'));

?>
<article class="col-12 project-container">
	<div class="container-fluid">
		<div class="row">
			<!--Title-->
			<div class="row-title col no-padding">
				<a href='<?php echo explode("|", $this->item->title)[1]; //Using 2nd part of item title to store the href ?>' target="_blank">
					<?php echo explode("|", $this->item->title)[0]; //Using 1st part of item title to store the name ?>
				</a>
			</div>
		</div>
		<div class="row">
			<!-- Image -->
			<div class="col-sm-3 no-padding">
				<a class="img-link" href='<?php echo explode("|", $this->item->title)[1]; //Using 2nd part of item title to store the href ?>' target="_blank">
					<?php echo JLayoutHelper::render('joomla.content.intro_image', $this->item); ?>
				</a>
			</div>
			<div class="col-sm-9">
				<!--Intro Text-->
				<div class="row-introtext"><?php echo $this->item->introtext; ?></div>

				<!--Tags-->
				<?php if (!empty($this->item->tags->itemTags)) : ?>
					<?php echo JLayoutHelper::render('joomla.content.tags', $this->item->tags->itemTags); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</article>
