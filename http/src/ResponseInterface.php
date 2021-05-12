<?php
namespace Staark\Http;

interface ResponseInterface {
    public function setCode();

    public function redirect();
}