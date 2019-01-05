<?php

/*
 *  Damn Straight now copying only buying.
 */

/**
 *
 * @author Rayyan
 */
interface CacheDatabase {
    
    /*
     * @param $filename
     * 
     * filename for cache check if exist and try to create if doesn't then initializes
     */
    
    public function checkCacheFile($filename);
   
    public function getColumn($col);
    
}
