<?= $this->layout('layouts/app', ['title' => 'Registro']) ?>
<h1>Registro</h1>
<form action="register" method="POST">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control <?php if($name['state'] === false){ echo "is-invalid"; }?>" name="name" id="name" value="<?= (isset($name) ? $name['value']:''); ?>" required>
    <div class="invalid-feedback">Verifique que su nombre este correctamente ( minimo 3 caracteres )</div>
  </div>
  <div class="form-group">
    <label for="identification">Documento</label>
    <input type="text" class="form-control <?php if($identification['state'] === false){ echo "is-invalid"; }?>" name="identification" id="identification" value="<?= (isset($identification) ? $identification['value']:''); ?>" required>
    <div class="invalid-feedback">Verifique que su Documento este correctamente</div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control <?php if($email['state'] === false){ echo "is-invalid"; }?>" name="email" id="email" value="<?= (isset($email) ? $email['value']:''); ?>" required>
    <div class="invalid-feedback">Verifique que su correo este correctamente</div>
  </div>
  <div class="form-group">
    <label for="country">País</label>
    <select class="form-control" id="country" name="country" required>
      <option value="1">Colombia</option>
    </select>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control <?php if($password['state'] === false){ echo "is-invalid"; }?>" name="password" id="password" value="<?= (isset($password) ? $password['value']:''); ?>" required>
    <div class="invalid-feedback">Recuerde que su contraseña debe tener minimo 6 caracteres y 1 dígito</div>
  </div>
  <?php if(isset($exist) && $exist == true){ echo '<div class="alert alert-danger" role="alert">Este usuario ya se encuentra registrado</div>'; }?>
  <?php if(isset($save) && $save == true){ echo '<div class="alert alert-success" role="alert">Registro completado correctamente</div>'; }?>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>