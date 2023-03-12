<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_a1s
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\A1s\Administrator\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\FormController;
use Joomla\CMS\Router\Route;

/**
 * Controller for a single a1
 *
 * @since  1.0
 */
class A1Controller extends FormController
{
	/**
	 * The prefix to use with controller messages.
	 *
	 * @var    string
	 * @since  1.0.0
	 */
	protected $text_prefix = 'COM_A1S_A1';

	/**
	 * Method to run batch operations.
	 *
	 * @param   object  $model  The model.
	 *
	 * @return  boolean   True if successful, false otherwise and internal error is set.
	 *
	 * @since   1.0
	 */
	public function batch($model = null)
	{
		$this->checkToken();

		$model = $this->getModel('A1', 'Administrator', array());

		// Preset the redirect
		$this->setRedirect(Route::_('index.php?option=com_a1s&view=a1s' . $this->getRedirectToListAppend(), false));

		return parent::batch($model);
	}
}
