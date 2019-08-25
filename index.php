<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML5 Audio player with playlist | Script Tutorials</title>

    <!-- add styles and scripts -->
    <link href="https://portaldosplayer.github.io/projetos/css/styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://portaldosplayer.github.io/projetos/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="https://portaldosplayer.github.io/projetos/js/musicplayer.js"></script>
    <!-- Add the slick-theme.css if you want default styling -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <!-- Add the slick-theme.css if you want default styling -->

</head>

<body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
 
    <div class="example2">
        <ul class="playlist">
            <li data-cover="http://digital.akauk.com/utils/musicPlayer/data/epic.jpg" data-artist="John Doe"><a href="http://playvideo.sitevip.ml/001.mp3">Epic</a>
            </li>
            <li data-cover="http://digital.akauk.com/utils/musicPlayer/data/acousticbreeze.jpg" data-artist="Sam Doe">
                <a href="http://digital.akauk.com/utils/musicPlayer/data/acousticbreeze.mp3">Acoustic Breeze</a>
            </li>
            <li data-cover="http://digital.akauk.com/utils/musicPlayer/data/dubstep.jpg" data-artist="Jane Doe"><a href="http://digital.akauk.com/utils/musicPlayer/data/dubstep.mp3"></a>Dubstep</li>
        </ul>
    </div>
    </div>
    <script>    
        $(".example2").musicPlayer({
            //volume: 10,
            //elements: ['artwork', 'controls', 'progress', 'time', 'volume'],
            //playerAbovePlaylist: false,
            // autoPlay: true,
            // loop: true,
            onLoad: function () {
                //Add Audio player
                plElem = "<div class='pl'></div>";
                $('.example2').find('.player').append(plElem);
                // show playlist
                $('.pl').click(function (e) {
                    e.preventDefault();
                    $('.example2').find('.playlist').toggleClass("hidden");
                });
            },

        });





    </script>


</body>

</html>
