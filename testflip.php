<?php
/*
POC Server for SocialNote - Thanks for thejsa, without this person this code wouldn't work!
*/
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
        <kwpreloadmemo src="http://example.com/test_flip.kwz" srctype="get_kwz">
        <kwplayer>
        <kwmenubar href="*save_back" text="Save Flipnote">
    </fix>
    <p>this is testflip.php</p>
</body>
</html>
<?php
header('Content-Length: '.ob_get_length());
ob_end_flush();
?>