<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nominata;

class LojaController extends Controller
{
    public function show(Request $request)
    {
        $collection = [];
        $loja = $request->loja_cod;
        $nominata = (new Nominata())->buscarNominatasPorLoja($loja);

        foreach ($nominata as $n => $cargo)
        {
            $joia = mb_convert_encoding('static/images/joias_certificados/'.$cargo->cargo_maconico_nome.'.png', 'UTF-8');

            $collection[$n]['irmao'] = $cargo->pessoa_nome;
            $collection[$n]['loja'] = $cargo->loja_razao_social;
            $collection[$n]['cargo'] = $cargo->cargo_maconico_nome;
            $collection[$n]['joia'] = str_replace(' ', '_', $joia);
            $collection[$n]['inicio'] = $cargo->nominata_cargo_inicio;
            $collection[$n]['fim'] = $cargo->nominata_cargo_fim;
        }
        
        return view('show', compact('collection'));
    }
}
