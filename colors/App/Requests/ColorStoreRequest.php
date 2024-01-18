<?php


 
 
class ColorStoreRequest {
 
    public static function validate($request) {
 
        $color = $request['color'] ?? null;
        $size = $request['size'] ?? null;
 
        if (!$color) {
            Message::set('error', 'Color is required');
        } elseif (!preg_match('/^#[a-f0-9]{6}$/i', $color)) {
            Message::set('error', 'Color is not valid');
        }
 
        if (!$size) {
            Message::set('error', 'Size is required');
        } elseif (!is_numeric($size)) {
            Message::set('error', 'Size is not valid');
        } elseif ($size < 0 || $size > 100) {
            Message::set('error', 'Size must be between 0 and 100');
        }
 
        if (Message::hasErrors()) {
            return false;
        }
 
        return true;
    }
}