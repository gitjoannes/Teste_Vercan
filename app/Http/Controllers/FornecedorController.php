<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedore;

class FornecedorController extends Controller
{

    public function principal()
    {
        return view('welcome');
    }
    public function  index()
    {
        $registro_Fornec = Fornecedore::all();
        return view('listagem.index',compact('registro_Fornec'));

    }

    public function  form()
    {
        $registro_Fornec = Fornecedore::all();
        return view('editar.index',compact('registro_Fornec'));

    }

    public function  add()
    {
        return view('cadastrar.add_fornec');
    }

    public function  salvar(Request $req)
    {
        $dados = new Fornecedore;

        $dados->cnpj                = $req->cnpj;
        $dados->razaoSocial         = $req->razaoSocial;
        $dados->nomeFantasia        = $req->nomeFantasia;
        $dados->indicadorInscEst    = $req->indicadorInscEst;
        $dados->inscricaoEst        = $req->inscricaoEst;
        $dados->inscricaoMunic      = $req->inscricaoMunic;
        $dados->situacaoCNPJ        = $req->situacaoCNPJ;
        $dados->recolhimento        = $req->recolhimento;
        $dados->ativo               = $req->ativo;
        $dados->mensagem            = $req->mensagem;
        $dados->save();


       /* Fornecedore::created($dados);*/
        return redirect()->route('listar.fornecedor');
    }

    public function  editar($id)
    {
        $dados = Fornecedore::find($id);
        return view('editar.index',compact('dados'));
    }

    public function  atualizar(Request $req,$id)
    {
        $dados =  Fornecedore::find($id);

        $dados->cnpj                = $req->cnpj;
        $dados->razaoSocial         = $req->razaoSocial;
        $dados->nomeFantasia        = $req->nomeFantasia;
        $dados->indicadorInscEst    = $req->indicadorInscEst;
        $dados->inscricaoEst        = $req->inscricaoEst;
        $dados->inscricaoMunic      = $req->inscricaoMunic;
        $dados->situacaoCNPJ        = $req->situacaoCNPJ;
        $dados->recolhimento        = $req->recolhimento;
        $dados->ativo               = $req->ativo;
        $dados->mensagem            = $req->mensagem;
        $dados->save();


        /* Fornecedore::created($dados);*/
        return redirect()->route('listar.fornecedor');
    }
    public function  deletar($id)
    {
        $delete = Fornecedore::find($id);
        $delete->delete();

        return redirect()->route('listar.fornecedor');
    }





}
