# Genders <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
- [List all the genders in the account](#list-all-the-genders-in-the-account)
  - [Response](#response)
- [Get a specific gender](#get-a-specific-gender)
  - [Response](#response-1)
- [Create a gender](#create-a-gender)
  - [Input](#input)
  - [Example](#example)
  - [Response](#response-2)
- [Update a gender](#update-a-gender)
  - [Input](#input-1)
  - [Example](#example-1)
  - [Response](#response-3)
- [Delete a gender](#delete-a-gender)
  - [Response](#response-4)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

The Gender object represents a gender associated to a contact. A contact must have a gender before being created.

<a id="markdown-list-all-the-genders-in-the-account" name="list-all-the-genders-in-the-account"></a>
## List all the genders in the account

<span class="url">
  GET /genders
</span>

<a id="markdown-response" name="response"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 1,
      "object": "gender",
      "name": "Man",
      "account": {
        "id": 1
      },
      "created_at": "2019-01-04T23:37:42Z",
      "updated_at": "2019-01-04T23:37:42Z"
    },
    {
      "id": 2,
      "object": "gender",
      "name": "Woman",
      "account": {
        "id": 1
      },
      "created_at": "2019-01-04T23:37:42Z",
      "updated_at": "2019-01-04T23:37:42Z"
    },
    {
      "id": 3,
      "object": "gender",
      "name": "Rather not say",
      "account": {
        "id": 1
      },
      "created_at": "2019-01-04T23:37:42Z",
      "updated_at": "2019-01-04T23:37:42Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/genders?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/genders?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/genders",
    "per_page": 15,
    "to": 3,
    "total": 3
  }
}</code></pre>

<a id="markdown-get-a-specific-gender" name="get-a-specific-gender"></a>
## Get a specific gender

<span class="url">
  GET /genders/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "gender",
    "name": "Man",
    "account": {
      "id": 1
    },
    "created_at": "2019-01-04T23:37:42Z",
    "updated_at": "2019-01-04T23:37:42Z"
  }
}</code></pre>

<a id="markdown-create-a-gender" name="create-a-gender"></a>
## Create a gender

<span class="url">
  POST /genders/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The description of the gender. Max 255 characters. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "name":"man"
}</code></pre>

<a id="markdown-response-2" name="response-2"></a>
### Response

The API returns a gender object if the gender succeeds.

<pre><code class="json">{
  "data": {
    "id": 7,
    "object": "gender",
    "name": "man",
    "account": {
      "id": 1
    },
    "created_at": "2019-01-04T23:45:23Z",
    "updated_at": "2019-01-04T23:45:23Z"
  }
}</code></pre>

<a id="markdown-update-a-gender" name="update-a-gender"></a>
## Update a gender

<span class="url">
  PUT /genders/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The description of the gender. Max 255 characters. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
    "name":"woman"
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 7,
    "object": "gender",
    "name": "woman",
    "account": {
      "id": 1
    },
    "created_at": "2019-01-04T23:45:23Z",
    "updated_at": "2019-01-04T23:46:22Z"
  }
}</code></pre>

<a id="markdown-delete-a-gender" name="delete-a-gender"></a>
## Delete a gender

Warning: deleting a gender is dangerous. You have to make sure that no contacts in your account have this gender before deleting it.

<span class="url">
  DELETE /genders/:id
</span>

<a id="markdown-response-4" name="response-4"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
