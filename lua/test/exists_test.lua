-- ProjectName SDK exists test

local sdk = require("advice-slip_sdk")

describe("AdviceSlipSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
