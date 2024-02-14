<?php

namespace Advantage;

class Environment {
    
    /** @internal */
    private static Environment $myself;
    /** @internal */
    private string $endpoint;
    /** @internal */
    private ?string $username;
    /** @internal */
    private string $password;
    /** @internal */
    private bool $debug;
    /** @internal */
    private bool $verify_host_ssl;
    /** @internal */
    private int $timeout;

    /**
     * @internal
     */
    public function __construct(string $endpoint, ?string $username, string $password, int $timeout, bool $debug, bool $verify_host_ssl) {
        $this->endpoint = $endpoint;
        $this->username = $username;
        $this->password = $password;
        $this->debug = $debug;
        $this->verify_host_ssl = $verify_host_ssl;
        $this->timeout = $timeout;
    }

    public static function configure(string $endpoint, ?string $username, string $password, int $timeout = 15, bool $debug = false, bool $verify_host_ssl = true) {
        self::$myself = new self($endpoint, $username, $password, $timeout, $debug, $verify_host_ssl);
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

    public function getTimeout() {
        return $this->timeout;
    }

    public function getDebug() {
        return $this->debug;
    }

    public function getVerifyHostSsl() {
        return $this->verify_host_ssl;
    }

    public function hasProxy() {
        return is_null($this->username);
    }

    public function getToken() {
        return $this->password;
    }
}