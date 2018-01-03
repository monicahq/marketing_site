## Overview

The Task object allows to add tasks about your contacts.

When retrieving a task, we always also return some basic information about the
related contact.

## List all the tasks in your account

<url>
  GET /tasks/
</url>

### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |

### Response

{% highlight json %}
{
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
}
{% endhighlight %}

## List all the tasks of a specific contact

<url>
  GET /contacts/:id/tasks
</url>

### Response

{% highlight json %}
{
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
}
{% endhighlight %}

## Get a specific task

<url>
  GET /tasks/:id
</url>

### Response

{% highlight json %}
{
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
}
{% endhighlight %}

## Create a task

<url>
  POST /task/
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. The title of the task. Max 255 characters. |
| description | string | A description about what the task is. Max 1000000 characters. |
| completed | integer | <strong>Required</strong>. The status of the task. Values: `0` (false), `1` (true). |
| completed_at | string | The date the task happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |

### Example

{% highlight json %}
{
  "title": "Bring back the table",
  "description": "I borrowed a table a while ago.",
  "completed": 0,
  "contact_id": 1
}
{% endhighlight %}

### Response

The API call returns a task object if the call succeeds.

{% highlight json %}
{
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
}
{% endhighlight %}

## Update a task

<url>
  PUT /tasks/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. The title of the task. Max 255 characters. |
| description | string | A description about what the task is. Max 1000000 characters. |
| completed | integer | <strong>Required</strong>. The status of the task. Values: `0` (false), `1` (true). |
| completed_at | string | The date the task happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |

### Example

{% highlight json %}
{
  "title": "Bring back the table",
  "description": "I borrowed a table a while ago.",
  "completed": 1,
  "completed_at": "1970-03-03",
  "contact_id": 1
}
{% endhighlight %}

### Response

{% highlight json %}
{
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
}
{% endhighlight %}

## Delete a task

<url>
  DELETE /tasks/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 31
}
{% endhighlight %}
