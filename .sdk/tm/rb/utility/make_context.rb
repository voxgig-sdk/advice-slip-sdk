# AdviceSlip SDK utility: make_context
require_relative '../core/context'
module AdviceSlipUtilities
  MakeContext = ->(ctxmap, basectx) {
    AdviceSlipContext.new(ctxmap, basectx)
  }
end
