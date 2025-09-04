<?php
// Initialize an empty queue
$queue = [];

// Function to add customer to the queue (Enqueue)
function enqueue(&$queue, $customer) {
    array_push($queue, $customer);  // Add to end
    echo "$customer joined the ticket queue.<br>";
}

// Function to serve customer (Dequeue)
function dequeue(&$queue) {
    if (empty($queue)) {
        echo " No customers in the queue.<br>";
    } else {
        $customer = array_shift($queue); // Remove from front
        echo "Ticket booked for $customer.<br>";
    }
}

// Function to display current queue
function displayQueue($queue) {
    if (empty($queue)) {
        echo "Queue is empty.<br>";
    } else {
        echo " Current Queue: " . implode(" → ", $queue) . "<br>";
    }
}

// ------------------------------
// Simulation of Ticket Booking
// ------------------------------
enqueue($queue, "Rahul");
enqueue($queue, "Meena");
enqueue($queue, "Arun");
displayQueue($queue);

dequeue($queue); // First customer gets ticket
displayQueue($queue);

enqueue($queue, "Divya");
displayQueue($queue);

dequeue($queue); // Next customer gets ticket
dequeue($queue); // Next customer gets ticket
displayQueue($queue);

dequeue($queue); // Last one served
dequeue($queue); // Queue empty now
?>
