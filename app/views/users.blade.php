@extends('layout')
@section('content')
<h1>Mock Content Creation Tools</h1>
        
This page contains tools for generating lorem ipsum text and fake users for use in web design <br> <br>
It uses Sam Williams and Matthew Tinsley's <a href="https://packagist.org/packages/badcow/lorem-ipsum">lorem-ipsum generator</a> to generate the text, and uses François Zaninotto's <a href= "https://packagist.org/packages/fzaninotto/faker">Faker</a> to generate user data.
@section('tool1')


{{Form::open()}}
{{Form::number('Number of words for Lorem Ipsum', '3')}}
{{Form::submit('Generate Lorem Ipsum Text');}}
{{Form::close()}}
<?php
    if(array_key_exists('Number_of_words_for_Lorem_Ipsum', $_POST )){
        //echo 
         $l_text=(App::make('DataGenController')->Generate_Text($_POST['Number_of_words_for_Lorem_Ipsum']));
        echo $l_text[0];
        
    }
?>

@section('tool2')
{{Form::open()}}
{{Form::number('numUsers', '1')}}
{{Form::checkbox( 'a','address', true)}}
{{Form::checkbox( 'b' ,'text', true)}}
{{Form::submit('Generate Users');}}
{{Form::close()}}
<?php 
$checklist= array();
if(array_key_exists('a',$_POST)){
        array_push($checklist, 'address');
    
}
if(array_key_exists('b', $_POST)){
    
        array_push($checklist, 'text');
        }
        if(array_key_exists('numUsers', $_POST)){
            $u_text=(App::make('DataGenController')->Generate_Users($_POST['numUsers'],$checklist));
            
            foreach ($u_text as $mockUser){
                foreach ($mockUser as $dataMorsel){
                    
                    echo($dataMorsel);
                    echo("<br>");
                }
                echo('<br>');
                echo('<br>');
            }
        }
?>

@stop