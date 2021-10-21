<?= $this->layout('layouts/app', ['title' => 'Login']) ?>
<h1>Login</h1>
<form action="login" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control <?php if($email['state'] === false){ echo "is-invalid"; }?>" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div class="invalid-feedback">Verifique que su correo este correctamente</div>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control <?php if($password['state'] === false){ echo "is-invalid"; }?>" name="password" id="exampleInputPassword1" required>
    <div class="invalid-feedback">Contraseña incorrecta</div>
</div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>