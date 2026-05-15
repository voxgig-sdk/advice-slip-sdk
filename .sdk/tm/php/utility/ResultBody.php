<?php
declare(strict_types=1);

// AdviceSlip SDK utility: result_body

class AdviceSlipResultBody
{
    public static function call(AdviceSlipContext $ctx): ?AdviceSlipResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
