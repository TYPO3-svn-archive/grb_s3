<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 
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

class Tx_GrbS3_Domain_Service_FileTree{

	/**
	 * @param $path String Phath to the showing Folder
	 */
	public function getTreeArrayByPath($awsBucketStorage, $path='TEST/'){
		
		$actualTreeArray = array();
		$pathPosition = count(explode('/',$path))-1;
		t3lib_div::debug($pathPosition);
		$i=0;
		
		foreach($awsBucketStorage as $line){
			if(!substr_compare($line,$path,0,strlen($path),true)){
				$posArray = explode('/', $line);
				$actualTreeArray[$i] = $posArray[$pathPosition];
				$i++;			
			}
		}
		return array_unique($actualTreeArray);
	}
	
}