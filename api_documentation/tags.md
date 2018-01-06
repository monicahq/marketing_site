# Tags

<!-- This uses the MarkdownTOC's Sublime Text plugin to autogenerate the TOC -->
<!-- Simply install the plugin, then press Save, and it does it magic -->
<!-- MarkdownTOC autolink="true" autoanchor="true" depth="1" bracket="round" list_bullets="*" -->

* [Overview](#overview)
* [List all your tags](#list-all-your-tags)
* [Get a specific tag](#get-a-specific-tag)
* [Create a tag](#create-a-tag)
* [Update a tag](#update-a-tag)
* [Delete a tag](#delete-a-tag)

<!-- /MarkdownTOC -->

<a name="overview"></a>
## Overview

The Tag object allows to tag contacts. Think of tags as labels, or folders, with
which you can group contacts who belong together.

<a name="list-all-your-tags"></a>
## List all your tags

<span class="url">
  GET /tags/
</span>

### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |

### Response

<pre><code class="json">{
  "data": [
    {
      "id": 325,
      "object": "tag",
      "name": "ami",
      "name_slug": "ami",
      "account": {
        "id": 1
      },
      "created_at": "2017-07-19T21:00:07Z",
      "updated_at": "2017-07-19T21:00:07Z"
    },
    {
      "id": 857,
      "object": "tag",
      "name": "college",
      "name_slug": "college",
      "account": {
        "id": 1
      },
      "created_at": "2017-09-26T20:51:59Z",
      "updated_at": "2017-09-26T20:51:59Z"
    },
    {
      "id": 1,
      "object": "tag",
      "name": "collegue",
      "name_slug": "collegue",
      "account": {
        "id": 1
      },
      "created_at": "2017-07-04T22:15:03Z",
      "updated_at": "2017-07-04T22:15:03Z"
    },
    {
      "id": 322,
      "object": "tag",
      "name": "eglise",
      "name_slug": "eglise",
      "account": {
        "id": 1
      },
      "created_at": "2017-07-19T19:49:54Z",
      "updated_at": "2017-07-19T19:49:54Z"
    },
    {
      "id": 856,
      "object": "tag",
      "name": "friend",
      "name_slug": "friend",
      "account": {
        "id": 1
      },
      "created_at": "2017-09-26T20:51:59Z",
      "updated_at": "2017-09-26T20:51:59Z"
    }
  ],
  "links": {
    "first": "https://app.monicahq.com/api/tags?page=1",
    "last": "https://app.monicahq.com/api/tags?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https://app.monicahq.com/api/tags",
    "per_page": 10,
    "to": 5,
    "total": 5
  }
}</code></pre>

<a name="get-a-specific-tag"></a>
## Get a specific tag

<span class="url">
  GET /tags/:id
</span>

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "tag",
    "name": "collegue",
    "name_slug": "collegue",
    "account": {
      "id": 1
    },
    "created_at": "2017-07-04T22:15:03Z",
    "updated_at": "2017-07-04T22:15:03Z"
  }
}</code></pre>

<a name="create-a-tag"></a>
## Create a tag

<span class="url">
  POST /tags/
</span>

### Input

If a field is not required, you can send the `null` value as the content of the field.

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the tag. Max 255 characters. |

### Example

<pre><code class="json">{
  "name":"friends"
}</code></pre>

### Response

The API call returns a tag object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "tag",
    "name": "friends",
    "name_slug": "friends",
    "account": {
      "id": 1
    },
    "created_at": "2017-07-04T22:15:03Z",
    "updated_at": "2017-07-04T22:15:03Z"
  }
}</code></pre>

<a name="update-a-tag"></a>
## Update a tag

<span class="url">
  PUT /tags/:id
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the tag. Max 255 characters. |

### Example

<pre><code class="json">{
  "name":"prison"
}</code></pre>

### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "tag",
    "name": "prison",
    "name_slug": "prison",
    "account": {
      "id": 1
    },
    "created_at": "2017-07-04T22:15:03Z",
    "updated_at": "2017-07-04T22:15:03Z"
  }
}</code></pre>

<a name="delete-a-tag"></a>
## Delete a tag

<span class="url">
  DELETE /tags/:id
</span>

### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
