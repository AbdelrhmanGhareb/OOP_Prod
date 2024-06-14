<?php


namespace src\travel_booking;
require_once 'Travel.php';
require_once 'Flight.php';
require_once 'Hotel.php';
require_once 'Booking.php';


$travelItems = [
    new Flight(1, "New York", 999, "2024-09-23", "2024-12-30", "Round-trip to NYC (Economy)", "LOT Airlines", "LT123", "WAW", "JFK"),
    new Flight(2, "New York", 2198, "2024-09-23", "2024-12-29", "Round-trip to NYC (Business)", "LOT Airlines", "LT124", "WAW", "JFK"),
    new Hotel(3, "New York", 450, "2024-09-24", "2024-09-26", "Stay at Plaza Hotel (Standard Room)", "Plaza Hotel", 5, "123 NY,success st.", "Standard"),
    new Hotel(4, "New York", 895.99, "2024-09-23", "2024-09-25", "Stay at Grand Hotel NY (Deluxe Suite)", "Grand Hotel", 5, "156 NY,trump st.", "Deluxe Suite"),
    new Hotel(5, "New York", 895.99, "2024-09-23", "2024-09-26", "Stay at Lotus Hotel NY (Deluxe)", "Lotus Hotel", 3, "178 NY,biden st.", "Deluxe Suite"),

];

$bookings = [];

function displayMainMenu()
{
    echo "\nTravel Booking System\n";
    echo "---------------------\n";
    echo "1. View available travel items\n";
    echo "2. Book a travel item\n";
    echo "3. View my bookings\n";
    echo "0. Exit\n";
    echo "Enter your choice: ";
}

while (true) {
    displayMainMenu();
    $choice = readline();

    switch ($choice) {
        case 1:
            foreach ($travelItems as $index => $item) {
                echo ($index + 1) . ". ";
                $item->displayDetails();
                echo "-----\n";
            }
            break;
        case 2:
            echo "Enter the number of the item you want to book: ";
            $itemIndex = (int)readline() - 1;

            if (isset($travelItems[$itemIndex])) {
                echo "Enter your name: ";
                $customerName = readline();
                $booking = new Booking($travelItems[$itemIndex], $customerName);
                $bookings[] = $booking;
                $booking->confirm();
            } else {
                echo "Invalid item number.\n";
            }
            break;
        case 3:

            if (empty($bookings)) {
                echo "You have no bookings yet.\n";
            } else {
                foreach ($bookings as $index => $booking) {
                    echo ($index + 1) . ". ";
                    $booking->displayDetails();
                    echo "-----\n";
                }
                echo "Enter the number of the booking you want to cancel (or 0 to go back): ";
                $cancelChoice = (int)readline();

                if ($cancelChoice > 0 && $cancelChoice <= count($bookings)) {
                    $bookingIndex = $cancelChoice - 1;
                    $bookings[$bookingIndex]->cancel();
                    unset($bookings[$bookingIndex]);
                    $bookings = array_values($bookings);
                } elseif ($cancelChoice != 0) {
                    echo "Invalid booking number.\n";
                }
            }
            break;
        case 0:
            echo "Exiting...\n";
            exit();
        default:
            echo "Invalid choice.\n";
    }
}
