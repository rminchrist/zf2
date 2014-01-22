<?php
return array(
		'controllers' => array(
				'invokables' => array(
						'Billing\Controller\Index' => 'Billing\Controller\IndexController',
				),
		),
		
		// set the module router
'router' => array(
        'routes' => array(
            'billing' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/billing',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Billing\Controller',
                        'controller'    => 'index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'process' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:action]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),            
        ),
    ),
		
		
		'view_manager' => array(
				'template_path_stack' => array(
						'billing' => __DIR__ . '/../view',
				),
		),
);