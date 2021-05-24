<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <title>BlobShop: <?php echo $page ?></title>
</head>

<body class="body">

    
    <div class="scrolltotop">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"/></svg>
    </div>

    <header class="header <?php if($page === 'Sign In') echo 'hidden' ?>">
        <h1 class="hidden" >Blobshop</h1>
        <div>
            <a class="header__title" href="index.php">Blobshop</a>
            <a class="header__navigation <?php if($page == 'Shop') echo 'active-nav';?>" href="index.php">Shop</a>
        </div>

    </header>

    <?php echo $content; ?>

    <footer class="footer <?php if($page === 'Sign In') echo 'hidden' ?>">
        <h2 class="hidden">Newsletter</h2>
        <div class="footer__art">
            <svg class="footer__art--svg" width="274" height="343" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M130.686.17c51.656 3.746 62.664 72.903 90.754 116.362 22.311 34.517 56.146 63.986 52.251 104.886-4.461 46.842-30.164 92.997-72.968 112.655-42.148 19.355-90.989 4.588-130.898-19.032-35.476-20.996-56.69-57.181-65.759-97.359-9.033-40.018-2.962-80.168 17.682-115.632C48.055 56.859 78.485-3.616 130.686.17z" fill="#F4F4F8"/></svg>
            <svg class="footer__art--svg" width="355" height="303" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M176.405.175c47.926-3.087 85.429 35.273 116.731 71.793 33.348 38.908 72.2 83.98 59.343 133.636-12.652 48.867-68.683 67.478-115.932 84.925-40.037 14.785-81.487 17.298-121.628 2.799C67.496 276.199 10.072 255.166 1.003 205.45c-8.925-48.926 43.8-81.795 76.074-119.566C106.978 50.89 130.542 3.129 176.405.174z" fill="#D11249"/></svg>
            <svg class="footer__art--svg" width="290" height="337" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M134.226 1.968C188.21-4.47 253.522 3.266 281.702 49.686c26.809 44.162-18.855 93.768-31.131 143.932-11.826 48.327 6.619 113.815-37.568 136.807-44.426 23.117-92.69-20.058-134.837-47.097-33.588-21.548-63.595-48.088-73.662-86.661-10.469-40.115-2.327-81.873 20.67-116.388C51.264 41.118 87.448 7.546 134.226 1.968z" fill="#F1710A"/></svg>
            <svg class="footer__art--svg" width="314" height="308" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M168.274 10.929c39.487 4.857 78.967 11.727 105.723 41.308 29.054 32.123 45.896 75.009 38.101 117.704-8.189 44.849-39.234 80.472-78.467 103.384-44.13 25.772-96.722 47.252-143.21 26.076-47.336-21.563-65.694-75.959-77.796-126.748-12.32-51.701-25.2-112.928 11.58-151.143C59.424-15.082 117.99 4.743 168.275 10.929z" fill="#E6C22C"/></svg>
        </div>
        <div class="newsletter">
        
            <p class="newsletter__title">A newsletter about all kinds of blobs that spark joy</p>
            <p class="newsletter__subtitle">Our goal with this newsletter is to create helpful content for blob enthousiasts, and this newsletter is the best in this!</p>
            <form class="newsletter__form" action="index.php" method="post" id="newsletter">
                <input type="hidden" name="action" value="joinNewsletter">
                <input class="newsletter__form--input" name="email" id="email" type="email" required>
                <input class="newsletter__form--submit" type="submit" value="Join!">
            </form>
        </div>
    </footer>
    
    <p class="credits <?php if($page === 'Sign In') echo 'hidden' ?>">Developed by @jaspervermeulen | Websited based on <a href="https://mishmash.pt">https://mishmash.pt</a></p>

    <script src="js/script.js"></script>
    <!-- <script type="text/javascript" src="js/validate.js"></script> -->
</body>

</html>