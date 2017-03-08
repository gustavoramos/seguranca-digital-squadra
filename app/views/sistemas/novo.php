<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<ol class="breadcrumb">
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>">Home</a></li>
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>sistemas/">Pesquisar Sistemas</a></li>
  <li class="active">Novo Sistema</li>
</ol>

<h4>Novo Sistema</h4>

<form action="<?php echo URL_WITH_INDEX_FILE; ?>sistemas/adicionarsistema" method="POST">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="descricao">Descrição</label>
              <input type="text" class="form-control" name="descricao" value="" autofocus required />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="sigla">Sigla</label>
              <input type="text" class="form-control" name="sigla" value="" required />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">E-mail de atendimento do sistema</label>
              <input type="email" class="form-control" name="email" value="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="url">URL</label>
              <input type="text" class="form-control" name="url" value="" />
            </div>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="btn btn-group pull-right">
              <input class="btn btn-primary" type="submit" name="submit_adicionar_sistema" value="Salvar" />
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