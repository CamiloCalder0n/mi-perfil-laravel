<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/perfil">Perfil</a></li>
            <li><a href="/perfil/intereses">Intereses</a></li>
            <li><a href="/perfil/habilidades">Habilidades</a></li>
            <li><a href="/perfil/metas">Metas</a></li>
        </ul>
    </nav>

    <main>
        <h1>Mi Perfil</h1>

        <section>
            <h2>Información Personal</h2>
            <p><strong>Nombre:</strong> Camilo Calderón</p>
            <p><strong>Carrera:</strong> Ingeniería</p>
            <p><strong>Universidad:</strong> Universidad Autónoma de Bucaramanga</p>
            <p><strong>Sobre mí:</strong> Estudiante interesado en el desarrollo backend con Laravel.</p>
        </section>
    </main>
</body>
</html>
