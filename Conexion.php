<?php
    class Conexion{
        private $Host = "";
        private $User = "";
        private $Password = "";
        private $DataBase = "";
        private $Connection;
        
        public function __construct() {
            $this-> Host = "b6oxhfhr0bnbzksmjtht-mysql.services.clever-cloud.com";
            $this-> User = "ucceiu6kcpfmvy77";
            $this-> Password = "Zl0qNux02tRFN6kye1hU";
            $this-> DataBase = "b6oxhfhr0bnbzksmjtht";
        }

        public function OpenConnection(){
            try
            {
                $this-> Connection = new PDO("mysql:host={$this->Host}; dbname={$this->DataBase}", $this->User, $this->Password);
                $this-> Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }
            catch (PDOException $e)
            {
                $this-> Connection = false;
            }
        }

        public function CloseConnection(){
            mysql_close($this-> Connection);
        }

        public function GetConnection(){
            return $this-> Connection; 
        }
    }

    /*$Obj = new Conexion();
    $Obj-> OpenConnection();
    if($Obj-> GetConnection())
        echo "Ok";
    else 
        echo "Error";*/
?>