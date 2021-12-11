<?php

    $apiKey = "AIzaSyAkxzIyw21x8_nHqY1422i1V5jpiN_BlXA";
    $channelId = "UCrjWeik-oQEYC9jZF039G4w";
    $maxResults = 20;

    $baseUrl = "https://youtube.googleapis.com/youtube/v3/playlistItems";

    $playlistId = htmlspecialchars(trim($_GET['playlistId']));

    $url = "$baseUrl?part=snippet&channelId=".$channelId."&playlistId=".$playlistId."&maxResults=".$maxResults."&key=".$apiKey."";

    $url = file_get_contents($url);
    $videoList = json_decode($url);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" integrity="sha512-UiVP2uTd2EwFRqPM4IzVXuSFAzw+Vo84jxICHVbOA1VZFUyr4a6giD9O3uvGPFIuB2p3iTnfDVLnkdY7D/SJJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Youtube videos emichel</title>
</head>
<body>

<section class="px-4 mx-auto mt-12 mb-12 max-w-7xl sm:px-6 lg:px-4">
    <article>
        <h2 class="text-2xl font-extrabold text-gray-900">VIDEOS YOUTUBE D'EMICHEL 😎</h2>
        <section class="grid mt-6 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            <?php 
             foreach((array)$videoList->items as $item){
                echo '
                <div class="container mx-auto overflow-hidden duration-500 transform bg-white shadow-lg rounded-xl hover:shadow-2xl hover:scale-105">
                    <img class="w-full" src="'.$item->snippet->thumbnails->medium->url.'" alt="'.$item->snippet->title.'" />
                    <div class="relative text-center py-14">
                        <span class="absolute z-50 text-green-500 transition-all duration-200 transform -translate-x-10 -translate-y-24 bg-white rounded-full cursor-pointer hover:text-green-400">
                            <a href="//www.youtube.com/watch?v='.$item->snippet->resourceId->videoId.'" data-lity>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </span>
                        <h1 class="mb-1 font-sans text-2xl font-semibold text-gray-700 cursor-pointer hover:text-gray-900">'.substr($item->snippet->title, 0, 20).'... </h1>
                        <span class="text-lg text-gray-700 hover:text-gray-900">'.substr($item->snippet->description, 0, 50).'</span>
                    </div>
                </div>
                ';
            } ?>
        </section>
    </article>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js" integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>