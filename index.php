<?php
if (!session_id()) session_start();

require 'libs/redbean/rb.php';
require 'libs/flight/Flight.php';
require 'libs/flashmessages/flashmessages.inc.php';
require 'helpers/url_helper.php';
require 'helpers/paginator_helper.php';
require 'config/app.php';
require 'config/db.php'; 
require 'core/redbean_crud.php';

/**
 * URIs de Clientes
 * 
 */

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
	Flight::render("clientes/list.php", array('list' => $dao->paginate(1, RESULTS_PER_PAGE), 'count' => $dao->count(), 'page' => 1));
});

Flight::route('/clientes/paginate/@page:[0-9]+', function($page) {
	$dao = new RedbeanDAO("clientes");
	Flight::render("clientes/list.php", array('list' => $dao->paginate($page, RESULTS_PER_PAGE), 'count' => $dao->count(), 'page' => $page));
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

/**
 * URIs de Serviços
 * 
 */

Flight::route('/servicos', function() {
	$dao = new RedbeanDAO("servicos");
	Flight::render("servicos/list.php", array('list' => $dao->paginate(1, RESULTS_PER_PAGE), 'count' => $dao->count(), 'page' => 1));
});

Flight::route('/servicos/paginate/@page:[0-9]+', function($page) {
	$dao = new RedbeanDAO("servicos");
	Flight::render("servicos/list.php", array('list' => $dao->paginate($page, RESULTS_PER_PAGE), 'count' => $dao->count(), 'page' => $page));
});


Flight::route('/servicos/new', function() {
	Flight::render("servicos/new.php");
});

Flight::route('POST /servicos/create', function() {
	$dao = new RedbeanDAO("servicos");
	$id = $dao->create(Flight::request()->data);
	flash("success", "Registro criado!");
	Flight::redirect("/servicos/{$id}");
});

Flight::route('/servicos/@id:[0-9]+', function($id) {
	$dao = new RedbeanDAO("servicos");
	try {
		Flight::render("servicos/view.php", array('bean' => $dao->get($id)));
	} catch(Exception $e) {
		Flight::halt(404);
	}			
});

Flight::route('/servicos/edit/@id:[0-9]+', function($id) {
	$dao = new RedbeanDAO("servicos");
	try {
		$bean = $dao->get($id);
		Flight::render("servicos/edit.php", array('bean' => $bean));			
	} catch(Exception $e) {
		Flight::halt(404);	
	}
});

Flight::route('POST /servicos/update/bean', function() {
	$bean = Flight::request()->data;
	$dao = new RedbeanDAO("servicos");
	try {
		$id = $dao->update($bean->id, Flight::request()->data);
		flash("success", "Registro atualizado!");
		Flight::redirect("/servicos/{$id}");
	} catch (Exception $e) {
		Flight::halt(404);
	}
});


Flight::route('/servicos/delete/@id:[0-9]+', function($id) {
	$dao = new RedbeanDAO("servicos");
	try {
		$dao->delete($id);
		flash("success", "Registro apagado!");
		Flight::redirect('/servicos');
	} catch(Exception $e) {
		Flight::halt(404);	
	}
});

/**
 * URIs de Permissões
 * 
 */

 Flight::route('/permissoes', function() {
	$dao = new RedbeanDAO("permissoes");
	Flight::render("permissoes/list.php", array('list' => $dao->paginate(1, RESULTS_PER_PAGE), 'count' => $dao->count(), 'page' => 1));
});

Flight::route('/permissoes/paginate/@page:[0-9]+', function($page) {
	$dao = new RedbeanDAO("permissoes");
	Flight::render("permissoes/list.php", array('list' => $dao->paginate($page, RESULTS_PER_PAGE), 'count' => $dao->count(), 'page' => $page));
});

Flight::route('/permissoes/new', function() {
	Flight::render("permissoes/new.php");
});

Flight::route('POST /permissoes/create', function() {
	$dao = new RedbeanDAO("permissoes");
	$id = $dao->create(Flight::request()->data);
	flash("success", "Registro criado!");
	Flight::redirect("/permissoes/{$id}");
});

Flight::route('/permissoes/@id:[0-9]+', function($id) {
	$dao = new RedbeanDAO("permissoes");
	try {
		Flight::render("permissoes/view.php", array('bean' => $dao->get($id)));
	} catch(Exception $e) {
		Flight::halt(404);
	}			
});

Flight::route('/permissoes/edit/@id:[0-9]+', function($id) {
	$dao = new RedbeanDAO("permissoes");
	try {
		$bean = $dao->get($id);
		Flight::render("permissoes/edit.php", array('bean' => $bean));			
	} catch(Exception $e) {
		Flight::halt(404);	
	}
});

Flight::route('POST /permissoes/update/bean', function() {
	$bean = Flight::request()->data;
	$dao = new RedbeanDAO("permissoes");
	try {
		$id = $dao->update($bean->id, Flight::request()->data);
		flash("success", "Registro atualizado!");
		Flight::redirect("/permissoes/{$id}");
	} catch (Exception $e) {
		Flight::halt(404);
	}
});


Flight::route('/permissoes/delete/@id:[0-9]+', function($id) {
	$dao = new RedbeanDAO("permissoes");
	try {
		$dao->delete($id);
		flash("success", "Registro apagado!");
		Flight::redirect('/permissoes');
	} catch(Exception $e) {
		Flight::halt(404);	
	}
});
 
Flight::start();