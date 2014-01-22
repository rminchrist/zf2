<?php
namespace Billing\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Billing\Model\CompanyTable;
   
class IndexController extends AbstractActionController
{
	
	protected $companiesTable;
	
	public function getCompaniesTable()
	{
		if (!$this->companiesTable) {
			$sm = $this->getServiceLocator();
			$this->companiesTable = $sm->get('Billing\Model\CompaniesTable');
		}
		return $this->companiesTable;
	}
	
	public function getCompanyUserTable()
	{
		$usersTable = new CompanyTable();
		
		return $usersTable;
	}
	
    public function indexAction()
    { 
    	$sm = $this->getServiceLocator();
    	$dbDynamic = $sm->get('Billing\Model\CompaniesTable');
    	\Zend\Debug\Debug::dump($dbDynamic);
    	
    	return new ViewModel(array(
    			'companies' => $this->getCompaniesTable()->fetchAll(),
    	));
    }

    public function addAction()
    {    	 
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}