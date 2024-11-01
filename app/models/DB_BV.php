<?
class DB_BV{
    private $servername = "localhost:3307";
    private $username = 'root';
    private $password = '';
    private $dbname = 'baove';
    private $conn = null;

    function __construct(){
        try{
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}   