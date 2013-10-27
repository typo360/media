<?php
namespace TYPO3\CMS\Media\ViewHelpers\Component;
/***************************************************************
*  Copyright notice
*
*  (c) 2013 Fabien Udriot <fabien.udriot@typo3.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
use TYPO3\CMS\Backend\Utility\IconUtility;
use TYPO3\CMS\Media\Utility\ModuleUtility;

/**
 * View helper which renders a "mass delete" menu item to be placed in the grid menu for Media.
 */
class MenuItemMassDeleteViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * Renders a "mass delete" menu item to be placed in the grid menu for Media.
	 *
	 * @return string
	 */
	public function render() {
		return sprintf('<li><a href="%s" class="mass-delete-assets" data-argument="assets">%s Delete</a>',
			$this->renderMassDeleteUri(),
			IconUtility::getSpriteIcon('actions-edit-delete')
		);
	}

	/**
	 * Render a mass delete URI.
	 *
	 * @return string
	 */
	public function renderMassDeleteUri() {

		return sprintf('mod.php?M=%s&%s[format]=json&%s[action]=massDelete&%s[controller]=Asset',
			ModuleUtility::getModuleSignature(),
			ModuleUtility::getParameterPrefix(),
			ModuleUtility::getParameterPrefix(),
			ModuleUtility::getParameterPrefix()
		);
	}
}

?>