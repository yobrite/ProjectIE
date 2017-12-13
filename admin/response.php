
<?php
	//include connection file
	include_once("connection.php");

	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;

	$action = isset($params['action']) != '' ? $params['action'] : ',';
	$empCls = new Employee($connString);

	switch($action) {
	 case 'edit':
		$empCls->updateEmployee($params);
	 break;
	 case 'add':
		$empCls->addEmployee($params);
	 break;
	 default:
	 	$empCls->getEmployees($params);
	 return;
	}

	class Employee {
		protected $conn;
		protected $data = array();
		function __construct($connString) {
			$this->conn = $connString;
		}

		public function getEmployees($params) {

			$this->data = $this->getRecords($params);

			echo json_encode($this->data);
		}

		function getRecords($params) {

		   // getting total number records without any search

			$page = $params['page'] || 0;
			$startRow = $page * 30;
			$sql = "SELECT * FROM `customer` ORDER BY cID DESC LIMIT ". strval($startRow) .", ". strval($startRow + 29) ;

			$queryRecords = mysqli_query($this->conn, $sql) or die("error to fetch customers data");

			while( $row = mysqli_fetch_assoc($queryRecords) ) {
				$data[] = $row;
			}

			return $data;   // total data array
		}
		function updateEmployee($params) {
			$data = array();
			$sql = "Update `customer` set ".$params["name"]." = '" . $params["value"] . "' WHERE cID='".$params["pk"]."'";

			if($result = mysqli_query($this->conn, $sql)) {
				echo json_encode('{ "status": "success" }');
			} else {
				die("error to update '".$params["name"]."' with '".$params["value"]."'");
			}
		}

		function addEmployee($params) {
			function reduceDataToSet($cout, $item) {
				return $cout . $item["name"] . " = '" . $item["value"] . "', ";
			}
			$data = array();
			$data = $params["data"];
			$data_text = array_reduce($data, "reduceDataToSet", 'Insert into `customer` set ');
			$sql = substr($data_text, 0, strlen($data_text) - 2);

			if($result = mysqli_query($this->conn, $sql)) {
				echo json_encode('{ "status": "success" }');
			} else {
				die("error to add: ".$data." , with sql: ". $sql);
			}
		}
	}
?>
