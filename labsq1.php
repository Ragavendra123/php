<?php
if (isset($_POST['submit'])) {
    $number = rand(1, 100);
    $sq = $number * $number;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Square of a Random Number</title>
</head>

<body>
    <div>
        <form action="" method="post">
            <label for="number">Random Number</label>
            <input type="number" disabled value="<?php if (isset($number)) echo "$number"; ?>">
            <br>
            <label for="number">Square</label>
            <input type="square" disabled value="<?php if (isset($number)) echo "$sq"; ?>">
            <input type="submit" name="submit">
        </form>
    </div>
</body>

</html>