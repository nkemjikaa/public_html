<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test1.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
    													PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (1, 'X3D Coke Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'X3D Fanta Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (3, 'X3D Costa Model', 'string_2', 'string_3','string_4','string_5'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Model_3D';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data
		return array(
			'model_1' => 'Coke Bottle',
			'image3D_1' => 'gallery1',

			'model_2' => 'Coke Bottle wireframe (highlighted)',
			'image3D_2' => 'gallery2',

			'model_3' => 'Coke Bottle wireframe',
			'image3D_3' => 'gallery3',

			'model_4' => 'Coke Bottle wireframe (deeper insight)',
			'image3D_4' => 'gallery4',

			'model_5' => 'Costa Tea Cup',
			'image3D_5' => 'gallery5',

			'model_6' => 'Costa Tea Cup wireframe',
			'image3D_6' => 'gallery6',

			'model_7' => 'Costa Tea Cup wireframe 2',
			'image3D_7' => 'gallery7',

			'model_8' => 'Fanta Can',
			'image3D_8' => 'gallery8',

			'model_9' => 'Fanta Can wireframe',
			'image3D_9' => 'gallery9',

			'model_10' => 'Fanta Can wireframe (without texture)',
			'image3D_10' => 'gallery10',

			'model_11' => 'Fanta Can Top View wireframe',
			'image3D_11' => 'gallery11',

			'model_12' => 'Costa Cup',
			'image3D_12' => 'gallery12',

			'model_13' => 'Costa Cup wireframe',
			'image3D_13' => 'gallery13',

			'model_14' => 'Costa Cup wireframe (without texture)',
			'image3D_14' => 'gallery14',

			'model_15' => 'Costa Cup deeper insight',
			'image3D_15' => 'gallery15'
			
		);
	}
}
?>