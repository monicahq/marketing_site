# Reminders

<!-- This uses the MarkdownTOC's Sublime Text plugin to autogenerate the TOC -->
<!-- Simply install the plugin, then press Save, and it does it magic -->
<!-- MarkdownTOC autolink="true" autoanchor="true" depth="1" bracket="round" list_bullets="*" -->

* [Overview](#overview)
* [List all the reminders in your account](#list-all-the-reminders-in-your-account)
* [List all the reminders of a specific contact](#list-all-the-reminders-of-a-specific-contact)
* [Get a specific reminder](#get-a-specific-reminder)
* [Create a reminder](#create-a-reminder)
* [Update a reminder](#update-a-reminder)
* [Delete a reminder](#delete-a-reminder)

<!-- /MarkdownTOC -->

<a name="overview"></a>
## Overview

The Reminder object allows to add reminders about your contacts.

A reminder is a complex object in Monica. There are two types of reminders:
* unique reminder (`frequency_type` == `one_time`),
* recurring reminder (`frequency_type` == `day` | `month` | `year`).

When a reminder is recurrent, the `frequency_number` indicates the number of
days|months|years between each occurence.

It's important to note that when a birthdate is entered for a contact, the
system will automatically create a reminder for this birthday. In your code,
make sure that you don't explicitely create a reminder for birthdays.

When a reminder is supposed to be triggered, if the instance is set to send
emails or if the account is on the paid plan, an email will be sent
automatically to the user with the reminder as its content.

When retrieving a reminder, we always also return some basic information about the
related contact.

<a name="list-all-the-reminders-in-your-account"></a>
## List all the reminders in your account

<span class="url">
  GET /reminders/
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
      "id": 2,
      "object": "reminder",
      "title": "Wish happy birthday to Danny",
      "description": null,
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": null,
      "next_expected_date": "2017-10-23T00:00:18Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Danny",
        "last_name": "Troyat",
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
      "created_at": "2016-10-07T11:53:43Z",
      "updated_at": "2017-06-16T19:04:54Z"
    },
    {
      "id": 4,
      "object": "reminder",
      "title": "Wish happy birthday to Leon",
      "description": null,
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": null,
      "next_expected_date": "2018-04-24T09:04:35Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 79117,
        "object": "contact",
        "first_name": "Leon",
        "last_name": null,
        "gender": "male",
        "is_partial": true,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "2016-04-24T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2016-10-09T13:04:35Z",
      "updated_at": "2017-06-16T19:04:49Z"
    },
    {
      "id": 5,
      "object": "reminder",
      "title": "Wish happy birthday to Lena",
      "description": null,
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": null,
      "next_expected_date": "2017-10-09T15:28:03Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 79118,
        "object": "contact",
        "first_name": "Lena",
        "last_name": null,
        "gender": "female",
        "is_partial": true,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "2015-10-09T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2016-10-09T19:28:03Z",
      "updated_at": "2017-06-16T19:04:49Z"
    },
    {
      "id": 13,
      "object": "reminder",
      "title": "Wish happy birthday to Edouard",
      "description": null,
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": null,
      "next_expected_date": "2017-10-14T23:35:10Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 5,
        "object": "contact",
        "first_name": "Edouard",
        "last_name": "Desgrée",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1982-10-14T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2016-10-15T03:35:10Z",
      "updated_at": "2017-06-16T19:04:54Z"
    },
    {
      "id": 14,
      "object": "reminder",
      "title": "Happy birthday to my best friend",
      "description": null,
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": null,
      "next_expected_date": "2017-10-15T07:59:21Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 6,
        "object": "contact",
        "first_name": "Matthieu",
        "last_name": "Demarque",
        "gender": "female",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2016-10-17T11:59:21Z",
      "updated_at": "2017-05-30T01:27:38Z"
    },
    {
      "id": 16,
      "object": "reminder",
      "title": "Wish happy birthday to Jim",
      "description": null,
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": null,
      "next_expected_date": "2017-10-01T19:55:30Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 8,
        "object": "contact",
        "first_name": "Jim",
        "last_name": "Halpert",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1978-10-01T16:20:55Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2016-10-18T23:55:30Z",
      "updated_at": "2017-06-16T19:04:54Z"
    },
    {
      "id": 122,
      "object": "reminder",
      "title": "Anniversaire de première date",
      "description": null,
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": null,
      "next_expected_date": "2017-10-23T22:57:25Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 6,
        "object": "contact",
        "first_name": "Matthieu",
        "last_name": "Demarque",
        "gender": "female",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2016-10-24T02:57:25Z",
      "updated_at": "2017-05-30T01:33:36Z"
    },
    {
      "id": 162,
      "object": "reminder",
      "title": "Wish happy birthday to Alexis",
      "description": null,
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": null,
      "next_expected_date": "2018-01-18T14:07:54Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 150,
        "object": "contact",
        "first_name": "Alexis",
        "last_name": "Saettler",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "2017-01-18T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-01-18T19:07:54Z",
      "updated_at": "2017-06-16T19:04:55Z"
    },
    {
      "id": 186,
      "object": "reminder",
      "title": "Wish happy birthday to Héloïse, Danny's child.",
      "description": null,
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": null,
      "next_expected_date": "2017-11-22T02:21:49Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 79172,
        "object": "contact",
        "first_name": "Héloïse",
        "last_name": null,
        "gender": "female",
        "is_partial": true,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "2011-11-22T02:21:49Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-05-30T02:21:49Z",
      "updated_at": "2017-06-16T19:04:49Z"
    },
    {
      "id": 2165,
      "object": "reminder",
      "title": "Anniversaire de mariage",
      "description": "",
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": "2017-08-12T00:00:00Z",
      "next_expected_date": "2018-08-12T00:00:00Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 11668,
        "object": "contact",
        "first_name": "Michel",
        "last_name": "Fleury",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-06-15T21:06:59Z",
      "updated_at": "2017-08-12T00:00:37Z"
    }
  ],
  "links": {
    "first": "https://app.monicahq.com/api/reminders?page=1",
    "last": "https://app.monicahq.com/api/reminders?page=3",
    "prev": null,
    "next": "https://app.monicahq.com/api/reminders?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 3,
    "path": "https://app.monicahq.com/api/reminders",
    "per_page": 10,
    "to": 10,
    "total": 22
  }
}</code></pre>

<a name="list-all-the-reminders-of-a-specific-contact"></a>
## List all the reminders of a specific contact

<span class="url">
  GET /contacts/:id/reminders
</span>

### Response

<pre><code class="json">{
  "data": [
    {
      "id": 2,
      "object": "reminder",
      "title": "Wish happy birthday to Jean",
      "description": null,
      "frequency_type": "year",
      "frequency_number": 1,
      "last_triggered_date": null,
      "next_expected_date": "2017-10-23T00:00:18Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Jean",
        "last_name": "Valjean",
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
      "created_at": "2016-10-07T11:53:43Z",
      "updated_at": "2017-06-16T19:04:54Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/contacts\/1\/reminders?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/contacts\/1\/reminders?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/contacts\/1\/reminders",
    "per_page": 10,
    "to": 1,
    "total": 1
  }
}</code></pre>

<a name="get-a-specific-reminder"></a>
## Get a specific reminder

<span class="url">
  GET /reminders/:id
</span>

### Response

<pre><code class="json">{
  "data": {
    "id": 2,
    "object": "reminder",
    "title": "Wish happy birthday to Jean",
    "description": null,
    "frequency_type": "year",
    "frequency_number": 1,
    "last_triggered_date": null,
    "next_expected_date": "2017-10-23T00:00:18Z",
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "first_name": "Jean",
      "last_name": "Valjean",
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
    "created_at": "2016-10-07T11:53:43Z",
    "updated_at": "2017-06-16T19:04:54Z"
  }
}</code></pre>

<a name="create-a-reminder"></a>
## Create a reminder

<span class="url">
  POST /reminder/
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. The title of the reminder. Max 100000 characters. |
| description | string | A description about what the reminder is. Max 1000000 characters. |
| next_expected_date | string | <strong>Required</strong>. The date, in the future, when we should warn the user about this reminder. Format: YYYY-MM-DD. |
| frequency_type | string | <strong>Required</strong>. The frequency type indicates if the reminder is recurring and if so, what it is. Possible values: `one_time`, `day`, `month`, `year`. |
| frequency_number | integer | The frequency of which the event should occur. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |

### Example

<pre><code class="json">{
  "title": "Call to make sure everything's fine",
  "description": "I want to make sure that everything is ok about him and his wedding.",
  "next_expected_date": "2018-09-09",
  "frequency_type": "day",
  "frequency_number": 3,
  "contact_id": 1
}</code></pre>

### Response

The API call returns a Reminder object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 2,
    "object": "reminder",
    "title": "Call to make sure everything's fine",
    "description": "I want to make sure that everything is ok about him and his wedding.",
    "frequency_type": "day",
    "frequency_number": 3,
    "last_triggered_date": null,
    "next_expected_date": "2018-09-09T00:00:18Z",
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "first_name": "Jean",
      "last_name": "Valjean",
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
    "created_at": "2016-10-07T11:53:43Z",
    "updated_at": "2017-06-16T19:04:54Z"
  }
}</code></pre>

<a name="update-a-reminder"></a>
## Update a reminder

<span class="url">
  PUT /reminders/:id
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. The title of the reminder. Max 100000 characters. |
| description | string | A description about what the reminder is. Max 1000000 characters. |
| next_expected_date | string | <strong>Required</strong>. The date, in the future, when we should warn the user about this reminder. Format: YYYY-MM-DD. |
| frequency_type | string | <strong>Required</strong>. The frequency type indicates if the reminder is recurring and if so, what it is. Possible values: `one_time`, `day`, `month`, `year`. |
| frequency_number | integer | The frequency of which the event should occur. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the call is associated with. |

### Example

<pre><code class="json">{
  "title": "Call to make sure everything's fine",
  "description": "I want to make sure that everything is ok about him and his wedding.",
  "next_expected_date": "2018-09-09",
  "frequency_type": "day",
  "frequency_number": 3,
  "contact_id": 3
}</code></pre>

### Response

<pre><code class="json">{
  "data": {
    "id": 2,
    "object": "reminder",
    "title": "Call to make sure everything's fine",
    "description": "I want to make sure that everything is ok about him and his wedding.",
    "frequency_type": "day",
    "frequency_number": 3,
    "last_triggered_date": null,
    "next_expected_date": "2018-09-09T00:00:18Z",
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "first_name": "Jean",
      "last_name": "Valjean",
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
    "created_at": "2016-10-07T11:53:43Z",
    "updated_at": "2017-06-16T19:04:54Z"
  }
}</code></pre>

<a name="delete-a-reminder"></a>
## Delete a reminder

<span class="url">
  DELETE /reminders/:id
</span>

### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
