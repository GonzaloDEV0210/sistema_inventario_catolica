<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Activos</title>
    <link rel="stylesheet" href="../public/css/tailwind.css">
</head>
<body>
    <header class="1030:flex 1030:gap-56 1030:w-1000 1030:mt-5 1030:mx-auto 1030:items-center 1030:justify-center">
        <img class="1030:w-52" src="../public/img/logo.png" alt="Logo del colegio">
        <p class="1030:font-bold 1030:text-2xl 1030:bg-azul_cat 1030:w-96 1030:text-white 1030:pt-1 1030:pb-2 1030:text-center">Registrar Activos</p>
    </header>
    <main class="w-1100 mx-auto mt-8">
        <form action="" class="flex flex-wrap justify-between items-center h-64">
            <div class="flex flex-col gap-1">
                <label for="nombre">Nombre Activo</label>
                <input class="border-2 pl-1 py-1 rounded-md" type="text" name="nombre" id="nombre">
            </div>
            <div class="flex flex-col gap-1">
                <label for="marca">Marca</label>
                <input class="border-2 pl-1 py-1 rounded-md" type="text" name="marca" id="marca">
            </div>
            <div class="flex flex-col gap-1">
                <label for="modelo">Modelo</label>
                <input class="border-2 pl-1 py-1 rounded-md" type="text">
            </div>
            <div class="flex flex-col gap-1">
                <label for="categoria">Categoria</label>
                <select class="border-2 pl-1 py-1 rounded-md" name="categoria" id="categoria">
                    <option value="seleccione">Seleccione</option>
                    <option value="gasfiteria">Gasfiteria</option>
                    <option value="equipos_tecnologicos">Equipos Tecnológicos</option>
                    <option value="electrodomesticos">Electrodomésticos</option>
                    <option value="mobiliario">Mobiliario</option>
                    <option value="equipos_seguridad">Equipos de Seguridad</option>
                    <option value="equipos_electricos">Equipos Eléctricos</option>
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="estado">Estado</label>
                <select class="border-2 pl-1 py-1 rounded-md" name="estado" id="estado">
                    <option value="seleccione">Seleccione</option>
                    <option value="baja">De baja</option>
                    <option value="seminuevo">Seminuevo</option>
                    <option value="nunevo">Nuevo</option>
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="cantidad">cantidad</label>
                <input class="border-2 pl-1 py-1 rounded-md" type="text">
            </div>
            <div class="flex flex-col gap-1">
                <label for="costo_uni">Precio Unitario</label>
                <input class="border-2 pl-1 py-1 rounded-md" type="text">
            </div>
            <div class="flex flex-col gap-1">
                <label for="costo_mov">Costo Movilidad</label>
                <input class="border-2 pl-1 py-1 rounded-md" type="text">
            </div>
            <div class="flex flex-col gap-1">
                <label for="fecha">Fecha de la Compra</label>
                <input class="border-2 pl-1 py-1 rounded-md" type="date" name="fecha" id="fecha">
            </div>
            <div class="flex flex-col gap-1">
                <label for="proveedor">Proveedor</label>
                <select class="border-2 pl-1 py-1 rounded-md" name="proveedor" id="proveedor">
                    <option value="seleccione">Seleccione</option>
                    <option value="marco">Marco Julcamoro</option>
                </select>
            </div>
            <div class="flex flex-col gap-1">
                <label for="multimedia">Imágenes o Ficha Técnica</label>
                <input class="pl-1 py-1 rounded-md" type="file" name="multimedia" id="multimedia">
            </div>
            <div>
                <button class="bg-blue-600 text-white font-bold px-5 py-1 rounded-lg hover:bg-blue-500 duration-300" type="submit">Registrar</button>
                <button class="bg-red-600 text-white font-bold px-5 py-1 rounded-lg hover:bg-red-500 duration-300" type="button">Salir</button>
            </div>
        </form>
    </main>
</body>
</html>