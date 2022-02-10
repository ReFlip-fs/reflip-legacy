<?php
$headers = apache_request_headers();
if(isset($headers['User-Agent'])){
    http_response_code(403);
    echo "<html><head><title>403 Forbidden</title></head><body><h1>403 - Forbidden</h1><p>This website is only used to provide FS3D online services and shouldn't be accessed on a web browser.</p></body></html>";
    exit;
}
// now respond to the get request
ob_start()
?>
<html>
<body>
    <h1>Session Test File</h1>
    <p>name: <?php echo $_SESSION['name'] ?></p>
    <p>if you can see the name 'john', then cookie session works.</p>
    <p>ps from 10/02/22: it doesn't work</p>
</body>
</html>
<?php
header('Content-Length: '.ob_get_length());
ob_end_flush();
?>