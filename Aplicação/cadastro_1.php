<div class="tab-content">

          <div class="tab-pane active" id="DadosPessoais">
            <form role="form" action="inclui.php" method="post" name="form_cad_membro">

              <div class="panel panel-default">
                <div class="panel-heading">Informações de contato</div>
                <div class="panel-body">


                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group ">
                        <label for="InputNomeCompleto">Nome completo*</label>
                        <input class="form-control genesis-field-nome" id="InputNomeCompleto" name="InputNomeCompleto" required="" placeholder="Digite seu nome" type="text" maxlength="128"
                        data-toggle="tooltip" data-placement="bottom" title="Informe seu nome.">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group genesis-field-data">
                        <label for="InputNascimento">Data de nascimento*</label>
                        <input class="form-control" id="InputNascimento" name="InputNascimento" required="" type="date" data-toggle="tooltip" data-placement="bottom" title="Informe a sua data de nascimento no formato DD/MM/YYYY.">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group genesis-field-sexo">
                        <label for="InputSexo">Sexo*</label>
                        <select class="form-control" id="InputSexo" name="InputSexo" required="" data-toggle="tooltip" data-placement="bottom" title="Maculino; Feminino.">
                          <option></option>
                          <option>Feminino</option>
                          <option>Masculino</option>

                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="text-left">
                      <div class="form-group col-md-2">
                        <label for="InputDDDTelefoneRes">DDD*</label>
                        <input class="form-control genesis-field-ddd" id="InputDDDTelefoneRes" name="InputDDDTelefoneRes" placeholder="99" type="tel" required="" maxlength="2" data-toggle="tooltip"
                        data-placement="bottom" title="Informe o DDD do telefone residencial.">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group ">
                        <label for="InputTelefoneRes">Tel. Residencial*</label>
                        <input class="form-control genesis-field-telefone" id="InputTelefoneRes" name="InputTelefoneRes" placeholder="99999999" type="tel" required="" maxlength="8" data-toggle="tooltip"
                        data-placement="bottom" title="Informe seu número de telefone residencial.">
                      </div>
                    </div>
                    <div class="text-left col-md-2">
                      <div class="form-group ">
                        <label for="InputDDDTelefoneCel">DDD</label>
                        <input class="form-control genesis-field-ddd" id="InputDDDTelefoneCel" name="InputDDDTelefoneCel" placeholder="99" type="tel" maxlength="2" data-toggle="tooltip" data-placement="bottom"
                        title="Informe o DDD do telefone celular.">
                      </div>
                    </div>
                    <div class="">
                      <div class="form-group col-md-3">
                        <label for="InputTelefoneCel">Tel. Celular</label>
                        <input class="form-control genesis-field-telefone" id="InputTelefoneCel" name="InputTelefoneCel" placeholder="999999999" type="tel" maxlength="9" data-toggle="tooltip"
                        data-placement="bottom" title="Informe seu número de telefone celular.">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group ">
                        <label for="InputEmail">Email*</label>
                        <input class="form-control genesis-field-email" id="InputEmail" name="InputEmail" placeholder="Digite seu email" type="email" required="" maxlength="128" data-toggle="tooltip"
                        data-placement="bottom" title="Informe um endereço válido.">
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <div class="panel panel-default ">
                <div class="panel-heading">Dados para acesso ao sistema</div>
                <div class="panel-body">

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group ">
                        <label for="InputUsuario">Usuário</label>
                        <input class="form-control" id="InputUsuario" name="InputUsuario" placeholder="Digite seu usuário" type="text" maxlength="16" data-toggle="tooltip" data-placement="bottom"
                        title="No máximo com 16 letras.">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group ">
                        <label for="InputNovSenha">Nova Senha</label>
                        <input class="form-control" id="InputNovSenha" name="InputNovSenha" placeholder="Digite sua senha" type="password" maxlength="16" data-toggle="tooltip" data-placement="bottom"
                        title="No máximo com 16 caractere." >
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group ">
                        <label for="InputConfSenha">Confirmar Senha</label>
                        <input class="form-control" id="InputConfSenha" name="InputConfSenha" placeholder="Digite a senha novamente" type="password" maxlength="16" data-toggle="tooltip" data-placement="bottom"
                        title="No máximo com 16 caractere." onchange="validasenha()">
                      </div>
                    </div>

                  </div>
                </div>
              </div>



              <div class="panel panel-default ">
                <div class="panel-heading">Informações para correspondência</div>
                <div class="panel-body">
                 
                    <div class="row">
                        <div class="col-md-4">
                          <div class="form-group ">
                            <label for="InputCep">CEP</label>
                            <input class="form-control" id="InputCep" name="InputCep" placeholder="Digite seu CEP" type="tel" maxlength="8" data-toggle="tooltip" data-placement="bottom" title="Não use pontos '.' ou traços '-'.">
                          </div>
                        </div>  
                    </div>
                    
                  <div class="row">

                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="InputTipLogradouro">Tipo</label>
                        <select class="form-control" id="InputTipLogradouro" name="InputTipLogradouro" data-toggle="tooltip" data-placement="bottom" title="Selecione o tipo do seu logradouro.">
                          <option></option>
                          <option>Alameda</option>
                          <option>Avenida</option>
                          <option>Outro</option>
                          <option>Rua</option>
                          <option>Travessa</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="InputEndereco">Endereço</label>
                        <input class="form-control genesis-field-texto" id="InputEndereco" name="InputEndereco" placeholder="Digite o logradouro" type="text" maxlength="128" data-toggle="tooltip"
                        data-placement="bottom" title="Somente o logradouro. Sem número e complemento .">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group ">
                        <label for="InputComplEndereco">Complemento</label>
                        <input class="form-control genesis-field-texto" id="InputComplEndereco" name="InputComplEndereco" placeholder="Digite o complemento" type="text" maxlength="50"
                        data-toggle="tooltip" data-placement="bottom" title="Fundos/13º andar/Casa 1.">
                      </div>
                    </div>

                    <div class="col-md-2">
                      <div class="form-group ">
                        <label for="InputNumEndereco">Número</label>
                        <input class="form-control" id="InputNumEndereco" name="InputNumEndereco" placeholder="Digite o Número" type="tel" maxlength="9" data-toggle="tooltip" data-placement="bottom" title="Informe o número de sua casa.">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group ">
                        <label for="InputBairro">Bairro</label>
                        <input class="form-control genesis-field-texto" id="InputBairro" name="InputBairro" placeholder="Digite o Bairro" type="text" maxlength="50" data-toggle="tooltip"
                        data-placement="bottom" title="Informe o bairro.">
                      </div>
                    </div>
                      
                    <div class="col-md-4">
                      <div class="form-group ">
                        <label for="InputCidade">Cidade</label>
                        <input class="form-control genesis-field-texto" id="InputCidade" name="InputCidade" placeholder="Digite a sua cidade" type="text" maxlength="50" data-toggle="tooltip"
                        data-placement="bottom" title="Informe a sua cidade.">
                      </div>
                    </div>
                      
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="InputEstado">Estado</label>
                        <select class="form-control" id="InputEstado" name="InputEstado" data-toggle="tooltip" data-placement="bottom" title="Selecione a sigla do seu estado.">
                          <option></option>
                          <option>RJ</option>
                          <option>SP</option>
                          <option>PR</option>
                          <option>MG</option>
                          <option>TO</option>
                        </select>
                      </div>
                    </div>
                      
                  </div>
                    

                    
                    
                  <div class="row">











                  </div>

                </div>
              </div>



              <div class="row">
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                  <button type="reset" class="btn btn-primary">Limpar</button>
                </div>
              </div>
            </form>
          </div>

          <div class="tab-pane" id="DadosEclesiasticos">
            <h3>
              Dados Correspondencias.
            </h3>
          </div>




        </div>