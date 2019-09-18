<?php 
    require_once('currency_converter.php');

    class Input{

        public function input_for_USD(){
            //taking input
            global $currency;
            if(isset($_POST['convert1'])){
                $value = $_POST['one'];
                echo $currency->convert_BTD_to_USD($value);
            }


        }
        public function input_for_JPY(){
            global $currency;
            if(isset($_POST['convert2'])){
                $value = $_POST['two'];
                echo $currency->convert_BTD_to_JPY($value);
            }


        }
        public function input_for_GBP(){
            global $currency;

            if(isset($_POST['convert3'])){
                $value = $_POST['three'];
                echo $currency->convert_BTD_to_GBP($value);
            }




        }
        public function input_for_EUR(){
            global $currency;

            if(isset($_POST['convert4'])){
                $value = $_POST['four'];
                echo $currency->convert_BTD_to_EUR($value);
            }


        }
      
    }

$input = new Input;

?>