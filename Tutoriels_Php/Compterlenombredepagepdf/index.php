<?php
      function countPage($path)
      {
            $pdf = file_get_contents($path);
            $number = preg_match_all("/\/Page\W/", $pdf, $dummy);
            return $number;
      }
      $file = "Les_11_Fonctions_PHP_que_tous_les_dbutants_devraient_connatre_.pdf";
      $totalPages = countPage($file);
      echo $totalPages;