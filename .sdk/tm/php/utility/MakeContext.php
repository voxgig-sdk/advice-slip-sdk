<?php
declare(strict_types=1);

// AdviceSlip SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class AdviceSlipMakeContext
{
    public static function call(array $ctxmap, ?AdviceSlipContext $basectx): AdviceSlipContext
    {
        return new AdviceSlipContext($ctxmap, $basectx);
    }
}
