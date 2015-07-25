<?php
namespace Fcseminars\Fcseminars\Tests\Functional\View;

/*
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

use Fcseminars\Fcseminars\View\CategoryList;

/**
 * Test case.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class CategoryListTest extends \Tx_Phpunit_TestCase {
	/**
	 * @test
	 */
	public function createInstanceOfBaseClassCreatesXclass() {
		self::assertInstanceOf(
			'Fcseminars\\Fcseminars\\View\\CategoryList',
			\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
				'tx_seminars_FrontEnd_CategoryList', array(), new \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer()
			)
		);
	}
}