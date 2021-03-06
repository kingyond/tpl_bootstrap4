<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Content.pagenavigation
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$row->prev_label = ($this->params->get('display', 0) == 0) ? JText::_('JPREVIOUS') : htmlspecialchars($rows[$location+1]->title);
$row->next_label = ($this->params->get('display', 0) == 0) ? JText::_('JNEXT') : htmlspecialchars($rows[$location-1]->title);

$lang = JFactory::getLanguage(); ?>

<ul class="pager pagenav">
<?php if ($row->next) :
    $direction = !$lang->isRtl() ? 'laquo' : 'raquo'; ?>
    <li class="previous">
        <a class="hasTooltip" title="<?php echo htmlspecialchars($rows[$location+1]->title); ?>" aria-label="<?php echo JText::sprintf('JPREVIOUS_TITLE', htmlspecialchars($rows[$location+1]->title)); ?>" href="<?php echo $row->next; ?>" rel="previous">
            <?php echo '<span class="icon-' . $direction . '" aria-hidden="true"></span> <span aria-hidden="true">' . $row->prev_label . '</span>'; ?>
        </a>
    </li>
<?php endif; ?>
<?php if ($row->prev) :
    $direction = !$lang->isRtl() ? 'raquo' : 'laquo'; ?>
    <li class="next">
        <a class="hasTooltip" title="<?php echo htmlspecialchars($rows[$location-1]->title); ?>" aria-label="<?php echo JText::sprintf('JNEXT_TITLE', htmlspecialchars($rows[$location-1]->title)); ?>" href="<?php echo $row->prev; ?>" rel="next">
            <?php echo '<span aria-hidden="true">' . $row->next_label . '</span> <span class="icon-' . $direction . '" aria-hidden="true"></span>'; ?>
        </a>
    </li>
<?php endif; ?>
</ul>
