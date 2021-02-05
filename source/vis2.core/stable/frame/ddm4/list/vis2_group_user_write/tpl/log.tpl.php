<?php

/**
 * This file is part of the osWFrame package
 *
 * @author Juergen Schwind
 * @copyright Copyright (c) JBS New Media GmbH - Juergen Schwind (https://jbs-newmedia.com)
 * @package osWFrame
 * @link https://oswframe.com
 * @license https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License 3
 */

$view_data[$this->getListElementValue($element, 'name')]=str_replace('#1#', $this->getGroupMessage('log_char_true'), $view_data[$this->getListElementValue($element, 'name')]);
$view_data[$this->getListElementValue($element, 'name')]=str_replace('#0#', $this->getGroupMessage('log_char_false'), $view_data[$this->getListElementValue($element, 'name')]);

?>