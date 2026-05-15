<?php
declare(strict_types=1);

// AdviceSlip SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class AdviceSlipFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new AdviceSlipBaseFeature();
            case "test":
                return new AdviceSlipTestFeature();
            default:
                return new AdviceSlipBaseFeature();
        }
    }
}
