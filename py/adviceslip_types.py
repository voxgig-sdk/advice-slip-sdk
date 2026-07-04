# Typed models for the AdviceSlip SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Field/param types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Do not edit by hand.

from __future__ import annotations

from dataclasses import dataclass
from typing import Optional, Any


@dataclass
class Advice:
    slip: dict


@dataclass
class AdviceLoadMatch:
    id: int


@dataclass
class Search:
    slip: list
    total_result: str
    query: Optional[str] = None


@dataclass
class SearchLoadMatch:
    id: str

