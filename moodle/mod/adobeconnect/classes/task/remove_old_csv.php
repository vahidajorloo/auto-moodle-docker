<?php

namespace mod_adobeconnect\task;

class remove_old_csv extends \core\task\scheduled_task {

    /**
     * Return the task's name as shown in admin screens.
     *
     * @return string
     */
    public function get_name() {
        return get_string('deleteoldcsv', 'adobeconnect');
    }

    /**
     * Execute the task.
     */
    public function execute() {
        
        mtrace("Adobe task started");
        
        $directory = dirname(dirname(dirname(__FILE__))).'/csv';
        $scan = scandir($directory);
        $yesterday = time() - 86400;
        
        foreach ($scan as $key => $name) {
            if ($this->is_csv($name)) {
                if ( filemtime($directory.'/'.$name) <= $yesterday ) {
                    if ( unlink($directory.'/'.$name) ) {
                        mtrace("The file '". $name . "' has been deleted successfully!");
                    } else {
                        mtrace("File deletion was unseccessful! >>> File address: ". $directory."/".$name);
                    }
                }
            }
        }

        mtrace("Adobe task finished");
        
    }
    
    /**
     * Check if a file is CSV or not.
     *
     * @return bool
     */
    public function is_csv($filename) {
        $namearray = explode(".", $filename);
        $extension = end($namearray);
        return ($extension == 'csv') ? true : false;
    }
}
?>