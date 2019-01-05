# Activities

<!-- TOC -->

- [Overview](#overview)
- [List all the activity types in your account](#list-all-the-activity-types-in-your-account)
    - [Parameters](#parameters)
    - [Response](#response)
- [Get a specific activity type](#get-a-specific-activity-type)
    - [Response](#response-1)
- [Create an activity type](#create-an-activity-type)
    - [Input](#input)
    - [Example](#example)
    - [Response](#response-2)
- [Update an activity type](#update-an-activity-type)
    - [Input](#input-1)
    - [Example](#example-1)
    - [Response](#response-3)
- [Delete an activity type](#delete-an-activity-type)
    - [Response](#response-4)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

When adding an activity done with a contact, you can associate it with a type of activity. This is useful to categorize your activities done with your contacts.

An activity type also belongs to an activity type categories.

By default, each account comes with a set of predefined activity types, like `Went to a restaurant` or `Went to the theater`.

<a id="markdown-list-all-the-activity-types-in-your-account" name="list-all-the-activity-types-in-your-account"></a>
## List all the activity types in your account

<span class="url">
  GET /activitytypes/
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
			"object": "activityType",
			"name": "společný čas",
			"location_type": null,
			"activity_type_category": {
				"id": 1,
				"object": "activityTypeCategory",
				"name": "Simple activities",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 2,
			"object": "activityType",
			"name": "sledování filmu doma",
			"location_type": null,
			"activity_type_category": {
				"id": 1,
				"object": "activityTypeCategory",
				"name": "Simple activities",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 3,
			"object": "activityType",
			"name": "promluvili jsme si doma",
			"location_type": null,
			"activity_type_category": {
				"id": 1,
				"object": "activityTypeCategory",
				"name": "Simple activities",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 4,
			"object": "activityType",
			"name": "společný sport",
			"location_type": null,
			"activity_type_category": {
				"id": 2,
				"object": "activityTypeCategory",
				"name": "Sport",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 5,
			"object": "activityType",
			"name": "ate at their place",
			"location_type": null,
			"activity_type_category": {
				"id": 3,
				"object": "activityTypeCategory",
				"name": "Food",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 6,
			"object": "activityType",
			"name": "návštěva baru",
			"location_type": null,
			"activity_type_category": {
				"id": 3,
				"object": "activityTypeCategory",
				"name": "Food",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 7,
			"object": "activityType",
			"name": "jídlo doma",
			"location_type": null,
			"activity_type_category": {
				"id": 3,
				"object": "activityTypeCategory",
				"name": "Food",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 8,
			"object": "activityType",
			"name": "piknik",
			"location_type": null,
			"activity_type_category": {
				"id": 3,
				"object": "activityTypeCategory",
				"name": "Food",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 9,
			"object": "activityType",
			"name": "jídlo v restauraci",
			"location_type": null,
			"activity_type_category": {
				"id": 3,
				"object": "activityTypeCategory",
				"name": "Food",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 10,
			"object": "activityType",
			"name": "návštěva divadla",
			"location_type": null,
			"activity_type_category": {
				"id": 4,
				"object": "activityTypeCategory",
				"name": "Cultural activities",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 11,
			"object": "activityType",
			"name": "návštěva koncertu",
			"location_type": null,
			"activity_type_category": {
				"id": 4,
				"object": "activityTypeCategory",
				"name": "Cultural activities",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 12,
			"object": "activityType",
			"name": "návštěva zápasu",
			"location_type": null,
			"activity_type_category": {
				"id": 4,
				"object": "activityTypeCategory",
				"name": "Cultural activities",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 13,
			"object": "activityType",
			"name": "návštěva muzea",
			"location_type": null,
			"activity_type_category": {
				"id": 4,
				"object": "activityTypeCategory",
				"name": "Cultural activities",
				"account": {
					"id": 1
				},
				"created_at": null,
				"updated_at": null
			},
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		}
	],
	"links": {
		"first": "https:\/\/app.monicahq.com\/api\/activitytypes?page=1",
		"last": "https:\/\/app.monicahq.com\/api\/activitytypes?page=1",
		"prev": null,
		"next": null
	},
	"meta": {
		"current_page": 1,
		"from": 1,
		"last_page": 1,
		"path": "https:\/\/app.monicahq.com\/api\/activitytypes",
		"per_page": 15,
		"to": 13,
		"total": 13
	}
}</code></pre>

<a id="markdown-get-a-specific-activity-type" name="get-a-specific-activity-type"></a>
## Get a specific activity type

<span class="url">
  GET /activitytypes/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
	"data": {
		"id": 1,
		"object": "activityType",
		"name": "společný čas",
		"location_type": null,
		"activity_type_category": {
			"id": 1,
			"object": "activityTypeCategory",
			"name": "Simple activities",
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		"account": {
			"id": 1
		},
		"created_at": null,
		"updated_at": null
	}
}</code></pre>

<a id="markdown-create-an-activity-type" name="create-an-activity-type"></a>
## Create an activity type

<span class="url">
  POST /activitytypes/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the activity type. Max 255 characters. |
| activity_type_category_id | integer | <strong>Required</strong>. The ID of the type of activity type category that the activity type is associated with. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
	"name":"this is a name",
	"activity_type_category_id":1
}</code></pre>

<a id="markdown-response-2" name="response-2"></a>
### Response

The API call returns an Activity type object if the call succeeds.

<pre><code class="json">{
	"data": {
		"id": 27,
		"object": "activityType",
		"name": "this is a name",
		"location_type": null,
		"activity_type_category": {
			"id": 1,
			"object": "activityTypeCategory",
			"name": "Simple activities",
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		"account": {
			"id": 1
		},
		"created_at": "2018-07-13T16:16:16Z",
		"updated_at": "2018-07-13T16:16:16Z"
	}
}</code></pre>

<a id="markdown-update-an-activity-type" name="update-an-activity-type"></a>
## Update an activity type

<span class="url">
  PUT /activitytypes/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the activity type. Max 255 characters. |
| activity_type_category_id | integer | <strong>Required</strong>. The ID of the type of activity type category that the activity type is associated with. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
	"name":"For my friend Leslie Knope",
	"activity_type_category_id":1
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

<pre><code class="json">{
	"data": {
		"id": 27,
		"object": "activityType",
		"name": "For my friend Leslie Knope",
		"location_type": null,
		"activity_type_category": {
			"id": 1,
			"object": "activityTypeCategory",
			"name": "Simple activities",
			"account": {
				"id": 1
			},
			"created_at": null,
			"updated_at": null
		},
		"account": {
			"id": 1
		},
		"created_at": "2018-07-13T16:16:16Z",
		"updated_at": "2018-07-13T16:16:57Z"
	}
}</code></pre>

<a id="markdown-delete-an-activity-type" name="delete-an-activity-type"></a>
## Delete an activity type

<span class="url">
  DELETE /activitytypes/:id
</span>

<a id="markdown-response-4" name="response-4"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>