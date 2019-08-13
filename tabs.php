<?php 
$tab = $_GET['tab'];
if($tab == "tab1"){
    echo "jQuery เป็นไลบราลี่(Library)....";
}else if($tab == "tab2"){
    echo "jQuery เป็นไลบราลี่(Library).... 2";
}
sleep(2); // ทดลองหน่วงเวลา 2 วินาที เพื่อให้เห็นลำดับการทำงานที่ชัดเจนขึ้น