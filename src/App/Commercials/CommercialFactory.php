<?php

namespace App\Commercials;


class CommercialFactory
{
    /**
     * @var array
     */
    protected $typeList;


    public function __construct()
    {
        $this->typeList = array(
            'Coupon' => __NAMESPACE__ . '\Coupon',
            'Promotion' => __NAMESPACE__ . '\Promotion',
            'PromotionEclair' => __NAMESPACE__ . '\PromotionEclair',
            'Reduction' => __NAMESPACE__ . '\Reduction',
            'ReductionAllIn' => __NAMESPACE__ . '\ReductionAllIn',
            'ReductionFlash' => __NAMESPACE__ . '\ReductionFlash',
            'ReductionMagique' => __NAMESPACE__ . '\reductionMagique',
            'ReductionPanier' => __NAMESPACE__ . '\ReductionPanier',
            'ReglePanier' => __NAMESPACE__ . '\ReglePanier'
        );
    }

    /**
     * Création d'un geste commercial selon le type passé en paramètre
     * @param $type
     * @return mixed
     */
    public function createCommercial($type)
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException("$type n'est pas un geste commercial valide");
        }
        $className = $this->typeList[$type];

        return new $className();

    }
}