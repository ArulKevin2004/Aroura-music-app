<?php
// Sample array of Ed Sheeran's songs
$edSheeranSongs = array(
    "Shape of You",
    "Castle on the Hill",
    "Perfect",
    "Thinking Out Loud",
    "Photograph"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ed Sheeran Songs</title>
</head>
<body>
    <h1>Ed Sheeran Songs</h1>
    <ul>
        <?php foreach ($edSheeranSongs as $song) { ?>
            <!-- Clickable song list -->
            <li><a href="#" onclick="playSong('<?php echo $song; ?>')"><?php echo $song; ?></a></li>
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
