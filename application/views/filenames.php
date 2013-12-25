<?=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?>

<?php
 if($files){
 	echo heading('Archivo(s) disponible(s) para descargar', 3);

	  foreach($files as $file){
         
		  echo anchor('admin/downloads/'.$file, $file).br(1); 
                   
	  }

 }else{

echo heading('No hay archivos para descargar', 3).anchor('admin', 'Subir un Archivo');

 } 

?>
	<h5><?=br(1).anchor('admin/info', 'Proyectos de Titulo Disponibles'); ?></h5>
	<h5><?=br(1).anchor('admin/agregar', 'Gestionar Usuarios'); ?></h5>
	<h5><?=br(1).anchor('admin/', 'Agregar Proyectos de Titulo'); ?></h5>