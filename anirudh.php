<?php
$anirudhSongs = array(
    "Badass",
    "Hayyoda",
    "Why This Kolaveri Di",
    "Dippam Dappam",
    "Sirikkadhey"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anirudh Songs</title>
    <link rel="stylesheet" href="css files/common.css">
    <link rel="stylesheet" href="css files/artists.css">
    <link rel="shortcut icon" type="x-icon" href="images/music-solid.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
        .eds_page {
            background: linear-gradient(#fdb931bd ,rgba(22, 22, 22, 0.736) 70%);
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
                <div class="artist-card">
                    <h1>Anirudh Ravichander</h1>
                    <button class="player" onclick="playAudio()">
                        <i class="fa-solid fa-play fa-xl"></i>
                    </button>
                </div>
                <h4>Anirudh Ravichander has made a significant impact on the Tamil music industry, introducing fresh and innovative sounds while maintaining commercial success.
He is celebrated for his ability to blend various musical styles seamlessly, earning him a dedicated fan base and widespread acclaim.</h4>
                <p><b>Anirudh Ravichander</b> (born 16 October 1990), also credited mononymously as Anirudh, is an Indian music composer and playback singer who works primarily in Tamil Cinema. He has also composed music for few Hindi and Telugu films. He has won two Filmfare Awards South, nine SIIMA Awards, six Edison Awards and five Vijay Awards.
His debut song "Why This Kolaveri Di", composed for the 2012 film 3, went viral across the globe and has achieved over 400 million views on YouTube.</p>
                <img src="images/anirudh(1).jpg">
                    <p>Genre: Film music, Pop, Electronic<br>Instruments: Vocals, Keyboard, Guitar<br>Labels: Sony Music India<br>Years Active: 2011–present<br>Filmfare Awards: Several wins and nominations<br>Edison Awards: Multiple wins and nominations<br>Mirchi Music Awards: Recognized for Best Music Director and Best Male Vocalist awards</p>
                    <hr>
                    <?php foreach ($anirudhSongs as $song) { ?>
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
                    function playAudio()
                    {
                        var audioPlayer = document.getElementById('audioPlayer');
                        if (audioPlayer.paused)
                        {
                            audioPlayer.play();
                        }
                        else
                        {
                            audioPlayer.pause();
                        }
                    }

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
