<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/sistema_inventario_catolica/styles/inventario.css">
</head>
<body>
    <header class="w-4/5 mx-auto mt-4">
        <img class="w-52" src="http://localhost/sistema_inventario_catolica/img/logo.png" alt="Logo del colegio Católica School">
    </header>
    <main>
        <form class="flex flex-col gap-3 justify-center items-center w-96 mx-auto" action="http://localhost/sistema_inventario_catolica/config/login.php" method="post">
            <img class="w-32 mb-3" src="http://localhost/sistema_inventario_catolica/icons/avatar-masculino.png" alt="Foto de perfil">
            <input class="border border-gray-400 rounded-lg w-80 py-2 pl-2" type="text" name="usuario" id="usuario" placeholder="Coloque su Usuario">
            <input class="border border-gray-400 rounded-lg w-80 py-2 pl-2" type="text" name="contrasenia" id="contrasenia" placeholder="Coloque su contraseña">
            <button class="bg-blue-700 text-white w-32 py-1 rounded-lg hover:bg-blue-500 hover:cursor-pointer duration-300 font-semibold mt-7" type="submit">Entrar</button>
        </form>
    </main>
    <footer class="absolute bottom-0 left-0 w-full text-center">
        <p class="text-sm font-semibold">&copy;2024 Católica School - Derechos Reservados</p>
    </footer>
</body>
</html>