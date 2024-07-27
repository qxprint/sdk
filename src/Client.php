<?php

namespace QxPrint\Sdk;

class Client
{
    protected $request;

    public function __construct($apiKey)
    {
        $this->request = new Request($apiKey);
    }

    public function getHealthCheck()
    {
        return $this->request->send('GET', '/health');
    }

    public function getPrintJobList()
    {
        return $this->request->send('GET', '/printjobs');
    }

    public function sendPrintJob($data)
    {
        return $this->request->send('POST', '/printjobs', $data);
    }

    public function getPrintersList()
    {
        return $this->request->send('GET', '/printers');
    }

    public function getPrintersFromDevice($deviceId)
    {
        return $this->request->send('GET', "/devices/{$deviceId}/printers");
    }

    public function getPrinter($deviceId, $printerId)
    {
        return $this->request->send('GET', "/devices/{$deviceId}/printers/{$printerId}");
    }

    public function getDeviceList()
    {
        return $this->request->send('GET', '/devices');
    }
}
