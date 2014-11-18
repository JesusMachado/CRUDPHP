<div class="container"> 

  <?php
    echo '<div class="col-sm-2"></div>';
    echo '<div class="col-sm-6">';
    if(isset($ex->cedula)){
     echo '<h1 class="text-center"> Actualizar Datos </h1><br>';
        echo form_open('principal/prin',array('name'=>'formulario','class'=>'form_horizontal','role'=>'form'));
    



    echo '<div class="form-group">'.form_label('Cédula: ','cedula',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'cedula','id'=>'cedula','value'=>$ex->cedula,'class'=>'form-control')).'</div>';
  
    echo '<div class="form-group">'.form_label('Nombre: ','nombre',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'nombre','id'=>'nombre','value'=>$ex->nombre,'class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Apellido: ','apellido',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'apellido','id'=>'apellido','value'=>$ex->apellido,'class'=>'form-control')).'</div>';
    
    //echo '<div class="form-group">'.form_label('Estado Civil: ','estadoc',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'cedula','id'=>'cedula','placeholder'=>'Su cédula aquí.','class'=>'form-control')).'</div>';
    ?>
    <div class="form-group">
    <label  class="col-sm-4 control-label">Estado Civil</label>
  
      <select name="estadoc" class="form-control">
      <?php if($ex->myselect == 'Soltero') ?>
        <option value="soltero" <?php echo set_select('estadoc', '1'); ?> >Soltero</option>
      <?php if($ex->myselect == 'Casado') ?>
        <option value="casado"  <?php echo set_select('estadoc', '2'); ?> >Casado</option>
      <?php if($ex->myselect == 'Viudo') ?>
        <option value="viudo"   <?php echo set_select('estadoc', '3'); ?> >Viudo</option>
      <?php if($ex->myselect == 'Otro') ?>
        <option value="otro"    <?php echo set_select('estadoc', '4'); ?> >Otro</option>
      </select> 
      </div>         
    <?php    
    echo '<div class="form-group">'.form_label('Correo Electronico: ','correo',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'correo','id'=>'correo','value'=>$ex->correo,'class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Telefono Hogar: ','telefono',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'telefonoh','id'=>'telefonoh','value'=>$ex->telefonoh,'class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Telefono Celular: ','telefono',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'telefonoc','id'=>'telefonoc','value'=>$ex->telefonoc,'class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Telefono Oficina: ','telefono',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'telefonof','id'=>'telefonof','value'=>$ex->telefonof,'class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Dirección: ','direccion',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'direccion','id'=>'direccion','value'=>$ex->direccion,'class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Nacionalidad: ','nacionalidad',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'nacionalidad','id'=>'nacionalidad','value'=>$ex->nacionalidad,'class'=>'form-control')).'</div>';
    echo '<div class="form_group">'.form_label('Fecha Nacimiento: ','fechan',array('class'=>'col-sm-4 control-label')).'<div  id="calendar">'.form_input(array('name'=>'fechan','id'=>'fechan','data-date-format'=>'YYYY/MM/DD','value'=>$ex->fechan,'class'=>'form-control ')).'</div></div>';
    echo '<br>';  
    echo '</div>';
    echo '<div class="form-group"> <div class="col-sm-offset-8 col-sm-4">'.form_button(array('type'=>'submit','class'=>'btn btn-primary btn-lg '),'Enviar').form_button(array('type'=>'reset','class'=>'btn btn-danger btn-lg '),'Cancelar');
    echo '</div>';
    echo '</div>';
    echo form_close();
    echo '</div>';
    
   
    
    
    
    
    }
    else{
      echo "No Existe esa Cedula";
    }

  ?>
 