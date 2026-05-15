# ProjectName SDK exists test

import pytest
from adviceslip_sdk import AdviceSlipSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = AdviceSlipSDK.test(None, None)
        assert testsdk is not None
