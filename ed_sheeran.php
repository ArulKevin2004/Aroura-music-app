<?php
// Sample array of Ed Sheeran's songs
$edSheeranSongs = array(
    "Shape of You",
    "I Dont Care",
    "Perfect",
    "Beautiful People",
    "Photograph"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ed Sheeran Songs</title>
    <link rel="stylesheet" src="Aroura-music-app/css files/common.css">
    <style>
        a {
            text-decoration: none;
        }

        .song {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Ed Sheeran Songs</h1>
    <ul>
        <?php foreach ($edSheeranSongs as $song) { ?>
            <!-- Clickable song list -->
            <li>
                <a href="#" onclick="playSong('<?php echo $song; ?>')">
                    <?php 
                        echo '<div class="song">'.$song.'</div>'; 
                    ?>
                </a>
            </li>
        <?php } ?>
    </ul>

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
</body>
</html>
