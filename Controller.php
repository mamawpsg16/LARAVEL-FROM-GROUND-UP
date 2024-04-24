<?php
namespace App;
function abc(protected string $name, protected array $data =[]){

}

function view(string $name, array $data){
    return new static($name, $data);
}
