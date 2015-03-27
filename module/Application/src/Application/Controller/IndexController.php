<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
      // phpinfo();
 	 date_default_timezone_set('PRC');
	// echo 'Hello Surjur <<<< '.date('Y-m-d').' >>>>';
	// exit;
	//echo LIB;exit;
	$host = '121.40.166.99';
	$username = 'hyu1486730001';
	$password = '13615734424';
	$conn_id = ftp_connect($host) or die('connet false');
	$login_result = ftp_login($conn_id, $username, $password);
	ftp_chdir($conn_id, 'htdocs');

	include_once(LIB.'/plugs/ZipArchive.class.php');
	$za = new ZipArchive(); 
	$za->open('/home/theZip.zip'); 
	for( $i = 0; $i < $za->numFiles; $i++ ){ 
    		$stat = $za->statIndex( $i ); 
    		print_r( baename( $stat['name'] ) . PHP_EOL ); 
	}
	echo ftp_pwd($conn_id);
	
	ftp_close($conn_id);
	exit;
    }
}
