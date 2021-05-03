<!DOCTYPE html>
<html lang="it" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>

    <style>
        body{
            background-color: dodgerblue;
            text-align: center;
            padding: 200px;
        }
        p{
            font-size: 30px;
        }
        span{
            display: inline-block;
            color: gold;
            margin: 30px 0;
        }
    </style>
</head>

<body>
    <p>
        <?php 
            // Testo completo
            $text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, facilis tenetur nisi explicabo, quibusdam et provident, a unde tempora porro totam voluptas? Necessitatibus beatae deserunt id ab rerum praesentium soluta.';

            // Parola bandita
            $badWord = $_GET['word'];

            // Testo censurato
            $censoredText = str_replace($badWord, '***', $text);
            // Stampa in html
            echo '<span>Numero caratteri della stringa: ' . strlen($censoredText), '</span><br>';
            echo $censoredText, '<br>';


            if($text != $censoredText){
                echo '<span>Il testo è stato censurato!</span>';
            }else{
                echo '<span>Testo originale!</span>';
            }
        ?>
    </p>
</body>
</html>