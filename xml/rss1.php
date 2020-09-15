<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS Feed 1</title>
</head>
<body>
    
    <form action="" method="POST">
    
        <select name="feed" onchange="this.form.submit()">
        
            <option disabled value="">Choose your feed</option>
            <option value="http://feeds.bbci.co.uk/news/rss.xml">News</option>
            <option value="http://feeds.bbci.co.uk/news/science_and_environment/rss.xml">Science</option>
            <option value="http://feeds.bbci.co.uk/news/entertainment_and_arts/rss.xml">Art</option>
        
        </select>
    
    </form>

    <?php

        if(isset($_POST['feed']) && !empty($_POST['feed'])){

            $feed = $_POST['feed'];
            $choosen = simplexml_load_file($feed);

            $counter = 0;

            foreach($choosen->channel->item as $news){

                if($counter < 3){

                    echo "<div style='background: #eee; color: #000; padding: 10px; margin-bottom: 10px'>";
                        echo "<h2 style='color: #2e7048'>" . $news->title . "</h2>";
                        echo "<p>" . $news->description . "</p>";
                        echo "<a style='text-decoration: none; color: #2e7048' href='" . $news->link . "' target='_blank'>Read more</a>";
                    echo "</div>";
                }
            }
        }

    ?>

</body>
</html>