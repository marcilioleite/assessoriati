<?php
require 'libs/redbean/rb.php';
require 'libs/flight/Flight.php';
require 'helpers/url_helper.php';
require 'config/db.php'; 
require 'core/redbean_crud.php';

Flight::route('/clientes/new', function() {
	Flight::render("clientes/new.php");
});

Flight::route('POST /clientes/create', function() {
	$dao = new RedbeanDAO("clientes");
	$id = $dao->create(Flight::request()->data);
	Flight::redirect("/clientes/{$id}");
});

Flight::route('/clientes', function() {
	$dao = new RedbeanDAO("clientes");
	Flight::render("clientes/list.php", array('list' => $dao->listAll(), 'count' => $dao->count()));
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
		Flight::redirect("/clientes/{$id}");
	} catch (Exception $e) {
		Flight::halt(404);
	}
});


Flight::route('/clientes/delete/@id:[0-9]+', function($id) {
	$dao = new RedbeanDAO("clientes");
	try {
		$dao->delete($id);
		//Flight::flash('message',array('type'=>'success','text'=>'Registro apagado!'));
		Flight::redirect('/clientes');
		Flight::flash('message',array('type'=>'error','text'=>'Archivo demasiado grande.'));	
	} catch(Exception $e) {
		Flight::halt(404);	
	}
});

Flight::start();