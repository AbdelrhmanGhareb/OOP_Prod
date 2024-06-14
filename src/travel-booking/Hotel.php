<?php

namespace src\travel_booking;
class Hotel extends Travel
{
    private $name;
    private $starRating;
    private $address;
    private $roomType;


    public function __construct($id, $destination, $price, $startDate, $endDate, $description,
                                $name, $starRating, $address, $roomType)
    {
        parent::__construct($id, $destination, $price, $startDate, $endDate, $description);
        $this->name = $name;
        $this->starRating = $starRating;
        $this->address = $address;
        $this->roomType = $roomType;
    }

    public function book()
    {
        echo "Hotel booked!\n";
        echo "Details:\n";
        $this->displayDetails();
    }

    public function displayDetails()
    {
        parent::displayDetails();
        echo "Hotel Name: {$this->name}\n";
        echo "Star Rating: {$this->starRating}\n";
        echo "Address: {$this->address}\n";
        echo "Room Type: {$this->roomType}\n";
    }
}