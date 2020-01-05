<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Exception;
class Matriz extends Controller {
    public function rota90(Request $req){

    	if(!isset($req->input)){
    		return array('res' => false, "msg" =>"No se encuentra matriz");
    	}
    	$matriz = $req->input;
    	$fila = count($matriz);
    	foreach ($matriz as $fi) {
    		$col = count($fi);
    		if($col != $fila){
    			return array('res' => false, "msg" =>"Filas y Columnas no coinciden");
    		}
    	}

    	$data = array();
    	for ($i = $fila - 1; $i >= 0 ; $i--) { 
    		$rows = array();
    		for ($j=0; $j < $fila; $j++) { 
    			array_push($rows, $matriz[$j][$i]);
    		}
    		array_push($data, $rows);
    	}

    	return array('res' => true, "output" => $data);
    }
    public function rota09(Request $req){

        if(!isset($req->input)){
            return array('res' => false, "msg" =>"No se encuentra matriz");
        }
        $matriz = $req->input;
        $fila = count($matriz);
        foreach ($matriz as $fi) {
            $col = count($fi);
            if($col != $fila){
                return array('res' => false, "msg" =>"Filas y Columnas no coinciden");
            }
        }

        $data = array();
        for ($j=0; $j < $fila; $j++) { 
            $rows = array();
            for ($i = $fila - 1; $i >= 0 ; $i--) { 
                array_push($rows, $matriz[$i][$j]);
            }
            array_push($data, $rows);
        }

        return array('res' => true, "output" => $data);
    }

    public function rotarmatriz90(Request $req) {
    	try {
    		//$response = Curl::to('http://localhost:8000/api/rota90')
            $response = Curl::to('https://matrizlaravel.herokuapp.com/api/rota90')            
			->withData(array('input' => $req->input))
		    ->asJson(true)
	    	->post();
			return $response;
    	} catch (Exception $e) {
    		return array('res' => false, "msg" => "Errores Internos");
    	}
    }

    public function rotarmatriz09(Request $req) {
        try {
            //$response = Curl::to('http://localhost:8000/api/rota09')
            $response = Curl::to('https://matrizlaravel.herokuapp.com/api/rota09')            
            ->withData(array('input' => $req->input))
            ->asJson(true)
            ->post();
            return $response;
        } catch (Exception $e) {
            return array('res' => false, "msg" => "Errores Internos");
        }
    }

    public function vistamatriz(Request $req) {
    	$ma = json_decode($req->data,true);
    	return view("matriz",compact("ma"));
    }
}
