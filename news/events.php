<?php include '../include/common/global-php.php'; ?>

<?php
    // retrieve events and convert to PHP array
    $bandsInTownUrl = 'http://api.bandsintown.com/artists/Skrillex/events.json?api_version=2.0&app_id=test4bandSite';
    $eventsResponse = file_get_contents($bandsInTownUrl);
    $eventsArray = json_decode($eventsResponse, true);
    $noOfEvents = count($eventsArray);
?>

<?php include $serverRoot.'include/common/doctype.php'; ?>
<?php include $serverRoot.'include/common/html-tag.php'; ?>
<head>
    <?php include $serverRoot.'include/common/global-meta-info.php'; ?>
    <title>Events | Band Name</title>
    <?php include $serverRoot.'include/common/global-styles.php'; ?>
</head>
<body class="page-events">
    <?php include $serverRoot.'include/common/analytics.php'; ?>
    <div class="container">
        <?php include $serverRoot.'include/common/global-header.php'; ?>
        <main>
            <h1>Events</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper felis sit amet urna feugiat feugiat. Curabitur aliquet molestie arcu ac vulputate. Vivamus ex mauris, fringilla id rutrum in, elementum in neque. Nullam condimentum interdum dolor ac aliquam. Mauris eleifend metus a finibus sodales. Aliquam tempor finibus elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec hendrerit orci tellus, in convallis ante porta sed. Sed a risus sit amet mi suscipit vulputate.</p>
            <?php
                if ($noOfEvents > 0) {
                    echo '<table>';
                        echo '<thead>';
                            echo '<tr>';
                                echo '<th>Date & Time</th>';
                                echo '<th>Title</th>';
                                echo '<th>Location</th>';
                                echo '<th>Tickets</th>';
                            echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                            for($i=0; $i<count($eventsArray); $i++) {
                                echo '<tr>';
                                    echo '<td>';
                                        echo $eventsArray[$i]['datetime'];
                                    echo '</td>';
                                    echo '<td>';
                                        echo $eventsArray[$i]['title'];
                                    echo '</td>';
                                    echo '<td>';
                                        echo $eventsArray[$i]['formatted_location'];
                                    echo '</td>';
                                    echo '<td>';
                                        echo '<a href="'.$eventsArray[$i]['ticket_url'].'" rel="external">';
                                            echo 'Tickets';
                                        echo '</a>';
                                    echo '</td>';
                                echo '</tr>';
                            }
                        echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p>No upcoming events. Send us a message to register your interest!</p>';
                }
            ?>
        </main>
        <?php include $serverRoot.'include/common/global-footer.php'; ?>
    </div>
    <?php include $serverRoot.'include/common/global-scripts.php'; ?>
</body>
</html>