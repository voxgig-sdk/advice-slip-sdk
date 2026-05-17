package voxgigadviceslipsdk

import (
	"github.com/voxgig-sdk/advice-slip-sdk/go/core"
	"github.com/voxgig-sdk/advice-slip-sdk/go/entity"
	"github.com/voxgig-sdk/advice-slip-sdk/go/feature"
	_ "github.com/voxgig-sdk/advice-slip-sdk/go/utility"
)

// Type aliases preserve external API.
type AdviceSlipSDK = core.AdviceSlipSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type AdviceSlipEntity = core.AdviceSlipEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type AdviceSlipError = core.AdviceSlipError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewAdviceEntityFunc = func(client *core.AdviceSlipSDK, entopts map[string]any) core.AdviceSlipEntity {
		return entity.NewAdviceEntity(client, entopts)
	}
	core.NewSearchEntityFunc = func(client *core.AdviceSlipSDK, entopts map[string]any) core.AdviceSlipEntity {
		return entity.NewSearchEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewAdviceSlipSDK = core.NewAdviceSlipSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
