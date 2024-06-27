<?php
// Fetch posts from database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts - Lizbeth Life</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS file -->
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Lizbeth Life</h1>
            <nav class="nav">
                <a href="index.html">Home</a>
                <a href="about.html">About Me</a>
                <a href="youtube.html">YouTube Channel</a>
                <a href="social.html">Social Media</a>
                <a href="contact.html">Contact</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <section class="section">
            <h2>Latest Posts</h2>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='post'>";
                    echo "<h3>" . $row['title'] . "</h3>";
                    echo "<p>" . $row['content'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No posts yet.";
            }
            ?>
        </section>
    </div>

    <footer class="footer">
        <div class="container">
            <p>Designed with ❤️ by Lizbeth Life</p>
        </div>
    </footer>
</body>
</html>
