<?php 
namespace Utils;

class Result
{    
    private bool $status;
    private string $message;

    function __construct
    (
        $status, $message = ''
    )
    {
        $this->status = $status;
        $this->message = $message;
    }

    public function getStatus() : bool
    {
        return $this->status;
    }

    public function getMessage() : string
    {
        return $this->message;
    }
}

?>