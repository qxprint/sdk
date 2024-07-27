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
        return $this->request->send('GET', '/auth/v1/print');
    }

    /**
     * @param $data ['printer_id' => {printer_id}, 'job_title' => 'example', 'content' => 'pdf_string_base_64']
     * @return Response
     * @throws \Exception
     */
    public function sendPrintJob($data)
    {
        return $this->request->send('POST', '/auth/v1/print', $data);
    }

    public function getPrintersList()
    {
        return $this->request->send('GET', '/auth/v1/printer');
    }

    public function getPrintersFromDevice($deviceId)
    {
        return $this->request->send('GET', "/auth/v1/printer?device_id={$deviceId}");
    }

    public function getPrinter($deviceId, $printerId)
    {
        return $this->request->send('GET', "/auth/v1/printer/?device_id={$deviceId}&printer_id={$printerId}");
    }

    public function getDeviceList()
    {
        return $this->request->send('GET', '/auth/v1/device');
    }
}
