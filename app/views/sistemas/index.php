<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<ol class="breadcrumb">
  <li><a href="<?php echo URL_WITH_INDEX_FILE; ?>">Home</a></li>
  <li class="active">Pesquisar Sistemas</li>
</ol>

<h4>Pesquisar Sistema</h4>

<div class="panel panel-default">
  <div class="panel-body">
    <div class=" btn btn-group">
      <a href="<?php echo URL_WITH_INDEX_FILE; ?>sistemas/novosistema">
        <button type="button" class="btn btn-success">Novo Sistema</button>
      </a>
    </div>

    <button type="button" class="btn btn-default">Limpar</button> 

    <form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Descrição">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Sigla">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" size="30" placeholder="E-mail de atendimento do sistema">
      </div>
      <button type="submit" class="btn btn-default">Pesquisar</button>
    </form>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Descrição</th>
            <th>Sigla</th>
            <th>E-mail de atendimento do sistema</th>
            <th>URL</th>
            <th>Status</th>
            <th>Ações</th>
          </tr> 
        </thead>
        <tbody>
          <?php foreach ($sistemas as $sistema) { ?>
            <tr>
              <td>
                <?php if (isset($sistema->descricao)) echo htmlspecialchars($sistema->descricao, ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <?php if (isset($sistema->sigla)) echo htmlspecialchars($sistema->sigla, ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <?php if (isset($sistema->email)) echo htmlspecialchars($sistema->email, ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <?php if (isset($sistema->url)) echo htmlspecialchars($sistema->url, ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <?php if (isset($sistema->status)) echo htmlspecialchars($sistema->status, ENT_QUOTES, 'UTF-8'); ?>
              </td>
              <td>
                <a href="<?php echo URL_WITH_INDEX_FILE . 'sistemas/editarsistema/' . htmlspecialchars($sistema->id, ENT_QUOTES, 'UTF-8'); ?>">Alterar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
