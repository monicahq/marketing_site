# Calls

<!-- TOC -->autoauto- [Overview](#overview)auto- [List all the calls in your account](#list-all-the-calls-in-your-account)auto    - [Parameters](#parameters)auto    - [Response](#response)auto- [List all the calls of a specific contact](#list-all-the-calls-of-a-specific-contact)auto    - [Response](#response-1)auto- [Get a specific call](#get-a-specific-call)auto    - [Response](#response-2)auto- [Create a call](#create-a-call)auto    - [Input](#input)auto    - [Example](#example)auto    - [Response](#response-3)auto- [Update a call](#update-a-call)auto    - [Input](#input-1)auto    - [Example](#example-1)auto    - [Response](#response-4)auto- [Delete a call](#delete-a-call)auto    - [Response](#response-5)autoauto<!-- /TOC -->

<a name="overview"></a>
<a id="markdown-overview" name="overview"></a>
## Overview

The Call object allows to record phone calls made with contacts. A call has to be
associated with an existing contact - it can't be orphan.

A call has a `called_at` field that lets you record the date the call happened.
The `called_at` field must be a valid date according to the strtotime PHP
function.

When retrieving a call, we always also return some basic information about the
related contact.

<a name="list-all-the-calls-in-your-account"></a>
<a id="markdown-list-all-the-calls-in-your-account" name="list-all-the-calls-in-your-account"></a>
## List all the calls in your account

<span class="url">
  GET /calls/
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
      "id": 3,
      "object": "call",
      "called_at": "2017-10-07T21:17:45Z",
      "content": "He called, we had fun.",
      "contact_called: true,
      "account": {
        "id": 5
      },
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T21:17:45Z",
      "updated_at": "2017-10-07T21:17:45Z"
    },
    {
      "id": 5,
      "object": "call",
      "called_at": "2017-10-07T22:29:21Z",
      "content": "He called, we had fun and really awesome.",
      "contact_called: true,
      "account": {
        "id": 5
      },
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T22:29:21Z",
      "updated_at": "2017-10-07T22:29:56Z"
    },
    {
      "id": 1,
      "object": "call",
      "called_at": "2017-10-07T21:00:56Z",
      "content": "We talked about nice stuff\r\n* And especially about their wedding",
      "contact_called: true,
      "account": {
        "id": 5
      },
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T21:00:56Z",
      "updated_at": "2017-10-07T21:00:56Z"
    },
    {
      "id": 2,
      "object": "call",
      "called_at": "2017-10-07T21:02:57Z",
      "content": "Just laughed super hard.",
      "contact_called: true,
      "account": {
        "id": 5
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Henri",
        "last_name": "Troyat",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "approximate",
              "birthdate": "1987-01-01T21:56:44Z"
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T21:02:57Z",
      "updated_at": "2017-10-07T21:02:57Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/calls?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/calls?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/calls",
    "per_page": 10,
    "to": 4,
    "total": 4
  }
}</code></pre>

<a name="list-all-the-calls-of-a-specific-contact"></a>
<a id="markdown-list-all-the-calls-of-a-specific-contact" name="list-all-the-calls-of-a-specific-contact"></a>
## List all the calls of a specific contact

<span class="url">
  GET /contacts/:id/calls
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 3,
      "object": "call",
      "called_at": "2017-10-07T21:17:45Z",
      "content": "He called, we had fun.",
      "contact_called: true,
      "account": {
        "id": 5
      },
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T21:17:45Z",
      "updated_at": "2017-10-07T21:17:45Z"
    },
    {
      "id": 1,
      "object": "call",
      "called_at": "2017-10-07T21:00:56Z",
      "content": "We talked about nice stuff\r\n* And especially about their wedding",
      "contact_called: true,
      "account": {
        "id": 5
      },
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "created_at": "2017-10-07T21:00:56Z",
      "updated_at": "2017-10-07T21:00:56Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/contacts\/3\/calls?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/contacts\/3\/calls?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/contacts\/3\/calls",
    "per_page": 10,
    "to": 2,
    "total": 2
  }
}</code></pre>

<a name="get-a-specific-call"></a>
<a id="markdown-get-a-specific-call" name="get-a-specific-call"></a>
## Get a specific call

<span class="url">
  GET /calls/:id
</span>

<a id="markdown-response-2" name="response-2"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "call",
    "called_at": "2017-10-07T21:00:56Z",
    "content": "We talked about nice stuff\r\n* And especially about their wedding",
    "contact_called: true,
    "account": {
      "id": 5
    },
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "Leslie",
      "last_name": "Knope",
      "gender": "none",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 5
      }
    },
    "created_at": "2017-10-07T21:00:56Z",
    "updated_at": "2017-10-07T21:00:56Z"
  }
}</code></pre>

<a name="create-a-call"></a>
<a id="markdown-create-a-call" name="create-a-call"></a>
## Create a call

<span class="url">
  POST /calls/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| content | string | The description of the call. Max 100000 characters. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |
| called_at | string | <strong>Required</strong>. The date the call happened. Can be in the past or future - the latter b
| contact_called | boolean | `true` if the contact made the call, false otherwise. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "content": "He called, we had fun.",
  "contact_called: true,
  "contact_id": 3,
  "called_at": "2018-02-02"
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

The API call returns a Call object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 5,
    "object": "call",
    "called_at": "2017-10-07T22:29:21Z",
    "content": "He called, we had fun.",
    "contact_called: true,
    "account": {
      "id": 5
    },
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "Leslie",
      "last_name": "Knope",
      "gender": "none",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 5
      }
    },
    "created_at": "2017-10-07T22:29:21Z",
    "updated_at": "2017-10-07T22:29:21Z"
  }
}</code></pre>

<a name="update-a-call"></a>
<a id="markdown-update-a-call" name="update-a-call"></a>
## Update a call

<span class="url">
  PUT /calls/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| content | string | <strong>Required</strong>. The description of the call. Max 100000 characters. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |
| called_at | string | <strong>Required</strong>. The date the called happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| contact_called | boolean | `true` if the contact made the call, false otherwise. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "content": "He called, we had fun and really awesome.",
  "contact_called": true,
  "contact_id": 3,
  "called_at": "2018-02-02"
}</code></pre>

<a id="markdown-response-4" name="response-4"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 5,
    "object": "call",
    "called_at": "2017-10-07T22:29:21Z",
    "content": "He called, we had fun and really awesome.",
    "contact_called": true,
    "account": {
      "id": 5
    },
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "Leslie",
      "last_name": "Knope",
      "gender": "none",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 5
      }
    },
    "created_at": "2017-10-07T22:29:21Z",
    "updated_at": "2017-10-07T22:29:56Z"
  }
}</code></pre>

<a name="delete-a-call"></a>
<a id="markdown-delete-a-call" name="delete-a-call"></a>
## Delete a call

<span class="url">
  DELETE /calls/:id
</span>

<a id="markdown-response-5" name="response-5"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
