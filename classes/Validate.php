<?php


class Validate
{
    public static function checksize($file){
        if($file['size'] >= 20000000){
            return "<h5 class='has-text-danger'> Слишком большой файл! </h5>";
        }
    }

    public static function checkpicture($file){
        if($file['type'] == 'jpg' || $file['type'] == 'jpeg'
            || $file['type'] == 'png'){
            return "<h5 class='has-text-danger'> Неправильный формат файла! </h5>";
        }
    }
}