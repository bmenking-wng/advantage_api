<?php

namespace Advantage;

class Environment {
    
    /** @internal */
    private static Environment $myself;
    /** @internal */
    private String $endpoint;
    /** @internal */
    private String $username;
    /** @internal */
    private String $password;

    /**
     * @internal
     */
    public function __construct(String $endpoint, String $username, String $password) {
        $this->endpoint = $endpoint;
        $this->username = $username;
        $this->password = $password;
    }

    public static function configure(String $endpoint, String $username, String $password) {
        self::$myself = new self($endpoint, $username, $password);
    }

    public static function currentEnvironment() {
        return self::$myself;
    }

    public function getEndpoint() {
        return $this->endpoint;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
}