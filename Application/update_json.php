<?php

// Read the existing JSON file
$file = './data/devops_items.json';
$jsonData = file_get_contents($file);
$data = json_decode($jsonData, true);

// Add a new item to the data array
$newItem = array(
    'ID' => 6,
    'Work Item' => 'WI-006',
    'Title' => 'Fix login issues',
    'Area Path' => 'MyApp/Web',
    'Activity' => 'Development'
);
$data[] = $newItem;

// Convert the updated data back to JSON format
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Write the updated JSON to the file
file_put_contents($file, $jsonData);

echo "JSON file updated successfully.";
?>
