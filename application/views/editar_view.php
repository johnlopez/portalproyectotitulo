<?=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?>

<form method="POST">
    Username:<input type="text" name="username" value="<?= set_value('username',$dato['username']);?>" /><br />
    Password:<input type="password" name="password" value="<?= set_value('password',$dato['password']);?>" /><br />
    
    <input type="hidden" name="post" value="1" />
    <input type="submit" value="Editar" />
</form>
<hr />
<?= validation_errors(); ?>