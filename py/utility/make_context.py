# AdviceSlip SDK utility: make_context

from core.context import AdviceSlipContext


def make_context_util(ctxmap, basectx):
    return AdviceSlipContext(ctxmap, basectx)
