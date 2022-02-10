<?php
ini_set('post_max_size', '750M');
ini_set('upload_max_filesize', '750M');
ini_set('max_execution_time', '5000');
ini_set('max_input_time', '5000');
ini_set('memory_limit', '1000M');
$headers = apache_request_headers();
if(isset($headers['User-Agent'])){
    http_response_code(403);
    echo "<html><head><title>403 Forbidden</title></head><body><h1>403 - Forbidden</h1><p>This website is only used to provide FS3D online services and shouldn't be accessed on a web browser.</p></body></html>";
    exit;
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  file_put_contents("request.txt", "POST request");
}
if($_SERVER['REQUEST_METHOD'] == 'GET') {
  file_put_contents("request.txt", "GET request");
}
file_put_contents("test.kwz", $_POST['formFile']);
// now respond to the get request
ob_start();
?>
<html>
<body>
    <p>(maybe) the file has been uploaded</p>
    <p>list of headers used:</p>
    <?php foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
} ?>
    <p>thanks for developing SocialNote</p>
    <p>-Rixy</p>
</body>
</html>
<?php
header('Content-Length: '.ob_get_length());
ob_end_flush();
?>