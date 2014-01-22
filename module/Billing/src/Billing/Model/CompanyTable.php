<?php
namespace Billing\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\TableGateway;

class CompanyTable
{
	//protected $usersTable;
	
	public function _setAdaptor($dbName, $username, $password){
		$adapter = new Adapter(array(
				'driver' => 'Pdo',
         		'dsn'   => 'mysql:dbname=' . $dbName . ';host=192.168.1.115',
				'username' => $username,
				'password' => $password
		));
		
		return $adapter;
	}
	
	public function fetchAll()
	{
		$usersTable = new TableGateway('ebr_users', $this->_setAdaptor('cma_evl', 'eboard', 'eboard'));
		$resultSet = $usersTable->select();
		return $resultSet->toArray();
	}
}