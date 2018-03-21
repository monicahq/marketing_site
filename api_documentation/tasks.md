# Tasks

<!-- This uses the MarkdownTOC's Sublime Text plugin to autogenerate the TOC -->
<!-- Simply install the plugin, then press Save, and it does it magic -->
<!-- MarkdownTOC autolink="true" autoanchor="true" depth="1" bracket="round" list_bullets="*" -->

* [Overview](#overview)
* [List all the tasks in your account](#list-all-the-tasks-in-your-account)
* [List all the tasks of a specific contact](#list-all-the-tasks-of-a-specific-contact)
* [Get a specific task](#get-a-specific-task)
* [Create a task](#create-a-task)
* [Update a task](#update-a-task)
* [Delete a task](#delete-a-task)

<!-- /MarkdownTOC -->

<a name="overview"></a>
<a id="overview"></a>
## Overview

The Task object allows to add tasks about your contacts.

When retrieving a task, we always also return some basic information about the
related contact.

<a name="list-all-the-tasks-in-your-account"></a>
<a id="list-all-the-tasks-in-your-account"></a>
## List all the tasks in your account

<span class="url">
  GET /tasks/
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
| `completed_at` | Will add `order by completed_at asc` to the query |
| `-completed_at` | Will add `order by completed_at desc` to the query |

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

<a name="list-all-the-tasks-of-a-specific-contact"></a>
<a id="list-all-the-tasks-of-a-specific-contact"></a>
## List all the tasks of a specific contact

<span class="url">
  GET /contacts/:id/tasks
</span>

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
## Get a specific task

<span class="url">
  GET /tasks/:id
</span>

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
## Create a task

<span class="url">
  POST /task/
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. The title of the task. Max 255 characters. |
| description | string | A description about what the task is. Max 1000000 characters. |
| completed | integer | <strong>Required</strong>. The status of the task. Values: `0` (false), `1` (true). |
| completed_at | string | The date the task happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |

### Example

<pre><code class="json">{
  "title": "Bring back the table",
  "description": "I borrowed a table a while ago.",
  "completed": 0,
  "contact_id": 1
}</code></pre>

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
## Update a task

<span class="url">
  PUT /tasks/:id
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. The title of the task. Max 255 characters. |
| description | string | A description about what the task is. Max 1000000 characters. |
| completed | integer | <strong>Required</strong>. The status of the task. Values: `0` (false), `1` (true). |
| completed_at | string | The date the task happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |

### Example

<pre><code class="json">{
  "title": "Bring back the table",
  "description": "I borrowed a table a while ago.",
  "completed": 1,
  "completed_at": "1970-03-03",
  "contact_id": 1
}</code></pre>

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
## Delete a task

<span class="url">
  DELETE /tasks/:id
</span>

### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
