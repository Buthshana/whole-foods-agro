<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="how.css">
    <title>Whole Foods</title>
</head>

<body>
<div class="navbar">
            
        <a href="whole_foods_welcome.php">Home</a>
        <a href="about.html">About Us</a>
        <a href="create_account.html">Register</a>
        <div class="search-bar"> <!-- Moved this line before the <ul> element -->
                <form action="search.php" method="post">
                    <input type="text" name="searchQuery" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </div>
    </div>

    <div class="video-container">
        <video autoplay muted loop id="background-video">
            <source src="process.mp4" type="video/mp4">
        </video>
    </div>

    <header>
        <h1>Whole Foods</h1>
    </header>

    <section class="content-section">
        <p>Welcome to Whole Foods, where the bountiful fields meet your table! Our journey begins in the heart of
            nature...</p>
    </section>
</body>

</html>
