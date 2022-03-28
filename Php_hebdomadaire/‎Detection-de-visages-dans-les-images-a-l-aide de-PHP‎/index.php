<?php

include "FaceDetector.php";

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect('img1.jpg');
$toJson = $detector->getFace();

var_dump($toJson);