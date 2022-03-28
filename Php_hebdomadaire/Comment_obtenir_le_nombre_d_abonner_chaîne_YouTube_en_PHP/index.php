<?php
    $apiKey = "AIzaSyAkxzIyw21x8_nHqY1422i1V5jpiN_BlXA";
    $channelId = "UCrjWeik-oQEYC9jZF039G4w";
    $maxResults = 20;

    $baseUrl = "https://youtube.googleapis.com/youtube/v3/channels";

    $url = "$baseUrl?part=statistics&id=".$channelId."&key=".$apiKey."";


    $url = file_get_contents($url);

    $playlists = json_decode($url, true);
    

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
        <!-- component -->
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap w-full mb-8">
                <div class="w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-gray-900">Statistic</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
                </div>
                <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 sm:w-1/4 w-1/2">
                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">2.7K</h2>
                        <p class="leading-relaxed text-gray-100 font-bold">Users</p>
                    </div>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">1.8K</h2>
                        <p class="leading-relaxed text-gray-100 font-bold">Subscribes</p>
                    </div>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">35</h2>
                        <p class="leading-relaxed text-gray-100 font-bold">Downloads</p>
                    </div>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">4</h2>
                        <p class="leading-relaxed text-gray-100 font-bold">Products</p>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </article>
</section>

</body>
</html>