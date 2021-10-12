<?php

namespace EskayAmadeus\LaravelAuthPackage\Traits;

use EskayAmadeus\LaravelAuthPackage\Models\Post;

trait DisplaysAllTokens
{
    public function displayAllTokens () {
        foreach ($user->tokens as $token) {
            // do something with $token
        }
    }
}