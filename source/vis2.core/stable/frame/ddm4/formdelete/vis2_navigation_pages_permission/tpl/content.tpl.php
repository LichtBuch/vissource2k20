<?php

/**
 * This file is part of the VIS2 package
 *
 * @author Juergen Schwind
 * @copyright Copyright (c) JBS New Media GmbH - Juergen Schwind (https://jbs-newmedia.com)
 * @package VIS2
 * @link https://oswframe.com
 * @license https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License 3
 */

?>

<div class="form-group ddm_element_<?php echo $this->getDeleteElementValue($element, 'id') ?>">

	<?php /* label */ ?>

	<label for="<?php echo $element ?>"><?php echo \osWFrame\Core\HTML::outputString($this->getDeleteElementValue($element, 'title')) ?><?php echo $this->getGroupMessage('form_title_closer') ?></label>

	<?php /* read only */ ?>

	<?php $ar_navigation_permission=$this->getDeleteElementStorage($element) ?>

	<?php $permission_list=\VIS2\Core\Manager::getPermissionTextList($this->getDeleteElementOption($element, 'tool_id')) ?>


	<?php if (!empty($permission_list)): ?>

		<?php foreach ($permission_list as $permission_flag=>$permission_text): ?>

			<div class="custom-checkbox">
				<?php if (isset($ar_navigation_permission[$permission_flag])&&($ar_navigation_permission[$permission_flag]==1)): ?><?php echo '#1# '.\osWFrame\Core\HTML::outputString($permission_text) ?><?php else: ?><?php echo '#0# '.\osWFrame\Core\HTML::outputString($permission_text) ?><?php endif ?><?php echo $this->getTemplate()->Form()->drawHiddenField($element.'_'.$permission_flag, 0) ?>
			</div>

		<?php endforeach ?>

	<?php endif ?>

	<?php /* error */ ?>

	<?php if ($this->getTemplate()->Form()->getErrorMessage($element)): ?>
		<div class="text-danger small"><?php echo $this->getTemplate()->Form()->getErrorMessage($element) ?></div>
	<?php endif ?>

	<?php /* notice */ ?>

	<?php if ($this->getDeleteElementOption($element, 'notice')!=''): ?>
		<div class="text-info"><?php echo \osWFrame\Core\HTML::outputString($this->getDeleteElementOption($element, 'notice')) ?></div>
	<?php endif ?>

	<?php /* buttons */ ?>

	<?php if ($this->getDeleteElementOption($element, 'buttons')!=''): ?>
		<div><?php echo implode(' ', $this->getDeleteElementOption($element, 'buttons')) ?></div>
	<?php endif ?>

</div>