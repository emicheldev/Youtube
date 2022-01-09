<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <title>Download Youtube Thumbnail</title>
    </head>
    <body class="bg-gray-200">
    
    <div class="flex items-center justify-center  bg-gray-200 sm:px-6">
        <div class="w-full max-w-sm p-4 bg-white rounded-md shadow-md sm:p-6 mt-24">
            <div class="flex items-center justify-center">
                <span class="text-xl font-medium text-gray-900">Download Youtube Thumbnail</span>
            </div>
            <form class="mt-4" method="POST">
                <label for="youtubeUrl" class="block">
                    <span class="text-base font-bold text-gray-700">URL Youtube:</span>
                    <input type="text" id="youtubeUrl" name="youtubeUrl" autocomplete="youtubeUrl"
                        class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
                        placeholder="Entrer l'URL"
                        required />
                </label>
             
                <div class="mt-6">
                    <button type="submit" name="submit"
                        class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500">Obtenir les miniatures</button>
                </div>
                
    
            </form>
           
            <div class="flex flex-col justify-center mt-10 gap-y-10">
                <?php
                    if (isset($_POST['submit'])) {
                        $youtubeUrl = trim($_POST['youtubeUrl']);
                        $videoId = explode("v=", $youtubeUrl);
                        $videoId = end($videoId);
                        $videoId = explode("&", $videoId);
                        $videoId = current($videoId);
                ?>

                <div class="flex justify-center flex-col">
                    <h2 class="font-bold text-xl text-center">Image HD (1280x720) </h2>
                    <a href="https://img.youtube.com/vi/<?= $videoId; ?>/maxresdefault.jpg" class=" text-xl font-semibold text-blue-600 text-center hover:text-purple-600" download> Télécharger </a>
                    <img  src="https://img.youtube.com/vi/<?= $videoId; ?>/maxresdefault.jpg" alt="video" loading="lazy">
                </div>

                <div class="flex justify-center flex-col">
                    <h2 class="font-bold text-xl text-center">Image SD (640x480)</h2>
                    <a href="https://img.youtube.com/vi/<?= $videoId; ?>/sddefault.jpg" class=" text-xl font-semibold text-blue-600 text-center hover:text-purple-600" download> Télécharger </a>
                    <img  src="https://img.youtube.com/vi/<?= $videoId; ?>/sddefault.jpg" alt="video" loading="lazy">
                </div>

                <div class="flex justify-center flex-col">
                    <h2 class="font-bold text-xl text-center">Image Normale (480x360)</h2>
                    <a href="https://img.youtube.com/vi/<?= $videoId; ?>/hqdefault.jpg" class=" text-xl font-semibold text-blue-600 text-center hover:text-purple-600" download> Télécharger </a>
                    <img  src="https://img.youtube.com/vi/<?= $videoId; ?>/hqdefault.jpg" alt="video" loading="lazy">
                </div>
                
                <div class="flex justify-center flex-col">
                    <h2 class="font-bold text-xl text-center">Image Normale (320x180)</h2>
                    <a href="https://img.youtube.com/vi/<?= $videoId; ?>/mqdefault.jpg" class=" text-xl font-semibold text-blue-600 text-center hover:text-purple-600" download> Télécharger </a>
                    <img  src="https://img.youtube.com/vi/<?= $videoId; ?>/mqdefault.jpg" alt="video" loading="lazy">
                </div>

                <div class="flex justify-center flex-col">
                    <h2 class="font-bold text-xl text-center">Image par Défaut  (120x90)</h2>
                    <a href="https://img.youtube.com/vi/<?= $videoId; ?>/default.jpg" class=" text-xl font-semibold text-blue-600 text-center hover:text-purple-600" download> Télécharger </a>
                    <img  src="https://img.youtube.com/vi/<?= $videoId; ?>/default.jpg" alt="video" loading="lazy">
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
        
    </body>
</html>