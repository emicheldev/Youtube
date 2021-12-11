<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <title>Barre Code Generator</title>
    </head>
    <body class="bg-gray-200">
    
    <div class="flex items-center justify-center h-screen bg-gray-200 sm:px-6">
        <div class="w-full max-w-sm p-4 bg-white rounded-md shadow-md sm:p-6">
            <div class="flex items-center justify-center">
                <span class="text-xl font-medium text-gray-900">Generateur de Barre-code</span>
            </div>
            <form class="mt-4" method="POST">
                <label for="barcodeText" class="block">
                    <span class="text-base font-bold text-gray-700">Nom du Produit</span>
                    <input type="name" id="barcodeText" name="barcodeText" autocomplete="barcodeText"
                        class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
                        required />
                </label>

                <label class="block mt-5">
                    <span class="text-base font-bold text-gray-700">Code Type</span>
                    <div class="mt-2 space-x-5">
                        
                        <label class="inline-flex items-center">
                            <input class="form-radio" type="radio" checked name="codeType" value="Code128" />
                            <span class="ml-2">Code128</span>
                        </label>
                        
                        <label class="inline-flex items-center">
                            <input class="form-radio" type="radio" name="codeType" value="Code39" />
                            <span class="ml-2">Code39</span>
                        </label>
                        
                    </div>
                </label>

                <label class="block mt-5">
                    <span class="text-base font-bold text-gray-700">Orientation</span>
                    <div class="mt-2 space-x-5">
                        
                        <label class="inline-flex items-center">
                            <input class="form-radio" type="radio" checked name="orientation" value="horizontal" />
                            <span class="ml-2">Horizontal</span>
                        </label>
                        
                        
                        <label class="inline-flex items-center">
                            <input class="form-radio" type="radio" name="orientation" value="vertical" />
                            <span class="ml-2">Vertical</span>
                        </label>
                        
                        
                    </div>
                </label>
               
                <div class="mt-6">
                    <button type="submit" name="submit"
                        class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500">Generer</button>
                </div>
                
    
            </form>
            <div class="flex flex-col justify-center mt-10">

                <?php
                    if(isset($_POST['submit'])){
                    $barcodeText = trim($_POST['barcodeText']);
                    $codeType = trim($_POST['codeType']);
                    $orientation = trim($_POST['orientation']);

                        if ($barcodeText != '') {
                            echo "<img alt='testing' src='barcode.php?codeType=".$codeType."&size=40&text=".$barcodeText."&print=true&orientation=".$orientation."'/>";
                        }else {
                            echo 'Merci d\'ajouter le texte';
                        }
                    }
                ?>

            </div>

         
        </div>
    </div>
    
        
    </body>
</html>