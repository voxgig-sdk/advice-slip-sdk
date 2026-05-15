<?php
declare(strict_types=1);

// AdviceSlip SDK utility: feature_add

class AdviceSlipFeatureAdd
{
    public static function call(AdviceSlipContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
