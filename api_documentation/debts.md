# Debts <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
- [List all your debts](#list-all-your-debts)
  - [Parameters](#parameters)
  - [Response](#response)
- [Get a specific debt](#get-a-specific-debt)
- [Create a debt](#create-a-debt)
  - [Input](#input)
  - [Example](#example)
  - [Response](#response-1)
- [Update a debt](#update-a-debt)
  - [Input](#input-1)
  - [Example](#example-1)
  - [Response](#response-2)
- [Delete a debt](#delete-a-debt)
  - [Response](#response-3)

<!-- /TOC -->

<a name="overview"></a>
<a id="markdown-overview" name="overview"></a>
## Overview

The Debt object allows to record that you own to contacts, or what your contacts
own you.

A debt has to be linked to a contact, always.

If the user owns money to the contact, the `in_debt` will be `yes`. If the
contact owns money to the user, `in_debt` will be `no`.

<a name="list-all-your-debts"></a>
<a id="markdown-list-all-your-debts" name="list-all-your-debts"></a>
## List all your debts

<span class="url">
  GET /debts/
</span>

<a id="markdown-parameters" name="parameters"></a>
### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |

<a id="markdown-response" name="response"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 428,
      "object": "debt",
      "in_debt": "yes",
      "status": "inprogress",
      "amount": 100,
      "amount_with_currency": "$100",
      "reason": "",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 8,
        "object": "contact",
        "first_name": "Jim",
        "last_name": "Halpert",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1978-10-01T16:20:55Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-06-14T17:43:13Z",
      "updated_at": "2017-06-14T17:43:20Z"
    },
    {
      "id": 831,
      "object": "debt",
      "in_debt": "no",
      "status": "inprogress",
      "amount": 123,
      "amount_with_currency": "$123",
      "reason": "For the bar last time",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Henri",
        "last_name": "Troyat",
        "gender": "female",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1983-10-23T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-10-21T15:59:14Z",
      "updated_at": "2017-10-21T15:59:14Z"
    },
    {
      "id": 832,
      "object": "debt",
      "in_debt": "yes",
      "status": "inprogress",
      "amount": 431,
      "amount_with_currency": "$431",
      "reason": "For the coffee last time.",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Henri",
        "last_name": "Troyat",
        "gender": "female",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1983-10-23T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-10-21T16:04:08Z",
      "updated_at": "2017-10-21T16:04:08Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/debts?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/debts?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/debts",
    "per_page": 10,
    "to": 3,
    "total": 3
  }
}</code></pre>

<a name="get-a-specific-debt"></a>
<a id="markdown-get-a-specific-debt" name="get-a-specific-debt"></a>
## Get a specific debt

<span class="url">
  GET /debts/:id
</span>

<pre><code class="json">{
  "data": {
    "id": 832,
    "object": "debt",
    "in_debt": "yes",
    "status": "inprogress",
    "amount": 431,
    "amount_with_currency": "$431",
    "reason": "For the coffee last time.",
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "first_name": "Henri",
      "last_name": "Troyat",
      "gender": "female",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "exact",
            "birthdate": "1983-10-23T00:00:00Z"
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2017-10-21T16:04:08Z",
    "updated_at": "2017-10-21T16:04:08Z"
  }
}</code></pre>

<a name="create-a-debt"></a>
<a id="markdown-create-a-debt" name="create-a-debt"></a>
## Create a debt

<span class="url">
  POST /debts/
</span>

<a id="markdown-input" name="input"></a>
### Input

If a field is not required, you can send the `null` value as the content of the field.

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the debt is associated with. |
| in_debt | string | <strong>Required</strong>. Value: `yes` if the user owns money to the contact. `no` if the contact owns money to the user. |
| status | string | <strong>Required</strong>. State of the debt. Values: `inprogress` or `complete`. |
| amount | integer | <strong>Required</strong>. The amount of money owned. |
| reason | string | The reason the debt exists. Max 10000000 characters. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "in_debt":"yes",
  "status":"inprogress",
  "amount":325,
  "reason":"He bought half the pizza",
  "contact_id": 1
}</code></pre>

<a id="markdown-response-1" name="response-1"></a>
### Response

The API call returns a debt object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 835,
    "object": "debt",
    "in_debt": "yes",
    "status": "inprogress",
    "amount": 325,
    "amount_with_currency": "$325",
    "reason": "He bought half the pizza",
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "first_name": "Henri",
      "last_name": "Troyat",
      "gender": "female",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "exact",
            "birthdate": "1983-10-23T00:00:00Z"
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2017-10-21T16:16:26Z",
    "updated_at": "2017-10-21T16:16:26Z"
  }
}</code></pre>

<a name="update-a-debt"></a>
<a id="markdown-update-a-debt" name="update-a-debt"></a>
## Update a debt

<span class="url">
  PUT /debts/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the debt is associated with. |
| in_debt | string | <strong>Required</strong>. Value: `yes` if the user owns money to the contact. `no` if the contact owns money to the user. |
| status | string | <strong>Required</strong>. State of the debt. Values: `inprogress` or `complete`. |
| amount | integer | <strong>Required</strong>. The amount of money owned. |
| reason | string | The reason the debt exists. Max 10000000 characters. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "in_debt":"yes",
  "status":"inprogress",
  "amount":23,
  "reason":"He bought half the pizza",
  "contact_id": 1
}</code></pre>

<a id="markdown-response-2" name="response-2"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 835,
    "object": "debt",
    "in_debt": "yes",
    "status": "inprogress",
    "amount": 23,
    "amount_with_currency": "$23",
    "reason": "He bought half the pizza",
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "first_name": "Henri",
      "last_name": "Troyat",
      "gender": "female",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "exact",
            "birthdate": "1983-10-23T00:00:00Z"
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2017-10-21T16:16:26Z",
    "updated_at": "2017-10-21T16:19:54Z"
  }
}</code></pre>

<a name="delete-a-debt"></a>
<a id="markdown-delete-a-debt" name="delete-a-debt"></a>
## Delete a debt

<span class="url">
  DELETE /debts/:id
</span>

<a id="markdown-response-3" name="response-3"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
