<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        
    }

    public function indexWeb(){
        $timeTable =  [
            "07:45:00",
            "08:40:00",
            "09:30:00",
            "10:35:00",
            "11:30:00",
            "12:25:00",
            "13:20:00",
            "14:10:00",
            "15:00:00",
            "15:50:00",
            "16:40:00",
            "17:30:00",
            "18:20:00",
            "20:54:00"
        ];
        $nextTime = $this->findNextClosestTime($timeTable);
        list($hours, $minutes) = sscanf($nextTime, '%d:%d');

        // Use sprintf to format the time as "H:i:s"
        $nextTimeFormatted = sprintf('%02d:%02d:00', $hours, $minutes);
        $data["next_time"] = $nextTime;

        $tDate = date("Y-m-d");

        $data["combined"] = $tDate . " " . $nextTimeFormatted;

        echo view("Big_Counter", $data);
    }
    public function findNextClosestTime($times){
        $currentTime = date("H:i:s"); 

        foreach ($times as $time) {
            if ($currentTime < $time) {
                return $time; // Return the next closest time
            }
        }
        return "You're home >:(";
    }
}
