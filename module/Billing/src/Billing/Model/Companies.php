<?php
namespace Billing\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Companies
{
    public $cmp_id;
    public $company_code;
    public $company_name;
    public $database_name;
    public $login_name;
    public $password;
    protected $inputFilter;

    public function exchangeArray($data)
    {
    	$this->cmp_id      		= (isset($data['cmp_id'])) ? $data['cmp_id'] : null;
    	$this->company_code 	= (isset($data['company_code'])) ? $data['company_code'] : null;
    	$this->company_name 	= (isset($data['company_name'])) ? $data['company_name'] : null;
    	$this->database_name	= (isset($data['database_name'])) ? $data['database_name'] : null;
    	$this->login_name      	= (isset($data['login_name'])) ? $data['login_name'] : null;
    	$this->password      	= (isset($data['password'])) ? $data['password'] : null;
    }
    
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
    	throw new \Exception("Not used");
    }
 /*   
    public function getInputFilter()
    {
    	if (!$this->inputFilter) {
    		$inputFilter = new InputFilter();
    
    		$inputFilter->add(array(
    				'name'     => 'id',
    				'required' => true,
    				'filters'  => array(
    						array('name' => 'Int'),
    				),
    		));
    
    		$inputFilter->add(array(
    				'name'     => 'artist',
    				'required' => true,
    				'filters'  => array(
    						array('name' => 'StripTags'),
    						array('name' => 'StringTrim'),
    				),
    				'validators' => array(
    						array(
    								'name'    => 'StringLength',
    								'options' => array(
    										'encoding' => 'UTF-8',
    										'min'      => 1,
    										'max'      => 100,
    								),
    						),
    				),
    		));
    
    		$inputFilter->add(array(
    				'name'     => 'title',
    				'required' => true,
    				'filters'  => array(
    						array('name' => 'StripTags'),
    						array('name' => 'StringTrim'),
    				),
    				'validators' => array(
    						array(
    								'name'    => 'StringLength',
    								'options' => array(
    										'encoding' => 'UTF-8',
    										'min'      => 1,
    										'max'      => 100,
    								),
    						),
    				),
    		));
    
    		$this->inputFilter = $inputFilter;
    	}
    
    	return $this->inputFilter;
    }
    */
    public function getArrayCopy()
    {
    	return get_object_vars($this);
    }
    
}