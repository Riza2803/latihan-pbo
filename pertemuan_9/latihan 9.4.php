<?php
    class komputer{
        private $jenis_prosesor = "Intel Core I7 4790 3.6 Ghz";
        protected $ram = "DDR 3";
        public $jenis_vga = "GTX 1060";

        public function tampilkan_prosesor(){
            return $this->jenis_prosesor;
        }

        public function tampilkan_prosesor2(){
            return $this->jenis_prosesor;
        }

        public function tampilkan_ram(){
            return $this->ram;
        }

        protected function tampilkan_vga(){
            return $this->jenis_vga;
        }

        protected function tampilkan_vga2(){
            return $this->jenis_vga;
        }
    }

    class laptop extends komputer{
        public function display_prosesor(){
            return $this->tampilkan_prosesor();
        }

        public function display_prosesor2(){
            return $this->tampilkan_prosesor();
        }

        public function display_ram(){
            return $this->tampilkan_ram();
        }

        public function display_ram2(){
            return $this->ram;
        }

        public function display_vga(){
            return $this->jenis_vga;
        }

        public function display_prosesorkomputer(){
            return $this->tampilkan_prosesor();
        }
    }

    $komputer = new komputer();
    $laptop = new laptop();

    echo "Line 57 =". $komputer->tampilkan_prosesor()."<br/>";
    echo "Line 58 =". $laptop->display_prosesor(). "<br/>";
    echo "Line 59 =". $laptop->display_prosesor2(). "<br/>";
    echo "Line 60 =". $laptop->tampilkan_prosesor(). "<br/>";
    echo "Line 61 =". $laptop->display_ram(). "<br/>";
    echo "Line 62 =". $laptop->display_prosesorkomputer(). "<br/>";
?>