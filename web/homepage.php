<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="css/homepage.css">
    </head>
    <body>
        <div>
            <h1>
                Ryan Budd - Homepage
            </h1>
            <?php 
                date_default_timezone_set('MST');
                echo "<p>Current Time and Date: </p>";
                echo date('h:i A e; l F jS, Y');
            ?>
        </div>

        <hr>

        <div class="header">
            <a href="index.html">Home</a> |
            <a href="links.html">Links</a> |
            <a href="faqs.html">FAQs</a> |
            <a href="about.html">About</a> |
            <input type="button" value="Click Me" onclick="alert('Hello!')"/>
        </div>

        <a href="images/Budd030.jpg" target="_blank">
            <img src="images/Budd030.jpg" alt="My Wedding Day" width="350" height="500">
        </a>

        <div class="words">
        Hello Everyone! My name is Ryan Budd and I am a Software Engineer major. This is my third year of attending BYU-I and I am loving every minute of it. 
        I love working with computers and playing videogames. When I have freetime I also enjoy cooking (and eating), dancing, spending time with friends and family,
        reading fantasy books, and goofing off on my phone. I try to workout when I can, but motivation has been lacking as of late.
        I got married in May of last year to my Highschool sweetheart and we couldn't be happier. The picture is actually us together right after our sealing
        in the Colorado, Denver temple. My wife is a computer graphics major and she is doing a great job. She should be graduating this coming Spring.
        She and I love to play Pokemon Go together however we are on different teams, Valor for myself and Instinct for her. This does
        lead to some akward GYM battles but we make do.
        I was born in the Church and have been as faithful as I can be for all my life. I went on a mission to Irvine, California speaking Spanish. I loved
        serving there and hope I can return to visit again soon. I was born in Landstuhl, Germany, however I do not speak any German. I love eating their food though.
        My dad was a C1-30 pilot for the US Airforce for most of my life so it is hard for me to say I am really from any one place. I have lived in Germany, North Carolina,
        Texas, Hawaii, Rhode Island, Virginia, and Colorado. I am no currently living in Rexburg while I complete my schooling. I am hoping to become a web developer after I graduate
        as I have really enjoyed learning how to do this. If that doesn't work out, I will try for application developer as I have enjoyed that as well.
        </div>

        <hr>

        <div class="footer">
            |     <a href="index.php">Home</a> |
                <a href="links.html">Links</a> |
                <a href="faqs.html">FAQs</a> |
                <a href="about.html">About</a> |
        </div>
    </body>
</html>