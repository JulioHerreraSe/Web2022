<?php
   include("config.php");
   include("header.php");

   $tipo = "";
   $keyboard = "";
   try {
      $tipo = $_GET['tipo'];   
   } catch (Exception $e) {
      
   }
   try {
      
      $keyboard = $_GET['keyboard'];
   } catch (Exception $e) {
      
   }
   
   if ($tipo!=NULL) {
      $sql="SELECT * FROM productos WHERE tipo='$tipo' AND nombre LIKE '%$keyboard%';";
      $query =  mysqli_query($con,$sql);
   } else {
      $sql="SELECT * FROM productos  WHERE nombre LIKE '%$keyboard%';";
      $query =  mysqli_query($con,$sql);
   }


   /* if ($tipo!=NULL) {
      $sql="SELECT * FROM productos WHERE tipo='$tipo';";
      $query =  mysqli_query($con,$sql);
   } else {
      $sql="SELECT * FROM productos;";
      $query =  mysqli_query($con,$sql);
   }
   */

?>
<main class="form-signin" id="login">
    <div class="album py-5 bg-light">
       <div class="container">
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
            <?php foreach ($query as $r): ?>
           <div class="col">
             <div class="card shadow-sm" >
               <img src="../img/<?php echo $r['imagen'];?>" style="margin: 0 auto;">
               <div class="card-body" style="margin: 0 auto; width: 100%;">
                 <p class="card-text"><?php echo $r['nombre'];?></p>
                 <div class="d-flex justify-content-between align-items-center">
                   <small class="text-muted"><?php echo $r['descripcion'];?></small>
                   <small class="text-muted" style="font-weight: bold"><?php echo $r['precio'];?>€</small>
                 </div>
                 <label for="cantidad" style="margin-top: 10px;">Cantidad</label>
                 <select name="cantidad" id="cantidad<?php echo $r['id'];?>" class="form-control">
                  <?php for ($i = 1; $i <= $r['cantidad']; $i++){?>
                        <option  value="<?php echo $i; ?>" > <?php echo $i; ?> </option>
                   <?php }?>
                  </select>
                 <button type="submit" class="w-100 btn btn-lg btn-secondary" style=" margin-top: 10px;" onclick="addCarrito(<?php echo $r['id'];?>)">Añadir al carrito</button>
               </div>
             </div>
           </div>
           <?php endforeach; ?>
         </div>
      </div>
   </div>
</main>
<?php
include("footer.php");
?>

<script type="text/javascript">
   function addCarrito(id)
   {
      var data = JSON.parse(sessionStorage.getItem("carrito"));
      var e = document.getElementById("cantidad"+id);
      var cant = parseInt(e.options[e.selectedIndex].text);
      for (var i = 0; i < cant; i++) {
        data.push(id);
      }
      alert("Producto agregado al carrito")
      window.sessionStorage.setItem("carrito", JSON.stringify(data));
   }
</script>