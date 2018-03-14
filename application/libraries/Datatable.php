
<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Datatable{

	private $cols = NULL;

	public function __construct(){}

	public function setColumns($columns = array()){
		$this->cols = $columns;
	}

	public function getColumns(){
		return implode(", ", $this->cols);
	}

	public function setFilter($sKeyword, $columns){
		$search = "";
		$bindData = array();
		if(!empty($sKeyword)){
			foreach($columns as $key => $col){
				array_push($bindData, "%".$sKeyword."%");
				if($col['searchable'] == true){
					$colName = $this->cols[$col['data']];
					$search .= empty($search) ? "WHERE ($colName LIKE ?" : " OR $colName LIKE ?";
				}
				else{
					continue;
				}
			}
			$search .= ")";
			return array("stmnt"=>$search, "bindData"=>$bindData);
		}
		else{
			return array("stmnt"=>$search, "bindData"=>array());
		}
		
	}

	public function setOrder($request){
		$order = "";
		if(count($request['order']) > 0 && !empty($request['order'])){
			foreach($request['order'] as $key => $arr){
				$col = $this->cols[$arr['column']];
				$direction = strtoupper($arr['dir']);
				$order .= empty($order) ? "ORDER BY $col $direction" : ", $col $direction";
			}
		}

		return $order;
	}

	public function setLimit($start, $len){
		return "LIMIT $start, $len";
	}

	public function __destruct(){}
}
