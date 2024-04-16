<?php
$JustinSongs = array(
    "Stay",
    "Love Yourself",
    "Ghost",
    "Sorry",  
    "Intentions"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justin Bieber songs</title>
    <link rel="stylesheet" href="css files/common.css">
    <link rel="stylesheet" href="css files/artists.css">
    <link rel="shortcut icon" type="x-icon" href="images/music-solid.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
        .eds_page {
            background: linear-gradient(#000428, #004e92,rgba(22, 22, 22, 0.736) 80%);
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
                <button>
                    <i class="fa-solid fa-bars-staggered fa-2xl"></i>
                </button>
                <button onclick="location.href='fav.php'">
                    <i class="fa-solid fa-heart fa-2xl"></i>
                </button>
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
                    <h1>Justin Bieber</h1>
                    <button class="player" onclick="playAudio()">
                        <i class="fa-solid fa-play fa-xl"></i>
                    </button>
                </div>
                <h4>The Justin has left a significant mark on the music industry with his distinctive voice, innovative production, and boundary-pushing style.He has earned critical acclaim and commercial success, establishing himself as one of the leading artists in contemporary R&B and pop music.The Justin's influence extends beyond music, as he continues to shape popular culture through his artistry, fashion, and cultural contributions.</h4>
                <p><b>Justin Drew Bieber</b> (born March 1, 1994)is a Canadian singer. Regarded as a pop icon, he is recognized for his multi-genre musical performances.He was discovered by American record executive Scooter Braun in 2008 and subsequently brought to American singer Usher, both of whom formed the record label RBMG Records to sign Bieber in October of that year. He gained recognition following the release of his debut extended play (EP) My World (2009), which was quickly met with international commercial success and led to his establishment as a prominent teen idol.</p>
                <img src="images/justin(1).jpeg">
                    <p>Genre: Pop, R&B<br>Instruments: Vocals, guitar, drums, piano<br>Labels: RBMG, Def Jam<br>Years Active: 2008–present<br>Grammy Award winner and nominee<br>Billboard Music Awards winner and nominee<br>MTV Video Music Awards winner and nominee<br>American Music Awards winner and nominee<br>Juno Awards winner and nominee (Canadian music awards)</p>
                    <hr>
                    <?php foreach ($JustinSongs as $song) { ?>
                        <div class="list">
                            <button onclick="playSong('<?php echo $song; ?>')">
                                <?php
                                    echo '<div class="song">'.$song.'</div>';
                                ?>
                            </button>
                            <form action="add_to_fav.php" method="post" name="form" id= "<?php echo $song."id"?>"
                            onsubmit = "addToFavorites('<?php echo $song; ?>')" target="_blank">
                                <input type="text" name="fav" id="fav" hidden>
                                <button name="fav_btn" value="<?php echo $song ?>">
                                    <i class="fa-solid fa-heart fa-xl"></i>
                                </button>
                             </form>
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
