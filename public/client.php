<?php
$options = [
    'location' => 'http://localhost/soap-api-project/public/server.php',
    'uri' => 'http://localhost/soap-api-project/public/server.php',
    'trace' => 1
];

$client = new SoapClient(null, $options);

// Fetch all users
try {
    $result = $client->getUsers();
    echo "Users:\n";
    print_r($result);
} catch (SoapFault $fault) {
    echo "Error: {$fault->faultcode}, {$fault->faultstring}";
}

// Add a new user
// try {
//     $result = $client->addUser('John Doe', 'john.doe@example.com');
//     if ($result) {
//         echo "User added successfully.\n";
//     } else {
//         echo "Failed to add user.\n";
//     }
// } catch (SoapFault $fault) {
//     echo "Error: {$fault->faultcode}, {$fault->faultstring}";
// }
