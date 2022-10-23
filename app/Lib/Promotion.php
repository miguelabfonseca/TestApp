<?php
namespace App\Lib;

class Promotion
{
    public int $id;
    public string $name;
    public array $designs;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function addDesign(object $design): void
    {
        $this->designs[] = $design;
    }

    public function getPromotion(): object
    {
        return $this;
    }

    public function promotionToJson(): string
    {
        return json_encode(['promotion' => $this]);
    }

    public function promotionToArray(): array
    {
        $d = [];
        foreach($this->designs as $item) {
            $d[] = (array) $item;
        }
        $r['Promotion'] = [
            'id' => $this->id,
            'name' => $this->name,
            'designs' => $d,
        ];
        return $r;
    }

    public function redirectToDesign(): array
    {
        $dc = [];
        foreach($this->designs as $design) {
            if(count($dc) == 0) {
                $dc = (array) $design;
                continue;
            }
            if($dc['splitPercent'] < $design->splitPercent) {
                $dc = (array) $design;
            }
        }
        return (array) $dc;

    }

}
