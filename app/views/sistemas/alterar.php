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
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" name="descricao" value="<?php echo htmlspecialchars($sistema->descricao, ENT_QUOTES, 'UTF-8'); ?>" autofocus required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sigla">Sigla</label>
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
                      <label for="status">Status</label>
                      <select class="form-control">
                        <option><? echo htmlspecialchars($sistema->status, ENT_QUOTES, 'UTF-8'); ?></option>
                        <option><? echo htmlspecialchars($sistema->status, ENT_QUOTES, 'UTF-8'); ?></option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Usuário responsável pela última alteração</label>
                      <input type="text" class="form-control" name="" value="Gustavo Ramos" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="apdated_at">Data da última alteração</label>
                      <input type="text" class="form-control" name="updated_at" value="<?php echo htmlspecialchars($sistema->updated_at, ENT_QUOTES, 'UTF-8'); ?>" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="justificativa">Justificativa da última alteração</label>
                      <textarea class="form-control" rows="3" name="justificativa"><? echo htmlspecialchars($sistema->justificativa, ENT_QUOTES, 'UTF-8'); ?></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="justificativa">Nova justificativa de alteração</label>
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input class="btn btn-primary pull-right" type="submit" name="submit_update_sistema" value="Salvar" />
          </div>
        </div>
    </div>
  </div>
</form>