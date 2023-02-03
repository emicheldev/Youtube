<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">  
  <title>Comment télécharger un fichier en utilisant Dropzone.js avec PHP</title>
</head>

<body>
  <div class="flex flex-col w-full h-screen items-center justify-center bg-grey-lighter">
    <form action="upload.php" id="image-upload" method="post" enctype="multipart/form-data" class="dropzone flex flex-row justify-center items-center rounded-lg border-4 border-dashed w-3/4 h-60 p-10 group text-center">
    </form>
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>    


  <script type="text/javascript">
  Dropzone.options.imageUpload = {
    maxFilesize:1,
    acceptedFiles: ".jpeg,.jpg,.png,.gif"
  };
</script>

</body>

</html>