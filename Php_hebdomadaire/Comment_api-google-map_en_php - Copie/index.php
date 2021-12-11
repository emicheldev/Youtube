<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>Coordonnées GPS</title>
    </head>
    <body class="bg-gray-200">
    
    <div class="flex items-center flex-col space-y-20 justify-center h-screen bg-gray-200 sm:px-6">
        <div class="w-full max-w-sm p-4 bg-white rounded-md shadow-md sm:p-6">
            <div class="flex items-center justify-center">
                <span class="text-xl font-medium text-gray-900">Coordonnées GPS</span>
            </div>
            <form class="mt-4" method="POST" action="">
                <label for="latitude" class="block">
                    <span class="text-base font-bold text-gray-700">Latitude</span>
                    <input type="name" id="latitude" name="latitude" autocomplete="latitude"
                        class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
                        required />
                </label>
                <label for="longitude" class="block">
                    <span class="text-base font-bold text-gray-700">Longitude</span>
                    <input type="name" id="longitude" name="longitude" autocomplete="longitude"
                        class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
                        required />
                </label>
               
                <div class="mt-6">
                    <button type="submit" name="submit"
                        class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500">Générer</button>
                </div>
            </form>
            
        </div>
        <?php
            if (isset($_POST['submit'])) {
              $latitude = $_POST['latitude'];
              $longitude = $_POST['longitude'];
            ?>
            <iframe src="https://maps.google.com/maps?&q=<?= $latitude.','.$longitude ?>&output=embed"
                width="100%" height="500"
                ></iframe>
        <?php } ?>
     
    </div>
        
    </body>
</html>