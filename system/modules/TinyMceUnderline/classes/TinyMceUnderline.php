<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2015 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2015-2015
 * @author     Cliff Parnitzky
 * @package    TinyMceUnderline
 * @license    LGPL
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace TinyMceUnderline;

/**
* Class TinyMceUnderline
*
* Class to implement the HOOK for adding configs.
* @copyright  Cliff Parnitzky 2015-2015
* @author     Cliff Parnitzky
*/
class TinyMceUnderline {
	
	const BUTTON                 = "underline";
	const BUTTON_TO_INSERT_AFTER = "italic";
	
	/**
	 * Adding config for output behavoir
	 */
	public function editTinyMcePluginLoaderConfig ($arrTinyConfig) {
		$arrButtonBars = array("toolbar1", "toolbar2", "toolbar3");
		
		foreach ($arrButtonBars as $strButtonBar)
		{
			if (strpos($arrTinyConfig[$strButtonBar], static::BUTTON_TO_INSERT_AFTER) !== FALSE)
			{
				$arrTinyConfig[$strButtonBar] = str_replace(static::BUTTON_TO_INSERT_AFTER, static::BUTTON_TO_INSERT_AFTER . " " . static::BUTTON, $arrTinyConfig[$strButtonBar]);
			}
		}
		return $arrTinyConfig;
	}
}
 
?>