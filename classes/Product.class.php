<?php

    require_once("Database.class.php");

    
    Class Product
    {
         private $_db;
        public function __construct()
        {
            $this->_db = new Database();
        }

        public function getByCategoryName($name){
            $data = $this->_db->prepare("SELECT * FROM product, productcategory WHERE product.category=productcategory.id And productcategory.name='" . $name . "'", true); 
            $data->execute();
            $result = $data->fetchAll();
            if(empty($result)) 
                return false;
            else
            {
                return $result;
            }
        }

        public function getAll(){
            $data = $this->_db->prepare("SELECT * FROM product", true); 
            $data->execute();
            $result = $data->fetchAll();
            if(empty($result)) 
                return false;
            else
            {
                return $result;
            }
        }
 

    }


?>