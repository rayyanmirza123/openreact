<?php

/*
 *  Damn Straight now copying only buying.
 */

/**
 * Description of CacheDatabaseException
 *
 * @author Rayyan
 */
class CacheDatabaseException extends Exception {
    
    private $message;
    private $code;
    public $ERROR_NO_FILE = 2001;
    public $ERROR_CORRUPT_FILE = 2002;
    public $ERROR_LOCKED = 2003;
    
    
    public function __contruct($code,$file='')
    {
        $this->code = $code;
        if($code == $this->ERROR_LOCKED)
        {
            $this->message .= "Error cache file ".$file." is currently locked";
        }
        else if($code == $this->ERROR_NO_FILE)
        {
            $this->message .= " Error cache file ".$file." does not exists";
        }
        
        parent::__construct($this->message,$code);
    }
    
    public function __toString() {
        
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
