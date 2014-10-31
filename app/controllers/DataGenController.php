<?php
class DataGenController extends BaseController
{
    
    public function Generate_Text($text_size){
        $Generator= new Badcow\LoremIpsum\Generator();
        $text = $Generator->getParagraphs($text_size);
        return $text;
        //return View::make('users',array('_POST' => $text));
    }

    public function Generate_Users($num_users, $input_array){
       
        $Generator= Faker\Factory::create();
        $return_array = array();
            for ($i=0; $i<$num_users; $i++){
                $userData = array();
                    array_push($userData, ($Generator->name)); 
                
                if(in_array('address', $input_array)){
                 
                    array_push($userData, ($Generator->address)); 
                }

                if(in_array('text', $input_array)){
                    array_push($userData, ($Generator->text)); 
                }
            array_push($return_array, $userData); 
            }
        return $return_array;
    }
                                    
                                  
} 
?>