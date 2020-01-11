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

## Overview

The Gender object represents a gender associated to a contact. A contact must have a gender before being created.

## List all the genders in the account

<span class="url">
  GET /genders
</span>

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

## Get a specific gender

<span class="url">
  GET /genders/:id
</span>

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

## Create a gender

<span class="url">
  POST /genders/
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The description of the gender. Max 255 characters. |

### Example

<pre><code class="json">{
  "name":"man"
}</code></pre>

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

## Update a gender

<span class="url">
  PUT /genders/:id
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The description of the gender. Max 255 characters. |

### Example

<pre><code class="json">{
    "name":"woman"
}</code></pre>

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

## Delete a gender

Warning: deleting a gender is dangerous. You have to make sure that no contacts in your account have this gender before deleting it.

<span class="url">
  DELETE /genders/:id
</span>

### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
