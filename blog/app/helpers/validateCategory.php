<?php
function validateCategory($category){
    
    $errors = array();

    if (empty($category['name'])){
        array_push($errors, 'Name is required');
    }


    $existingCategory = selectOne('categories', ['name' => $category['name']]);
    if ($existingCategory){
        array_push($errors, 'Name already exists');
    }
    return $errors;
}

