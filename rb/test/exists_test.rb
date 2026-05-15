# AdviceSlip SDK exists test

require "minitest/autorun"
require_relative "../AdviceSlip_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = AdviceSlipSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
