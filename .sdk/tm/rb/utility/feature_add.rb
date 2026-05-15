# AdviceSlip SDK utility: feature_add
module AdviceSlipUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
