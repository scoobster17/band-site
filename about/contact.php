<?php include '../include/common/global-php.php'; ?>
<?php include $serverRoot.'include/common/doctype.php'; ?>
<?php include $serverRoot.'include/common/html-tag.php'; ?>
<head>
    <?php include $serverRoot.'include/common/global-meta-info.php'; ?>
    <title>Contact | Band Name</title>
    <?php include $serverRoot.'include/common/global-styles.php'; ?>
</head>
<body class="page-about">
    <div class="container">
        <?php include $serverRoot.'include/common/global-header.php'; ?>
        <main>
            <h1>Contact Band Name</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper felis sit amet urna feugiat feugiat. Curabitur aliquet molestie arcu ac vulputate. Vivamus ex mauris, fringilla id rutrum in, elementum in neque. Nullam condimentum interdum dolor ac aliquam. Mauris eleifend metus a finibus sodales. Aliquam tempor finibus elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec hendrerit orci tellus, in convallis ante porta sed. Sed a risus sit amet mi suscipit vulputate.</p>
            <form>
                <label>Email address:</label>
                <input type="email" name="email" />
                <label for="comment">Comment:</label>
                <textarea name="comment"></textarea>
                <input type="submit" value="Send" class="btn btn-primary" />
            </form>
        </main>
        <?php include $serverRoot.'include/common/global-footer.php'; ?>
    </div>
    <?php include $serverRoot.'include/common/global-scripts.php'; ?>
</body>
</html>