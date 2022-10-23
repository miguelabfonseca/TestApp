<?php

namespace App\Http\Controllers;

use App\Lib\Design;
use Exads\ABTestData;
use \App\Lib\Promotion;

class AbTestController extends Controller
{
    public function index()
    {
        $p = $this->getData(rand(1, 3));
        $r = $p->redirectToDesign();
        return view('abobject', compact('p', 'r'));
    }

    public function asarray()
    {
        $c = $this->getData(rand(1, 3));
        $r = $c->redirectToDesign();
        $p = $c->promotionToArray();
        return view('abarray', compact('p', 'r'));
    }

    public function asjson()
    {
        $c = $this->getData(rand(1, 3));
        $r = $c->redirectToDesign();
        $p = $c->promotionToJson();
        return view('abjson', compact('p', 'r'));
    }

    public function expanded()
    {
        $c = $this->getData(rand(1, 3), 1);
        $r = $c->redirectToDesign();
        $p = $c->promotionToArray();
        return view('abexpanded', compact('p', 'r'));
    }

    private function getData(int $promoId, bool $expanded = false): object
    {
        $abTest = new ABTestData($promoId);
        $promotion = $abTest->getPromotionName();
        $designs = $abTest->getAllDesigns();

        $p = new Promotion;
        $p->setId($promoId);
        $p->setName($promotion);

        foreach ($designs as $design) {
            if ($expanded) {
                $design["customAddedData"] = rand(10000, 99999);
            }

            $c = new Design($design);
            if ($expanded) {
                $c->__set('customAddedData', $design['customAddedData']);
            }
            $p->addDesign($c);
        }

        return $p;
    }

}
