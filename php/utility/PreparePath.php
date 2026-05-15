<?php
declare(strict_types=1);

// AdviceSlip SDK utility: prepare_path

class AdviceSlipPreparePath
{
    public static function call(AdviceSlipContext $ctx): string
    {
        $point = $ctx->point;
        $parts = [];
        if ($point) {
            $p = \Voxgig\Struct\Struct::getprop($point, 'parts');
            if (is_array($p)) {
                $parts = $p;
            }
        }
        return \Voxgig\Struct\Struct::join($parts, '/', true);
    }
}
