<?php

namespace QxPrint\Sdk;

class Response
{
    protected $data;
    protected $status;
    protected $success;
    protected $errorMessage;

    public function __construct($response)
    {
        $apiContent = json_decode($response, true);

        $this->data = $apiContent['info'];
        $this->status = $apiContent['status'];
        $this->success = $apiContent['success'];

        if ($this->status != 200) {
            $this->errorMessage = $this->data['message'];
        }

    }

    public function getData()
    {
        return $this->data;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getSuccess()
    {
        return $this->success;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage ?: '';
    }

}
