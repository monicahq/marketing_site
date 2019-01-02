# Companies

<!-- TOC -->

- [Overview](#overview)
- [List all the companies in your account](#list-all-the-companies-in-your-account)
    - [Parameters](#parameters)
    - [Response](#response)
- [Get a specific company](#get-a-specific-company)
    - [Response](#response-1)
- [Create a company](#create-a-company)
    - [Input](#input)
    - [Example](#example)
    - [Response](#response-2)
- [Update a company](#update-a-company)
    - [Input](#input-1)
    - [Example](#example-1)
    - [Response](#response-3)
- [Delete a call](#delete-a-call)
    - [Response](#response-4)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

The Company object represents a company a Contact works (or worked) at.

<a id="markdown-list-all-the-companies-in-your-account" name="list-all-the-companies-in-your-account"></a>
## List all the companies in your account

<span class="url">
  GET /companies/
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
      "id": 1,
      "object": "company",
      "name": "Central Perk",
      "website": "http:\/\/url.com",
      "number_of_employees": 3,
      "account": {
        "id": 1
      },
      "created_at": "2019-01-02T14:44:30Z",
      "updated_at": "2019-01-02T14:47:07Z"
    },
    {
      "id": 3,
      "object": "company",
      "name": "ACME",
      "website": "http:\/\/url.com",
      "number_of_employees": 3,
      "account": {
        "id": 1
      },
      "created_at": "2019-01-02T14:49:07Z",
      "updated_at": "2019-01-02T14:49:07Z"
    }
  ],
  "links": {
    "first": "http:\/\/monica.test\/api\/companies?page=1",
    "last": "http:\/\/monica.test\/api\/companies?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "http:\/\/monica.test\/api\/companies",
    "per_page": 15,
    "to": 2,
    "total": 2
  }
}</code></pre>

<a id="markdown-get-a-specific-company" name="get-a-specific-company"></a>
## Get a specific company

<span class="url">
  GET /companies/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "company",
    "name": "Central Perk",
    "website": "http:\/\/url.com",
    "number_of_employees": 3,
    "account": {
      "id": 1
    },
    "created_at": "2019-01-02T14:44:30Z",
    "updated_at": "2019-01-02T14:47:07Z"
  }
}</code></pre>

<a id="markdown-create-a-company" name="create-a-company"></a>
## Create a company

<span class="url">
  POST /companies/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the company. Max 255 characters. |
| website | string | The URL of the website of the company. Max 255 characters. |
| number_of_employees | integer | The number of employees in the company. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
	"name": "ACME",
	"website": "http://url.com",
	"number_of_employees": 3
}</code></pre>

<a id="markdown-response-2" name="response-2"></a>
### Response

The API call returns a Company object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "company",
    "name": "ACME",
    "website": "http:\/\/url.com",
    "number_of_employees": 3,
    "account": {
      "id": 1
    },
    "created_at": "2019-01-02T14:44:30Z",
    "updated_at": "2019-01-02T14:44:30Z"
  }
}</code></pre>

<a id="markdown-update-a-company" name="update-a-company"></a>
## Update a company

<span class="url">
  PUT /companies/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the company. Max 255 characters. |
| website | string | The URL of the website of the company. Max 255 characters. |
| number_of_employees | integer | The number of employees in the company. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
	"name": "Central Perk",
	"website": "http://url.com",
	"number_of_employees": 3
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "company",
    "name": "Central Perk",
    "website": "http:\/\/url.com",
    "number_of_employees": 3,
    "account": {
      "id": 1
    },
    "created_at": "2019-01-02T14:44:30Z",
    "updated_at": "2019-01-02T14:47:07Z"
  }
}</code></pre>

<a id="markdown-delete-a-call" name="delete-a-call"></a>
## Delete a call

<span class="url">
  DELETE /companies/:id
</span>

<a id="markdown-response-4" name="response-4"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 1
}</code></pre>
