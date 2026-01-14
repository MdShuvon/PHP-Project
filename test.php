<?php
// Simple PHP Test File

echo "PHP is working correctly!\n";
echo "PHP Version: " . phpversion() . "\n";
echo "Current Date: " . date('Y-m-d H:i:s') . "\n";

// Test array
$fruits = ["Apple", "Banana", "Orange"];
echo "\nFruits:\n";
foreach ($fruits as $fruit) {
    echo "- $fruit\n";
}

// Test function
function greet($name) {
    return "Hello, $name!";
}

echo "\n" . greet("Developer") . "\n";
?>
