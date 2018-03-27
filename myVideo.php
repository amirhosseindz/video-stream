<?php

require_once('./VideoStream.php');

$stream = new VideoStream('./myVideo.mp4');
$stream->start();