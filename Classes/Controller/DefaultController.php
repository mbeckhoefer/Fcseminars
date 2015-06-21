<?php
namespace Fcseminars\Fcseminars\Controller;

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
 * This class is an XCLASS to the original seminars default controller.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class DefaultController extends \tx_seminars_FrontEnd_DefaultController {
	/**
	 * @var string[]
	 */
	protected $availableColumns = array(
		'image',
		'category',
		'title',
		'subtitle',
		'uid',
		'event_type',
		'accreditation_number',
		'credit_points',
		'speakers',
		'language',
		'date',
		'time',
		'place',
		'additional_information',
		'room',
		'country',
		'city',
		'seats',
		'price_regular',
		'price_special',
		'total_price',
		'organizers',
		'target_groups',
		'attached_files',
		'vacancies',
		'status_registration',
		'registration',
		'list_registrations',
		'status',
		'edit',
		'registrations',
	);

	/**
	 * Gets our seminar object.
	 *
	 * This delegator is there just for the return type.
	 *
	 * @return \Fcseminars\Fcseminars\OldModel\Seminar the seminar object
	 */
	public function getSeminar() {
		return parent::getSeminar();
	}

	/**
	 * Creates the single view for the event with the event in $this->seminar.
	 *
	 * @return string the rendered single view
	 */
	protected function createSingleViewForExistingEvent() {
		parent::createSingleViewForExistingEvent();

		$this->setMarker('steckbrief', $this->pi_RTEcssText($this->getSeminar()->getSteckbrief()));
		$this->setMarker('title', $this->pi_RTEcssText($this->getSeminar()->getTitle()));
		$this->setAccreditationNumberMarker();

		return $this->getSubpart('SINGLE_VIEW');
	}

	/**
	 * Fills in the matching marker for the description or hides the subpart
	 * if there is no description.
	 *
	 * @return void
	 */
	private function setSteckbriefMarker() {
		if (!$this->getSeminar()->hasSteckbrief()) {
			$this->hideSubparts('steckbrief', 'field_wrapper');

			return;
		}

		$this->setMarker('steckbrief', $this->pi_RTEcssText($this->getSeminar()->getSteckbrief()));
	}

	/**
	 * Fills in the matching marker for the accreditation number or hides the
	 * subpart if there is no accreditation number.
	 *
	 * @return void
	 */
	private function setAccreditationNumberMarker() {
		if (!$this->getSeminar()->hasAccreditationNumber()) {
			$this->hideSubparts('accreditation_number', 'field_wrapper');

			return;
		}

		$this->setMarker('accreditation_number', $this->pi_RTEcssText($this->getSeminar()->getAccreditationNumber()));
	}

	/**
	 * Returns the list view header: Start of table, header row, start of table
	 * body.
	 * Columns listed in $this->subpartsToHide are hidden (ie. not displayed).
	 *
	 * @return string HTML output, the table header
	 */
	protected function createListHeader() {
		foreach ($this->availableColumns as $column) {
			$this->setMarker('header_' . $column, $this->getFieldHeader($column));
		}

		return $this->getSubpart('LIST_HEADER');
	}

	/**
	 * Creates a hyperlink to the single view page of the event $event.
	 *
	 * @param \tx_seminars_Model_Event $event                   the event which to link to
	 * @param string                   $linkText                the link text, must not be empty
	 * @param bool                     $htmlspecialcharLinkText whether to htmlspecialchar the link text
	 *
	 * @return string HTML code for the link to the event's single view page
	 */
	public function createSingleViewLink(\tx_seminars_Model_Event $event, $linkText, $htmlspecialcharLinkText = TRUE) {
		$url = $this->getLinkBuilder()->createRelativeUrlForEvent($event);

		return '<a href="' . htmlspecialchars($url) . '">' . $linkText . '</a>';
	}

	/**
	 * Returns a list row as a TR. Gets data from $this->seminar.
	 *
	 * Columns listed in $this->subpartsToHide are hidden (ie. not displayed).
	 * If $this->seminar is invalid, an empty string is returned.
	 *
	 * @param int $rowCounter
	 *        Row counter. Starts at 0 (zero). Used for alternating class
	 *        values in the output rows.
	 * @param string $whatToDisplay
	 *        a string selecting the flavor of list view: either an empty string
	 *        (for the default list view), the value from "what_to_display",
	 *        or "other_dates"
	 *
	 * @return string HTML output, a table row with a class attribute set
	 *                (alternative based on odd/even rows)
	 */
	protected function createListRow($rowCounter = 0, $whatToDisplay) {
		$seminar = $this->getSeminar();
		if (!$seminar->isOk()) {
			return '';
		}

		parent::createListRow($rowCounter, $whatToDisplay);

		/** @var \tx_seminars_Mapper_Event $mapper */
		$mapper = \Tx_Oelib_MapperRegistry::get('tx_seminars_Mapper_Event');
		/** @var \Fcseminars\Fcseminars\Model\Event $event */
		$event = $mapper->find($seminar->getUid());
		$this->setMarker('title_link', $this->createSingleViewLink($event, $seminar->getTitle()));
		$this->setMarker('teaser', htmlspecialchars($seminar->getTeaser()));
		$this->setMarker('more_link', $this->createSingleViewLink($event, $seminar->getMore()));
		$this->setMarker('link', $seminar->getUid());
		$this->setMarker('room', htmlspecialchars($seminar->getRoom()));
		$this->setMarker('additional_information', htmlspecialchars($seminar->getAdditionalInformation()));

		return $this->getSubpart('LIST_ITEM');
	}
}