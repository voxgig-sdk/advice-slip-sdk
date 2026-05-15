package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewAdviceEntityFunc func(client *AdviceSlipSDK, entopts map[string]any) AdviceSlipEntity

var NewSearchEntityFunc func(client *AdviceSlipSDK, entopts map[string]any) AdviceSlipEntity

