<?php 
    class Currency{

        const BDT_USD = 82.9550;
        const BDT_JPY = 0.78251;
        const BDT_GBP = 115.76790;
        const BDT_EUR = 102.5320;
        
        public function convert_BTD_to_USD($ammount_bdt){
            if($ammount_bdt>0){
                $result = $ammount_bdt / self::BDT_USD;
                return $result;
            }else{
                    return 0;
                }
            
        }
        public function convert_BTD_to_JPY($ammount_bdt){
            if($ammount_bdt>0){
                $result = $ammount_bdt/self::BDT_JPY;
                return $result;
            }else{
                return 0;
            }
        }
        public function convert_BTD_to_GBP($ammount_bdt)
            {if($ammount_bdt>0){
            $result = $ammount_bdt/self::BDT_GBP;
                return $result;
            }else{
                return 0;
        }
    }
        public function convert_BTD_to_EUR($ammount_bdt){
            if($ammount_bdt>0){
            $result = $ammount_bdt/self::BDT_EUR;
                return $result;
            }else{
                return 0;
        }
    }
        


    }

    $currency  = new Currency;

    // testing the curency converter
    //echo $currency->convert_BTD_to_USD(100);
    //echo $currency->convert_BTD_to_JPY(100);
    //echo $currency->convert_BTD_to_GBP(100);
    //echo $currency->convert_BTD_to_EUR(100);

?>