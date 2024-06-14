<?php
namespace src\travel_booking;
class Booking {
    private $id;
    private $travelItem;
    private $customerName;
    private $bookingDate;
    private static $nextId = 1;

    public function __construct(Travel $travelItem, $customerName) {
        $this->id = self::$nextId++;
        $this->travelItem = $travelItem;
        $this->customerName = $customerName;
        $this->bookingDate = date('Y-m-d H:i:s');
    }

    public function getId() {
        return $this->id;
    }

    public function getTravelItem() {
        return $this->travelItem;
    }

    public function getCustomerName() {
        return $this->customerName;
    }

    public function getBookingDate() {
        return $this->bookingDate;
    }

    public function confirm() {
        echo "Booking #{$this->id} confirmed for {$this->customerName}.\n";
    }

    public function cancel() {
        echo "Booking #{$this->id} canceled for {$this->customerName}.\n";
    }

    public function displayDetails() {
        echo "Booking Details:\n";
        echo "ID: {$this->id}\n";
        echo "Customer: {$this->customerName}\n";
        echo "Booking Date: {$this->bookingDate}\n";
        $this->travelItem->displayDetails();
    }
}