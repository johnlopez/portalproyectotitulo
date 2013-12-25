<?=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?>

<h1>Listado De Usuarios</h1>
<table>
    <tr>
        <th>ID</th>   
        <th>Username</th> 
        <th>Password</th> 
         
        <th>Accion</th> 
    </tr>
    <?php foreach($usuarios as $usuario):?>
    <tr>
        <td><?= $usuario->id?></td>   
        <td><?= $usuario->username?></td> 
        <td><?= $usuario->password?></td> 
        
        <td><a href="<?= base_url().'admin/editar/'.$usuario->id?>">Editar</a> | <a href="<?= base_url().'admin/eliminar/'.$usuario->id?>">Eliminar</a></td>
    </tr>
    <?php endforeach;?>
</table>
<hr />
<form method="POST">
    Username:<input type="text" name="username" value="<?= set_value('username');?>" /><br />
    Password:<input type="password" name="password" value="<?= set_value('password');?>" /><br />
    
    <input type="hidden" name="post" value="1" />
    <input type="submit" value="Agregar" />
</form>
<hr />
<?= validation_errors(); ?>

<h5><?=br(1).anchor('admin/info', 'Proyectos de Titulo Disponibles'); ?></h5>
<h5><?=br(1).anchor('admin/agregar', 'Gestionar Usuarios'); ?></h5>
<h5><?=br(1).anchor('admin/', 'Agregar Proyectos de Titulo'); ?></h5>