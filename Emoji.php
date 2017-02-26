<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Emojione\Client;

class Emoji extends Client {

    function __construct() {
        //$this->imagePathPNG='//cdn.staticfile.org/emojione/1.5.2/assets/svg/';
        //$this->imagePathSVG='//cdn.staticfile.org/emojione/1.5.2/assets/png/';
        $this->imageType='svg';
    }

}
