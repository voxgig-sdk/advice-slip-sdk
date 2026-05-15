# AdviceSlip SDK feature factory

from feature.base_feature import AdviceSlipBaseFeature
from feature.test_feature import AdviceSlipTestFeature


def _make_feature(name):
    features = {
        "base": lambda: AdviceSlipBaseFeature(),
        "test": lambda: AdviceSlipTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
