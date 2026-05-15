
import { Context } from './Context'


class AdviceSlipError extends Error {

  isAdviceSlipError = true

  sdk = 'AdviceSlip'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  AdviceSlipError
}

