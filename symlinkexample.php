<?php

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/public_html';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';