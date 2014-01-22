<?php

namespace Auth\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Session\Storage\ArrayStorage;
 use Zend\Session\SessionManager;

class SuccessController extends AbstractActionController
{
	
	    public function getSessionStorage()
    {
        if (! $this->storage) {
            $this->storage = $this->getServiceLocator()
                                  ->get('Auth\Model\MyAuthStorage');
        }
        
        return $this->storage;
    }
        
    public function indexAction()
    {
        if (! $this->getServiceLocator()
                 ->get('AuthService')->hasIdentity()){
            return $this->redirect()->toRoute('login');
        }
        
$populateStorage = array(’foo’ => ’bar’);
 $storage = new ArrayStorage($populateStorage);
 $manager = new SessionManager();
 $manager->setStorage($storage); 
 
 
         //\Zend\Debug\Debug::dump($this->getSessionStorage()->read());
        \Zend\Debug\Debug::dump($storage);
        
        return new ViewModel();
    }
}