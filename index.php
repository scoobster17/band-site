<?php include 'include/common/global-php.php'; ?>
<?php include $serverRoot.'include/common/doctype.php'; ?>
<?php include $serverRoot.'include/common/html-tag.php'; ?>
<head>
    <?php include $serverRoot.'include/common/global-meta-info.php'; ?>
    <title>Home | <?php echo $bandName; ?></title>
    <?php include $serverRoot.'include/common/global-styles.php'; ?>
    <link rel="stylesheet" type="text/css" href="/css/pages/home.css" />
    <link rel="stylesheet" type="text/css" href="/css/tablet-and-desktop/pages-desktop/home.css" media="(min-width: 600px)" />
</head>
<body class="page-home">
    <?php include $serverRoot.'include/common/analytics.php'; ?>
    <div class="container">
        <?php include $serverRoot.'include/common/global-header.php'; ?>
        <main>
            <h1 class="visually-hidden"><?php echo $bandName; ?></h1>
        </main>
        <?php include $serverRoot.'include/common/global-footer.php'; ?>
    </div>
    <?php include $serverRoot.'include/common/global-scripts.php'; ?>
</body>
</html>