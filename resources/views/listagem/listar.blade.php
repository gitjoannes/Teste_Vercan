<div class="box-body div-scroll-x">
    <div id="tbAll_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-sm-12">
                <table id="tbAll" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="tbAll_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="tbAll" rowspan="1" colspan="1"
                            aria-label="Razão Social/Nome: activate to sort column ascending" style="width: 315.4px;">
                            Razão Social/Nome
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="tbAll" rowspan="1" colspan="1"
                            aria-label="Nome Fantasia/Apelido: activate to sort column ascending" style="width: 369px;">
                            Nome Fantasia/Apelido
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="tbAll" rowspan="1" colspan="1"
                            aria-label="CNPJ/CPF: activate to sort column ascending" style="width: 189.8px;">CNPJ/CPF
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="tbAll" rowspan="1" colspan="1"
                            aria-label="Ativo: activate to sort column ascending" style="width: 117.8px;">Ativo
                        </th>
                        <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Ação"
                            style="width: 106.4px;">Ação
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($registro_Fornec as $registro_For)
                        <tr>
                            <td>{{$registro_For->razaoSocial}}</td>
                            <td>{{$registro_For->nomeFantasia}}</td>
                            <td>{{$registro_For->cnpj}}</td>
                            <td>{{$registro_For->ativo}}</td>
                            <td style="width: 5%;" class="action-group-button text-center">
                                <div class="btn-group">
                                  <a href="{{route('editar.fornecedor',$registro_For->id)}}"><i class="fa fa-edit"></i></a>
                                  <a href="{{route('deletar.fornecedor',$registro_For->id)}}"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th rowspan="1" colspan="1">Razão Social/Nome</th>
                        <th rowspan="1" colspan="1">Nome Fantasia/Apelido</th>
                        <th rowspan="1" colspan="1">CNPJ/CPF</th>
                        <th rowspan="1" colspan="1">Ativo</th>
                        <th class="text-center" rowspan="1" colspan="1">Ação</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>