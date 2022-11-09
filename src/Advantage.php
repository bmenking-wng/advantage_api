<?php

namespace Advantage;

require('Shim.php');

class Advantage {
    public static function getApi(String $api) {
        $env = Environment::currentEnvironment();

        $config = new \Advantage\Client\Configuration();

        $config->setHost($env->getEndPoint());
        $config->setUsername($env->getUsername());
        $config->setPassword($env->getPassword());

        $class = "\\Advantage\\Client\\Api\\{$api}";
        
        $instance = new $class(
            new \GuzzleHttp\Client(
                [
                    'base_uri'=>$env->getEndPoint(),
                    'verify'=>true, 
                    'auth'=>[$env->getUsername(), $env->getPassword()],
                    'connect_timeout'=>15,
                    'debug'=>false
                ]
            ),
            $config
        );

        return $instance;
    }
    
    public static function getApiService(String $endpoint, String $api, array $authentication = [], $timeout = 15, $debug = false, $verify_host_ssl = true) {

        $config = new \Advantage\Client\Configuration();

        $config->setHost($endpoint);
        $config->setUsername($authentication['username']);
        $config->setPassword($authentication['password']);

        $class = "\\Advantage\\Client\\Api\\{$api}";
        
        $instance = new $class(
            new \GuzzleHttp\Client(
                [
                    'base_uri'=>$endpoint,
                    'verify'=>$verify_host_ssl, 
                    'auth'=>array_values($authentication),
                    'connect_timeout'=>$timeout,
                    'debug'=>$debug
                ]
            ),
            $config
        );

        return $instance;
    }

}