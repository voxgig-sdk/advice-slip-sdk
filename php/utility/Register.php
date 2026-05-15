<?php
declare(strict_types=1);

// AdviceSlip SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

AdviceSlipUtility::setRegistrar(function (AdviceSlipUtility $u): void {
    $u->clean = [AdviceSlipClean::class, 'call'];
    $u->done = [AdviceSlipDone::class, 'call'];
    $u->make_error = [AdviceSlipMakeError::class, 'call'];
    $u->feature_add = [AdviceSlipFeatureAdd::class, 'call'];
    $u->feature_hook = [AdviceSlipFeatureHook::class, 'call'];
    $u->feature_init = [AdviceSlipFeatureInit::class, 'call'];
    $u->fetcher = [AdviceSlipFetcher::class, 'call'];
    $u->make_fetch_def = [AdviceSlipMakeFetchDef::class, 'call'];
    $u->make_context = [AdviceSlipMakeContext::class, 'call'];
    $u->make_options = [AdviceSlipMakeOptions::class, 'call'];
    $u->make_request = [AdviceSlipMakeRequest::class, 'call'];
    $u->make_response = [AdviceSlipMakeResponse::class, 'call'];
    $u->make_result = [AdviceSlipMakeResult::class, 'call'];
    $u->make_point = [AdviceSlipMakePoint::class, 'call'];
    $u->make_spec = [AdviceSlipMakeSpec::class, 'call'];
    $u->make_url = [AdviceSlipMakeUrl::class, 'call'];
    $u->param = [AdviceSlipParam::class, 'call'];
    $u->prepare_auth = [AdviceSlipPrepareAuth::class, 'call'];
    $u->prepare_body = [AdviceSlipPrepareBody::class, 'call'];
    $u->prepare_headers = [AdviceSlipPrepareHeaders::class, 'call'];
    $u->prepare_method = [AdviceSlipPrepareMethod::class, 'call'];
    $u->prepare_params = [AdviceSlipPrepareParams::class, 'call'];
    $u->prepare_path = [AdviceSlipPreparePath::class, 'call'];
    $u->prepare_query = [AdviceSlipPrepareQuery::class, 'call'];
    $u->result_basic = [AdviceSlipResultBasic::class, 'call'];
    $u->result_body = [AdviceSlipResultBody::class, 'call'];
    $u->result_headers = [AdviceSlipResultHeaders::class, 'call'];
    $u->transform_request = [AdviceSlipTransformRequest::class, 'call'];
    $u->transform_response = [AdviceSlipTransformResponse::class, 'call'];
});
