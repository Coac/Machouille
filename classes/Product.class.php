<?php

    require_once("Database.class.php");

    
    Class Product
    {
         private $_db;
         private $category;
        public function __construct()
        {
            $this->_db = new Database();
        }

        public function getByCategoryName($name){
            $data = $this->_db->prepare("SELECT product.name, product.img,product.price, product.id FROM product, productcategory WHERE product.category=productcategory.id And productcategory.name='" . $name . "'", true); 
            $data->execute();
            $result = $data->fetchAll();
            if(empty($result)) 
                return false;
            else
            {
                return $result;
            }
        }
         public function getByCategoryid($id){
            $data = $this->_db->prepare("SELECT product.name, product.img,product.price, product.id FROM product, productcategory WHERE product.category=productcategory.id And productcategory.id='" . $id . "'", true); 
            $data->execute();
            $result = $data->fetchAll();
            if(empty($result)) 
                return false;
            else
            {
                return $result;
            }
        }

         public function getByName($name){
            $data = $this->_db->prepare("SELECT product.name, product.img,product.price, product.id FROM product WHERE product.name='" . $name . "'", true); 
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

        public function getById($id){
            $data = $this->_db->prepare("SELECT * FROM product WHERE id='" . $id . "'", true); 
            $data->execute();
            $result = $data->fetchAll();
            if(empty($result)) 
                return false;
            else
            {
                return $result;
            }
        }

        public function getCategoryName($id){
            $data = $this->_db->prepare("SELECT productcategory.name FROM product, productcategory WHERE product.category=productcategory.id AND product.id='" . $id . "'", true); 
            $data->execute();
            $result = $data->fetchAll();
            if(empty($result)) 
                return false;
            else
            {
                return $result;
            }
        }
		
		
		        public function addProduct($prix, $nom, $categorie,$name){
            $data = $this->_db->prepare("INSERT INTO `machouille`.`product` (`id`, `price`, `name`, `category`, `img`, `desc`) VALUES (NULL, '$prix', '$nom', '$categorie', '$name', '');", true); 
            $data->execute();
        }
 

    }


?>