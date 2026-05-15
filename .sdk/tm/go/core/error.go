package core

type AdviceSlipError struct {
	IsAdviceSlipError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewAdviceSlipError(code string, msg string, ctx *Context) *AdviceSlipError {
	return &AdviceSlipError{
		IsAdviceSlipError: true,
		Sdk:              "AdviceSlip",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *AdviceSlipError) Error() string {
	return e.Msg
}
