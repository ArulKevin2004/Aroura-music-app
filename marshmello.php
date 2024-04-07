<?php
$MarshmelloSongs = array(
    "Happier",
    "Silence",
    "Friends",
    "Wolves",  
    "Alone"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marshmello songs</title>
    <link rel="stylesheet" href="css files/common.css">
    <link rel="stylesheet" href="css files/artists.css">
    <link rel="shortcut icon" type="x-icon" href="images/music-solid.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
        .eds_page {
            background: linear-gradient(#166D3B,rgba(22, 22, 22, 0.736) 80%);
        }
    </style>
</head>
<body>
    <div class="eve">
        <div>
            <div class="first">
                <button type="button" onclick="location.href='main.html'">
                    <i class="fa-solid fa-house fa-2xl"></i>
                </button>
                <button type="button" onclick="location.href='search.html'">
                    <i class="fa-solid fa-magnifying-glass fa-2xl"></i>
                </button>
            </div>
            <div class="second">
                <i class="fa-solid fa-bars-staggered fa-xl"></i>
                <i class="fa-solid fa-heart fa-xl"></i>
            </div>
        </div>
        <div class="eds_page">
            <div class="top">
                <div>
                    <button onclick="location.href='main.html'">
                        <i class="fa-solid fa-arrow-left fa-lg"></i>
                    </button>
                </div>
            </div>
            <div class="content">
                <h1>Marshmello</h1>
                <h4>Marshmello's rise to fame as a masked DJ and producer has had a significant impact on the electronic music scene, inspiring other artists and reshaping the way performers engage with their audience.His catchy melodies, infectious beats, and crossover collaborations have helped him reach a broad audience and establish himself as one of the leading figures in modern EDM.</h4>
                <p><b>Christopher Comstock</b> (born May 19, 1992), known professionally as Marshmello, is an American electronic music producer and DJ. His songs "Silence" (featuring Khalid), "Wolves" (with Selena Gomez), "Friends" (with Anne-Marie), "Happier" (with Bastille), and "Alone" have received multi-platinum certification in several countries including the US, and charted within the Top 40 of the Billboard Hot 100. His musical style includes groove-oriented, synth and bass-heavy electronic dance music.</p>
                <img src="images/marshmello(1).png">
                    <p>Genre: EDM (Electronic Dance Music)<br>Instruments: DJ, producer<br>Labels: Joytime Collective, Monstercat, OWSLA, RCA<br>Years Active: 2015–present<br>Marshmello gained significant popularity with his unique branding, wearing a white helmet resembling a marshmallow and keeping his true identity concealed.<br>He has collaborated with numerous artists across various genres, including Bastille, Khalid, Anne-Marie, Halsey, Selena Gomez, and more.</p>
                    <hr>
                    <?php foreach ($MarshmelloSongs as $song) { ?>
                        <div class="list">
                            <button onclick="playSong('<?php echo $song; ?>')">
                                <?php 
                                    echo '<div class="song">'.$song.'</div>'; 
                                ?>
                            </button>
                        </div>
                        <hr>
                    <?php } ?>

                <!-- Audio player -->
                <audio id="audioPlayer" controls>
                    <source src="" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>

                <script>
                    // JavaScript function to play a song
                    function playSong(songName) {
                        var audioPlayer = document.getElementById('audioPlayer');
                        audioPlayer.src = 'audio/' + encodeURIComponent(songName) + '.mp3'; // Set the source of the audio player
                        audioPlayer.play(); // Play the audio
                    }
                </script>
            </div>
        </div>
    </div>            
</body>
</html>
