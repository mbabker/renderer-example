<?php
/**
 * Application for working on the Joomla! RendererInterface
 *
 * @copyright  Copyright (C) 2014 Michael Babker. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

namespace BabDev\View;

use BabDev\Model\DefaultModel;

use Joomla\View\AbstractView;

/**
 * JSON view class for the Dashboard
 *
 * @since  1.0
 */
class DashboardJsonView extends AbstractView
{
	/**
	 * Redeclared model object for proper typehinting
	 *
	 * @var    DefaultModel
	 * @since  1.0
	 */
	protected $model;

	/**
	 * Method to render the view.
	 *
	 * @return  string  The rendered view.
	 *
	 * @since   1.0
	 */
	public function render()
	{
		$output = $this->model->getData();

		return json_encode($output);
	}
}
