$file = '<https://www.torproject.org/dist/torbrowser/9.5.1/torbrowser-install-win64-9.5.1_en-US.exe>';

header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$file");
header("Content-Type: application/zip");
header("Content-Transfer-Encoding: binary");

readfile($file);