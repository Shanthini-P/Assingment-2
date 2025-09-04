<?php
// Step 1: Define some songs
$song1 = ["title" => "Shape of You", "artist" => "Ed Sheeran", "duration" => "3:53"];
$song2 = ["title" => "Blinding Lights", "artist" => "The Weeknd", "duration" => "3:20"];
$song3 = ["title" => "Levitating", "artist" => "Dua Lipa", "duration" => "3:24"];
$song4 = ["title" => "Perfect", "artist" => "Ed Sheeran", "duration" => "4:40"];

// Step 2: Create a playlist (array of songs)
$playlist = [$song1, $song2];

// Step 3: Add a song (array_push)
array_push($playlist, $song3);

// Step 4: Remove a song (remove second song)
unset($playlist[1]); 
$playlist = array_values($playlist); // reindex

// Step 5: Add another song
array_push($playlist, $song4);

// Step 6: Shuffle playlist
shuffle($playlist);

// Step 7: Generate Playlist Report
echo "<h2>My Playlist</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Title</th><th>Artist</th><th>Duration</th></tr>";

foreach ($playlist as $song) {
    echo "<tr>";
    echo "<td>" . $song["title"] . "</td>";
    echo "<td>" . $song["artist"] . "</td>";
    echo "<td>" . $song["duration"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
