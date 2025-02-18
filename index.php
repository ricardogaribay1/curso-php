<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#Llamadas a <Apis> comando para utilizar Apis curl "http..."
#Inicializar una nueva sesión de cURL; ch = cURL handle

$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición y guardamos el resultado */
$result = curl_exec($ch);

// Una alternativa sería utilizar file_get_contents
// $result = file_get_contents(API_URL); //si solo quieres hacer un GET de una API

$data = json_decode($result, true);

?>

<head>
    <title>La próxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scales=1.0" />
    <link href="assets/adryo-icono.jpg" type="image/x-icon" rel="icon">
    <link href="assets/adryo-icono.jpg" type="image/x-icon" rel="shortcut icon">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<main>
    <section>
        <h2 class="titulo">La próxima pelicula de Marvel</h2>

        <img src="<?= $data["poster_url"]; ?>" width="250" alt="Poster de <?= $data["title"]; ?>"
            style="border-radius: 16px" />
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>

</main>

<style>
    :root {
        color-scheme: dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {

        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }


    .titulo {
        display: block;
        margin-top: 50px;
    }
</style>
