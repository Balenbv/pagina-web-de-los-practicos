<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
  

    <link rel="stylesheet" href="style.css">
    <title>Tp 1 ejercicio 3</title>
</head>

<body style="font-family: arial">

    <header class="navbar">
        <nav class="container-fluid d-flex justify-content-start border border-secondary rounded">

            <a class="navbar-brand" href="../vista/index.html"><img
                    src="https://cdn-icons-png.flaticon.com/512/8216/8216616.png" alt=""></a>


            <div class="dropdown me-2">
                <button class="btn btn-primary btn dropdown-toggle " type="button" data-bs-toggle="dropdown">
                    Practico 1
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a class="dropdown-item" href="../tp1/ejercicio1.php">ejercicio 1</a></li>
                    <li><a class="dropdown-item" href="../tp1/ejercicio2.php">ejercicio 2</a></li>
                    <li><a class="dropdown-item" href="../tp1/ejercicio3.php">ejercicio 3</a></li>
                    <li><a class="dropdown-item" href="../tp1/ejercicio4.php">ejercicio 4</a></li>
                    <li><a class="dropdown-item" href="../tp1/ejercicio5.php">ejercicio 5</a></li>
                    <li><a class="dropdown-item" href="../tp1/ejercicio6.php">ejercicio 6</a></li>
                    <li><a class="dropdown-item" href="../tp1/ejercicio7.php">ejercicio 7</a></li>
                    <li><a class="dropdown-item" href="../tp1/ejercicio8.php">ejercicio 8</a></li>
                </ul>
            </div>

            <div class="dropdown me-2">
                <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Practico 2
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a class="dropdown-item" href="#">ejercicio 1</a></li>
                    <li><a class="dropdown-item" href="#">ejercicio 2</a></li>
                    <li><a class="dropdown-item" href="#">ejercicio 3</a></li>
                    <li><a class="dropdown-item" href="#">ejercicio 4</a></li>
                </ul>
            </div>

            <div class="dropdown me-2">
                <button class="btn btn-primary btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Practico 3
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a class="dropdown-item" href="#">ejercicio 1</a></li>
                    <li><a class="dropdown-item" href="#">ejercicio 2</a></li>
                    <li><a class="dropdown-item" href="#">ejercicio 3</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container" style="min-height:600px; background-color : rgb(85 153 254)">

        <div class="row border border-dark">

            <div class="col">
                  <!---->
                <h1>Consigna: 5</h1>
                <p>
                Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                un mensaje que indique el tipo de estudios que posee y su sexo. </p>
            </div>
        </div>

        <div class="row border border-dark mt-5">
            <div class="col">
                <h1>Resolucion:</h1>
                <form action="../../action/action5.php" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                    <fieldset>
                        <legend>Estudio</legend>
                        <label>
                            <input type="radio" name="estudios" value="sin_estudios" required>
                            No tiene estudios
                        </label><br>
                        <label>
                            <input type="radio" name="estudios" value="primarios">
                            Estudios primarios
                        </label><br>
                        <label>
                            <input type="radio" name="estudios" value="secundarios">
                            Estudios secundarios
                        </label>
                     </fieldset>
                    <select name="sexo" id="" required>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                </div>
        </div>

        <div class="row border border-dark mt-5">
            <div class="col">
                <img src="imagenes/dos.png" alt="" style="width: 50%;">
            </div>
        </div>


        </div>

    </main>

    <footer class="container-fluid footer">
        <div class="row text-start bg-dark">
            <div class="col">
                <p class="text-light">Programacion Web Dinamica 2024 @</p>
            </div>
        </div>
    </footer>

</body>

</html>