@extends('layout')
@section('content')
This page contains tools for generating lorem ipsum text and fake users for use in web design <br> <br><br>
It uses Sam Williams and Matthew Tinsley's <a href="https://packagist.org/packages/badcow/lorem-ipsum">lorem-ipsum generator</a> to generate the text, and uses François Zaninotto's <a href= "https://packagist.org/packages/fzaninotto/faker">Faker</a> to generate user data.

@section('tool1')

{{Form::open()}}
{{Form::number('Number of words for Lorem Ipsum', '3')}}
{{Form::submit('Generate Lorem Ipsum Text');}}
{{Form::close()}}
<?php
    if(array_key_exists('Number_of_words_for_Lorem_Ipsum', $_POST )){
        echo $_POST['Number_of_words_for_Lorem_Ipsum']; 
    }
?>

@section('tool2')
{{Form::open()}}
{{Form::number('numUsers', '1')}}
{{Form::submit('Generate Users');}}
{{Form::close()}}
<?php 
        if(array_key_exists('numUsers', $_POST)){
            echo $_POST['numUsers'];
        }
?>

@stop