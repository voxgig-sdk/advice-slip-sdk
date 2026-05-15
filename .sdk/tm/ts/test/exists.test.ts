
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { AdviceSlipSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await AdviceSlipSDK.test()
    equal(null !== testsdk, true)
  })

})
