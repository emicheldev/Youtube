<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="/css/dropzone.css" rel="stylesheet" type="text/css" />
  <title>Comment télécharger un fichier en utilisant Dropzone.js avec PHP</title>
</head>

<body>
  <!-- <div class="flex w-full h-screen items-center justify-center bg-grey-lighter">
    <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue-500 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-500 hover:text-white">
      <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
      </svg>
      <span class="mt-2 text-base leading-normal">un\plusieurs fichier</span>
      <input type='file' class="hidden" />
    </label>
  </div> -->
  
  <div class="flex flex-col w-full h-screen items-center justify-center bg-grey-lighter">
    <form action="upload.php" id="image-upload" method="post" enctype="multipart/form-data" class="dropzone flex flex-row justify-center items-center rounded-lg border-4 border-dashed w-1/2 h-60 p-10 group text-center">
    </form>
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="/js/dropzone.js"></script>
  <script type="text/javascript">
  Dropzone.options.imageUpload = {
    maxFilesize:1,
    acceptedFiles: ".jpeg,.jpg,.png,.gif"
  };
</script>

</body>

</html>