<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- cdn icnonos-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<div style ="margin-left:17em;">
<div class="col-md-6" style ="display:flex;">
    <div>
    <label for="inputState" class="form-label">state</label>
    <select id="inputState" class="form-select" style ="width:200px">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
    </div>
    <div style ="margin-left:10em;">
    <label for="inputState" class="form-label">seleccionar</label>
    <select class="form-select" onchange ="seleccionar();" id= "selector" style ="width:200px">
  <option selected >Open this select menu</option>
  <option value="1" name = "2"></option>
  <option value="2" name = "3">Two</option>
  <option value="3" name ="4">Three</option>
</select>
    </div>
    
  </div>
</div>

<div class="card" style = "width:1000px;margin-left:17em;margin-top:5em;">
                <div class="card-header">
                    Formulario registros individuales
                </div>
                <div class="p-4">
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Signo</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            

                            <tr>
                                <td scope="row"></td>
                                <td><div class="row g-3">
  <div class="col">
  <label for="inputEmail4" class="form-label">Email</label>

    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
  <label for="inputEmail4" class="form-label">Email</label>

    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col">
  <label for="inputEmail4" class="form-label">Email</label>

    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
</div></td>
                                <td>jkj</td>
                                <td>jjk</td>
                                <td>jkjk<a class="text-success" href="editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td>jkjk<a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                            
                            <tr>
                                <td scope="row"></td>
                                <td>jkjk</td>
                                <td>jkj</td>
                                <td>jjk</td>
                                <td>jkjk<a class="text-success" href="editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td>jkjk<a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                           
                            <tr>
                                <td scope="row"></td>
                                <td id = "aqui">jkjk</td>
                                <td>jkj</td>
                                <td>jjk</td>
                                <td>jkjk<a class="text-success" href="editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td>jkjk<a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                    
                </div>
                   <input type="button" value = "click" onclick = "saludar()">
                </div>
            </div>
        </div>
        <script src  = "javascript.js"></script>

        <script type  ="text/javascript">
          function seleccionar(){
            let seleccionado = document.getElementById("selector");
          let opcion = seleccionado.value;
          let espacio = document.getElementById('aqui');
        
          espacio.innerHTML = `<h1>usted ha seleccionado el valor ${opcion}</h1>`
          if(opcion == 1){
            espacio.innerHTML = `<form action="">
          <input type="text" placeholder = "nombre">
          <input type="text" placeholder  = "apellido">
          <input type="button" value = "enviar">

        </form>`;
          }else if(opcion == 2){
            espacio.innerHTML = `<form>
            <input type = "text" placeholder = "sdsd">
            <input type = "text" placeholder = "fsfsfs">
            </form>`
          }else if(opcion == 3){
            espacio.innerHTML = `<form>
            <input type = "text" placeholder = "opcion 3 input">
            </form>`
          }
          }
          
        </script>
</body>
</html>