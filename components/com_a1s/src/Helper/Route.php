<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_a1s
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\A1s\Site\Helper;

defined('_JEXEC') or die;

use Joomla\CMS\Categories\CategoryNode;
use Joomla\CMS\Language\Multilanguage;

/**
 * A1s Component Route Helper
 *
 * @static
 * @package     Joomla.Site
 * @subpackage  com_a1s
 * @since       1.5
 */
abstract class Route
{
	/**
	 * Get the URL route for a a1s from a a1 ID, a1s category ID and language
	 *
	 * @param   integer  $id        The id of the a1s
	 * @param   integer  $catid     The id of the a1s's category
	 * @param   mixed    $language  The id of the language being used.
	 *
	 * @return  string  The link to the a1s
	 *
	 * @since   1.5
	 */
	public static function getA1sRoute($id, $catid, $language = 0)
	{
		// Create the link
		$link = 'index.php?option=com_a1s&view=a1&id=' . $id;

		if ($catid > 1)
		{
			$link .= '&catid=' . $catid;
		}

		if ($language && $language !== '*' && Multilanguage::isEnabled())
		{
			$link .= '&lang=' . $language;
		}

		return $link;
	}

	/**
	 * Get the URL route for a a1s category from a a1s category ID and language
	 *
	 * @param   mixed  $catid     The id of the a1s's category either an integer id or an instance of CategoryNode
	 * @param   mixed  $language  The id of the language being used.
	 *
	 * @return  string  The link to the a1s
	 *
	 * @since   1.5
	 */
	public static function getCategoryRoute($catid, $language = 0)
	{
		if ($catid instanceof CategoryNode)
		{
			$id = $catid->id;
		}
		else
		{
			$id = (int) $catid;
		}

		if ($id < 1)
		{
			$link = '';
		}
		else
		{
			// Create the link
			$link = 'index.php?option=com_a1s&view=category&id=' . $id;

			if ($language && $language !== '*' && Multilanguage::isEnabled())
			{
				$link .= '&lang=' . $language;
			}
		}

		return $link;
	}
}
