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
    private $v8;
     
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
        $this->v8 = V8Js();
        
    }
    
    public function helloWorld()
    {
        echo "Called Function";
        var_dump($this);
    }
    
}
