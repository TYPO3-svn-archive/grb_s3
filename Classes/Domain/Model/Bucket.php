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

/**
 * Amazon S3-Bucket
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_GrbS3_Domain_Model_Bucket extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * awsAccessKey
	 * @var string
	 */
	protected $awsAccessKey;
	
	/**
	 * awsSecretKey
	 * @var string
	 */
	protected $awsSecretKey;
	
	
	
	/**
	 * Setter for awsAccessKey
	 *
	 * @param string $awsAccessKey awsAccessKey
	 * @return void
	 */
	public function setAwsAccessKey($awsAccessKey) {
		$this->awsAccessKey = $awsAccessKey;
	}

	/**
	 * Getter for awsAccessKey
	 *
	 * @return string awsAccessKey
	 */
	public function getAwsAccessKey() {
		return $this->awsAccessKey;
	}
	
	/**
	 * Setter for awsSecretKey
	 *
	 * @param string $awsSecretKey awsSecretKey
	 * @return void
	 */
	public function setAwsSecretKey($awsSecretKey) {
		$this->awsSecretKey = $awsSecretKey;
	}

	/**
	 * Getter for awsSecretKey
	 *
	 * @return string awsSecretKey
	 */
	public function getAwsSecretKey() {
		return $this->awsSecretKey;
	}
	
}
?>