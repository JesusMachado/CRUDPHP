

<div class="container"> 
  <?php
    echo '<div class="col-sm-2"></div>';
    echo '<div class="col-sm-6">';
    
    if($evento == 'registrar'){
    if($opcion != 'no')
        echo form_open('principal/ingresar',array('name'=>'formulario','class'=>'form_horizontal','role'=>'form'));
    else
        echo form_open('principal/update/'.$cedula,array('name'=>'formulario','class'=>'form_horizontal','role'=>'form'));

    if($opcion != 'no')
        echo '<div class="form-group">'.form_label('Cédula: ','cedula',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'cedula','id'=>'cedula','placeholder'=>'Su cédula aquí.','class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Nombre: ','nombre',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'nombre','id'=>'nombre','placeholder'=>'Ingrese su Nombre.','class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Apellido: ','apellido',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'apellido','id'=>'apellido','placeholder'=>'Ingrese su Apellido.','class'=>'form-control')).'</div>';
    
    //echo '<div class="form-group">'.form_label('Estado Civil: ','estadoc',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'cedula','id'=>'cedula','placeholder'=>'Su cédula aquí.','class'=>'form-control')).'</div>';
    ?>
    <div class="form-group">
    <label  class="col-sm-4 control-label">Estado Civil</label>
  
      <select name="myselect" class="form-control">
        <option value="soltero" <?php echo set_select('myselect', '1', TRUE); ?> >Soltero</option>
        <option value="casado"  <?php echo set_select('myselect', '2'); ?> >Casado</option>
        <option value="viudo"   <?php echo set_select('myselect', '3'); ?> >Viudo</option>
        <option value="otro"    <?php echo set_select('myselect', '4'); ?> >Otro</option>
      </select> 
      </div>         
    <?php    
    echo '<div class="form-group">'.form_label('Correo Electronico: ','correo',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'correo','id'=>'correo','placeholder'=>'Ingrese su correo electrónico, ejemplo: ejemplo@pin.com.','class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Telefono Hogar: ','telefono',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'telefonoh','id'=>'telefonoh','placeholder'=>'Ingrese su tlf de Casa.','class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Telefono Celular: ','telefono',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'telefonoc','id'=>'telefonoc','placeholder'=>'Ingrese su tlf Celular.','class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Telefono Oficina: ','telefono',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'telefonof','id'=>'telefonof','placeholder'=>'Ingrese su tlf de Oficina.','class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Dirección: ','direccion',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'direccion','id'=>'direccion','placeholder'=>'Ingrese su Dirección.','class'=>'form-control')).'</div>';
    echo '<div class="form-group">'.form_label('Nacionalidad: ','nacionalidad',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'nacionalidad','id'=>'nacionalidad','placeholder'=>'Ingrese su Nacionalidad.','class'=>'form-control')).'</div>';
    echo '<div class="form_group">'.form_label('Fecha Nacimiento: ','fechan',array('class'=>'col-sm-4 control-label')).'<div  id="calendar">'.form_input(array('name'=>'fechan','id'=>'fechan','data-date-format'=>'YYYY/MM/DD','placeholder'=>'Ingrese la fecha.','class'=>'form-control ')).'</div></div>';
    echo '<br>';  
    echo '</div>';
    echo '<div class="form-group"> <div class="col-sm-offset-8 col-sm-4">'.form_button(array('type'=>'submit','class'=>'btn btn-primary btn-lg '),'Enviar').form_button(array('type'=>'reset','class'=>'btn btn-danger btn-lg '),'Cancelar');
    echo '</div>';
    echo '</div>';
    echo form_close();
    echo '</div>';
    
   
    }
    else if($evento == 'buscar'){
        echo form_open('principal/mostrar',array('name'=>'formulario','class'=>'form_horizontal','role'=>'form'));
        echo '<div class="form-group">'.form_label('Cédula: ','cedula',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'cedula','id'=>'cedula','placeholder'=>'Su cédula aquí.','class'=>'form-control')).'</div>';
        echo '</div>';
        echo '<div class="form-group"> <div class="col-sm-offset-8 col-sm-4">'.form_button(array('type'=>'submit','class'=>'btn btn-primary btn-lg '),'Enviar').form_button(array('type'=>'reset','class'=>'btn btn-danger btn-lg '),'Cancelar');
        echo '</div>';
        echo form_close();
        echo '</div>';
    }
    else if($evento == 'modificar'){        
        echo form_open('principal/modificar',array('name'=>'formulario','class'=>'form_horizontal','role'=>'form'));
        echo '<div class="form-group">'.form_label('Cédula: ','cedula',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'cedula','id'=>'cedula','placeholder'=>'Su cédula aquí.','class'=>'form-control')).'</div>';
        echo '</div>';
        echo '<div class="form-group"> <div class="col-sm-offset-8 col-sm-4">'.form_button(array('type'=>'submit','class'=>'btn btn-primary btn-lg '),'Enviar').form_button(array('type'=>'reset','class'=>'btn btn-danger btn-lg '),'Cancelar');
        echo '</div>';
        echo form_close();
        echo '</div>';
    }
    else if($evento == 'eliminar'){
            echo form_open('principal/eliminar',array('name'=>'formulario','class'=>'form_horizontal','role'=>'form'));
            echo '<div class="form-group">'.form_label('Cédula: ','cedula',array('class'=>'col-sm-4 control-label')).form_input(array('name'=>'cedula','id'=>'cedula','placeholder'=>'Su cédula aquí.','class'=>'form-control')).'</div>';
            echo '</div>';
            echo '<div class="form-group"> <div class="col-sm-offset-8 col-sm-4">'.form_button(array('type'=>'submit','class'=>'btn btn-primary btn-lg '),'Enviar').form_button(array('type'=>'reset','class'=>'btn btn-danger btn-lg '),'Cancelar');
            echo '</div>';
            echo form_close();
            echo '</div>';
        }

  ?>
 