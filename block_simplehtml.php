<?php
class block_simplehtml extends block_base {
	
    public function init() {
        $this->title = get_string('simplehtml', 'block_simplehtml');
    }
    
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.
    public function get_content() {
 	   
       include "easyrdf/vendor/autoload.php";

 	   if ($this->content !== null) {
     	 return $this->content;
    	}
 
    	$this->content =  new stdClass;
    
    	ob_start();

    	?>

	    <h1>Ini adalah block</h1>

	    <span>
	    <?php
	    if (! empty($this->config->text)) {   
	    	echo $this->config->text;  
		}
		
		// RDF Loaded here
		$foaf =  \EasyRdf\Graph::newAndLoad('http://njh.me/foaf.rdf');
		$me = $foaf->primaryTopic();
		echo "My name is: ".$me->get('foaf:name')."\n";

		?>
		</span>

	    <?php
		$output = ob_get_contents();
		ob_end_clean();

		$this->content->text   = $output;
	    $this->content->footer = 'Footer here...';
	 
	    return $this->content;
	}
	
}