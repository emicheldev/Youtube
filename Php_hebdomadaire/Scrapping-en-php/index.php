<?php
    $html = file_get_contents('https://webscraper.io/test-sites/e-commerce/allinone');

    $e_commerce = new DOMDocument();

    libxml_use_internal_errors(TRUE);

    if (!empty($html)) {
        
        $e_commerce->loadHTML($html);

        libxml_clear_errors();

        $e_commerce_path = new DOMXPath($e_commerce);

        $query = '//a[@class = "title"]';
        $result = $e_commerce_path->query($query);

        $scraped_data = [];

        if ($result->length >0) {
            foreach ($result as $item) {
                $scraped_data[] = $item->nodeValue;
            }
        }


        file_put_contents('file.json', json_encode($scraped_data));


    }