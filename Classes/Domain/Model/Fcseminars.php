<?php
namespace Fcseminars\Fcseminars\Domain\Model;

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
 * AdditiveSeminars
 */
class Fcseminars extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * steckbrief
	 *
	 * @var string
	 */
	protected $steckbrief = '';

	/**
	 * more
	 *
	 * @var string
	 */
	protected $mehr = '';

	/**
	 * zusatzfeld1
	 *
	 * @var string
	 */
	protected $zusatzfeld1 = '';

	/**
	 * zusatzfeld2
	 *
	 * @var string
	 */
	protected $zusatzfeld2 = '';

	/**
	 * zusatzfeld3
	 *
	 * @var string
	 */
	protected $zusatzfeld3 = '';

	/**
	 * Returns the steckbrief
	 *
	 * @return string steckbrief
	 */
	public function getSteckbrief() {
		return $this->steckbrief;
	}

	/**
	 * Sets the steckbrief
	 *
	 * @param string $steckbrief
	 * @return string steckbrief
	 */
	public function setSteckbrief($steckbrief) {
		$this->steckbrief = $steckbrief;
	}

	/**
	 * Returns the mehr
	 *
	 * @return string mehr
	 */
	public function getMehr() {
		return $this->mehr;
	}

	/**
	 * Sets the mehr
	 *
	 * @param string $mehr
	 * @return string mehr
	 */
	public function setMehr($mehr) {
		$this->mehr = $mehr;
	}

	/**
	 * Returns the zusatzfeld1
	 *
	 * @return string zusatzfeld1
	 */
	public function getZusatzfeld1() {
		return $this->zusatzfeld1;
	}

	/**
	 * Sets the zusatzfeld1
	 *
	 * @param string $zusatzfeld1
	 * @return string zusatzfeld1
	 */
	public function setZusatzfeld1($zusatzfeld1) {
		$this->zusatzfeld1 = $zusatzfeld1;
	}

	/**
	 * Returns the zusatzfeld2
	 *
	 * @return string zusatzfeld2
	 */
	public function getZusatzfeld2() {
		return $this->zusatzfeld2;
	}

	/**
	 * Sets the zusatzfeld2
	 *
	 * @param string $zusatzfeld2
	 * @return string zusatzfeld2
	 */
	public function setZusatzfeld2($zusatzfeld2) {
		$this->zusatzfeld2 = $zusatzfeld2;
	}

	/**
	 * Returns the zusatzfeld3
	 *
	 * @return string zusatzfeld3
	 */
	public function getZusatzfeld3() {
		return $this->zusatzfeld3;
	}

	/**
	 * Sets the zusatzfeld3
	 *
	 * @param string $zusatzfeld3
	 * @return string zusatzfeld3
	 */
	public function setZusatzfeld3($zusatzfeld3) {
		$this->zusatzfeld3 = $zusatzfeld3;
	}

}
