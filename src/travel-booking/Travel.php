<?php

namespace src\travel_booking;
abstract class Travel  {
    protected $id;
    protected $destination;
    protected $price;
    protected $startDate;
    protected $endDate;
    protected $description;

    public function __construct($id, $destination, $price, $startDate, $endDate, $description) {
        $this->id = $id;
        $this->destination = $destination;
        $this->price = $price;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->description = $description;
    }
    abstract public function book();

    public function displayDetails() {
        echo "ID: {$this->id}\n";
        echo "Destination: {$this->destination}\n";
        echo "Price: \${$this->price}\n";
        echo "Dates: {$this->startDate} - {$this->endDate}\n";
        echo "Description: {$this->description}\n";
    }

    public function getId() {
        return $this->id;
    }

    public function getDestination() {
        return $this->destination;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function getDescription() {
        return $this->description;
    }
}