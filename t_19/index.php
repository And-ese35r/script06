<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="profil">
        <!-- https://store.steampowered.com/?l=english -->
        <form action="" class="form" method="POST">
            <div class="candidate">About candidate</div>
            <div class="profil-conteiner">
                <div class="info">
                    <label for="text">Name</label><br>
                    <input type="text" name="text-name" placeholder="Tell your name" class="text"><br>
                    <label for="email">E-mail</label><br>
                    <input type="email" name="email" placeholder="Tell your Email" class="email"><br>
                    <label for="number">Age</label><br>
                    <input type="number" name="number-age" placeholder="18" min="18" max="60" class="number"><br>
                </div>
                <div class="abouth-me">
                    <label for="text-info">Abouth</label><br>
                    <textarea name="text-info" class="text-info" placeholder="Tell about yourself max 500 symbols" cols="30" rows="10"></textarea>
                </div>
                <div class="photo">
                    <label for="file">Your photo:</label><br>
                    <input type="file" name="file" class="file">
                </div>
            </div>

            <div class="choises">
                <input type="button" value="check-profil" class="button-post">
                <input type="reset" value="⟲" class="reset">
                <input type="submit" value="submit" class="submit">
            </div>
        </form>

    </div>

    <div class="info-conteiner">
        <div class="info-profil">
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = $_POST["text-name"] ?? 'No name provided';
                    var_dump([$name]);
                    echo "<br>";
                    $name = $_POST["email"] ?? 'No name provided';
                    var_dump([$name]);
                    echo "<br>";
                    $name = $_POST["number-age"] ?? 'No name provided';
                    var_dump([$name]);
                    echo "<br>";
                    $name = $_POST["text-info"] ?? 'No name provided';
                    var_dump([$name]);
                    echo "<br>";
                    $name = $_POST["file"] ?? 'No name provided';
                    var_dump([$name]);
                    echo "<br>";
                }
            ?>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>