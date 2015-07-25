<?php
namespace Fcseminars\Fcseminars\View;

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
 * This class represents category list with some changed behavior.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class CategoryList extends \tx_seminars_FrontEnd_CategoryList {
	/**
	 * Creates the list of categories for the event list view.
	 *
	 * Depending on the configuration value, categoriesInListView returns
	 * either only the titles as comma-separated list, only the icons with the
	 * title as title attribute or both.
	 *
	 * @param array[] $categoriesToDisplay
	 *        the categories in an associative array, with the UID as key and "title", and "icon" as second level keys
	 *
	 * @return string the HTML output, will be empty if $categoriesToDisplay is empty
	 */
	public function createCategoryList(array $categoriesToDisplay) {
		$result = parent::createCategoryList($categoriesToDisplay);

		return str_replace(', ', ' ', $result);
	}
}