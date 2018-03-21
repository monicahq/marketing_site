# Debts

<!-- This uses the MarkdownTOC's Sublime Text plugin to autogenerate the TOC -->
<!-- Simply install the plugin, then press Save, and it does it magic -->
<!-- MarkdownTOC autolink="true" autoanchor="true" depth="1" bracket="round" list_bullets="*" -->

* [Overview](#overview)
* [List all your debts](#list-all-your-debts)
* [Get a specific debt](#get-a-specific-debt)
* [Create a debt](#create-a-debt)
* [Update a debt](#update-a-debt)
* [Delete a debt](#delete-a-debt)

<!-- /MarkdownTOC -->

<a name="overview"></a>
<a id="overview"></a>
## Overview

The Debt object allows to record that you own to contacts, or what your contacts
own you.

A debt has to be linked to a contact, always.

If the user owns money to the contact, the `in_debt` will be `yes`. If the
contact owns money to the user, `in_debt` will be `no`.

<a name="list-all-your-debts"></a>
<a id="list-all-your-debts"></a>
## List all your debts

<span class="url">
  GET /debts/
</span>

### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |
| sort | string | Indicates a sorting criteria. |

### Sorting

You can sort this query. Accepted criteria are:

| Name | Description |
| ---- | ----------- |
| `created_at` | Will add `order by created_at asc` to the query |
| `-created_at` | Will add `order by created_at desc` to the query |
| `updated_at` | Will add `order by updated_at asc` to the query |
| `-updated_at` | Will add `order by updated_at desc` to the query |

### Response

<pre><code class="json">{
  "data": [
    {
      "id": 428,
      "object": "debt",
      "in_debt": "yes",
      "status": "inprogress",
      "amount": 100,
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
<a id="get-a-specific-debt"></a>
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
<a id="create-a-debt"></a>
## Create a debt

<span class="url">
  POST /debts/
</span>

### Input

If a field is not required, you can send the `null` value as the content of the field.

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the debt is associated with. |
| in_debt | string | <strong>Required</strong>. Value: `yes` if the user owns money to the contact. `no` if the contact owns money to the user. |
| status | string | <strong>Required</strong>. State of the debt. Values: `inprogress` or `complete`. |
| amount | integer | <strong>Required</strong>. The amount of money owned. |
| reason | string | The reason the debt exists. Max 10000000 characters. |

### Example

<pre><code class="json">{
  "in_debt":"yes",
  "status":"inprogress",
  "amount":325,
  "reason":"He bought half the pizza",
  "contact_id": 1
}</code></pre>

### Response

The API call returns a debt object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 835,
    "object": "debt",
    "in_debt": "yes",
    "status": "inprogress",
    "amount": 325,
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
<a id="update-a-debt"></a>
## Update a debt

<span class="url">
  PUT /debts/:id
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the debt is associated with. |
| in_debt | string | <strong>Required</strong>. Value: `yes` if the user owns money to the contact. `no` if the contact owns money to the user. |
| status | string | <strong>Required</strong>. State of the debt. Values: `inprogress` or `complete`. |
| amount | integer | <strong>Required</strong>. The amount of money owned. |
| reason | string | The reason the debt exists. Max 10000000 characters. |

### Example

<pre><code class="json">{
  "in_debt":"yes",
  "status":"inprogress",
  "amount":23,
  "reason":"He bought half the pizza",
  "contact_id": 1
}</code></pre>

### Response

<pre><code class="json">{
  "data": {
    "id": 835,
    "object": "debt",
    "in_debt": "yes",
    "status": "inprogress",
    "amount": 23,
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
<a id="delete-a-debt"></a>
## Delete a debt

<span class="url">
  DELETE /debts/:id
</span>

### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
