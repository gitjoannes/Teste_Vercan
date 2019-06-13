<?php

Route::get('/',['as'=>'principal','uses'=>'FornecedorController@principal']);
Route::get('listar/fornecedor/',['as'=>'listar.fornecedor','uses'=>'FornecedorController@index']);
Route::get('cadastrar/fornecedor/',['as'=>'cadastrar.fornecedor','uses'=>'FornecedorController@add']);
Route::post('salvar/fornecedor/',['as'=>'salvar.fornecedor','uses'=>'FornecedorController@salvar']);
Route::get('editar/fornecedor/{id}',['as'=>'editar.fornecedor','uses'=>'FornecedorController@editar']);
Route::put('atualizar/fornecedor/{id}',['as'=>'atualizar.fornecedor','uses'=>'FornecedorController@atualizar']);
Route::get('deletar/fornecedor/{id}',['as'=>'deletar.fornecedor','uses'=>'FornecedorController@deletar']);

