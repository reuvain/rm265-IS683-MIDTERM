<?php

$attributes = array();

$tag = '';

$attributes = array('title'=>'my article title', 'body'=>'lorem ipsum');

$content = "rm265 mid-term";


function tag($tag, $attributes, $content) {

 string_check($attributes);

        $output = '<' . $tag;

 


        foreach($attributes as $key => $value) {

                        $output .= ' ' . $key . '="' . $value . '"';

        }

 
        $output .= '>' . $content . '</' . $tag . '>';



        echo $output;
}

 


function string_check($value) {

 

        if(!is_array($value)) {

                echo "ERROR: Your input is not an array!";

        }

}

 

      function createarticle($tag,$attributes,$content){

 


                foreach($attributes as $key=>$value){

                 

                switch($key){

                case'title':

                $tag = 'h1';

                $atributes = array("class"=>"title");

               

                break;

               

                case'body':

                $tag = 'p';

                $atributes = array("class"=>"body");

                break;

                }

                $htmlcontent =tag($tag,$attributes,$content) ;

        }

      }

    createarticle($tag,$attributes,$content);

 

?>

