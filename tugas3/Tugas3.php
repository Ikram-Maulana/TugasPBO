<?php

    class installedBatteries {
        public $designCapacity;
        public $fullCharge;

        public function __construct($designCapacity, $fullCharge) {
            $this->designCapacity = $designCapacity;
            $this->fullCharge = $fullCharge;
        }
    }

    class infoBatteries extends installedBatteries {
        public function checkBatteries () {
            $count = round(($this->fullCharge/$this->designCapacity) * 100,2);
            return $count;
        }

        public function __destruct() {
            echo "Keterangan:
                Design Capacity = 34,560 mWh 
                Full Charge Capacity = 28,080 mWh";
        }
    }
    
$battriesLaptop = new infoBatteries(34.560, 28.080);

echo "Battries Laptop is = ".$battriesLaptop->checkBatteries(). "%";

?>