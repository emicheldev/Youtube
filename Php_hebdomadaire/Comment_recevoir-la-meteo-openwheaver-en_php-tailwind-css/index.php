<?php 

  $api_key      = '227d127353e23dbbb4cc2dc9056c4c1c';
  $city         = 'Paris';
  $currentTime  = time();
  $url          = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key&units=metric&lang=fr";

  $jsonfile     = file_get_contents($url);
  $data         = json_decode($jsonfile);

  // echo $jsonfile;
  // die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>OpenWeather and PHP</title>
</head>
<body class="bg-gray-200">

  <div class="min-h-screen flex items-center justify-center">
    <div class="flex flex-col bg-white rounded p-4 w-full max-w-xs">
      <div class="font-bold text-xl"><?= $data->name  ?></div>
      <div class="text-sm text-gray-500"><?= date("d m Y", $currentTime)  ?></div>
      <div class="mt-6 text-6xl self-center inline-flex items-center justify-center rounded-lg text-indigo-400 h-24 w-24">
        <svg class="w-32 h-32" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
      </div>
      <div class="flex flex-row items-center justify-center mt-6">
        <div class="font-medium text-6xl"><?= $data->main->temp  ?>°</div>
        <div class="flex flex-col items-center ml-6">
          <div><?= $data->weather[0]->description  ?></div>
          <div class="mt-1">
            <span class="text-sm"><i class="far fa-long-arrow-up"></i></span>
            <span class="text-sm font-light text-gray-500"><?= $data->main->temp_max  ?>°C</span>
          </div>
          <div>
            <span class="text-sm"><i class="far fa-long-arrow-down"></i></span>
            <span class="text-sm font-light text-gray-500"><?= $data->main->temp_min  ?>°C</span>
          </div>
        </div>
      </div>
      <div class="flex flex-row justify-between mt-6">
        <div class="flex flex-col items-center">
          <div class="font-medium text-sm">Vent</div>
          <div class="text-sm text-gray-500"><?= $data->wind->speed  ?>k/h</div>
        </div>
        <div class="flex flex-col items-center">
          <div class="font-medium text-sm">Humidité</div>
          <div class="text-sm text-gray-500"><?= $data->main->humidity  ?>%</div>
        </div>
        <div class="flex flex-col items-center">
          <div class="font-medium text-sm">Visibilité</div>
          <div class="text-sm text-gray-500"><?= $data->visibility  ?>km</div>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>