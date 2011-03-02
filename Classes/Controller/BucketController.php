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
 * Controller for the Bucket object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_GrbS3_Controller_BucketController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_GrbS3_Domain_Repository_BucketRepository
	 */
	protected $bucketRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->bucketRepository = t3lib_div::makeInstance('Tx_GrbS3_Domain_Repository_BucketRepository');
	}
	
	/**
	 * list action
	 *
	 * @return string The rendered list action
	 */
	public function listAction() {
		require_once('Zend/Service/Amazon/S3.php');
		$awsKey 			= 'AKIAIVEYPCTAURBOE5CA';
		$awsSecretKey 		= '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';
		$awsBucketStorage	= 'greenbanana-ch';
		$awsBucketStream	= 'greenbanana-ch-stream';
		
		$s3 = new Zend_Service_Amazon_S3($awsKey, $awsSecretKey);

		// Upload File
		if(isset($_FILES['tx_grbs3_tools_grbs3txgrbs3m1'])){
			$file = $_FILES['tx_grbs3_tools_grbs3txgrbs3m1'];
			$s3->putObject($awsBucketStorage.'/TEST/viele/unter/ordner/'.$file['name']['file'], file_get_contents($file['tmp_name']['file']),
    		array(Zend_Service_Amazon_S3::S3_ACL_HEADER => Zend_Service_Amazon_S3::S3_ACL_PUBLIC_READ));
		}
		
		
		// File-Tree
		$tree = t3lib_div::makeInstance("Tx_GrbS3_Domain_Service_FileTree");
		$this->view->assign('treeArray', $tree->getTreeArrayByPath($s3->getObjectsByBucket($awsBucketStorage)));

	}
	
}
?>