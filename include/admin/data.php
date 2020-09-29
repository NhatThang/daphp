<?php 
    class database{
        //Khai bao cac thuoc tinh
        private $conn = null;
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $data = 'banhang';
        private $result = null;
        
        //xay dung cac phuong thuc
        private function connect(){
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->data)
            or die('Không thể kết nối database');
            $this->conn->query("SET NAMES UTF8");
        }

        //Phuong thuc SELECT du lieu trong bang
        public function select($sql){
            $this->connect();
            $this->result = $this->conn->query($sql);
        }
        public function fetch(){
            if ($this->result -> num_rows > 0) {
                $row = $this->result->fetch_assoc();
            }else{
                $row = 0;
            }
            return $row;
        }

        //Phuong thuc chung cho insert, update, delete
        public function command($sql){
            $this->connect();
            $this->conn->query($sql);
        }
    }
?>
