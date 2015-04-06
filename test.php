<?php
/**
 * Created by PhpStorm.
 * User: Cristi
 * Date: 24.03.2015
 * Time: 22:07
 */
require_once("vendor/autoload.php");

$ffmeg = \FFMpeg\FFMpeg::create();
$audio = $ffmeg->open("test2.mp3");
$format = new FFMpeg\Format\Audio\Ogg();
$format->on('progress', function ($audio, $format, $percentage) {
    echo "$percentage % transcoded \n";


});
//for aac !!!
//"E:\Kituri\ffmpeg-20150324-static\bin\ffmpeg.EXE" "-i" "track.wav" "-strict" "-2"  -c:a aac -b:a 240k "track.m4a"


$format->on("finish", function($audio, $format, $outputFilename){
    echo json_encode(
        array(
            func_get_args()
        ),
        JSON_PRETTY_PRINT
    );
    echo "gata!";
});


$audio->save($format, 'track2.ogg');