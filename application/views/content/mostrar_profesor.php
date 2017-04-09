<div class="page-header text-center">
    <h2>Informacion de profesor</h2>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php if (validation_errors()): ?>
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?= validation_errors() ?></strong>
        </div>
        <?php endif; ?>
        <?php if (isset($success)): ?>
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Datos actualizados correctamente!</strong>
        </div>
        <?php endif; ?>
        <?= form_open('', ['class'=> 'form']) ?>
        <div class="row">
            <div class="col-md-2">
                <?= form_label('Cedula<span style="color: red; font-size: 20px;">*</span>', '', ['class' => 'control-label']) ?>
            </div>
            <div class="col-md-4">
                <input type="hidden" name="inputCedula" value="<?= $profesor->cedula ?>" />
                <p><?= $profesor->cedula ?></p>
            </div>
            <div class="col-md-2">
                <?= form_label('Nombre<span style="color: red; font-size: 20px;">*</span>', 'inputNombre', ['class' => 'control-label']) ?>
                
            </div>
            <div class="col-md-4">
                <?= form_input('inputNombre', $profesor->nombre,[
                'id'=>'inputNombre',
                'class' => 'form-control',
                'placeholder' => 'Nombre']);
                ?>
                <?php echo form_error('inputNombre',
                '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>',
                    '</strong>
                </div>');
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <?= form_label('Fecha de Nacimiento<span style="color: red; font-size: 20px;">*</span>', 'inputFechaNacimiento', ['class' => 'control-label']) ?>
                
            </div>
            <div class="col-md-4">
                <?= form_input('inputFechaNacimiento', $profesor->fecha_nacimiento,[
                'id'=>'inputFechaNacimiento',
                'class' => 'form-control',
                'placeholder' => 'Fecha de Nacimiento']);
                ?>
                <?php echo form_error('inputFechaNacimiento',
                '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>',
                    '</strong>
                </div>');
                ?>
            </div>
            <div class="col-md-2">
                <?= form_label('Lugar de Nacimiento<span style="color: red; font-size: 20px;">*</span>', 'inputLugarNacimiento', ['class' => 'control-label']) ?>
            </div>
            <div class="col-md-4">
                <?= form_input('inputLugarNacimiento', $profesor->lugar_nacimiento,[
                'id'=>'inputLugarNacimiento',
                'class' => 'form-control',
                'placeholder' => 'Lugar de Nacimiento']);
                ?>
                <?php echo form_error('inputLugarNacimiento',
                '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>',
                    '</strong>
                </div>');
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <?= form_label('Titulo<span style="color: red; font-size: 20px;">*</span>', 'inputTitulo', ['class' => 'control-label']) ?>
            </div>
            <div class="col-md-4">
                <?= form_dropdown('inputTitulo', $titulos, $profesor->titulo,[
                'id'=>'inputTitulo',
                'class' => 'form-control']);
                ?>
                <?php echo form_error('inputTitulo',
                '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>',
                    '</strong>
                </div>');
                ?>
            </div>
            <div class="col-md-2">
                <?= form_label('Departamento<span style="color: red; font-size: 20px;">*</span>', 'inputDepartamento', ['class' => 'control-label']) ?>
            </div>
            <div class="col-md-4">
                <?= form_input('inputDepartamento', $profesor->departamento,[
                'id'=>'inputDepartamento',
                'class' => 'form-control',
                'placeholder' => 'Departamento']);
                ?>
                <?php echo form_error('inputDepartamento',
                '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>',
                    '</strong>
                </div>');
                ?>
            </div>
        </div>
        <br />
        <?= form_submit('submit', 'Actualizar', ['class' => 'btn btn-primary']) ?>
        <?= form_close(); ?><!-- /form -->
    </div>
</div>