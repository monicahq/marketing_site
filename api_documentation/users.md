# User

<!-- TOC -->

- [Overview](#overview)
- [Get yourself](#get-yourself)
    - [Response](#response)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

The user represents the user you are currently logged in for each API call.

As of now, you can't create an user through the API, nor retrieve someone else other than you through the API.

<a id="markdown-get-yourself" name="get-yourself"></a>
## Get yourself

<span class="url">
  GET /me
</span>

<a id="markdown-response" name="response"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "user",
    "first_name": "John",
    "last_name": "Doe",
    "email": "admin@admin.com",
    "timezone": "US\/Eastern",
    "currency": {
      "id": 2,
      "object": "currency",
      "iso": "USD",
      "name": "US Dollar",
      "symbol": "$"
    },
    "locale": "en",
    "is_policy_compliant": false,
    "account": {
      "id": 1
    },
    "created_at": "2018-05-14T22:21:09Z",
    "updated_at": "2018-05-14T22:21:09Z"
  }
}</code></pre>
