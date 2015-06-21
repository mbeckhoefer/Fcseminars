<?php
namespace Fcseminars\Fcseminars\Tests\Functional\Model;

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

/**
 * Test case.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class EventTest extends \Tx_Phpunit_TestCase {
	/**
	 * @test
	 */
	public function createInstanceOfBaseClassCreatesXclass() {
		self::assertInstanceOf(
			'Fcseminars\\Fcseminars\\Model\\Event',
			\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('tx_seminars_Model_Event')
		);
	}
}