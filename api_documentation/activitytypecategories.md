# Activity Type Categories <!-- omit in toc -->

<!-- TOC -->

  - [Overview](#overview)
  - [List all the activity type categories in your account](#list-all-the-activity-type-categories-in-your-account)
    - [Parameters](#parameters)
    - [Response](#response)
  - [Get a specific activity type category](#get-a-specific-activity-type-category)
    - [Response](#response-1)
  - [Create an activity type category](#create-an-activity-type-category)
    - [Input](#input)
    - [Example](#example)
    - [Response](#response-2)
  - [Update an activity type category](#update-an-activity-type-category)
    - [Input](#input-1)
    - [Example](#example-1)
    - [Response](#response-3)
  - [Delete an activity type category](#delete-an-activity-type-category)
    - [Response](#response-4)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

When adding an activity done with a contact, you can associate it with a type of activity. This is useful to categorize your activities done with your contacts.

An activity type belongs to an activity type categories.

By default, each account comes with a set of predefined activity type categories.

<a id="markdown-list-all-the-activity-type-categories-in-your-account" name="list-all-the-activity-type-categories-in-your-account"></a>
## List all the activity type categories in your account

<span class="url">
  GET /activitytypecategories/
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
      "object": "activityTypeCategory",
      "name": "Simple activities",
      "account": {
        "id": 1
      },
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 2,
      "object": "activityTypeCategory",
      "name": "Sport",
      "account": {
        "id": 1
      },
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 3,
      "object": "activityTypeCategory",
      "name": "Food",
      "account": {
        "id": 1
      },
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 4,
      "object": "activityTypeCategory",
      "name": "Cultural activities",
      "account": {
        "id": 1
      },
      "created_at": null,
      "updated_at": null
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/activitytypecategories?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/activitytypecategories?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/activitytypecategories",
    "per_page": 15,
    "to": 4,
    "total": 4
  }
}</code></pre>

<a id="markdown-get-a-specific-activity-type-category" name="get-a-specific-activity-type-category"></a>
## Get a specific activity type category

<span class="url">
  GET /activitytypecategories/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "activityTypeCategory",
    "name": "Simple activities",
    "account": {
      "id": 1
    },
    "created_at": null,
    "updated_at": null
  }
}</code></pre>

<a id="markdown-create-an-activity-type-category" name="create-an-activity-type-category"></a>
## Create an activity type category

<span class="url">
  POST /activitytypecategories/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the activity type. Max 255 characters. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "name":"this is a name"
}</code></pre>

<a id="markdown-response-2" name="response-2"></a>
### Response

The API call returns an Activity type category object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 9,
    "object": "activityTypeCategory",
    "name": "This is a name",
    "account": {
      "id": 1
    },
    "created_at": "2018-07-13T16:30:37Z",
    "updated_at": "2018-07-13T16:30:37Z"
  }
}</code></pre>

<a id="markdown-update-an-activity-type-category" name="update-an-activity-type-category"></a>
## Update an activity type category

<span class="url">
  PUT /activitytypecategories/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the activity type. Max 255 characters. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "name":"For my friend Leslie Knope"
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 9,
    "object": "activityTypeCategory",
    "name": "This is a name",
    "account": {
      "id": 1
    },
    "created_at": "2018-07-13T16:30:37Z",
    "updated_at": "2018-07-13T16:30:37Z"
  }
}</code></pre>

<a id="markdown-delete-an-activity-type-category" name="delete-an-activity-type-category"></a>
## Delete an activity type category

<span class="url">
  DELETE /activitytypecategories/:id
</span>

<a id="markdown-response-4" name="response-4"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
