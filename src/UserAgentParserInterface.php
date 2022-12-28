<?php

namespace Hillel\UserAgent;

interface UserAgentParserInterface
{
    public function getBrowser(): string;
    public function getOS(): string;
}
