<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Avengers Quiz</title>
</head>

<body>
    <form method="post">
        <div class="question-list">
            <div class="easy-question">
                <p>What Thanos did for the Soul Stone?</p>
            </div>
            <div class="ansver">
                <input type="radio" name="soul_stone" id="jump" value="jumped" class="first-question">
                <label for="jump">Jumped from the mountain.</label><br>
                <input type="radio" name="soul_stone" id="made" value="keeper" class="second-question">
                <label for="made">Made stone keeper to jump from the mountains.</label><br>
                <input type="radio" name="soul_stone" id="push" value="gamora" class="third-question">
                <label for="push">Pushed Gamora off the mountains.</label><br>
            </div>
            <div class="check-block">
                <button class="check-question" type="submit" name="submit" value="check">I made a choice!</button>
            </div>
            <div class="ansver-text">
            </div>
        </div>
    </form>
    <?php
    $variantsTrue = [
        "Oh wow! You finally thought of it! Let's have a parade in your honor?",
        "That's right! Now you can go and amaze everyone with your brilliant mind",
        "Bravo, Sherlock! How did you get here? The stars must have aligned perfectly.",
        "Well, finally! I was starting to think you were being deliberately obtuse.",
        "Oh yes, it's so obvious! It's a pity it wasn't yesterday.",
    ];

    $variantsFalse = [
        "Oh, absolutely! And I suppose the Earth is flat too? Brilliant deduction!",
        "Yeah, sure… in an alternate universe where facts don’t matter.",
        "Wow, such wisdom! Did you learn that from a cereal box?",
        "Congratulations! That’s the wrongest answer I’ve heard all day.",
        "(&$#^%@*$)!!@)$(#__%+#)#(@*$#(%()#((@(_$@)@(*#*@#%@^%$$&@&#&$",
    ];

    $variantsNull = [
        "Wow, such emptiness! Did your brain take a coffee break?",
        "Thanks for nothing. Literally.",
        "Ah, the sound of silence… and intellectual bankruptcy.",
        "Is this a Zen meditation or just a complete lack of effort?",
        "Bravo! You’ve achieved the impossible: an answer with zero content.",
    ];

    echo $random = rand(0, 4);
    ?>

    <?php
    $soulStoneAnswer = $_POST['soul_stone'] ?? '';
    $correctAnswer = 'gamora';

    $response = '';
    if ($soulStoneAnswer == $correctAnswer) {
        $response = $variantsTrue[$random];
    } else if (!empty($soulStoneAnswer)) {
        $response = $variantsFalse[$random];
    } else {
        $response = $variantsNull[$random];
    }


    echo <<<HTML
        <script>
            document.querySelector('.ansver-text').innerHTML = "$response";
        </script>
        HTML;
    ?>
</body>

</html>