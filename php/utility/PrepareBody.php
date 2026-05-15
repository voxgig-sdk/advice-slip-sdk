<?php
declare(strict_types=1);

// AdviceSlip SDK utility: prepare_body

class AdviceSlipPrepareBody
{
    public static function call(AdviceSlipContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
