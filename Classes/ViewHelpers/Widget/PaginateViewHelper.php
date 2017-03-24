<?php

namespace PeterBenke\PbNotifications\ViewHelpers\Widget;

	/**
	 * This file is part of the TYPO3 CMS project.
	 *
	 * It is free software; you can redistribute it and/or modify it under
	 * the terms of the GNU General Public License, either version 2
	 * of the License, or any later version.
	 *
	 * For the full copyright and license information, please read the
	 * LICENSE.txt file that was distributed with this source code.
	 *
	 * The TYPO3 project - inspiring people to share!
	 */

/**
 * This ViewHelper renders a Pagination of objects.
 *
 * = Examples =
 *
 * <code title="required arguments">
 * <f:widget.paginate objects="{blogs}" as="paginatedBlogs">
 *   // use {paginatedBlogs} as you used {blogs} before, most certainly inside
 *   // a <f:for> loop.
 * </f:widget.paginate>
 * </code>
 *
 */

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetViewHelper;

class PaginateViewHelper extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetViewHelper{

	/**
	 * @var \PeterBenke\PbNotifications\ViewHelpers\Widget\Controller\PaginateController
	 */
	protected $controller;

	/**
	 * Inject controller
	 *
	 * @param \PeterBenke\PbNotifications\ViewHelpers\Widget\Controller\PaginateController $controller
	 * @return void
	 */
	public function injectController(\PeterBenke\PbNotifications\ViewHelpers\Widget\Controller\PaginateController $controller)
	{
		$this->controller = $controller;
	}

	/**
	 * Render everything
	 *
	 * @param QueryResultInterface|ObjectStorage|array $objects
	 * @param string $as
	 * @param mixed $configuration
	 * @param array $initial
	 * @internal param array $initial
	 * @return string
	 */
	public function render(
		$objects,
		$as,
		$configuration = ['itemsPerPage' => 10, 'insertAbove' => false, 'insertBelow' => true],
		$initial = []
	) {
		return $this->initiateSubRequest();
	}
}
