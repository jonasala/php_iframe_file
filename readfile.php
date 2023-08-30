<?php

$mime = mime_content_type($_GET['file']);
header("Content-Type: $mime");
readfile($_GET['file']);
