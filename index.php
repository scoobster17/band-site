<?php include 'include/common/global-php.php'; ?>
<?php include $serverRoot.'include/common/doctype.php'; ?>
<?php include $serverRoot.'include/common/html-tag.php'; ?>
<head>
    <?php include $serverRoot.'include/common/global-meta-info.php'; ?>
    <title>Band Name</title>
    <?php include $serverRoot.'include/common/global-styles.php'; ?>
    <link rel="stylesheet" type="text/css" href="/css/pages/home.css" />
    <link rel="stylesheet" type="text/css" href="/css/tablet-and-desktop/pages-desktop/home.css" media="(min-width: 600px)" />
</head>
<body class="page-home">
    <?php include $serverRoot.'include/common/analytics.php'; ?>
    <div class="container">
        <?php include $serverRoot.'include/common/global-header.php'; ?>
        <main>
            <h1>Band Name</h1>
            <p>Upcoming legends in indie rock</p>
        </main>
        <aside>
            <h2>Watch the band live!</h2>
            <p>Click the following link to watch the band play live when they are broadcasting an event. When nothing is being broadcasted, you can check out the previous broadcasts that are saved on their profile page by clicking the same link.</p>
            <script>window.twttr=function(t,e,r){var n,i=t.getElementsByTagName(e)[0],w=window.twttr||{};return t.getElementById(r)?w:(n=t.createElement(e),n.id=r,n.src="https://platform.twitter.com/widgets.js",i.parentNode.insertBefore(n,i),w._e=[],w.ready=function(t){w._e.push(t)},w)}(document,"script","twitter-wjs")</script>
            <a href="https://www.periscope.tv/scoobster17" class="periscope-on-air" data-size="large">
                @Scoobster17
            </a>
        </aside>
        <!--<aside>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/F9CRooinD5U" frameborder="0" allowfullscreen></iframe>
        </aside>-->
        <?php include $serverRoot.'include/common/global-footer.php'; ?>
    </div>
    <?php include $serverRoot.'include/common/global-scripts.php'; ?>
</body>
</html>