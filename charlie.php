<?php
$CharlieSongs = array(
    "See You Again",
    "We Dont Talk Anymore",
    "Attention",
    "Light Switch",
    "Left and Right"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>charlie puth songs</title>
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
            width: 1250px;
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
            background: linear-gradient(#c0c0c0,rgba(22, 22, 22, 0.736) 40%);
            margin-left: 5px;
            width: 95vw;
            border-radius: 10px;
            background-attachment: fixed;
        }
    
        .second {
            height: 1200px;
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

        h4 {
            color: rgb(166, 166, 166);
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
                <h1>Charlie Puth</h1>
                <h4>Charlie Puth has established himself as a prominent figure in the pop music industry, known for his soulful voice, catchy melodies, and emotional lyrics.He has achieved commercial success with multiple chart-topping singles and albums, contributing to the contemporary pop music landscape with his distinctive style and sound.</h4>
                <p><b>Charles Otto Puth Jr.</b> (born December 2, 1991) is an American singer, songwriter, and record producer. His initial exposure came through the viral success of his song covers uploaded to YouTube. Puth signed with the record label eleveneleven in 2011 after performing on The Ellen DeGeneres Show, while also songwriting and producing material for other artists.Puth eventually signed to Atlantic Records and Artist Partner Group to release his debut single, "Marvin Gaye" (featuring Meghan Trainor) in 2015.</p>
                <img src="images/charlie(1).jpg">
                    <p>Genre: Pop, R&B<br>Instruments: Vocals, Piano, Guitar<br>Labels: Atlantic Records<br>Years Active: 2009–present<br>Grammy Award nominee<br>Billboard Music Awards winner and nominee<br>Teen Choice Awards winner and nominee<br>MTV Europe Music Awards nominee<br>American Music Awards nominee</p>
                    <hr>
                    <?php foreach ($CharlieSongs as $song) { ?>
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
