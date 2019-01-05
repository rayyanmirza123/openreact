<?php

/*
 *  Damn Straight now copying only buying.
 */

/**
 * Description of dashboard
 *
 * @author Rayyan
 */
class dashboard extends Controller {
    
    private $error = array();
     
    public function index()
    {
        echo "<html>"
        . "<head>"
                . "<title>DashBoard</title>"
                . "</head>"
        . "<body>"
        . "Hello World"
               ."<br>Hello !!!!"
                . "</body>"
                ."</html>";
        
        $this->load->controller('common/footer');
    }
    
    public function helloWorld()
    {
        echo "Called Function";
        var_dump($this);
    }
    
}
