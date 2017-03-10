<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<ol class="breadcrumb">
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>">Home</a></li>
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>sistemas/">Pesquisar Sistemas</a></li>
  <li class="active">Alterar Sistema</li>
</ol>

<h4>Alterar Sistema</h4>

<form action="<?php echo URL_WITH_INDEX_FILE; ?>sistemas/alterarsistema" method="POST">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="panel panel-default">
        <div class="panel-heading">Dados do Sistema</div>
          <div class="panel-body">
            <div class="col-md-12">
              <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="descricao">Descrição<span class="obrigatorio"> *</span></label>
                    <input type="text" class="form-control" name="descricao" value="<?php echo htmlspecialchars($sistema->descricao, ENT_QUOTES, 'UTF-8'); ?>" autofocus required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sigla">Sigla<span class="obrigatorio"> *</span></label>
                    <input type="text" class="form-control" name="sigla" value="<?php echo htmlspecialchars($sistema->sigla, ENT_QUOTES, 'UTF-8'); ?>" required />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">E-mail de atendimento do sistema</label>
                    <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($sistema->email, ENT_QUOTES, 'UTF-8'); ?>" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" name="url" value="<?php echo htmlspecialchars($sistema->url, ENT_QUOTES, 'UTF-8'); ?>" />
                  </div>
                </div>

                <input type="hidden" name="sistema_id" value="<?php echo htmlspecialchars($sistema->id, ENT_QUOTES, 'UTF-8'); ?>" />
                
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">Controle do Sistema</div>
            <div class="panel-body">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="status">Status<span class="obrigatorio"> *</span></label>
                      <select id="select_status" name="status" class="form-control" required oninvalid="this.setCustomValidity('Dados obrigatórios não informados!')" />
                        <option value="0">Ativo</option>
                        <option value="1">Cancelado</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Usuário responsável pela última alteração</label>
                      <input type="text" id="disabledInput" class="form-control" name="" value="Gustavo Ramos" required disabled />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="apdated_at">Data da última alteração</label>
                      <input type="text" id="disabledInput" class="form-control" name="updated_at" value="<?php echo htmlspecialchars($sistema->updated_at = date('d/m/Y'), ENT_QUOTES, 'UTF-8'); ?>" disabled />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="justificativa">Justificativa da última alteração</label>
                      <textarea id="disabledInput" class="form-control" rows="3" name="justificativa" disabled ><? echo htmlspecialchars($sistema->justificativa, ENT_QUOTES, 'UTF-8'); ?></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="justificativa">Nova justificativa de alteração<span class="obrigatorio"> *</span></label>
                      <textarea class="form-control" name="justificativa" rows="3" required ></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="btn btn-group pull-right">
              <input class="btn btn-primary pull-right" type="submit" name="submit_alterar_sistema" value="Salvar" />
            </div>
            <div class="btn btn-group pull-right">
              <a href="<?php echo URL_WITH_INDEX_FILE; ?>sistemas/">
                <button type="button" class="btn btn-default pull-right">Voltar</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>