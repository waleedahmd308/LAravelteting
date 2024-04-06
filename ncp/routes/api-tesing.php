<?php

// Set the content type to JSON
header('Content-Type: application/json');

// Define the endpoint
$endpoint = '/name';

// Check if the requested URL matches the endpoint
if ($_SERVER['REQUEST_URI'] === $endpoint) {
    // Define your name
    $name = 'Waleed';

    // Return the name as JSON
    echo json_encode(['name' => $name]);
} else {
    // If the requested URL doesn't match the endpoint, return 404 Not Found
    http_response_code(404);
    echo json_encode(['error' => 'Not Found']);
}
