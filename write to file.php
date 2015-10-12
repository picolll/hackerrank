<?php
$filename = "myfile.txt";
if(file_exists($filename)) {
    $data = file_get_contents( $filename );
    print $data;
    $filewrite = fopen( $filename, 'a') or die('Cannot open file:'.$filename);
    fwrite( $filewrite, "write something here");
    fclose( $filewrite );
} else {
    $filewrite = fopen( $filename, 'w') or die('Cannot open file:'.$filename);
    fwrite( $filewrite, "write something here");
    fclose( $filewrite );
}
?>
