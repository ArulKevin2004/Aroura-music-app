<?php
// Sample array of Ed Sheeran's songs
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
    <link rel="shortcut icon" type="x-icon" href="images/music-solid.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
    
        body {
            color: white;
        }
    
        .list{
            margin: 10px;
        }
    
        img {
            margin-bottom: 20px;
        }
    
        .list > button{
            width: 1300px;
            font-size: 20px; 
            text-align: left;
            margin: 0px;
            padding : 20px;
            padding-left: 30px;
            border: none;
            border-radius: 5px;
            background: none;
            /* background: linear-gradient(to left, rgb(40, 40, 40), rgb(20, 20, 20) 100%); */
        }
    
        .list>button:hover{
            cursor: pointer;
            background: rgba(255, 255, 255, 0.1);
        }
    
        .song {
            color: white;
        }
    
        .eds_page {
            background: linear-gradient(#141e30,#243b55,rgba(22, 22, 22, 0.736) 70%);
            margin-left: 5px;
            width: 95vw;
            border-radius: 10px;
            background-attachment: fixed;
        }
    
        img {
            height: 300px;
            border-radius: 20px;
        }
    
        .content {
            margin: 40px;
            font-family: "Roboto", sans-serif;
        }
        
        p {
            color: grey;
            margin-bottom: 20px;
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
                <h1>Anirudh Ravichander</h1>
                <img src="images/anirudh(1).jpg">
                    <p><b>Anirudh Ravichander</b> (born 16 October 1990), also credited mononymously as Anirudh, is an Indian music composer and playback singer who works primarily in Tamil Cinema. He has also composed music for few Hindi and Telugu films. He has won two Filmfare Awards South, nine SIIMA Awards, six Edison Awards and five Vijay Awards.
His debut song "Why This Kolaveri Di", composed for the 2012 film 3, went viral across the globe and has achieved over 400 million views on YouTube.</p>
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