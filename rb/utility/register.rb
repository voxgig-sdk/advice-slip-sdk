# AdviceSlip SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

AdviceSlipUtility.registrar = ->(u) {
  u.clean = AdviceSlipUtilities::Clean
  u.done = AdviceSlipUtilities::Done
  u.make_error = AdviceSlipUtilities::MakeError
  u.feature_add = AdviceSlipUtilities::FeatureAdd
  u.feature_hook = AdviceSlipUtilities::FeatureHook
  u.feature_init = AdviceSlipUtilities::FeatureInit
  u.fetcher = AdviceSlipUtilities::Fetcher
  u.make_fetch_def = AdviceSlipUtilities::MakeFetchDef
  u.make_context = AdviceSlipUtilities::MakeContext
  u.make_options = AdviceSlipUtilities::MakeOptions
  u.make_request = AdviceSlipUtilities::MakeRequest
  u.make_response = AdviceSlipUtilities::MakeResponse
  u.make_result = AdviceSlipUtilities::MakeResult
  u.make_point = AdviceSlipUtilities::MakePoint
  u.make_spec = AdviceSlipUtilities::MakeSpec
  u.make_url = AdviceSlipUtilities::MakeUrl
  u.param = AdviceSlipUtilities::Param
  u.prepare_auth = AdviceSlipUtilities::PrepareAuth
  u.prepare_body = AdviceSlipUtilities::PrepareBody
  u.prepare_headers = AdviceSlipUtilities::PrepareHeaders
  u.prepare_method = AdviceSlipUtilities::PrepareMethod
  u.prepare_params = AdviceSlipUtilities::PrepareParams
  u.prepare_path = AdviceSlipUtilities::PreparePath
  u.prepare_query = AdviceSlipUtilities::PrepareQuery
  u.result_basic = AdviceSlipUtilities::ResultBasic
  u.result_body = AdviceSlipUtilities::ResultBody
  u.result_headers = AdviceSlipUtilities::ResultHeaders
  u.transform_request = AdviceSlipUtilities::TransformRequest
  u.transform_response = AdviceSlipUtilities::TransformResponse
}
