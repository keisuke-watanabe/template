<?php
//setup
    $page = "top";
    require_once('common/php/setup.php');
    $title = "テンプレ";
    $discription ="";
    $keywords ="";
    $canonical ="";
    $riottag = $targetdir.'top/js/tags/top.tag';
?>
    <?php
//header
    include ("$head");
?>
        </head>

        <body id="<?php echo $page; ?>">
            <?php
//header
    include ("$header");
?>
                <div id="contents">


                    <main id="main">
                    </main>

                    <div class="weather" date="2016/01/01" state="晴れ">
                    </div>
                    <riot-tabs></riot-tabs>
                    <test></test>
                </div>
                <?php include ("$footer"); ?>
                <script>
                    riot.mount(".weather", "weather")
                </script>
                <?php include ("$tag"); ?>

        </body>

        </html>
