<?php 

class Response {
    private $responseCode;
    private $responseMessage;
    private $responseBody;

    /**
     * Get the value of responseCode
     */ 
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Set the value of responseCode
     *
     * @return  self
     */ 
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;

        return $this;
    }

    /**
     * Get the value of responseMessage
     */ 
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }

    /**
     * Set the value of responseMessage
     *
     * @return  self
     */ 
    public function setResponseMessage($responseMessage)
    {
        $this->responseMessage = $responseMessage;

        return $this;
    }

    /**
     * Get the value of responseBody
     */ 
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Set the value of responseBody
     *
     * @return  self
     */ 
    public function setResponseBody($responseBody)
    {
        $this->responseBody = $responseBody;

        return $this;
    }
}