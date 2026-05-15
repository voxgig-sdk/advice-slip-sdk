-- AdviceSlip SDK error

local AdviceSlipError = {}
AdviceSlipError.__index = AdviceSlipError


function AdviceSlipError.new(code, msg, ctx)
  local self = setmetatable({}, AdviceSlipError)
  self.is_sdk_error = true
  self.sdk = "AdviceSlip"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function AdviceSlipError:error()
  return self.msg
end


function AdviceSlipError:__tostring()
  return self.msg
end


return AdviceSlipError
