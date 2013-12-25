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
        
        <td><a href="<?= base_url().'crud/editar/'.$usuario->id?>">Editar</a> | <a href="<?= base_url().'crud/eliminar/'.$usuario->id?>">Eliminar</a></td>
    </tr>
    <?php endforeach;?>
</table>
<hr />
<form method="POST">
    Username:<input type="text" name="username" value="<?= set_value('username');?>" /><br />
    Password:<input type="text" name="password" value="<?= set_value('password');?>" /><br />
    
    <input type="hidden" name="post" value="1" />
    <input type="submit" value="Agregar" />
</form>
<hr />
<?= validation_errors(); ?>