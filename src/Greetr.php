<?php

namespace EskayAmadeus\LaravelAuthPackage;

// Greetr class. It'll be accessed by EskayAmadeus\LaravelAuthPackage\Greetr
class Greetr {
    public function greet (String $name) {
        return response()
        ->json([
            'message' => 'Hi, '.$name
        ]);
    }
}