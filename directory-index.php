<?php
$directory = '.';
$files = scandir($directory);

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head><title>Directory Index</title></head>';
echo '<body>';
echo '<h1>Directory Index</h1>';
echo '<ul>';

foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        $filePath = $directory . '/' . $file;
        $fileModifiedTime = date("F d Y H:i:s.", filemtime($filePath));
        echo '<li><a href="' . $file . '">' . $file . '</a> - Last modified: ' . $fileModifiedTime . '</li>';
    }
}

echo '</ul>';
echo '</body>';
echo '</html>';
?>
