<?php
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/config.php');
require_once(dirname(dirname(__FILE__)).'/locallib.php');
global $CFG;

if(isset($_POST['datas'])) { //Download as csv
    $rows = $_POST['datas'];
    $fileName = "adobe-connect-rollcall_" . date('Y-m-d H:i:s') . ".csv";
    $fp = fopen($fileName, 'w');
    $header = array(
            get_string('name'),
            get_string('duration', 'adobeconnect'),
            get_string('percentage', 'adobeconnect')
        );
    fputs($fp, chr(0xEF) . chr(0xBB) . chr(0xBF));
    fputcsv($fp, $header);
    foreach($rows as $row) {
        $lineData = array($row['name'], $row['duartion'], $row['percentage']); 
        fputcsv($fp, $lineData);
    }
    fclose($fp);
    @header("location:".$CFG->wwwroot."/mod/adobeconnect/csv/".$fileName);
}



?>