<?php
    include("config.php");
	include("header.php");

    $sql="SELECT * FROM catas";
    $query =  mysqli_query($con,$sql);
?>
<section style="margin-bottom: 20px !important;">
    <div id="catas">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Europe%2FAmsterdam&title=Catas&src=anVsaXRvaHM5N0BnbWFpbC5jb20&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZXMuc3BhaW4jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%237986CB&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="50%" height="400" frameborder="0" scrolling="no" id="calendario"></iframe>
    </div>
</section>
<form action="reservar_cata.php" method="post"  class="border p-3 form" id="formulario-login" style="margin-bottom: 50px;"> 
    <div class="form-group">
        <label for="cata">Seleccione la cata:</label>
        <select name="cata" id="cata" class="form-control">
            <?php foreach ($query as $r): ?>
                    <option value="<?php echo $r['id']; ?>"><?php echo $r['nombre']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>    
    <br>
    <button type="submit" class="w-100 btn btn-lg btn-secondary">Reservar cata</button>
</form>
<?php 
	include("footer.php");
?>