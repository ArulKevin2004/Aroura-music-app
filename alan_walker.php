<?php
$alanwalkerSongs = array(
    "End of Time",
    "Faded",
    "Paradise",
    "Hello World",
    "Catch Me If You Can",
    "Spectre"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alan Walker Songs</title>
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
                    <h1>Alan Walker </h1>
                    <button class="player" onclick="playAudio()">
                        <i class="fa-solid fa-play fa-xl"></i>
                    </button>
                </div>
                <h4>Alan Walker's rise to fame and continued success highlight his talent and creativity as a musician and producer. If you need more detailed information or have any specific questions about Alan Walker, feel free to ask!</h4>
                <p><b>Alan Olav Walker </b> (born 24 August 1997) is a Norwegian DJ and music producer. At the age of 16, Walker released "Fade" on NoCopyrightSounds, which led to a contract with MER Musikk. He rose to fame with his 2015 single "Faded".Walker's debut album, Different World (2018) , features artists such as Steve Aoki, Noah Cyrus, and Digital Farm Animals, and includes "famous releases'' such as "Faded" and "new songs" such as "Lost Control." is known for its combination.</p>
                <img src="images/Alan Walker(1).jpg">
                    <p>Genre: Electronic, EDM (Electronic Dance Music)<br>Instruments: Digital Audio Workstation (DAW), piano<br>Labels: MER Musikk, Sony Music, RCA Records<br>Years Active: 2012-present<br>Awards: NRJ Music Awards Norge, the song "Sing Me to Sleep" won the Årets Norske Låt Norwegian Song of the Year. </p>
                    <hr>
                    <?php foreach ($alanwalkerSongs as $song) { ?>
                        <div class="list">
                            <button onclick="playSong('<?php echo $song; ?>')">
                                <?php 
                                    echo '<div class="song">'.$song.'</div>'; 
                                    ?>
                            </button>
                            <button onclick="addToFavorites('<?php echo $song; ?>')">
                                <i class="fa-solid fa-heart fa-xl"></i>
                            </button>
                            <button><i class="fa-solid fa-heart fa-xl"></i></button>
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
