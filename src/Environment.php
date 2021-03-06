<?php

namespace Ebranvo;

class Environment {
    private $url;

    private $urls = [
        'live'        => 'https://api.dezwork.com/',
        'sandbox'     => 'https://teste-api.dezwork.com/',
        'testing'     => 'https://teste-api.dezwork.com/',
    ];

    public function __construct($env = null) {
        $this->url = $this->urls[$env] ?? null;
    }

    /**
     * Set environment to live/production
     */
    public function live() {
        $this->url = $this->urls['live'];
    }

    /**
     * Set environment to sandbox
     */
    public function sandbox() {
        $this->url = $this->urls['sandbox'];
    }

    /**
     * getUrl
     *
     * @return string
     */
    public function getUrl(): string {
        return $this->url;
    }
}
