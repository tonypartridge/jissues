<?php
/**
 * @copyright  Copyright (C) 2012 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Tracker\Components\Tracker\Controller;

use Joomla\Application\AbstractApplication;
use Joomla\Input\Input;
use Joomla\Tracker\Controller\AbstractTrackerController;

/**
 * Default controller class for the Tracker component.
 *
 * @since  1.0
 */
class HooksController extends AbstractTrackerController
{
	/**
	 * The default view for the component
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $defaultView = 'hooks';

	/**
	 * Constructor
	 *
	 * @param   Input                $input  The input object.
	 * @param   AbstractApplication  $app    The application object.
	 *
	 * @since   1.0
	 */
	public function __construct(Input $input = null, AbstractApplication $app = null)
	{
		parent::__construct($input, $app);

		// Set the default view
		$this->defaultView = 'hooks';

		// $this->getInput()->set('view', 'icons');
	}

	/**
	 * Execute the controller.
	 *
	 * @return  string  The rendered view.
	 *
	 * @since   1.0
	 */
	public function execute()
	{
		$this->getApplication()->getUser()->authorize('admin');

		parent::execute();
	}
}
