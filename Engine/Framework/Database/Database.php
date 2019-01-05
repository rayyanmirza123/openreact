<?php

/*
 *  Damn Straight now copying only buying.
 */

/**
 * Description of Database
 *
 * @author Rayyan
 */
class Database implements CacheDatabase {
    
    private $file;
    private $sorted = array();
    private $root;
    public $main = array();
    
    public function __construct($root) {
        $this->root = $root;
    }
    
    public function checkCacheFile($filename) {
        if(is_file(DIR_CACHE.$filename))
        {
            $this->file = $filename;
        }
        else
        {
         try{   
              $dom  = new DOMDocument('1.0', 'utf-8');
              $dom->createElement($this->root); 
              $dom->saveXML($this->file);
         } catch (CacheDatabaseException $e)
         {
             new $e(CacheDatabaseException::$ERROR_NO_FILE);
         }
        }
    }
    
    public function getColumn($col) {
        return array_column($this->sorted, $col);
    }
    
    private function sorted_columns($cols = array())
    {
        if(!empty($cols))
        {
            foreach($cols as $col)
            {
                $this->main = getColumn($col); 
            }
        }
        else
        {
            throw new CacheDatabaseException(CacheDatabaseException::$ERROR_LOCKED);
        }
    }
    
}
