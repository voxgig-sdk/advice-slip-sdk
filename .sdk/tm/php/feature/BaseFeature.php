<?php
declare(strict_types=1);

// AdviceSlip SDK base feature

class AdviceSlipBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(AdviceSlipContext $ctx, array $options): void {}
    public function PostConstruct(AdviceSlipContext $ctx): void {}
    public function PostConstructEntity(AdviceSlipContext $ctx): void {}
    public function SetData(AdviceSlipContext $ctx): void {}
    public function GetData(AdviceSlipContext $ctx): void {}
    public function GetMatch(AdviceSlipContext $ctx): void {}
    public function SetMatch(AdviceSlipContext $ctx): void {}
    public function PrePoint(AdviceSlipContext $ctx): void {}
    public function PreSpec(AdviceSlipContext $ctx): void {}
    public function PreRequest(AdviceSlipContext $ctx): void {}
    public function PreResponse(AdviceSlipContext $ctx): void {}
    public function PreResult(AdviceSlipContext $ctx): void {}
    public function PreDone(AdviceSlipContext $ctx): void {}
    public function PreUnexpected(AdviceSlipContext $ctx): void {}
}
