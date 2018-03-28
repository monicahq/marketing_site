# Tasks

<!-- TOC -->

- [Overview](#overview)
- [List all the tasks in your account](#list-all-the-tasks-in-your-account)
    - [Parameters](#parameters)
    - [Response](#response)
    - [Sorting](#sorting)
- [List all the tasks of a specific contact](#list-all-the-tasks-of-a-specific-contact)
    - [Response](#response-1)
- [Get a specific task](#get-a-specific-task)
    - [Response](#response-2)
- [Create a task](#create-a-task)
    - [Input](#input)
    - [Example](#example)
    - [Response](#response-3)
- [Update a task](#update-a-task)
    - [Input](#input-1)
    - [Example](#example-1)
    - [Response](#response-4)
- [Delete a task](#delete-a-task)
    - [Response](#response-5)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

The Task object allows to add tasks about your contacts.

When retrieving a task, we always also return some basic information about the
related contact.

<a name="list-all-the-tasks-in-your-account"></a>
<a id="list-all-the-tasks-in-your-account"></a>
<a id="markdown-list-all-the-tasks-in-your-account" name="list-all-the-tasks-in-your-account"></a>
## List all the tasks in your account

<span class="url">
  GET /tasks/
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
      "id": 809,
      "object": "task",
      "title": "Send Phillys all my love",
      "description": "",
      "completed": false,
      "completed_at": null,
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Jim",
        "last_name": "Helpert",
        "gender": "female",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1983-10-23T19:10:42Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-10-13T21:58:40Z",
      "updated_at": "2017-10-13T21:58:40Z"
    },
    {
      "id": 810,
      "object": "task",
      "title": "Send Michael Scott some flowers",
      "description": "Because he's the best boss ever.",
      "completed": false,
      "completed_at": null,
      "account": {
        "id": 1
      },
      "contact": {
        "id": 32,
        "object": "contact",
        "first_name": "Dwight",
        "last_name": "Schrutt",
        "gender": "female",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1983-10-23T19:10:42Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-10-13T21:59:11Z",
      "updated_at": "2017-10-13T21:59:11Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/tasks?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/tasks?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/tasks",
    "per_page": 10,
    "to": 2,
    "total": 2
  }
}</code></pre>

<a id="markdown-sorting" name="sorting"></a>
### Sorting

You can sort this query. Accepted criteria are:

| Name | Description |
| ---- | ----------- |
| `created_at` | Will add `order by created_at asc` to the query |
| `-created_at` | Will add `order by created_at desc` to the query |
| `updated_at` | Will add `order by updated_at asc` to the query |
| `-updated_at` | Will add `order by updated_at desc` to the query |
| `completed_at` | Will add `order by completed_at asc` to the query |
| `-completed_at` | Will add `order by completed_at desc` to the query |

<a name="list-all-the-tasks-of-a-specific-contact"></a>
<a id="list-all-the-tasks-of-a-specific-contact"></a>
<a id="markdown-list-all-the-tasks-of-a-specific-contact" name="list-all-the-tasks-of-a-specific-contact"></a>
## List all the tasks of a specific contact

<span class="url">
  GET /contacts/:id/tasks
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 809,
      "object": "task",
      "title": "Send Phillys all my love",
      "description": "",
      "completed": false,
      "completed_at": null,
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Jim",
        "last_name": "Helpert",
        "gender": "female",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1983-10-23T19:10:42Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-10-13T21:58:40Z",
      "updated_at": "2017-10-13T21:58:40Z"
    },
    {
      "id": 810,
      "object": "task",
      "title": "Send Michael Scott some flowers",
      "description": "Because he's the best boss ever.",
      "completed": false,
      "completed_at": null,
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Jim",
        "last_name": "Helpert",
        "gender": "female",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1983-10-23T19:10:42Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-10-13T21:59:11Z",
      "updated_at": "2017-10-13T21:59:11Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/tasks?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/tasks?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/tasks",
    "per_page": 10,
    "to": 2,
    "total": 2
  }
}</code></pre>

<a name="get-a-specific-task"></a>
<a id="get-a-specific-task"></a>
<a id="markdown-get-a-specific-task" name="get-a-specific-task"></a>
## Get a specific task

<span class="url">
  GET /tasks/:id
</span>

<a id="markdown-response-2" name="response-2"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 809,
    "object": "task",
    "title": "Send Phillys all my love",
    "description": "",
    "completed": false,
    "completed_at": null,
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "first_name": "Dwight",
      "last_name": "Schrutt",
      "gender": "male",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "exact",
            "birthdate": "1983-10-23T19:10:42Z"
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2017-10-13T21:58:40Z",
    "updated_at": "2017-10-13T21:58:40Z"
  }
}</code></pre>

<a name="create-a-task"></a>
<a id="create-a-task"></a>
<a id="markdown-create-a-task" name="create-a-task"></a>
## Create a task

<span class="url">
  POST /task/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. The title of the task. Max 255 characters. |
| description | string | A description about what the task is. Max 1000000 characters. |
| completed | integer | <strong>Required</strong>. The status of the task. Values: `0` (false), `1` (true). |
| completed_at | string | The date the task happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "title": "Bring back the table",
  "description": "I borrowed a table a while ago.",
  "completed": 0,
  "contact_id": 1
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

The API call returns a task object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 811,
    "object": "task",
    "title": "Bring back the table",
    "description": "I borrowed a table a while ago.",
    "completed": false,
    "completed_at": null,
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "first_name": "Michael",
      "last_name": "Scott",
      "gender": "female",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "exact",
            "birthdate": "1983-10-23T19:10:42Z"
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2017-10-13T22:12:05Z",
    "updated_at": "2017-10-13T22:12:05Z"
  }
}</code></pre>

<a name="update-a-task"></a>
<a id="update-a-task"></a>
<a id="markdown-update-a-task" name="update-a-task"></a>
## Update a task

<span class="url">
  PUT /tasks/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. The title of the task. Max 255 characters. |
| description | string | A description about what the task is. Max 1000000 characters. |
| completed | integer | <strong>Required</strong>. The status of the task. Values: `0` (false), `1` (true). |
| completed_at | string | The date the task happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "title": "Bring back the table",
  "description": "I borrowed a table a while ago.",
  "completed": 1,
  "completed_at": "1970-03-03",
  "contact_id": 1
}</code></pre>

<a id="markdown-response-4" name="response-4"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 811,
    "object": "task",
    "title": "Bring back the table",
    "description": "I borrowed a table a while ago.",
    "completed": true,
    "completed_at": "1970-03-03T00:00:00Z",
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "first_name": "Michael",
      "last_name": "Scott",
      "gender": "female",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "exact",
            "birthdate": "1983-10-23T19:10:42Z"
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2017-10-13T22:12:05Z",
    "updated_at": "2017-10-13T22:14:33Z"
  }
}</code></pre>

<a name="delete-a-task"></a>
<a id="delete-a-task"></a>
<a id="markdown-delete-a-task" name="delete-a-task"></a>
## Delete a task

<span class="url">
  DELETE /tasks/:id
</span>

<a id="markdown-response-5" name="response-5"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
