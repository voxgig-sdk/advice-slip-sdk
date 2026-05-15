<?php
declare(strict_types=1);

// AdviceSlip SDK utility: result_headers

class AdviceSlipResultHeaders
{
    public static function call(AdviceSlipContext $ctx): ?AdviceSlipResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
