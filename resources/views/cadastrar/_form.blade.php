<form method="post" action="{{route('salvar.fornecedor')}}">
    {{csrf_field()}}
    <section class="col-lg-12 connectedSortable">
        <!-- quick email widget -->
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Dados do Fornecedor</h3><br>
                <div id="status"></div>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i
                                class="fa fa-minus"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="box-body">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-left">
                        <!-- /. tools -->
                        <li class="active"><a href="#pessoa-juridica" data-toggle="tab">Pessoa
                                Juridica</a>
                        </li>
                        <li><a href="#pessoa-fisica" data-toggle="tab">Pessoa Fisica</a></li>

                    </ul>

                    <div class="tab-content no-padding">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="pessoa-juridica"
                             style="position: relative; height: 300px;">
                            <div id="div-cnpj" style="">
                                <div class="col-md-3">
                                    <div class="form-group"><label class="control-label">CNPJ<span
                                                    style="color: red;"><sup>•</sup></span></label>
                                        <input type="tel" id="cnpj" name="cnpj"
                                               class="form-control not-required-cnpj not-value"
                                               data-step="2" maxlength="18" required="" ></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label class="control-label">Razão
                                            Social<span
                                                    style="color: red;"><sup>•</sup></span></label><input
                                                type="text" name="razaoSocial" id="razaoSocial"
                                                class="form-control not-required-cnpj not-value"
                                                required=""></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"><label class="control-label">Nome
                                            Fantasia<span
                                                    style="color: red;"><sup>•</sup></span></label><input
                                                type="text" name="nomeFantasia" id="nomeFantasia"
                                                class="form-control not-required-cnpj not-value"
                                                required=""></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"><label class="control-label">Indicador de
                                            Inscrição Estadual<span
                                                    style="color: red;"><sup>•</sup></span></label><select
                                                id="ie-indicadorInscEst" name="indicadorInscEst"
                                                class="form-control not-required-cnpj" required="">
                                            <option value="">Selecione</option>
                                            <option value="contribuinte">Contribuinte</option>
                                            <option value="contribuinte_isento">Contribuinte Isento
                                            </option>
                                            <option value="nao_contribuinte">Não Contribuinte</option>
                                        </select></div>
                                </div>

                                {{--required=""--}}
                                <div class="col-md-3">
                                    <div class="form-group"><label class="control-label">Inscrição
                                            Estadual</label><input type="tel" name="inscricaoEst" id="inscricaoEst"
                                                                   class="form-control not-value"
                                                                   required=""></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"><label class="control-label">Inscrição
                                            Municipal</label><input type="tel" id="inscricaoMunic" name="inscricaoMunic"
                                                                    class="form-control not-required-cnpj not-value"
                                                                    required=""></div>
                                </div>

                                {{--readonly=""--}}
                                <div class="col-md-3">
                                    <div class="form-group"><label class="control-label">Situação
                                            CNPJ</label><input type="text" name="situacaoCNPJ" id="situacaoCNPJ"
                                                               class="form-control"  required=""></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"><label
                                                class="control-label">Recolhimento<span
                                                    style="color: red;"><sup>•</sup></span></label><select
                                                name="recolhimento" id="recolhimento" class="form-control not-required-cnpj"
                                                style="width: 100%" required="">
                                            <option value="">Selecione</option>
                                            <option value="recolher">A Recolher pelo Prestador</option>
                                            <option value="retido">Retido pelo Tomador</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="form-group"><label class="control-label">Ativo<span
                                                    style="color: red;"><sup>•</sup></span></label><select
                                                name="ativo" id="ativo" class="form-control" style="width: 100%"
                                                required="">
                                            <option value="">Selecione</option>
                                            <option value="Não">Não</option>
                                            <option value="Sim" selected="">Sim</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="chart tab-pane" id="pessoa-fisica" style="position: relative; height: 300px;">
                            {{--@include('cadastrar.p_fisica._form_p_Fisica')--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- quick mensagem widget -->
        <div class="box box-info">
            <div class="box-header">
                <i class="fa fa-envelope"></i>
                <h3 class="box-title">Observação</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn bg-teal btn-sm" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>

            </div>

            <div class="box-body">
                <div>
                    <textarea class="textarea" placeholder="message" name="mensagem" id="mensagem"
                          style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            </div>

        </div>
    </section>
    <button type="submit" class="pull-left btn btn-success left -align-justify" id="form">
        <i class="fa fa-plus"></i> Salvar</button>
</form>