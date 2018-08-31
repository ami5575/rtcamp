<?php
    require_once './fb-config.php';
    if(isset($_SESSION['access_token']))
    {
        header('location:index.php');
        exit();
    }
    $redirectURL="https://localhost/rtcamp_album_challange/fb-callback.php";
    $permissions=['email'];
    $loginURL=$helper->getLoginUrl($redirectURL,$permissions);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Facebook Album Challenge</title>

</head>
<body>
    
    <div >
        <button  onclick="window.location='<?php echo $loginURL;?>'">Login With Facebook</button>
    </div>
</body>
</html>