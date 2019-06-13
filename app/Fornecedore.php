<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedore extends Model
{
    protected $fillable = [
        'cnpj', 'razaoSocial', 'nomeFantasia',
        'indicadorInscEst','inscricaoEst','inscricaoMunic','situacaoCNPJ','recolhimento','ativo','mensagem'
    ];
}
