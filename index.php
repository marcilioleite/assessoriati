<?php
require 'libs/redbean/rb.php';
require 'libs/flight/Flight.php';
require 'config/db.php'; 
require 'core/redbean_crud.php';

Flight::route('/clientes/new', 
	function() {
		Flight::render("clientes/new.php");
	}
);

Flight::route('POST /clientes/create', 
	function() {
		$dao = new RedbeanDAO("clientes");
		$id = $dao->create(Flight::request()->data);
		Flight::redirect("/clientes/{$id}");
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
		try {
			Flight::render("clientes/view.php", array('bean' => $dao->get($id)));
		} catch(Exception $e) {
			Flight::halt(404);	
		}			
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

Flight::route('/clientes/delete/@id', 
	function($id) {
		$dao = new RedbeanDAO("clientes");
		try {
			$dao->delete($id);			
		} catch(Exception $e) {
			Flight::halt(404);	
		}
	}
);

Flight::start();