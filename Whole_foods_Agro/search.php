<?php
// Define the search keywords and corresponding URLs
$keywords = array(
    "service" => "how.php",
    "mission" => "mission.php",
    "vision" => "vision.html",
    "about" => "about.html",
    "product"=>"productpage.php",
    "home"=>"whole_foods_welcome.php",
    "cart"=>"cart.php",
    "shopping cart"=>"cart.php"
);

// Get the search query from the form submission
if (isset($_POST['searchQuery'])) {
    $searchQuery = strtolower($_POST['searchQuery']);

    // Check if the search query matches any keywords and redirect the user
    foreach ($keywords as $keyword => $url) {
        if (strpos($searchQuery, $keyword) !== false) {
            header("Location: $url");
            exit(); // Stop further execution
        }
    }

    // If no match is found, you can display a message or handle it as per your requirements
    echo "No matching page found! please go back again";
}
?>
