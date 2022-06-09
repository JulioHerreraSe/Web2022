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
      var data = JSON.parse(sessionStorage.getItem("carrito"));//no brackets
      data.push(id);
      var i;
      for (i = 0; i < data.length; i++) {
          alert(data[i]);
   }

      window.sessionStorage.setItem("carrito", JSON.stringify(data));
   }


</script>