<?php
namespace Fcseminars\Fcseminars\OldModel;

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
 * This class represents an event with some fields added.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class Seminar extends \tx_seminars_seminar {
	/**
	 * Returns the data from the column "more".
	 *
	 * @return string
	 */
	public function getMore() {
		return $this->getRecordPropertyString('more');
	}

	/**
	 * Checks whether this event has data in the "more" column.
	 *
	 * @return bool
	 */
	public function hasMore() {
		return $this->hasRecordPropertyString('more');
	}

	/**
	 * Returns the data from the column "steckbrief".
	 *
	 * @return string
	 */
	public function getSteckbrief() {
		return $this->getRecordPropertyString('steckbrief');
	}

	/**
	 * Checks whether this event has data in the "steckbrief" column.
	 *
	 * @return bool
	 */
	public function hasSteckbrief() {
		return $this->hasRecordPropertyString('steckbrief');
	}
}