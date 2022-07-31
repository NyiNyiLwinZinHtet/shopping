<?php
// phpcs:ignore
// phpcs:ignore
class DB
{
    private string $_dsn;
    /**
     * Construct
     * 
     * @param string $_DB_NAME     name
     * @param string $_DB_USERNAME username
     * @param string $_DB_PASSWORD password
     * @param string $_DB_HOST     host
     * @param string $_DB_PORT     port
     * 
     * @return void
     */
    public function __construct(
        private string $_DB_NAME = "Shopping",
        private string $_DB_USERNAME = "root",
        private string $_DB_PASSWORD = "",
        private string $_DB_HOST = "localhost",
        private string $_DB_PORT = "3306"
    ) {
        $this->_dsn = "mysql:host=$this->_DB_HOST;dbname=$this->_DB_NAME";
    }
    /**
     * Connect
     *
     * @return PDO
     */
    public function connect()
    {
        // PHP Data Object
        try {
            $conn = new PDO(
                $this->_dsn,
                $this->_DB_USERNAME,
                $this->_DB_PASSWORD
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
$db = new DB();
