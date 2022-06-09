<?php
include("header.php");
?>
<main class="form-signin" id="login">
   <div class="container">
      <div class="abs-center">
         <form action="validar.php" method="post" id="formulario-login" class="border p-3 form">
            <h1 class="h3 mb-3 fw-normal" style="text-align: center">Iniciar sesion</h1>
            <div class="form-floating">
               <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
               <label for="email">Email</label>
             </div>
             <br>
            <div class="form-floating">
               <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
               <label for="pass">Contraseña</label>
             </div>
            <br>
            <button class="w-100 btn btn-lg btn-secondary" type="submit">Acceder</button>
            <br><br>
            <a href="http://localhost/Web2022/php/nuevo_cliente.php" class="link">¿No estas registrado?</a>
         </form>
      </div>
   </div>
</main>
<?php
include("footer.php");
?>