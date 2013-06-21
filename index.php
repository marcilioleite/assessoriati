<?php
require 'libs/redbean/rb.php';
require 'libs/flight/Flight.php';
require 'config/db.php'; 
require 'core/redbean_crud.php';

Flight::route('/clientes/create', 
	function() {
		Flight::render("clientes/create.php");
	}
);

Flight::route('/clientes', 
	function() {
		$dao = new RedbeanDAO("clientes");
		Flight::render("clientes/list.php", array('list' => $dao->listAll()));
	}
);

Flight::route('/clientes/@id', 
	function($id) {
		$dao = new RedbeanDAO("clientes");
		Flight::render("clientes/list.php", array('bean' => $dao->get($id)));
	}
);

Flight::route('/clientes/edit/@id', 
	function($id) {
		$dao = new RedbeanDAO("clientes");
		try {
			Flight::render("clientes/create.php", array('bean' => $dao->get($id)));			
		} catch(Exception $e) {
			Flight::halt(404);	
		}
	}
);

Flight::start();