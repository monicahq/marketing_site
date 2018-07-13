# Custom fields

Custom fields let you capture your unique data by storing it in fields that make sense to you. By default, Monica lets you store a bunch of data about your contacts. You might however have unique, specific type of data you want to capture that we don't provide by default. This feature lets you deal with this use case.

A CustomField (the object) depends on a lot of other concepts, that are all listed on this page.

## Overview

## Definitio

## List all your custom fields

<span class="url">k
  GET /customfields/
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
      "id": 1,
      "object": "customfield",
      "name": "Voyages",
      "fields_order": "",
      "is_list": true,
      "is_important": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-05-22T21:16:57Z",
      "updated_at": "2018-05-22T21:30:27Z"
    },
    {
      "id": 2,
      "object": "customfield",
      "name": "Movies",
      "fields_order": "",
      "is_list": true,
      "is_important": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-05-22T21:27:47Z",
      "updated_at": "2018-05-22T21:27:47Z"
    }
  ],
  "links": {
    "first": "http:\/\/monica.test\/api\/customfields?page=1",
    "last": "http:\/\/monica.test\/api\/customfields?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "http:\/\/monica.test\/api\/customfields",
    "per_page": 15,
    "to": 2,
    "total": 2
  }
}</code></pre>

## Create a custom field

<span class="url">
  POST /customfields/
</span>

### Input

If a field is not required, you can send the `null` value as the content of the field.

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the custom field. |
| is_list | boolean | <strong>Required</strong>. Indicates whether the custom field is a list or an unique item. |
| is_important | boolean | <strong>Required</strong>. Indicates whether the custom field should be placed prominently. |

### Example

<pre><code class="json">{
  "name": "Movies",
  "is_list": true,
  "is_important": false
}</code></pre>

### Response

The API call returns a custom field object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "customfield",
    "name": "Movies",
    "fields_order": null,
    "is_list": true,
    "is_important": false,
    "account": {
      "id": 1
    },
    "created_at": "2018-05-22T21:16:57Z",
    "updated_at": "2018-05-22T21:16:57Z"
  }
}</code></pre>

## Update a custom field

<span class="url">
  PUT /customfields/:id
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the custom field. |
| is_list | boolean | <strong>Required</strong>. Indicates whether the custom field is a list or an unique item. |
| is_important | boolean | <strong>Required</strong>. Indicates whether the custom field should be placed prominently. |

### Example

<pre><code class="json">{
  "name": "Movies",
  "is_list": true,
  "is_important": false
}</code></pre>

### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "customfield",
    "name": "Movies",
    "fields_order": null,
    "is_list": true,
    "is_important": false,
    "account": {
      "id": 1
    },
    "created_at": "2018-05-22T21:16:57Z",
    "updated_at": "2018-05-22T21:16:57Z"
  }
}</code></pre>

## Delete a custom field

<span class="url">
  DELETE /customfields/:id
</span>

### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 93135
}</code></pre>
