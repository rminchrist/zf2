<?php
namespace Billing\Model;

use Zend\Db\TableGateway\TableGateway;

class CompaniesTable
{
	protected $tableGateway;

	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGateway = $tableGateway;
	}

	public function fetchAll()
	{
		$resultSet = $this->tableGateway->select();
		return $resultSet;
	}

	public function getCompanies($id)
	{
		$id  = (int) $id;
		$rowset = $this->tableGateway->select(array('cmp_id' => $id));
		$row = $rowset->current();
		if (!$row) {
			throw new \Exception("Could not find row $id");
		}
		return $row;
	}

}