
<?php
function getDatas($path, $dir)
{$date = "Dernière modification le             " . date ("d F Y", filemtime($path));
 $filetype = "Type :     " . mime_content_type($path);
 $ownerinfo = posix_getpwuid(fileowner($path));
 $owner = "  " . $ownerinfo['name'];
 return ['name' => $dir, 'path' => $path, 'date' => $date, 'filetype' => $filetype,'owner' => $owner];}
?>
