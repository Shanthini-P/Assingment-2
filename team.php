<?php
 $players = [
    ["name" => "Rahul", "matches" => 20, "runs" => 800, "wickets" => 15],
    ["name" => "Kiran", "matches" => 18, "runs" => 500, "wickets" => 25],
    ["name" => "Meena", "matches" => 22, "runs" => 1000, "wickets" => 10],
    ["name" => "Divya", "matches" => 15, "runs" => 400, "wickets" => 12],
    ["name" => "Arun",  "matches" => 19, "runs" => 650, "wickets" => 18],
];

 foreach ($players as &$player) {
    $battingAvg = $player['runs'] / $player['matches'];
    $bowlingAvg = $player['wickets'] / $player['matches'];
    $player['performanceIndex'] = round(($battingAvg * 0.6) + ($bowlingAvg * 0.4), 2);
}
unset($player); // good practice when modifying array inside foreach

 $totalRuns = $totalMatches = $totalWickets = 0;
 foreach ($players as $p) {
    $totalRuns += $p['runs'];
    $totalMatches += $p['matches'];
    $totalWickets += $p['wickets'];
}

$teamBattingAvg = round($totalRuns / $totalMatches, 2);
$teamBowlingAvg = round($totalWickets / $totalMatches, 2);
usort($players, function($a, $b) {
    return $b['performanceIndex'] <=> $a['performanceIndex'];
});

echo "<h2>🏏 Player Performance Rankings</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Rank</th><th>Name</th><th>Matches</th><th>Runs</th><th>Wickets</th><th>Performance Index</th></tr>";

$rank = 1;
foreach ($players as $p) {
    echo "<tr>
            <td>{$rank}</td>
            <td>{$p['name']}</td>
            <td>{$p['matches']}</td>
            <td>{$p['runs']}</td>
            <td>{$p['wickets']}</td>
            <td>{$p['performanceIndex']}</td>
          </tr>";
    $rank++;
}
echo "</table>";
echo "<h3> Team Averages</h3>";
echo "Batting Average (Runs per Match): <b>$teamBattingAvg</b><br>";
echo "Bowling Average (Wickets per Match): <b>$teamBowlingAvg</b>";
?>
