<?php
namespace Fcseminars\Fcseminars\Tests\Unit\Model;

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

use Fcseminars\Fcseminars\Model\Event;

/**
 * Test case.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class EventTest extends \Tx_Phpunit_TestCase {
	/**
	 * @var Event
	 */
	private $subject = NULL;

	protected function setUp() {
		$this->subject = new Event();
	}

	/**
	 * @test
	 */
	public function getMoreReturnsMore() {
		$more = 'some more text';
		$this->subject->setData(array('more' => $more));

		self::assertSame(
			$more,
			$this->subject->getMore()
		);
	}

	/**
	 * @test
	 */
	public function hasMoreForNoDataReturnsFalse() {
		$this->subject->setData(array());

		self::assertFalse(
			$this->subject->hasMore()
		);
	}

	/**
	 * @test
	 */
	public function hasMoreForDataReturnsTrue() {
		$this->subject->setData(array('more' => 'some more text'));

		self::assertTrue(
			$this->subject->hasMore()
		);
	}

	/**
	 * @test
	 */
	public function getSteckbriefReturnsSteckbrief() {
		$steckbrief = 'some steckbrief text';
		$this->subject->setData(array('steckbrief' => $steckbrief));

		self::assertSame(
			$steckbrief,
			$this->subject->getSteckbrief()
		);
	}

	/**
	 * @test
	 */
	public function hasSteckbriefForNoDataReturnsFalse() {
		$this->subject->setData(array());

		self::assertFalse(
			$this->subject->hasSteckbrief()
		);
	}

	/**
	 * @test
	 */
	public function hasSteckbriefForDataReturnsTrue() {
		$this->subject->setData(array('steckbrief' => 'some steckbrief text'));

		self::assertTrue(
			$this->subject->hasSteckbrief()
		);
	}
}