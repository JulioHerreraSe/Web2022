<?php

    if (isset($_POST['id'])) {

        insertCarritoPost($_POST['id']);

        function insertCarritoPost($x) {
           // your business logic
            echo "<script type='text/javascript'>alert('asa');</script>";
            $carrito = $_SESSION['carrito'];
            echo "<script type='text/javascript'>alert('$carrito');</script>";


        }

    }

?>