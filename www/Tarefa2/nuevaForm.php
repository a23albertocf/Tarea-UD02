<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2. Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Formulario</h1>
    <div class="container-fluid">
        <div class="row">
           <?php include "menu.php"?> 
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <form action="nueva.php" method="POST">
                    <p>Nome: <input type="text" name="nome"></p>
                    <p>Email: <input type="email" name="email"></p>
                    <p>Idade: <input type="text" name="idade"></p>
                    <p><input type="submit"></p>
                </form>
            </main>
        </div>
    </div>
    <?php include "footer.php"?>
</body>
</html>