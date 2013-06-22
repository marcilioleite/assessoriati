<?php 

class RedbeanDAO {
	
	private static $tablename;
	
	function __construct($tablename) {
		self::$tablename = $tablename;
	}
		
	public function create($data) {
		$bean = R::dispense(self::$tablename);
		foreach ($data as $key => $value) {
			$bean->{$key} = $value;
		}
		return R::store($bean);
	}
	
	public function listAll() {
		return R::findAll(self::$tablename);
	}
	
	public function paginate($page = 1, $perPage = 20) {
		$offset = ($page-1) * $perPage;
		return R::findAll(self::$tablename, " LIMIT $perPage OFFSET $offset");
	}
	
	public function get($id) {
		$bean = R::load(self::$tablename, $id);
		if ($bean->id != 0) {
			return $bean;
		} else {
			throw new Exception("404 - Not Found");
		}
	}
	
	// TODO: Consertar update
	public function update($id, $bean) {
		$loadedBean = R::load(self::$tablename, $id);
		if ($loadedBean->id != 0) {
			foreach ($loadedBean as $property => $value) {
				$loadedBean->{$property} = $bean->{$property};
			}
			return R::store($loadedBean);
		} else {
			throw new Exception("404 - Not Found");
		}
	}
	
	public function delete($id) {
		$bean = R::load(self::$tablename, $id);
		if ($loadedBean->id != 0) {
			R::trash($bean);
		}
	}
	
	public function deleteAll() {
		R::wipe(self::$tablename);
	}
	
}
