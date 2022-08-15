<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ORWTMC LLC., Pastebin</title>
        <style>
            /* PasteBin CSS */
            /* Make ID=title center and bold and big */
            #title {
                text-align: center;
                font-weight: bold;
                font-size: large;
            }
            /* Make ID=subtitle aligned right relative to ID=title and slightly smaller font size */
            #subtitle {
                text-align: right;
                font-size: small;
            }
            body {
                /* Make background picture https://wallpaper.frank-ruan.com/ */
                background-image: https://wallpaper-frank-ruan.com;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <p id="title">ORWTMC LLC., Pastebin</p>
        <br />
        <p id="subtitle">
            <?php
                echo "Today is " . date("l, F j, Y") . ".";
            ?>
        </p>
        <br />
        <form action="./pastebin.php" method="post">
            <textarea name="text" rows="10" cols="50"></textarea>
            <br />
            <input type="submit" value="Submit" />
        </form>
        <br />
        <!-- Add footer to my website https://frank-ruan.com and say this site is open-sourced in Github via GPLv3.0 -->
        <p>Copyleft &#127279; <a href="https://frank-ruan.com" target="_blank">Frank Ruan</a></p>
        <p>Site Licensed under <a href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank">GPLv3.0</a></p>
        <p>Source Code: <a href="https://github.com/shuairuan/minibin" target="_blank">https://github.com/shuairuan/minibin</a></p>
    </body>
</html>