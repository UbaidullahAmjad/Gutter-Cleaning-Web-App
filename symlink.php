<?php

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/projects/GC/storage/app/public';
// echo $targetFolder;exit;
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/projects/GC/public/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';




