<?php
namespace App\Lib;

class Design {
    public int $designId;
    public string $designName;
    public int $splitPercent;

    public function __construct(array $params)
    {
        $this->designId = $params['designId'];
        $this->designName = $params['designName'];
        $this->splitPercent = $params['splitPercent'];
    }

    public function __set($var, $value): void
    {
        $this->$var = $value;
    }

    public function getDesign(): object
    {
        return $this;
    }

}
