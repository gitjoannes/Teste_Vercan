<form method="post" action="">
    {{csrf_field()}}
    <section class="col-lg-12 connectedSortable">
        <!-- quick email widget -->
        <div class="box box-info">
            
            <div class="box-body">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    

                    <div class="tab-content no-padding">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="pessoa-fisica"
                             style="position: relative; height: 300px;">
                            <div id="div-cpf" style="">
                                <div class="col-md-3">
                                    <div class="form-group"><label class="control-label">CPF<span
                                                    style="color: red;"><sup>•</sup></span></label>
                                        <input type="tel" id="cpf" name="cpf"
                                               class="form-control not-required-cpf not-value"
                                               data-step="2" maxlength="18" required="" ></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label class="control-label">Nome
                                            <span
                                                    style="color: red;"><sup>•</sup></span></label><input
                                                type="text" name="nome" id="nome"
                                                class="form-control not-required-cpf not-value"
                                                required=""></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"><label class="control-label">Apelido
                                            <span
                                                    style="color: red;"><sup>•</sup></span></label><input
                                                type="text" name="apelido" id="apelido"
                                                class="form-control not-required-cpf not-value"
                                                required=""></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"><label class="control-label">RG<span
                                                    style="color: red;"><sup>•</sup></span></label><input
                                                type="text" name="rg" id="rg"
                                                class="form-control not-required-cpf not-value"
                                                required=""></div>
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

                        <div class="chart tab-pane" id="pessoa-fisica" style="position: relative; height: 300px;"></div>
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
                    <textarea class="textarea" placeholder="message" name="mensagem_p_fisica" id="mensagem_p_fisica"
                          style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            </div>

        </div>
    </section>
    <button type="submit" class="pull-left btn btn-success left -align-justify" id="form">
        <i class="fa fa-plus"></i> Salvar</button>
</form>