<?php
    $song = isset($_GET['song']) ? $_GET['song'] : "Default Song";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lewis Capladi songs</title>
    <link rel="stylesheet" href="css files/common.css">
    <link rel="stylesheet" href="css files/artists.css">
    <link rel="shortcut icon" type="x-icon" href="images/music-solid.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
        .eds_page {
            background: linear-gradient(#3f51b5, #e91e63);
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
                    <h1>Your Pick</h1>
                    <button class="player" onclick="playAudio()">
                        <i class="fa-solid fa-play fa-xl"></i>
                    </button>
                </div>
                <img src="images/background(1).webp">
                    <hr>
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
