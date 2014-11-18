
<div class = "container">

 




<table class="table">
      <table class="table table-hover" >
            <thead>
                <tr>                    
                    <th><center>Cédula</center></th>
                    <th><center>Nombre</center></th>
                    <th><center>Apellido</center></th>
                    <th><center>Estado Civil</center></th>
                    <th><center>Correo Electronico</center></th>
                    <th><center>Telefono Hogar</center></th>
                    <th><center>Telefono Celular</center></th>
                    <th><center>Telefono Oficina</center></th>
                    <th><center>Dirección</center></th>
                    <th><center>Nacionalidad</center></th>        
                    <th><center>Fecha Nacimiento</center></th>        
                </tr>
            </thead>
            
                <?php foreach($result  as $r): ?>
                    <tr>
                        <td><?php echo $r->cedula; ?></td>
                        <td><?php echo $r->nombre; ?></td>
                        <td><?php echo $r->apellido; ?></td>
                        <td><?php echo $r->estadoc; ?></td>
                        <td><?php echo $r->correo; ?></td>
                        <td><?php echo $r->telefonoh; ?></td>
                        <td><?php echo $r->telefonof; ?></td>
                        <td><?php echo $r->telefonoc; ?></td>
                        <td><?php echo $r->direccion; ?></td>
                        <td><?php echo $r->nacionalidad; ?></td>
                        <td><?php echo $r->fechan; ?></td>

                      
                    </tr>
                <?php endforeach ?>
           

    

    
</table>