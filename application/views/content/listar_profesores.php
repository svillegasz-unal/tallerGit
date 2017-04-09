<div class="page-header text-center">
  <h2>Lista de profesores</h2>
</div>
<table class="table">
  <thead>
    <tr>
      <th></th>
      <th>Cedula</th>
      <th>Nombre</th>
      <th>Fecha de Nacimiento</th>
      <th>Lugar de Nacimiento</th>
      <th>Titulo</th>
      <th>Departamento</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($profesores as $profesor): ?>
    <tr>
      <td>
        <a href="<?php echo base_url(); ?>profesores/profesor/<?= $profesor->cedula ?>/" class="btn btn-default">Modificar</a>
      </td>
      <td><?= $profesor->cedula ?></td>
      <td><?= html_escape($profesor->nombre) ?></td>
      <td class="valor_propiedad"><?= html_escape($profesor->fecha_nacimiento) ?></td>
      <td><?= html_escape($profesor->lugar_nacimiento) ?></td>
      <td><?= html_escape($profesor->titulo) ?></td>
      <td><?= html_escape($profesor->departamento) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>