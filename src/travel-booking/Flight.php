<?php
namespace src\travel_booking;
class Flight extends Travel {
    private $airline;
    private $flightNumber;
    private $departureAirport;
    private $arrivalAirport;

    public function __construct($id, $destination, $price, $startDate, $endDate, $description,
                                $airline, $flightNumber, $departureAirport, $arrivalAirport) {
        parent::__construct($id, $destination, $price, $startDate, $endDate, $description);
        $this->airline = $airline;
        $this->flightNumber = $flightNumber;
        $this->departureAirport = $departureAirport;
        $this->arrivalAirport = $arrivalAirport;
    }

    public function book() {
        echo "Flight booked!\n";
        echo "Details:\n";
        $this->displayDetails();
    }

    public function displayDetails() {
        parent::displayDetails();
        echo "Airline: {$this->airline}\n";
        echo "Flight Number: {$this->flightNumber}\n";
        echo "Departure Airport: {$this->departureAirport}\n";
        echo "Arrival Airport: {$this->arrivalAirport}\n";
    }
}