<?php

namespace QxPrint\Sdk;

class Response
{
    protected $data;
    protected $status;
    protected $headers;

    public function __construct($response)
    {
        $this->data = json_decode($response, true);
    }

    public function getData()
    {
        return $this->data;
    }

    public function getStatus()
    {
        return $this->data['status'] ?: null;
    }

    public function getHeaders()
    {
        return $this->data['headers'] ?: [];
    }
}
