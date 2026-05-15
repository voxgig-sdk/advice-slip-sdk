# AdviceSlip SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module AdviceSlipFeatures
  def self.make_feature(name)
    case name
    when "base"
      AdviceSlipBaseFeature.new
    when "test"
      AdviceSlipTestFeature.new
    else
      AdviceSlipBaseFeature.new
    end
  end
end
