<html>
    <link rel="stylesheet" href="homepage.css">
    <div>
        <p class="welcome"> <?php session_start(); echo "<span class='welcome'>" . "Welcome {$_SESSION["username"]}!" . "</span>" ;?> </p>
    </div>
</html>

