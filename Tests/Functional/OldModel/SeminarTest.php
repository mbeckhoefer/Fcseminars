<?php
namespace Fcseminars\Fcseminars\Tests\FunctionalOldModel\Seminar;

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

use Fcseminars\Fcseminars\OldModel\Seminar;

/**
 * Test case.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class SeminarTest extends \Tx_Phpunit_TestCase {
	/**
	 * @var \Tx_Oelib_TestingFramework
	 */
	protected $testingFramework = NULL;

	protected function setUp() {
		$this->testingFramework = new \Tx_Oelib_TestingFramework('tx_seminars');
	}

	protected function tearDown() {
		$this->testingFramework->cleanUp();
	}

	/**
	 * @test
	 */
	public function createInstanceOfBaseClassCreatesXclass() {
		self::assertInstanceOf(
			'Fcseminars\\Fcseminars\\OldModel\\Seminar',
			\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('tx_seminars_seminar', 0)
		);
	}

	/**
	 * @test
	 */
	public function getMoreReturnsMore() {
		$more = 'some more text';
		$uid = $this->testingFramework->createRecord('tx_seminars_seminars', array('more' => $more));
		$subject = new Seminar($uid);

		self::assertSame(
			$more,
			$subject->getMore()
		);
	}

	/**
	 * @test
	 */
	public function hasMoreForNoDataReturnsFalse() {
		$uid = $this->testingFramework->createRecord('tx_seminars_seminars', array('more' => ''));
		$subject = new Seminar($uid);

		self::assertFalse(
			$subject->hasMore()
		);
	}

	/**
	 * @test
	 */
	public function hasMoreForDataReturnsTrue() {
		$uid = $this->testingFramework->createRecord('tx_seminars_seminars', array('more' => 'some more text'));
		$subject = new Seminar($uid);

		self::assertTrue(
			$subject->hasMore()
		);
	}

	/**
	 * @test
	 */
	public function getSteckbriefReturnsSteckbrief() {
		$steckbrief = 'some steckbrief text';
		$uid = $this->testingFramework->createRecord('tx_seminars_seminars', array('steckbrief' => $steckbrief));
		$subject = new Seminar($uid);

		self::assertSame(
			$steckbrief,
			$subject->getSteckbrief()
		);
	}

	/**
	 * @test
	 */
	public function hasSteckbriefForNoDataReturnsFalse() {
		$uid = $this->testingFramework->createRecord('tx_seminars_seminars', array('steckbrief' => ''));
		$subject = new Seminar($uid);

		self::assertFalse(
			$subject->hasSteckbrief()
		);
	}

	/**
	 * @test
	 */
	public function hasSteckbriefForDataReturnsTrue() {
		$uid = $this->testingFramework->createRecord('tx_seminars_seminars', array('steckbrief' => 'some steckbrief text'));
		$subject = new Seminar($uid);

		self::assertTrue(
			$subject->hasSteckbrief()
		);
	}

	/**
	 * @test
	 */
	public function getEventDataWithMoreReturnsMoreData() {
		$more = 'some more text';
		$uid = $this->testingFramework->createRecord('tx_seminars_seminars', array('more' => $more));
		$subject = new Seminar($uid);

		self::assertSame(
			$more,
			$subject->getEventData('more')
		);
	}

	/**
	 * @test
	 */
	public function getEventDataWithSteckbriefReturnsSteckbriefData() {
		$steckbrief = 'some steckbrief text';
		$uid = $this->testingFramework->createRecord('tx_seminars_seminars', array('steckbrief' => $steckbrief));
		$subject = new Seminar($uid);

		self::assertSame(
			$steckbrief,
			$subject->getEventData('steckbrief')
		);
	}

	/**
	 * @test
	 */
	public function getTimeForBeginTimeReturnsBeginTime() {
		$beginDateAndTime = mktime(9, 50, 0, 4, 2, 1975);
		$uid = $this->testingFramework->createRecord('tx_seminars_seminars', array('begin_date' => $beginDateAndTime));
		$subject = new Seminar($uid);
		$subject->setConfigurationValue('timeFormat', '%H:%M');

		self::assertSame(
			'09:50 ' . $subject->translate('label_hourse'),
			$subject->getTime()
		);
	}

	/**
	 * @test
	 */
	public function getTimeForNoBeginTimeReturnsLabel() {
		$uid = $this->testingFramework->createRecord('tx_seminars_seminars', array());
		$subject = new Seminar($uid);
		$subject->setConfigurationValue('timeFormat', '%H:%M');

		self::assertSame(
			'mehrtägig',
			$subject->getTime()
		);
	}
}