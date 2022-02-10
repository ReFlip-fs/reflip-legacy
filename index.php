<?php
/*
POC Server for SocialNote - Thanks for thejsa, without this person this code wouldn't work!
*/
$_SESSION['name'] = "john";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  header('Ugm-SessionID: test');
  header('Location: http://example.com/');
  exit;
}
$headers = apache_request_headers();
if(isset($headers['User-Agent'])){
    http_response_code(403);
    echo "<html><head><title>403 Forbidden</title></head><body><h1>403 - Forbidden</h1><p>This website is only used to provide FS3D online services and shouldn't be accessed on a web browser.</p></body></html>";
    exit;
}
// now respond to the get request
ob_start();
?>
<html>
<body>
    <fix>
        <kwmenubar href="*title" text="Exit SocialNote" text_sound="return_top">
    </fix>
    <p>Welcome to SocialNote!</p>
    <p>This is a bit messy, yeah... But you can see the core of the server here!</p>
    <a href="http://example.com/testflip">test flip href</a>
    <br>
    <a href="http://example.com/sessiontest.php">test session cookie</a>
    <br>
    <a href="http://example.com/send" hreftype="post_kwz(UseLockWindow,CameraNg)">Send a flipnote (fucking not working)</a>
</body>
</html>
<?php
header('Content-Length: '.ob_get_length());
ob_end_flush();
?>