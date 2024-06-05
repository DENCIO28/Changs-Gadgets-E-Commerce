<?php
    class Products{
        public $id;
        public $pname;
        public $pdesc;
        public $pprice;
        public $pcolor;
        public $pstorage;
        public $pimage;

        public static $tblName = "products";
        public static $tblName2 = "checkout";

        function __construct($name=null,$desc=null,$price=null, $color=null,$storage=null,$image=null){
            $this->pname = $name;
            $this->pdesc = $desc;
            $this->pprice = $price;
            $this->pcolor = $color;
            $this->pstorage = $storage;
            $this->pimage = $image;
        }


        public static function getAll(){
            require("../dbconfig.php"); 
            
            $sql = "SELECT * FROM ".self::$tblName;
            $result = $conn->query($sql);

            $conn->close();
            return $result;
        }

        function save(){
            require("dbconfig.php");
            
            $sql = "INSERT INTO ".self::$check_out." (lname,fname,position) 
                    VALUES ('".$this->lname."',
                            '".$this->fname."',
                            '".$this->position."'
                    )";

            if($conn->query($sql)===TRUE){
                echo "New record created!";
            }else{
                echo "Error while saving data.";
            }
            
            $conn->close();
        }

    }
?>