<?php
if (!session_id()) session_start();

require 'libs/redbean/rb.php';
require 'libs/flight/Flight.php';
require 'libs/flashmessages/flashmessages.inc.php';
require 'helpers/url_helper.php';
require 'config/db.php'; 
require 'core/redbean_crud.php';

Flight::route('/clientes/new', function() {
	Flight::render("clientes/new.php");
});

Flight::route('POST /clientes/create', function() {
	$dao = new RedbeanDAO("clientes");
	$id = $dao->create(Flight::request()->data);
	flash("success", "Registro criado!");
	Flight::redirect("/clientes/{$id}");
});

Flight::route('/clientes', function() {
	$dao = new RedbeanDAO("clientes");
	Flight::render("clientes/list.php", array('list' => $dao->paginate(1, 2), 'count' => $dao->count(), 'page' => 1));
});

Flight::route('/clientes/paginate/@page:[0-9]+', function($page) {
	$dao = new RedbeanDAO("clientes");
	Flight::render("clientes/list.php", array('list' => $dao->paginate($page, 2), 'count' => $dao->count(), 'page' => $page));
});

Flight::route('/clientes/@id:[0-9]+', function($id) {
	$dao = new RedbeanDAO("clientes");
	try {
		Flight::render("clientes/view.php", array('bean' => $dao->get($id)));
	} catch(Exception $e) {
		Flight::halt(404);	
	}			
});

Flight::route('/clientes/edit/@id:[0-9]+', function($id) {
	$dao = new RedbeanDAO("clientes");
	try {
		$bean = $dao->get($id);
		Flight::render("clientes/edit.php", array('bean' => $bean));			
	} catch(Exception $e) {
		Flight::halt(404);	
	}
});

Flight::route('POST /clientes/update/bean', function() {
	$bean = Flight::request()->data;
	$dao = new RedbeanDAO("clientes");
	try {
		$id = $dao->update($bean->id, Flight::request()->data);
		flash("success", "Registro atualizado!");
		Flight::redirect("/clientes/{$id}");
	} catch (Exception $e) {
		Flight::halt(404);
	}
});


Flight::route('/clientes/delete/@id:[0-9]+', function($id) {
	$dao = new RedbeanDAO("clientes");
	try {
		$dao->delete($id);
		flash("success", "Registro apagado!");
		Flight::redirect('/clientes');
	} catch(Exception $e) {
		Flight::halt(404);	
	}
});

Flight::start();