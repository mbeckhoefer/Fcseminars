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

	/**
	 * Retrieves a value from this record. The return value will be an empty
	 * string if the key is not defined in $this->recordData or if it has not
	 * been filled in.
	 *
	 * If the data needs to be decoded to be readable (eg. the speakers
	 * payment or the gender), this function will already return the clear text
	 * version.
	 *
	 * @param string $key the key of the data to retrieve (the key doesn't need to be trimmed)
	 *
	 * @return string the data retrieved from $this->recordData, may be empty
	 */
	public function getEventData($key) {
		$trimmedKey = trim($key);

		switch ($trimmedKey) {
			case 'more':
				$result = $this->getMore();
				break;
			case 'steckbrief':
				$result = $this->getSteckbrief();
				break;
			default:
				$result = parent::getEventData($key);
		}

		return $result;
	}
}