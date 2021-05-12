<?php
namespace Staark\Http;

interface RequestInterface {
    public function getUrl();

    public function getMethod();

    public function getBody();
}
