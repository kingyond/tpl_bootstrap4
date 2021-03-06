<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$title = $item->title;
if ($item->anchor_title)
{
    $title = $item->anchor_title;
}
$title = ' title="' . $title . '"';

$anchor_css = '';
if ($item->anchor_css)
{
    $anchor_css .= $item->anchor_css . ' ';
}
$anchor_css .= 'nav-link';

$linktype = $item->title;

if ($item->menu_image)
{
    $linktype = JHtml::_('image', $item->menu_image, $item->title);
    if ($item->menu_image_css)
    {
        $image_attributes['class'] = $item->menu_image_css;
        $linktype = JHtml::_('image', $item->menu_image, $item->title, $image_attributes);
    }

    if ($item->params->get('menu_text', 1))
    {
        $linktype .= '<span class="image-title">' . $item->title . '</span>';
    }
}

?>
<span class="nav-header <?php echo $anchor_css; ?>"<?php echo $title; ?>><?php echo $linktype; ?></span>
