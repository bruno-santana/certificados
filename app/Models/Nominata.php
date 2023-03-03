<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nominata extends Model
{
    use HasFactory;

    protected $table = 'nominata';
    protected $primaryKey = 'nominata_cod';

    public function buscarNominatasPorLoja($loja) {
        $query = DB::table('loja AS l')
            ->join('nominata AS n', 'n.loja_cod', '=', 'l.loja_cod')    
            ->join('nominata_cargo AS nc', 'nc.nominata_cod', '=', 'n.nominata_cod')
            ->join('cargo_maconico AS cm', 'cm.cargo_maconico_cod', '=', 'nc.cargo_maconico_cod')
            ->join('irmao AS i', 'i.irmao_cod', '=', 'nc.irmao_cod')
            ->join('pessoa AS p', 'p.pessoa_cod', '=', 'i.pessoa_cod')
            ->select('p.pessoa_nome', 'i.irmao_cim', 'l.loja_razao_social', 'cm.cargo_maconico_nome', 'n.nominata_cod', 'nc.nominata_cargo_inicio', 'nc.nominata_cargo_fim')
            ->where('l.loja_cod', '=', $loja)
            ->where('n.nominata_data_inicio', '>', '2022-07-31')
            ->get();
        
        return $query;
    }
}
