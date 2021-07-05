<?php

    function formatAniversario($data){
        
        $dataFormatada = substr($data, 0, 2).'/'.substr($data, 3, 2);
        return $dataFormatada;
    }

    function dataAtual(){
        return date('d/m/Y');
    }

    function mesAtual(){
        return date("m");
    }

    function mesExtenso($idMes){
        $mes = "";
        switch ($idMes){
            case "01":
                $mes = 'Janeiro';
            break;
            case "02":
                $mes = 'Fevereiro';
            break;
            case "03":
                $mes = 'Março';
            break;
            case "04":
                $mes = 'Abril';
            break;
            case "05":
                $mes = 'Maio';
            break;
            case "06":
                $mes = 'Junho';
            break;
            case "07":
                $mes = 'Julho';
            break;
            case "08":
                $mes = 'Agosto';
            break;
            case "09":
                $mes = 'Setembro';
            break;
            case "10":
                $mes = 'Outubro';
            break;
            case "11":
                $mes = 'Novembro';
            break;
            case "12":
                $mes = 'Dezembro';
            break;
        }
        return $mes;
    }

    function cripto($str)
	{
        $str = '9878945'.$str.'7585123';
        $str = base64_encode($str);
        
		return $str;
		
	}

	function descripto($str)
	{
        $str = base64_decode($str);
        $str = str_replace('9878945', '', $str);
        $str = str_replace('7585123', '', $str);
		return $str;

	}

?>