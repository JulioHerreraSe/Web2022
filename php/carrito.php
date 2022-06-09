<?php
	include("config.php");
	include("header.php");

	$sql="SELECT * FROM productos";
	$query =  mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query)
?>
	<main style="margin-top: 120px;">
		<div class="container" style="margin: 100px">
			

			 <table class="table table-responsive table-bordered" id="tableCarrito">
	            <thead>
	                <tr>
	                    <th scope="col">Nombre</th>
	                    <th scope="col">Cantidad</th>
	                    <th scope="col">Más</th>
	                    <th scope="col">Menos</th>
	                </tr>
	            </thead>
	            <tbody id="task-row">    
	            </tbody>
	        </table>
		</div>
		<button type="submit" class="w-100 btn btn-lg btn-secondary" onclick="compraRealizada()" style="margin-bottom: 20px;">Comprar</button>
	</main>
	
<?php
	include("footer.php");
?>
<script type="text/javascript">
	var data = JSON.parse(sessionStorage.getItem("carrito"));
	const mapNombres = new Map();

	<?php foreach ($query as $r):?>

		mapNombres.set(<?php echo $r['id'];?>, "<?php echo $r['nombre'];?>");

	<?php  endforeach; ?>


	///Cuenta de un array cuantas repeticiones hay
	///result[0] tiene los datos y es un arreglo
	///result[1] tiene la cantidad de repeticiones y es un arreglo
	function foo (array) {
	  let a = [],
	    b = [],
	    data = [...array], // clone array so we don't change the original when using .sort()
	    prev;

	  data.sort();
	  for (let element of data) {
	    if (element !== prev) {
	      a.push(element);
	      b.push(1);
	    }
	    else ++b[b.length - 1];
	    prev = element;
	  }

	  return [a, b];
	}

	const result = foo(data);
	console.log('[' + result[0] + ']','[' + result[1] + ']')
	console.log(data)


	

	 result[0].forEach((element, i) => { //result[0] son los id
                console.log(element, i)
                var t = document.getElementById("tableCarrito");
                var r = document.createElement("TR");

                r.innerHTML = `
                                             <tr>
                                                <th scope="row">${mapNombres.get(element)}</th>
                                                <td id="cant${i}">${result[1][i]}</td>
                                                <td >   <button type="submit" class="w-100 btn btn-lg btn-secondary" style=" margin-top: 10px;" onclick="restar(${i})"> - </button>          </td>
                                                <td >   <button type="submit" class="w-100 btn btn-lg btn-secondary" style=" margin-top: 10px;" onclick="sumar(${i})"> + </button>          </td>
                                            </tr>
                                    `
                t.tBodies[0].appendChild(r)
            });

	 function removeItemOnce(arr, value) {
		  var index = arr.indexOf(value);
		  if (index > -1) {
		    arr.splice(index, 1);
		  }
		  return arr;
		}

	 function restar(pos)
	 {
	 	var cantth = document.getElementById("cant"+pos);
	 	let num1 = parseInt(result[1][pos]);
	 	let numoriginal = num1;
	 	num1=num1-1;
	 	cantth.innerHTML = num1;
	 	result[1][pos] = num1;

	 	var data = JSON.parse(sessionStorage.getItem("carrito"));
	 	removeItemOnce(data, result[0][pos]); //PASO EL ID
        window.sessionStorage.setItem("carrito", JSON.stringify(data));
	 	
	 }

	 function sumar(pos)
	 {


	 	var cantth = document.getElementById("cant"+pos);
	 	let num1 = parseInt(result[1][pos]);
	 	let numoriginal = num1;
	 	num1=num1+1;
	 	cantth.innerHTML = num1;
	 	result[1][pos] = num1;

	 	var data = JSON.parse(sessionStorage.getItem("carrito"));
	 	data.push(result[0][pos]); //PASO EL ID
        window.sessionStorage.setItem("carrito", JSON.stringify(data));
	 }


function compraRealizada(pos)
	 {

	 	alert("Comprar realizada con exito!!!!!!!!");
		window.sessionStorage.setItem("carrito", JSON.stringify([]));
	 	window.location.href='carrito.php';
	 }
	 

</script>