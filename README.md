# AdviceSlip SDK

Random advice slips, lookup by ID, and keyword search from the long-running Advice Slip JSON API

> TypeScript, Python, PHP, Golang, Ruby, Lua SDKs, a CLI, an interactive REPL, and an MCP server for AI agents — all generated from one OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).

## About Advice Slip API

The [Advice Slip JSON API](https://api.adviceslip.com/) is a free public API run by Tom Kiss that serves short pieces of advice ("slips") as JSON. According to the homepage it "currently gives out over 10 million pieces of advice every year."

What you get from the API:

- `GET /advice` — a random advice slip.
- `GET /advice/{slip_id}` — a specific slip by numeric ID.
- `GET /advice/search/{query}` — keyword search across slips.
- A `daily_adviceslip.rss` feed that "provides a single piece of advice, chosen at random daily".

Responses are built from three documented objects: a **slip** (`slip_id`, `advice`), a **search** result (`total_results`, `query`, `slips`), and a **message** (`type`, `text`) used for notices, warnings and errors.

Operational notes: no authentication is required, and the API supports JSONP via an optional `callback` parameter. The homepage notes that "Advice is cached for 2 seconds. Any repeat-request within 2 seconds will return the same piece of advice."

## Try it

**TypeScript**
```bash
npm install advice-slip
```

**Python**
```bash
pip install advice-slip-sdk
```

**PHP**
```bash
composer require voxgig/advice-slip-sdk
```

**Golang**
```bash
go get github.com/voxgig-sdk/advice-slip-sdk/go
```

**Ruby**
```bash
gem install advice-slip-sdk
```

**Lua**
```bash
luarocks install advice-slip-sdk
```

## 30-second quickstart

### TypeScript

```ts
import { AdviceSlipSDK } from 'advice-slip'

const client = new AdviceSlipSDK({})

```

See the [TypeScript README](ts/README.md) for the
full guide, or scroll down for the same example in other languages.

## What's in the box

| Surface | Use it for | Path |
| --- | --- | --- |
| **SDK** (TypeScript, Python, PHP, Golang, Ruby, Lua) | App integration | `ts/` `py/` `php/` `go/` `rb/` `lua/` |
| **CLI** | Scripts, CI, ops, one-off API calls | `go-cli/` |
| **MCP server** | AI agents (Claude, Cursor, Cline) | `go-mcp/` |

## Use it from an AI agent (MCP)

The generated MCP server exposes every operation in this SDK as an
[MCP](https://modelcontextprotocol.io) tool that Claude, Cursor or Cline
can call directly. Build and register it:

```bash
cd go-mcp && go build -o advice-slip-mcp .
```

Then add it to your agent's MCP config (Claude Desktop, Cursor, etc.):

```json
{
  "mcpServers": {
    "advice-slip": {
      "command": "/abs/path/to/advice-slip-mcp"
    }
  }
}
```

## Entities

The API exposes 2 entities:

| Entity | Description | API path |
| --- | --- | --- |
| **Advice** | Individual advice slips — fetch a random slip via `GET /advice` or a specific one via `GET /advice/{slip_id}`, each returned as a slip object with `slip_id` and `advice`. | `/advice/{slip_id}` |
| **Search** | Keyword search over the advice corpus via `GET /advice/search/{query}`, returning a search object with `total_results`, the `query`, and a `slips` array. | `/advice/search/{query}` |

Each entity supports the following operations where available: **load**,
**list**, **create**, **update**, and **remove**.

## Quickstart in other languages

### Python

```python
from adviceslip_sdk import AdviceSlipSDK

client = AdviceSlipSDK({})


# Load a specific advice
advice, err = client.Advice(None).load(
    {"id": "example_id"}, None
)
```

### PHP

```php
<?php
require_once 'adviceslip_sdk.php';

$client = new AdviceSlipSDK([]);


// Load a specific advice
[$advice, $err] = $client->Advice(null)->load(
    ["id" => "example_id"], null
);
```

### Golang

```go
import sdk "github.com/voxgig-sdk/advice-slip-sdk/go"

client := sdk.NewAdviceSlipSDK(map[string]any{})

```

### Ruby

```ruby
require_relative "AdviceSlip_sdk"

client = AdviceSlipSDK.new({})


# Load a specific advice
advice, err = client.Advice(nil).load(
  { "id" => "example_id" }, nil
)
```

### Lua

```lua
local sdk = require("advice-slip_sdk")

local client = sdk.new({})


-- Load a specific advice
local advice, err = client:Advice(nil):load(
  { id = "example_id" }, nil
)
```

## Unit testing in offline mode

Every SDK ships a test mode that swaps the HTTP transport for an
in-memory mock, so unit tests run offline.

### TypeScript

```ts
const client = AdviceSlipSDK.test()
const result = await client.Advice().load({ id: 'test01' })
// result.ok === true, result.data contains mock data
```

### Python

```python
client = AdviceSlipSDK.test(None, None)
result, err = client.Advice(None).load(
    {"id": "test01"}, None
)
```

### PHP

```php
$client = AdviceSlipSDK::test(null, null);
[$result, $err] = $client->Advice(null)->load(
    ["id" => "test01"], null
);
```

### Golang

```go
client := sdk.TestSDK(nil, nil)
result, err := client.Advice(nil).Load(
    map[string]any{"id": "test01"}, nil,
)
```

### Ruby

```ruby
client = AdviceSlipSDK.test(nil, nil)
result, err = client.Advice(nil).load(
  { "id" => "test01" }, nil
)
```

### Lua

```lua
local client = sdk.test(nil, nil)
local result, err = client:Advice(nil):load(
  { id = "test01" }, nil
)
```

## How it works

Every SDK call runs the same five-stage pipeline:

1. **Point** — resolve the API endpoint from the operation definition.
2. **Spec** — build the HTTP specification (URL, method, headers, body).
3. **Request** — send the HTTP request.
4. **Response** — receive and parse the response.
5. **Result** — extract the result data for the caller.

A feature hook fires at each stage (e.g. `PrePoint`, `PreSpec`,
`PreRequest`), so features can inspect or modify the pipeline without
forking the SDK.

### Features

| Feature | Purpose |
| --- | --- |
| **TestFeature** | In-memory mock transport for testing without a live server |

Pass custom features via the `extend` option at construction time.

### Direct and Prepare

For endpoints the entity model doesn't cover, use the low-level methods:

- **`direct(fetchargs)`** — build and send an HTTP request in one step.
- **`prepare(fetchargs)`** — build the request without sending it.

Both accept a map with `path`, `method`, `params`, `query`,
`headers`, and `body`. See the [How-to guides](#how-to-guides) below.

## How-to guides

### Make a direct API call

When the entity interface does not cover an endpoint, use `direct`:

**TypeScript:**
```ts
const result = await client.direct({
  path: '/api/resource/{id}',
  method: 'GET',
  params: { id: 'example' },
})
console.log(result.data)
```

**Python:**
```python
result, err = client.direct({
    "path": "/api/resource/{id}",
    "method": "GET",
    "params": {"id": "example"},
})
```

**PHP:**
```php
[$result, $err] = $client->direct([
    "path" => "/api/resource/{id}",
    "method" => "GET",
    "params" => ["id" => "example"],
]);
```

**Go:**
```go
result, err := client.Direct(map[string]any{
    "path":   "/api/resource/{id}",
    "method": "GET",
    "params": map[string]any{"id": "example"},
})
```

**Ruby:**
```ruby
result, err = client.direct({
  "path" => "/api/resource/{id}",
  "method" => "GET",
  "params" => { "id" => "example" },
})
```

**Lua:**
```lua
local result, err = client:direct({
  path = "/api/resource/{id}",
  method = "GET",
  params = { id = "example" },
})
```

## Per-language documentation

- [TypeScript](ts/README.md)
- [Python](py/README.md)
- [PHP](php/README.md)
- [Golang](go/README.md)
- [Ruby](rb/README.md)
- [Lua](lua/README.md)

## Using the Advice Slip API

- Upstream: [https://api.adviceslip.com/](https://api.adviceslip.com/)

- The Advice Slip JSON API is provided free of charge by its operator, Tom Kiss (© 2013–2026).
- No explicit licence or attribution terms are published on the API homepage — review the homepage before redistributing content.
- The operator accepts voluntary support via [Ko-fi](https://ko-fi.com/tomkiss).

---

Generated from the Advice Slip API OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).
