<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function store(Request $request){      
        if($request->file('arquivos')){
            foreach($request->file('arquivos') as $key => $arquivo){
                $request->file('arquivos')[$key]->store('arquivos');
            }
        return response('Arquivos enviados com sucesso!');
        }
        return response('Nenhum arquivo foi selecionado!');
    }
}
