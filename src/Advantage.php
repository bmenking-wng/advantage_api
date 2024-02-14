<?php

namespace Advantage;

use Advantage\Client\EnvironmentException;

require('Shim.php');

class Advantage {
    public static function getApi(String $api) {
        $env = Environment::currentEnvironment();

        if( !($env instanceof Environment) ) {
            throw new EnvironmentException('Environment must set configured before call to getApi');
        }

        $class = "\\Advantage\\Client\\Api\\{$api}";
        
        $options = [
            'base_uri'=>$env->getEndPoint(),
            'verify'=>$env->getVerifyHostSsl(), 
            'connect_timeout'=>$env->getTimeout(),
            'debug'=>$env->getDebug()
        ];

        if( $env->hasProxy() ) {
            $options['headers'] = [
                'X-Api-Key'=>$env->getToken()
            ];
        }
        else {
            $options['auth'] = [$env->getUsername(), $env->getPassword()];
        }

        $instance = new $class(
            new \GuzzleHttp\Client($options)
        );

        return $instance;
    }
    
}