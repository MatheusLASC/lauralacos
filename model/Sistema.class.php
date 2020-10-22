<?php

class Sistema {

    static function DataAtualBR()
    {
        return date('d/m/Y');
    }

    static function DataAtualUS()
    {
        return date('Y/m/d');
    }

    static function HoraAtual()
    {
        return date('H:i:s');
    }


    static function MoedaBR($valor)
    {
        return number_format($valor,2,",",".");
    }

    public static function Fdata($data){
        $data_correta = explode("-",$data);
        $data = $data_correta[2]."/". $data_correta[1] ."/".$data_correta[0];
        
        return $data;
    }
    
}



?>