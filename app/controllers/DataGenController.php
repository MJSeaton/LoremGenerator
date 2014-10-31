<?php
class DataGen_Controller extends BaseController
{
    
    public function Generate_Text($text_size){
        $Generator= new Badcow\LoremIpsum\Generator();
        return $Generator->getParagraphs($text_size);
    }

    public function Generate_Users($num_users, $input_array){
        $Generator= Faker\Factory::create();
        $return_array = array();
            for ($i=0; $i<$num_users; $i++){
                $userData = array();
                if(array_key_exists('name', $input_array)){
                    array_push($userData, ($Generator->name)); 
                }

                if(array_key_exists('address', $input_array)){
                    array_push($userData, ($Generator->address)); 
                }

                if(array_key_exists('text', $input_array)){
                    array_push($userData, ($Generator->text)); 
                }
            array_push($return_array, $userData); 
            }
        return  View::make('user', array('Number_of_words_for_Lorem_Ipsum' => $return_array));
    }
                                    
                                  
} 
?>