<?php


namespace Tests;
use src\travel_booking\Flight;
use PHPUnit\Framework\TestCase;

class TravelItemTest extends TestCase
{
    public function testTravelItem()
    {

        $travelItem = new Flight(
            1,
            "New York",
            999,
            "2024-09-23",
            "2024-12-30",
            "Round-trip to NYC (Economy)",
            "LOT Airlines",
            "LT123",
            "WAW",
            "JFK"
        );

        $this->assertEquals(1, $travelItem->getId());
        $this->assertEquals("New York", $travelItem->getDestination());
        $this->assertEquals(999, $travelItem->getPrice());
        $this->assertEquals("2024-09-23", $travelItem->getStartDate());
        $this->assertEquals("2024-12-30", $travelItem->getEndDate());
        $this->assertEquals("Round-trip to NYC (Economy)", $travelItem->getDescription());
        $this->assertEquals("LOT Airlines", $travelItem->getAirline());
        $this->assertEquals("LT123", $travelItem->getFlightNumber());
        $this->assertEquals("WAW", $travelItem->getDeparture());
        $this->assertEquals("JFK", $travelItem->getArrival());
    }
}