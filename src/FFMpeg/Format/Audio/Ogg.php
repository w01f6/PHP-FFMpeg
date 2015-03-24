<?php
/**
 * Created by PhpStorm.
 * User: Cristi
 * Date: 24.03.2015
 * Time: 22:45
 */

namespace FFMpeg\Format\Audio;
class Ogg extends \FFMpeg\Format\Audio\DefaultAudio
{

    public function __construct()
    {
        $this->audioCodec = 'libvorbis';
    }



    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('libvorbis');
    }
}