<?php
namespace Fcseminars\Fcseminars\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Michael Beckhöfer <michael.beckhoefer@f-com.de>, f-com
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * AdditiveSeminarsController
 */
class AdditiveSeminarsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * additiveSeminarsRepository
	 *
	 * @var \Fcseminars\Fcseminars\Domain\Repository\AdditiveSeminarsRepository
	 * @inject
	 */
	protected $additiveSeminarsRepository = NULL;

	/**
	 * action list
	 *
	 * @param Fcseminars\Fcseminars\Domain\Model\AdditiveSeminars
	 * @return void
	 */
	public function listAction() {
		$additiveSeminars = $this->additiveSeminarsRepository->findAll();
		$this->view->assign('additiveSeminars', $additiveSeminars);
	}

	/**
	 * action show
	 *
	 * @param Fcseminars\Fcseminars\Domain\Model\AdditiveSeminars
	 * @return void
	 */
	public function showAction(\Fcseminars\Fcseminars\Domain\Model\AdditiveSeminars $additiveSeminars) {
		$this->view->assign('additiveSeminars', $additiveSeminars);
	}

}
