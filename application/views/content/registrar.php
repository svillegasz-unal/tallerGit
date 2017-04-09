<div class="page-header text-center">
    <h2>Registro de profesores</h2>
</div>
<div class="row">
    <div class="col-md-22">
        <?php if (isset($success)): ?>
        <div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Datos ingresados correctamente!</strong>
        </div>
        <?php endif; ?>
        <?= form_open('profesores/registrar', ['class'=> 'form']) ?>
        <div class="row">
            <div class="col-md-2">
                <?= form_label('Cedula<span style="color: red; font-size: 20px;">*</span>', 'inputCedula', ['class' => 'control-label']) ?>
            </div>
            <div class="col-md-4">
                <?= form_input('inputCedula', (validation_errors()) ? set_value('inputCedula'): '',[
                'id'=>'inputCedula',
                'class' => 'form-control',
                'placeholder' => 'Cedula']);
                ?>
                <?php echo form_error('inputCedula',
                '<div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>',
                    '</strong>
                </div>');
                ?>
            </div>
            <div class="col-md-2">
                <?= form_label('Nombre<span style="color: red; font-size: 20px;">*</span>', 'inputNombre', ['class' => 'control-label']) ?>
                
            </div>
            <div class="col-md-4">
                <?= form_input('inputNombre', (validation_errors()) ? set_value('inputNombre'): '',[
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
                <?= form_input('inputFechaNacimiento', (validation_errors()) ? set_value('inputFechaNacimiento'): '',[
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
                <?= form_input('inputLugarNacimiento', (validation_errors()) ? set_value('inputLugarNacimiento'): '',[
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
                <?= form_dropdown('inputTitulo', $titulos, (validation_errors()) ? set_value('inputTitulo') : '',[
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
                <?= form_input('inputDepartamento', (validation_errors()) ? set_value('inputDepartamento'): '',[
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
        <?= form_submit('submit', 'Registrar', ['class' => 'btn btn-primary']) ?>
        <?= form_close(); ?><!-- /form -->
    </div>
</div>
</div>