<?php
    $apiKey = "Votre_api";
    $channelId = "Id_de_votre_chaine";
    $maxResults = 20;

    $baseUrl = "https://youtube.googleapis.com/youtube/v3/playlists";

    $url = "$baseUrl?part=snippet&channelId=".$channelId."&maxResults=".$maxResults."&key=".$apiKey."";


    $url = file_get_contents($url);
    $playlists = json_decode($url);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Youtube videos emichel</title>
</head>
<body>

<section class="px-4 mx-auto mt-12 mb-12 max-w-7xl sm:px-6 lg:px-4">
    <article>
        <h2 class="text-2xl font-extrabold text-gray-900">PLAYLISTS YOUTUBE D'EMICHEL 😎</h2>
        <section class="px-4 mx-auto mb-12 max-w-7xl sm:px-6 lg:px-4">
            <section class="grid grid-cols-1 mt-6 md:grid-cols-1 lg:grid-cols-3 gap-x-6 gap-y-8">
            <?php 
                foreach((array)$playlists->items as $item){
                    echo '
                    <article class="relative w-full h-64 overflow-hidden transition duration-300 ease-in-out bg-center bg-cover rounded-lg shadow-lg group hover:shadow-2xl"
                        style="background-image: url('.$item->snippet->thumbnails->medium->url.');">
                        <div class="absolute inset-0 transition duration-300 ease-in-out bg-black bg-opacity-50 group-hover:opacity-75"></div>
                        <div class="relative flex items-center justify-center w-full h-full px-4 sm:px-6 lg:px-4">
                            <h3 class="text-center">
                                <a class="text-2xl font-bold text-center text-white" href="#">
                                    <span class="absolute inset-0"></span>
                                    '.$item->snippet->title.'
                                </a>
                            </h3>
                        </div>
                    </article>
                    ';
                }
                ?>
            </section>
        </section>
    </article>
</section>

</body>
</html>