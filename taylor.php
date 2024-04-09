<?php
$TaylorSongs = array(
    "Enchanted",
    "Love Story",
    "Shake It Off",
    "Anti-Hero",
    "Blank Space",
    "Lover"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Taylor songs</title>
    <link rel="stylesheet" href="css files/common.css">
    <link rel="stylesheet" href="css files/artists.css">
    <link rel="shortcut icon" type="x-icon" href="images/music-solid.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
        img {
            width: 250px;
            object-fit: cover;
            object-position: +70%;
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
                    <h1>Taylor Swift</h1>
                    <button class="player" onclick="playAudio()">
                        <i class="fa-solid fa-play fa-xl"></i>
                    </button>
                </div>
                <h4>Taylor Swift's influence extends beyond music, as she has become a cultural icon and a role model for young artists.Her ability to connect with audiences through her music and authenticity has cemented her legacy as one of the most significant artists of her generation.Swift's impact on the music industry, coupled with her philanthropic efforts and entrepreneurial ventures, ensures her lasting legacy for years to come.</h4>
                <p><b>Taylor Alison Swift</b> (born December 13, 1989) is an American singer-songwriter. A subject of widespread public interest, she has influenced the music industry and popular culture through her artistry, songwriting and entrepreneurship. She is an advocate of artists' rights and women's empowerment.</p>
                <img src="images/Taylor(1).jpeg">
                    <p>Genres: Pop, country, synth-pop, rock<br>Instruments: Vocals, guitar, piano<br>Labels: Big Machine, Republic, Universal Music Group<br>Years Active: 2004–present<br>Taylor Swift is one of the best-selling music artists of all time, with numerous awards and accolades, including 11 Grammy Awards.<br>She has successfully transitioned between genres, starting as a country artist and later becoming a prominent figure in pop music.<br>Known for her songwriting prowess, Swift has received critical acclaim for her storytelling abilities and emotionally resonant lyrics.</p>
                    <hr>
                    <?php foreach ($TaylorSongs as $song) { ?>
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
                    function playSong(songName)
                    {
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
