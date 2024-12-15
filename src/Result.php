<?php 
namespace Psys\Utils;

/**
 * Used for returning a result of a function or method.
 */
class Result
{    
    private bool $status;
    private string $message;
    private mixed $value;

    function __construct (bool $status, string $message = '', mixed $value = null)
    {
        $this->status = $status;
        $this->message = $message;
        $this->value = $value;
    }

    public function getStatus() : bool
    {
        return $this->status;
    }

    public function getMessage() : string
    {
        return $this->message;
    }

    public function getValue() : mixed
    {
        return $this->value;
    }
}

?>