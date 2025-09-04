<?php
// Historical sales data (in thousands of units, for each month)
$sales = [120, 135, 150, 160, 180, 200, 220, 250];

// ---------------------------
// 1. Calculate Growth Rates
// ---------------------------
$growthRates = [];
for ($i = 1; $i < count($sales); $i++) {
    $growth = (($sales[$i] - $sales[$i - 1]) / $sales[$i - 1]) * 100;
    $growthRates[] = $growth;
}

// ---------------------------
// 2. Calculate Average Growth Rate
// ---------------------------
$avgGrowth = array_sum($growthRates) / count($growthRates);

// ---------------------------
// 3. Forecast Future Sales
// ---------------------------
// Let’s forecast sales for next 3 months using average growth
$futureSales = [];
$lastSale = end($sales);

for ($i = 1; $i <= 3; $i++) {
    $lastSale = $lastSale * (1 + $avgGrowth / 100); // apply growth
    $futureSales[] = round($lastSale, 2); // round to 2 decimals
}

// ---------------------------
// 4. Display Results
// ---------------------------
echo "Historical Sales Data:\n";
print_r($sales);

echo "\nGrowth Rates (%):\n";
print_r($growthRates);

echo "\nAverage Growth Rate: " . round($avgGrowth, 2) . "%\n";

echo "\nForecasted Sales for Next 3 Months:\n";
print_r($futureSales);
?>
