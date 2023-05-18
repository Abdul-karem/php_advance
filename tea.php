<?php
// Multilevel Inheritance   singil


class AppleDevice {
    
    public $color = "silver";
    public $ram = "12GB";
    public $inch = "4Inch";
    public $space = "128";
    public $screen ="TFT";

    
    public function changeSpec($co, $ra, $in, $sp) {
        $this->color = $co;
        $this->ram = $ra;
        $this->inch = $in;
        $this->space = $sp;
    }
}
class SONY  extends AppleDevice {
    
    // public $color = "silver";
    // public $ram = "12GB";
    // public $inch = "4Inch";
    // public $space = "128";
    public $camera = "500MB";

    public function changeSpec($co, $ra, $in, $sp,) {
        $this->color = $co;
        $this->ram = $ra;
        $this->inch = $in;
        $this->space = $sp;
        

    }

}



$iphone = new AppleDevice();
$iphone->changeSpec("Gold", "12GB", "4 inch", "128",);

echo '<pre>';
print_r($iphone);
echo '</pre>';

$sony= new SONY();
// $sony-> changeSpec ("silver","12GB", "4Inch","128");

echo '<pre>';
print_r($sony);
echo '</pre>';

?>
<!-- over wrote -->
