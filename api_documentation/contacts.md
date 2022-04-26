# Contacts

<!-- TOC -->

- [Overview](#overview)
    - [Special dates](#special-dates)
- [List all your contacts](#list-all-your-contacts)
    - [Parameters](#parameters)
    - [Response](#response)
    - [Sorting](#sorting)
- [List all the contacts for a given tag](#list-all-the-contacts-for-a-given-tag)
    - [Parameters](#parameters-1)
    - [Response](#response-1)
- [Get a specific contact](#get-a-specific-contact)
    - [Get a `real` contact](#get-a-real-contact)
    - [Get a `partial` contact](#get-a-partial-contact)
    - [Get a contact with contact fields information](#get-a-contact-with-contact-fields-information)
    - [Get the audit logs for the contact](#get-the-audit-logs-for-the-contact)
        - [Parameters](#parameters-2)
- [Create a contact](#create-a-contact)
    - [Input](#input)
    - [Example](#example)
    - [Response](#response-2)
- [Update a contact](#update-a-contact)
    - [Input](#input-1)
    - [Example](#example-1)
    - [Response](#response-3)
- [Update a contact career](#update-a-contact-career)
    - [Input](#input-2)
    - [Example](#example-2)
    - [Response](#response-4)
- [Delete a contact](#delete-a-contact)
    - [Response](#response-5)
- [Search](#search)
        - [Input](#input-3)
        - [Response](#response-6)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

The Contact object is the core of what Monica is all about. The API allows you
to create, delete and update your contacts. You can retrieve individual contacts
as well as a list of all your contacts.

It's important to understand that all the people in Monica are Contact objects -
that includes relationship contacts like kids or significant other. However, there
are two types of contacts:
* `real` contacts
* `partial` contacts.

A `real` contact is a contact that you have a lot of information about -
therefore you can attach activities, reminders, notes, etc... to the object.
Real contacts have their own contact sheet.

A `partial` contact, however, is a person you don't have a lot of information
about. This is typically the spouse of one of your friend, or their child for
whom you only need to remember the names and the date of birth. A `partial`
contact is always linked to a `real` contact. Partial contacts don't have their
own contact sheet and shouldn't have one.

A `partial` contact has the flag `is_partial` set to `true`.

When creating `real` contacts, the only rule is the uniqueness of the email
address in the user's account. If you try to use the same email address when
creating another contact in the account, the API will return an error.

<a id="markdown-special-dates" name="special-dates"></a>
### Special dates

Some dates about a contact are considered "special". Currently three dates have this special type:
* birthdate
* deceased date
* first met date

Those dates are special because they can be based on different factors:
* User knows the exact date: Oct 29 1981.
* User knows only the month and day, but not the year: Oct 29.
* User knows the age, but not the date.
* User doesn't know the date at all.

When you retrieve one of these dates, here is what you get:

<pre><code class="json">{
"birthdate": {
  "is_age_based": false,
  "is_year_unknown": false,
  "date": "1994-01-27T00:00:00Z"
}</code></pre>

* If the `date` field is present and not null, that means we know a date for the birthdate of the contact.
* `is_age_based`: this indicates whether the date is based on the age provided by the user or not. When it is, `date` is set with the right year, but the month and the day should be set to `01`. We can't set a reminder to a date that is age-based.
* `is_year_unknown`: this indicates whether we know the year of birth of the contact or not. If we don't know the year, `date` has to be set to the current year.

Note that `is_year_unknown` and `is_age_based` are mutually exclusive. That means, if `is_age_based` is true, `is_year_unknown` has to be false and vice versa.

Below is a summary of the different use-cases. We assume the current year is 2017.

**I don't know the date of birth of a contact**

Query:
<pre><code class="json">{
...
"birthdate": null,
"birthdate_is_age_based": false,
"birthdate_is_year_unknown": false,
"birthdate_age": null,
...
</code></pre>

Response:
<pre><code class="json">{
"birthdate": {
  "is_age_based": false,
  "is_year_unknown": false,
  "date": null
}</code></pre>

**I only know the age of a contact**

Query:
<pre><code class="json">{
...
"birthdate": null,
"birthdate_is_age_based": true,
"birthdate_is_year_unknown": false,
"birthdate_age": 29,
...
</code></pre>

Response:
<pre><code class="json">{
"birthdate": {
  "is_age_based": true,
  "is_year_unknown": false,
  "date": "1994-01-01T00:00:00Z"
}</code></pre>

**I know the day and month of birth of a contact**

Query:
<pre><code class="json">{
...
"birthdate": "2017-10-29 00:00:00",
"birthdate_is_age_based": false,
"birthdate_is_year_unknown": true,
"birthdate_age": null,
...
</code></pre>

Response:
<pre><code class="json">{
"birthdate": {
  "is_age_based": false,
  "is_year_unknown": true,
  "date": "2017-10-29T00:00:00Z"
}</code></pre>

**I know the day, month and year of birth of a contact**

Query:
<pre><code class="json">{
...
"birthdate": "1994-03-21 00:00:00",
"birthdate_is_age_based": false,
"birthdate_is_year_unknown": false,
"birthdate_age": null,
...
</code></pre>

Response:
<pre><code class="json">{
"birthdate": {
  "is_age_based": false,
  "is_year_unknown": false,
  "date": "1994-03-21T00:00:00Z"
}</code></pre>

<a id="markdown-list-all-your-contacts" name="list-all-your-contacts"></a>
## List all your contacts

<span class="url">
  GET /contacts/
</span>

<a id="markdown-parameters" name="parameters"></a>
### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |
| query | string | Performs a search with the given query. |
| sort | string | Indicates how the query should be ordered by. Possible values: `created_at`, `-created_at`, `updated_at`, `-updated_at`. |

<a id="markdown-response" name="response"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 1,
      "object": "contact",
      "first_name": "Justen",
      "last_name": "Flatley",
      "nickname": "Rambo",
      "gender": "male",
      "pronouns": "he/his",
      "is_partial": false,
      "is_dead": false,
      "last_called": null,
      "last_activity_together": {
        "date": "1977-07-17 00:00:00.000000",
        "timezone_type": 3,
        "timezone": "US\/Eastern"
      },
      "stay_in_touch_frequency": 5,
      "stay_in_touch_trigger_date": "2018-04-26T09:25:43Z",
      "information": {
        "relationships": {
          "love": {
            "total": 0,
            "contacts": []
          },
          "family": {
            "total": 1,
            "contacts": [
              {
                "relationship": {
                  "id": 1,
                  "name": "son",
                },
                "contact": {
                  "id": 2,
                  "object": "contact",
                  "first_name": "Oscar",
                  "last_name": "Tremblay",
                  "nickname": "Rambo",
                  "gender": "male",
                  "is_partial": true,
                  "information": {
                    "birthdate": {
                      "is_age_based": false,
                      "is_year_unknown": true,
                      "date": "2017-11-29T00:00:00Z"
                    }
                  },
                  "account": {
                    "id": 1
                  }
                }
              }
            ]
          },
          "friend": {
            "total": 1,
            "contacts": [
              {
                "relationship": {
                  "id": 1,
                  "name": "son",
                },
                "contact": {
                  "id": 3,
                  "object": "contact",
                  "first_name": "Makayla",
                  "last_name": null,
                  "nickname": "Rambo",
                  "gender": "female",
                  "is_partial": false,
                  "information": {
                    "birthdate": {
                      "is_age_based": false,
                      "is_year_unknown": true,
                      "date": "2017-02-27T00:00:00Z"
                    }
                  },
                  "account": {
                    "id": 1
                  }
                }
              }
            ]
          },
          "work": {
            "total": 0,
            "contacts": []
          }
        },
        "dates": {
          "birthdate": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          },
          "deceased_date": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          }
        },
        "career": {
          "job": null,
          "company": null
        },
        "avatar": {
          "url": "https:\/\/randomuser.me\/api\/portraits\/men\/39.jpg",
          "source": "external"
        },
        "food_preferencies": "Alice was a paper label, with the distant sobs of the March Hare. Visit either you like: they're both mad.' 'But I don't believe you do lessons?' said Alice, 'because I'm not myself, you see.' 'I.",
        "how_you_met": {
          "general_information": "King exclaimed.",
          "first_met_date": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          },
          "first_met_through_contact": {
            "id": 4,
            "object": "contact",
            "first_name": "Johnathon",
            "last_name": "Stark",
            "nickname": "Rambo",
            "gender": "male",
            "is_partial": true,
            "is_dead": false,
            "information": {
              "birthdate": {
                "is_age_based": false,
                "is_year_unknown": true,
                "date": "2017-09-24T00:00:00Z"
              },
              "deceased_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              }
            },
            "account": {
              "id": 1
            }
          }
        }
      },
      "addresses": [],
      "tags": [],
      "statistics": {
        "number_of_calls": 0,
        "number_of_notes": 5,
        "number_of_activities": 3,
        "number_of_reminders": 0,
        "number_of_tasks": 3,
        "number_of_gifts": 7,
        "number_of_debts": 1
      },
      "account": {
        "id": 1
      },
      "created_at": "2017-12-12T09:57:15Z",
      "updated_at": "2017-12-12T09:57:15Z"
    },
    {
      "id": 3,
      "object": "contact",
      "first_name": "Makayla",
      "last_name": null,
      "nickname": "Rambo",
      "gender": "female",
      "is_partial": false,
      "is_dead": false,
      "last_called": null,
      "last_activity_together": null,
      "stay_in_touch_frequency": 5,
      "stay_in_touch_trigger_date": "2018-04-26T09:25:43Z",
      "information": {
        "relationships": {
          "love": {
            "total": 0,
            "contacts": []
          },
          "family": {
            "total": 0,
            "contacts": []
          },
          "friend": {
            "total": 0,
            "contacts": []
          },
          "work": {
            "total": 0,
            "contacts": []
          }
        },
        "dates": {
          "birthdate": {
            "is_age_based": false,
            "is_year_unknown": true,
            "date": "2017-02-27T00:00:00Z"
          },
          "deceased_date": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          }
        },
        "career": {
          "job": null,
          "company": null
        },
        "avatar": {
          "url": null,
          "source": null
        },
        "food_preferencies": null,
        "how_you_met": {
          "general_information": null,
          "first_met_date": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          },
          "first_met_through_contact": null
        }
      },
      "addresses": [],
      "tags": [],
      "statistics": {
        "number_of_calls": 0,
        "number_of_notes": 0,
        "number_of_activities": 0,
        "number_of_reminders": 1,
        "number_of_tasks": 0,
        "number_of_gifts": 0,
        "number_of_debts": 0
      },
      "account": {
        "id": 1
      },
      "created_at": "2017-12-12T09:57:15Z",
      "updated_at": "2017-12-12T09:57:15Z"
    }
  ],
  "links": {
    "first": "http:\/\/monica.app\/api\/contacts?page=1",
    "last": "http:\/\/monica.app\/api\/contacts?page=104",
    "prev": null,
    "next": "http:\/\/monica.app\/api\/contacts?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 104,
    "path": "http:\/\/monica.app\/api\/contacts",
    "per_page": "2",
    "to": 2,
    "total": 208
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

<a id="markdown-list-all-the-contacts-for-a-given-tag" name="list-all-the-contacts-for-a-given-tag"></a>
## List all the contacts for a given tag

This method lists all the contacts for a given tag.

<span class="url">
  GET /tags/{:id}/contacts
</span>

<a id="markdown-parameters-1" name="parameters-1"></a>
### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 117,
      "object": "contact",
      "hash_id": "h:Nvp2EaJrg9Pbl1YyX5",
      "first_name": "Pamela",
      "last_name": null,
      "nickname": null,
      "gender": "Rather not say",
      "gender_type": "O",
      "pronouns": null,
      "is_starred": false,
      "is_partial": false,
      "is_active": true,
      "is_dead": false,
      "is_me": false,
      "last_called": null,
      "last_activity_together": null,
      "stay_in_touch_frequency": null,
      "stay_in_touch_trigger_date": null,
      "information": {
        "relationships": {
          "love": {
            "total": 0,
            "contacts": []
          },
          "family": {
            "total": 0,
            "contacts": []
          },
          "friend": {
            "total": 0,
            "contacts": []
          },
          "work": {
            "total": 0,
            "contacts": []
          }
        },
        "dates": {
          "birthdate": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          },
          "deceased_date": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          }
        },
        "career": {
          "job": null,
          "company": null
        },
        "avatar": {
          "url": "https:\/\/monica.test\/storage\/avatars\/3e0c4041-5140-48fd-a58d-b45d9ea00c46.jpg?1579446390",
          "source": "default",
          "default_avatar_color": "#93521e"
        },
        "food_preferences": null,
        "how_you_met": {
          "general_information": null,
          "first_met_date": {
            "is_age_based": null,
            "is_year_unknown": null,
            "date": null
          },
          "first_met_through_contact": null
        }
      },
      "addresses": [],
      "tags": [
        {
          "id": 104,
          "object": "tag",
          "name": "dicta",
          "name_slug": "dicta",
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:30Z",
          "updated_at": "2020-01-19T15:06:30Z"
        },
        {
          "id": 83,
          "object": "tag",
          "name": "quod",
          "name_slug": "quod",
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:26Z",
          "updated_at": "2020-01-19T15:06:26Z"
        },
        {
          "id": 44,
          "object": "tag",
          "name": "aut",
          "name_slug": "aut",
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:20Z",
          "updated_at": "2020-01-19T15:06:20Z"
        },
        {
          "id": 9,
          "object": "tag",
          "name": "nihil",
          "name_slug": "nihil",
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:17Z",
          "updated_at": "2020-01-19T15:06:17Z"
        },
        {
          "id": 82,
          "object": "tag",
          "name": "in",
          "name_slug": "in",
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:26Z",
          "updated_at": "2020-01-19T15:06:26Z"
        },
        {
          "id": 105,
          "object": "tag",
          "name": "rem",
          "name_slug": "rem",
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:30Z",
          "updated_at": "2020-01-19T15:06:30Z"
        },
        {
          "id": 1,
          "object": "tag",
          "name": "qui",
          "name_slug": "qui",
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:17Z",
          "updated_at": "2020-01-19T15:06:17Z"
        },
        {
          "id": 47,
          "object": "tag",
          "name": "quia",
          "name_slug": "quia",
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:22Z",
          "updated_at": "2020-01-19T15:06:22Z"
        },
        {
          "id": 35,
          "object": "tag",
          "name": "et",
          "name_slug": "et",
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:19Z",
          "updated_at": "2020-01-19T15:06:19Z"
        }
      ],
      "statistics": {
        "number_of_calls": 0,
        "number_of_notes": 1,
        "number_of_activities": 0,
        "number_of_reminders": 0,
        "number_of_tasks": 0,
        "number_of_gifts": 5,
        "number_of_debts": 4
      },
      "contactFields": [],
      "notes": [
        {
          "id": 71,
          "object": "note",
          "body": "Mock Turtle yawned and shut his eyes.--'Tell her about the crumbs,' said the.",
          "is_favorited": true,
          "favorited_at": "2005-10-31T00:00:00Z",
          "url": "https:\/\/monica.test\/api\/notes\/71",
          "account": {
            "id": 1
          },
          "contact": {
            "id": 117,
            "object": "contact",
            "hash_id": "h:Nvp2EaJrg9Pbl1YyX5",
            "first_name": "Pamela",
            "last_name": null,
            "nickname": null,
            "complete_name": "Pamela",
            "initials": "P",
            "gender": "Rather not say",
            "gender_type": "O",
            "is_partial": false,
            "is_dead": false,
            "is_me": false,
            "information": {
              "birthdate": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              },
              "deceased_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              },
              "avatar": {
                "url": "https:\/\/monica.test\/storage\/avatars\/3e0c4041-5140-48fd-a58d-b45d9ea00c46.jpg?1579446390",
                "source": "default",
                "default_avatar_color": "#93521e"
              }
            },
            "url": "https:\/\/monica.test\/api\/contacts\/117",
            "account": {
              "id": 1
            }
          },
          "created_at": "2020-01-19T15:06:30Z",
          "updated_at": "2020-01-19T15:06:30Z"
        }
      ],
      "url": "https:\/\/monica.test\/api\/contacts\/117",
      "account": {
        "id": 1
      },
      "created_at": "2020-01-19T15:06:30Z",
      "updated_at": "2020-01-19T15:06:30Z"
    }
  ],
  "links": {
    "first": "https:\/\/monica.test\/api\/tags\/1\/contacts?page=1",
    "last": "https:\/\/monica.test\/api\/tags\/1\/contacts?page=5",
    "prev": null,
    "next": "https:\/\/monica.test\/api\/tags\/1\/contacts?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 5,
    "path": "https:\/\/monica.test\/api\/tags\/1\/contacts",
    "per_page": "1",
    "to": 1,
    "total": 5
  }
}</code></pre>


<a id="markdown-get-a-specific-contact" name="get-a-specific-contact"></a>
## Get a specific contact

<a id="markdown-get-a-real-contact" name="get-a-real-contact"></a>
### Get a `real` contact

<span class="url">
  GET /contacts/:id
</span>

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "contact",
    "first_name": "Justen",
    "last_name": "Flatley",
    "nickname": "Rambo",
    "gender": "male",
    "pronouns": "they/their",
    "is_partial": false,
    "is_dead": false,
    "last_called": null,
    "last_activity_together": {
      "date": "1977-07-17 00:00:00.000000",
      "timezone_type": 3,
      "timezone": "US\/Eastern"
    },
    "stay_in_touch_frequency": 5,
    "stay_in_touch_trigger_date": "2018-04-26T09:25:43Z",
    "information": {
      "relationships": {
        "love": {
          "total": 0,
          "contacts": []
        },
        "family": {
          "total": 0,
          "contacts": []
        },
        "friend": {
          "total": 0,
          "contacts": []
        },
        "work": {
          "total": 0,
          "contacts": []
        }
      },
      "dates": {
        "birthdate": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        }
      },
      "career": {
        "job": null,
        "company": null
      },
      "avatar": {
        "url": "https:\/\/randomuser.me\/api\/portraits\/men\/39.jpg",
        "source": "external"
      },
      "food_preferencies": "Alice was a paper label, with the distant sobs of the March Hare. Visit either you like: they're both mad.' 'But I don't believe you do lessons?' said Alice, 'because I'm not myself, you see.' 'I.",
      "how_you_met": {
        "general_information": "King exclaimed.",
        "first_met_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "first_met_through_contact": {
          "id": 4,
          "object": "contact",
          "first_name": "Johnathon",
          "last_name": "Stark",
          "nickname": "Rambo",
          "gender": "male",
          "is_partial": true,
          "is_dead": false,
          "information": {
            "birthdate": {
              "is_age_based": false,
              "is_year_unknown": true,
              "date": "2017-09-24T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            }
          },
          "account": {
            "id": 1
          }
        }
      }
    },
    "addresses": [],
    "tags": [],
    "statistics": {
      "number_of_calls": 0,
      "number_of_notes": 5,
      "number_of_activities": 3,
      "number_of_reminders": 0,
      "number_of_tasks": 3,
      "number_of_gifts": 7,
      "number_of_debts": 1
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-12-12T09:57:15Z",
    "updated_at": "2017-12-12T09:57:15Z"
  }
}</code></pre>

<a id="markdown-get-a-partial-contact" name="get-a-partial-contact"></a>
### Get a `partial` contact

Partial contacts are relationship contacts.

<span class="url">
  GET /contacts/:id
</span>

<pre><code class="json">{
  "data": {
    "id": 10,
    "object": "contact",
    "first_name": "Casandra",
    "last_name": null,
    "nickname": "Rambo",
    "gender": "female",
    "pronouns": "she/her"
    "is_partial": true,
    "is_dead": false,
    "information": {
      "dates": {
        "birthdate": {
          "is_age_based": false,
          "is_year_unknown": false,
          "date": "1994-01-27T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        }
      }
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-12-12T09:57:16Z",
    "updated_at": "2017-12-12T09:57:16Z"
  }
}</code></pre>

<a id="markdown-get-a-contact-with-contact-fields-information" name="get-a-contact-with-contact-fields-information"></a>
### Get a contact with contact fields information

Sometimes you need to have more information about a specific contact. This is especially useful in the context of the mobile application, where you need to reduce the amount of calls as much as possible.

The contact fields are added at the bottom of the JSON file that is returned. When doing this call, we also return the latest 3 notes that the user has written about the current contact.

<span class="url">
  GET /contacts/:id?with=contactfields
</span>

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "contact",
    "hash_id": "h:Y5LOkAdWNDqgVomKPv",
    "first_name": "Frieda",
    "last_name": "Mayer",
    "nickname": "Prof. Shawna Kunze",
    "gender": "Woman",
    "gender_type": "F",
    "pronouns": null,
    "is_starred": false,
    "is_partial": false,
    "is_active": true,
    "is_dead": false,
    "is_me": false,
    "last_called": null,
    "last_activity_together": "2019-05-19T00:00:00.000000Z",
    "stay_in_touch_frequency": null,
    "stay_in_touch_trigger_date": null,
    "information": {
      "relationships": {
        "love": {
          "total": 0,
          "contacts": []
        },
        "family": {
          "total": 0,
          "contacts": []
        },
        "friend": {
          "total": 0,
          "contacts": []
        },
        "work": {
          "total": 0,
          "contacts": []
        }
      },
      "dates": {
        "birthdate": {
          "is_age_based": true,
          "is_year_unknown": false,
          "date": "2003-01-01T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        }
      },
      "career": {
        "job": null,
        "company": null
      },
      "avatar": {
        "url": "https:\/\/monica.test\/storage\/avatars\/f7cd73b9-5027-4f66-ab8d-1d578b7a2274.jpg?1579446377",
        "source": "default",
        "default_avatar_color": "#ff9807"
      },
      "food_preferences": "First, she tried the roots of trees, and I've tried to get dry very soon. 'Ahem!' said the Cat. 'I don't think--' 'Then you shouldn't talk,' said the Mock Turtle, capering wildly about. 'Change.",
      "how_you_met": {
        "general_information": null,
        "first_met_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "first_met_through_contact": null
      }
    },
    "addresses": [
      {
        "id": 1,
        "object": "address",
        "name": "qui",
        "street": null,
        "city": "East Mabelleburgh",
        "province": null,
        "postal_code": "61454-4639",
        "latitude": null,
        "longitude": null,
        "country": {
          "id": "SZ",
          "object": "country",
          "name": "Eswatini",
          "iso": "SZ"
        },
        "url": "https:\/\/monica.test\/api\/addresses\/1",
        "account": {
          "id": 1
        },
        "contact": {
          "id": 1,
          "object": "contact",
          "hash_id": "h:Y5LOkAdWNDqgVomKPv",
          "first_name": "Frieda",
          "last_name": "Mayer",
          "nickname": "Prof. Shawna Kunze",
          "complete_name": "Frieda Mayer (Prof. Shawna Kunze)",
          "initials": "FMSK",
          "gender": "Woman",
          "gender_type": "F",
          "is_partial": false,
          "is_dead": false,
          "is_me": false,
          "information": {
            "birthdate": {
              "is_age_based": true,
              "is_year_unknown": false,
              "date": "2003-01-01T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/f7cd73b9-5027-4f66-ab8d-1d578b7a2274.jpg?1579446377",
              "source": "default",
              "default_avatar_color": "#ff9807"
            }
          },
          "url": "https:\/\/monica.test\/api\/contacts\/1",
          "account": {
            "id": 1
          }
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      }
    ],
    "tags": [
      {
        "id": 1,
        "object": "tag",
        "name": "qui",
        "name_slug": "qui",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 2,
        "object": "tag",
        "name": "debitis",
        "name_slug": "debitis",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 3,
        "object": "tag",
        "name": "placeat",
        "name_slug": "placeat",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 4,
        "object": "tag",
        "name": "dolor",
        "name_slug": "dolor",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 5,
        "object": "tag",
        "name": "officiis",
        "name_slug": "officiis",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 6,
        "object": "tag",
        "name": "ad",
        "name_slug": "ad",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 7,
        "object": "tag",
        "name": "eligendi",
        "name_slug": "eligendi",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 8,
        "object": "tag",
        "name": "soluta",
        "name_slug": "soluta",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 9,
        "object": "tag",
        "name": "nihil",
        "name_slug": "nihil",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 10,
        "object": "tag",
        "name": "sit",
        "name_slug": "sit",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      }
    ],
    "statistics": {
      "number_of_calls": 0,
      "number_of_notes": 0,
      "number_of_activities": 2,
      "number_of_reminders": 0,
      "number_of_tasks": 0,
      "number_of_gifts": 7,
      "number_of_debts": 0
    },
    "contactFields": [
      {
        "id": 69,
        "object": "contactfield",
        "content": "asdfas",
        "contact_field_type": {
          "id": 1,
          "object": "contactfieldtype",
          "name": "Email",
          "fontawesome_icon": "fa fa-envelope-open-o",
          "protocol": "mailto:",
          "delible": false,
          "type": "email",
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:17Z",
          "updated_at": "2020-01-19T15:06:17Z"
        },
        "account": {
          "id": 1
        },
        "contact": {
          "id": 1,
          "object": "contact",
          "hash_id": "h:Y5LOkAdWNDqgVomKPv",
          "first_name": "Frieda",
          "last_name": "Mayer",
          "nickname": "Prof. Shawna Kunze",
          "complete_name": "Frieda Mayer (Prof. Shawna Kunze)",
          "initials": "FMSK",
          "gender": "Woman",
          "gender_type": "F",
          "is_partial": false,
          "is_dead": false,
          "is_me": false,
          "information": {
            "birthdate": {
              "is_age_based": true,
              "is_year_unknown": false,
              "date": "2003-01-01T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/f7cd73b9-5027-4f66-ab8d-1d578b7a2274.jpg?1579446377",
              "source": "default",
              "default_avatar_color": "#ff9807"
            }
          },
          "url": "https:\/\/monica.test\/api\/contacts\/1",
          "account": {
            "id": 1
          }
        },
        "created_at": "2020-01-31T22:08:03Z",
        "updated_at": "2020-01-31T22:08:03Z"
      },
      {
        "id": 70,
        "object": "contactfield",
        "content": "sdasdfa",
        "contact_field_type": {
          "id": 3,
          "object": "contactfieldtype",
          "name": "Facebook",
          "fontawesome_icon": "fa fa-facebook-official",
          "protocol": "https:\/\/facebook.com\/",
          "delible": true,
          "type": null,
          "account": {
            "id": 1
          },
          "created_at": "2020-01-19T15:06:17Z",
          "updated_at": "2020-01-19T15:06:17Z"
        },
        "account": {
          "id": 1
        },
        "contact": {
          "id": 1,
          "object": "contact",
          "hash_id": "h:Y5LOkAdWNDqgVomKPv",
          "first_name": "Frieda",
          "last_name": "Mayer",
          "nickname": "Prof. Shawna Kunze",
          "complete_name": "Frieda Mayer (Prof. Shawna Kunze)",
          "initials": "FMSK",
          "gender": "Woman",
          "gender_type": "F",
          "is_partial": false,
          "is_dead": false,
          "is_me": false,
          "information": {
            "birthdate": {
              "is_age_based": true,
              "is_year_unknown": false,
              "date": "2003-01-01T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/f7cd73b9-5027-4f66-ab8d-1d578b7a2274.jpg?1579446377",
              "source": "default",
              "default_avatar_color": "#ff9807"
            }
          },
          "url": "https:\/\/monica.test\/api\/contacts\/1",
          "account": {
            "id": 1
          }
        },
        "created_at": "2020-01-31T22:08:09Z",
        "updated_at": "2020-01-31T22:08:09Z"
      }
    ],
     "notes": [
      {
        "id": 115,
        "object": "note",
        "body": "This is an awesome note",
        "is_favorited": false,
        "favorited_at": null,
        "url": "https:\/\/monica.test\/api\/notes\/115",
        "account": {
          "id": 1
        },
        "contact": {
          "id": 1,
          "object": "contact",
          "hash_id": "h:Y5LOkAdWNDqgVomKPv",
          "first_name": "Frieda",
          "last_name": "Mayer",
          "nickname": "Prof. Shawna Kunze",
          "complete_name": "Frieda Mayer (Prof. Shawna Kunze)",
          "initials": "FMSK",
          "gender": "Woman",
          "gender_type": "F",
          "is_partial": false,
          "is_dead": false,
          "is_me": false,
          "information": {
            "birthdate": {
              "is_age_based": true,
              "is_year_unknown": false,
              "date": "2003-01-01T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/f7cd73b9-5027-4f66-ab8d-1d578b7a2274.jpg?1579446377",
              "source": "default",
              "default_avatar_color": "#ff9807"
            }
          },
          "url": "https:\/\/monica.test\/api\/contacts\/1",
          "account": {
            "id": 1
          }
        },
        "created_at": "2020-01-31T22:30:38Z",
        "updated_at": "2020-01-31T22:30:38Z"
      },
      {
        "id": 114,
        "object": "note",
        "body": "This is another awesome note",
        "is_favorited": false,
        "favorited_at": null,
        "url": "https:\/\/monica.test\/api\/notes\/114",
        "account": {
          "id": 1
        },
        "contact": {
          "id": 1,
          "object": "contact",
          "hash_id": "h:Y5LOkAdWNDqgVomKPv",
          "first_name": "Frieda",
          "last_name": "Mayer",
          "nickname": "Prof. Shawna Kunze",
          "complete_name": "Frieda Mayer (Prof. Shawna Kunze)",
          "initials": "FMSK",
          "gender": "Woman",
          "gender_type": "F",
          "is_partial": false,
          "is_dead": false,
          "is_me": false,
          "information": {
            "birthdate": {
              "is_age_based": true,
              "is_year_unknown": false,
              "date": "2003-01-01T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/f7cd73b9-5027-4f66-ab8d-1d578b7a2274.jpg?1579446377",
              "source": "default",
              "default_avatar_color": "#ff9807"
            }
          },
          "url": "https:\/\/monica.test\/api\/contacts\/1",
          "account": {
            "id": 1
          }
        },
        "created_at": "2020-01-31T22:30:36Z",
        "updated_at": "2020-01-31T22:30:36Z"
      }
    ],
    "url": "https:\/\/monica.test\/api\/contacts\/1",
    "account": {
      "id": 1
    },
    "created_at": "2020-01-19T15:06:17Z",
    "updated_at": "2020-01-31T22:08:09Z"
  }
}</code></pre>

<a id="markdown-get-the-audit-logs-for-the-contact" name="get-the-audit-logs-for-the-contact"></a>
### Get the audit logs for the contact

Audit logs can be filtered by contact.

<span class="url">
  GET /contacts/:id/logs
</span>

<a id="markdown-parameters-2" name="parameters-2"></a>
#### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |

<pre><code class="json">{
  "data": [
    {
      "id": 1,
      "object": "auditlog",
      "author": {
        "id": 1,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Celine Skiles",
        "contact_id": 1
      },
      "audited_at": "2020-02-05T22:02:44Z",
      "created_at": "2020-02-05T22:02:44Z",
      "updated_at": "2020-02-05T22:02:44Z"
    }
  ],
  "links": {
    "first": "https:\/\/monica.test\/api\/contacts\/1\/logs?page=1",
    "last": "https:\/\/monica.test\/api\/contacts\/1\/logs?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/monica.test\/api\/contacts\/1\/logs",
    "per_page": 15,
    "to": 1,
    "total": 1
  }
}</code></pre>

<a id="markdown-create-a-contact" name="create-a-contact"></a>
## Create a contact

<span class="url">
  POST /contacts/
</span>

<a id="markdown-input" name="input"></a>
### Input

If a field is not required, you can send the `null` value as the content of the field.

| Name | Type | Description |
| ---- | ----------- | ----------- |
| first_name | string | <strong>Required</strong>. The first name of the contact. Max 50 characters. |
| last_name | string | Last name of the contact. Max 100 characters. |
| nickname | string | Nickname of the contact. Max 100 characters. |
| gender_id | integer | <strong>Required</strong>. The Gender ID of the contact. Gender IDs are retrieved through the <a href="genders">Gender's API</a>. |
| pronouns|string| Pronouns of contact. Max 50 characters. |
| birthdate_day | integer | Birthdate day of the contact. Required when is_birthdate_known is true and birthdate_is_age_based is false. |
| birthdate_month | integer | Birthdate month of the contact. Required when is_birthdate_known is true and birthdate_is_age_based is false. |
| birthdate_year | integer | Birthdate year of the contact. |
| birthdate_is_age_based | boolean | Indicates whether the birthdate is age based or not. |
| is_birthdate_known | boolean | <strong>Required</strong>. |
| birthdate_age | integer | The number of years between the birthdate and the current year. Required when is_birthdate_known is true and birthdate_is_age_based is true. |
| is_partial | boolean | Indicates whether a contact is `real` (false) or `partial` (true). |
| is_deceased | boolean | <strong>Required</strong>. Indicates whether a contact is deceased. |
| is_deceased_date_known | boolean | <strong>Required</strong>. |
| deceased_date_add_reminder | boolean | Whether add a reminder for the deceased date or not. |
| deceased_date_day | integer | Deceased day of the contact. |
| deceased_date_month | integer | Deceased month of the contact. |
| deceased_date_year | integer | Deceased year of the contact. |
| deceased_date_is_age_based | boolean | Indicates whether the deceased_date is age based or not. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "first_name": "henri",
  "last_name": "troyat",
  "nickname": "Rambo",
  "gender_id": 1,
  "pronouns": "he/his"
  "birthdate_day": null,
  "birthdate_month": null,
  "birthdate_year": null,
  "is_birthdate_known": false,
  "birthdate_is_age_based": true,
  "is_birthdate_known": false,
  "birthdate_age": 29,
  "is_partial": false,
  "is_deceased": true,
  "deceased_date_day": 2,
  "deceased_date_month": 2,
  "deceased_date_year": 2017,
  "deceased_date_is_age_based": false,
  "is_deceased_date_known": true,
}</code></pre>

<a id="markdown-response-2" name="response-2"></a>
### Response

The API call returns a contact object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 206,
    "object": "contact",
    "hash_id": "h:j9ePOdJb0XdbB6EN1R",
    "first_name": "henri",
    "last_name": "troyat",
    "nickname": "Rambo",
    "complete_name": "henri troyat (Rambo) ⚰",
    "description": null,
    "gender": "Man",
    "gender_type": "M",
    "pronouns": "he/his"
    "is_starred": false,
    "is_partial": false,
    "is_active": true,
    "is_dead": true,
    "is_me": false,
    "last_called": null,
    "last_activity_together": null,
    "stay_in_touch_frequency": null,
    "stay_in_touch_trigger_date": null,
    "information": {
      "relationships": {
        "love": {
          "total": 0,
          "contacts": []
        },
        "family": {
          "total": 0,
          "contacts": []
        },
        "friend": {
          "total": 0,
          "contacts": []
        },
        "work": {
          "total": 0,
          "contacts": []
        }
      },
      "dates": {
        "birthdate": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "deceased_date": {
          "is_age_based": false,
          "is_year_unknown": false,
          "date": "2017-02-02T00:00:00Z"
        }
      },
      "career": {
        "job": null,
        "company": null
      },
      "avatar": {
        "url": "https:\/\/monica.test\/storage\/avatars\/600a4566-89fb-4768-a825-0aa19355b722.jpg?1580520601",
        "source": "default",
        "default_avatar_color": "#b3d5fe"
      },
      "food_preferences": null,
      "how_you_met": {
        "general_information": null,
        "first_met_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "first_met_through_contact": null
      }
    },
    "addresses": [],
    "tags": [],
    "statistics": {
      "number_of_calls": 0,
      "number_of_notes": 0,
      "number_of_activities": 0,
      "number_of_reminders": 0,
      "number_of_tasks": 0,
      "number_of_gifts": 0,
      "number_of_debts": 0
    },
    "url": "https:\/\/monica.test\/api\/contacts\/206",
    "account": {
      "id": 1
    },
    "created_at": "2020-02-01T01:30:01Z",
    "updated_at": "2020-02-01T01:30:01Z"
  }
}</code></pre>

<a id="markdown-update-a-contact" name="update-a-contact"></a>
## Update a contact

<span class="url">
  PUT /contacts/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| first_name | string | <strong>Required</strong>. The first name of the contact. Max 50 characters. |
| last_name | string | Last name of the contact. Max 100 characters. |
| nickname | string | Nickname of the contact. Max 100 characters. |
| gender_id | integer | <strong>Required</strong>. The Gender ID of the contact. Gender IDs are retrieved through the <a href="genders">Gender's API</a>. |
| pronouns | string | Pronouns of contact. Max 50 characters.|
| birthdate_day | integer | Birthdate day of the contact. Required when is_birthdate_known is true and birthdate_is_age_based is false. |
| birthdate_month | integer | Birthdate month of the contact. Required when is_birthdate_known is true and birthdate_is_age_based is false. |
| birthdate_year | integer | Birthdate year of the contact. |
| birthdate_is_age_based | boolean | Indicates whether the birthdate is age based or not. |
| is_birthdate_known | boolean | <strong>Required</strong>. |
| birthdate_age | integer | The number of years between the birthdate and the current year. Required when is_birthdate_known is true and birthdate_is_age_based is true. |
| is_partial | boolean | Indicates whether a contact is `real` (false) or `partial` (true). |
| is_deceased | boolean | <strong>Required</strong>. Indicates whether a contact is deceased. |
| is_deceased_date_known | boolean | <strong>Required</strong>. |
| deceased_date_add_reminder | boolean | Whether add a reminder for the deceased date or not. |
| deceased_date_day | integer | Deceased day of the contact. |
| deceased_date_month | integer | Deceased month of the contact. |
| deceased_date_year | integer | Deceased year of the contact. |
| deceased_date_is_age_based | boolean | Indicates whether the deceased_date is age based or not. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
    "first_name": "henri",
    "last_name": "troyat",
    "nickname": "Rambo",
    "gender_id": 1,
    "pronouns": "he/his",
    "birthdate_day": null,
    "birthdate_month": null,
    "birthdate_year": null,
    "birthdate_is_age_based": true,
    "is_birthdate_known": false,
    "birthdate_age": 29,
    "is_partial": false,
    "is_deceased": true,
    "deceased_date": null,
    "deceased_date_is_age_based": true,
    "deceased_date_is_year_unknown": false,
    "deceased_date_age": 98,
    "is_deceased_date_known": false
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "contact",
    "hash_id": "h:Y5LOkAdWNDqgVomKPv",
    "first_name": "henri",
    "last_name": "troyat",
    "nickname": "Rambo",
    "complete_name": "henri troyat (Rambo) ⚰",
    "description": "kjlkjkl",
    "gender": "Man",
    "gender_type": "M",
    "pronouns": "he/his",
    "is_starred": false,
    "is_partial": false,
    "is_active": true,
    "is_dead": true,
    "is_me": false,
    "last_called": null,
    "last_activity_together": "2019-05-19T00:00:00.000000Z",
    "stay_in_touch_frequency": null,
    "stay_in_touch_trigger_date": null,
    "information": {
      "relationships": {
        "love": {
          "total": 0,
          "contacts": []
        },
        "family": {
          "total": 0,
          "contacts": []
        },
        "friend": {
          "total": 0,
          "contacts": []
        },
        "work": {
          "total": 0,
          "contacts": []
        }
      },
      "dates": {
        "birthdate": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        }
      },
      "career": {
        "job": null,
        "company": null
      },
      "avatar": {
        "url": "https:\/\/monica.test\/storage\/avatars\/f7cd73b9-5027-4f66-ab8d-1d578b7a2274.jpg?1580520815",
        "source": "default",
        "default_avatar_color": "#ff9807"
      },
      "food_preferences": "First, she tried the roots of trees, and I've tried to get dry very soon. 'Ahem!' said the Cat. 'I don't think--' 'Then you shouldn't talk,' said the Mock Turtle, capering wildly about. 'Change.",
      "how_you_met": {
        "general_information": null,
        "first_met_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "first_met_through_contact": null
      }
    },
    "addresses": [
      {
        "id": 1,
        "object": "address",
        "name": "qui",
        "street": null,
        "city": "East Mabelleburgh",
        "province": null,
        "postal_code": "61454-4639",
        "latitude": null,
        "longitude": null,
        "country": {
          "id": "SZ",
          "object": "country",
          "name": "Eswatini",
          "iso": "SZ"
        },
        "url": "https:\/\/monica.test\/api\/addresses\/1",
        "account": {
          "id": 1
        },
        "contact": {
          "id": 1,
          "object": "contact",
          "hash_id": "h:Y5LOkAdWNDqgVomKPv",
          "first_name": "henri",
          "last_name": "troyat",
          "nickname": "Rambo",
          "complete_name": "henri troyat (Rambo) ⚰",
          "initials": "ht",
          "gender": "Man",
          "gender_type": "M",
          "is_partial": false,
          "is_dead": true,
          "is_me": false,
          "information": {
            "birthdate": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/f7cd73b9-5027-4f66-ab8d-1d578b7a2274.jpg?1580520815",
              "source": "default",
              "default_avatar_color": "#ff9807"
            }
          },
          "url": "https:\/\/monica.test\/api\/contacts\/1",
          "account": {
            "id": 1
          }
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      }
    ],
    "tags": [
      {
        "id": 1,
        "object": "tag",
        "name": "qui",
        "name_slug": "qui",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 2,
        "object": "tag",
        "name": "debitis",
        "name_slug": "debitis",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 3,
        "object": "tag",
        "name": "placeat",
        "name_slug": "placeat",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 4,
        "object": "tag",
        "name": "dolor",
        "name_slug": "dolor",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 5,
        "object": "tag",
        "name": "officiis",
        "name_slug": "officiis",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 6,
        "object": "tag",
        "name": "ad",
        "name_slug": "ad",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 7,
        "object": "tag",
        "name": "eligendi",
        "name_slug": "eligendi",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 8,
        "object": "tag",
        "name": "soluta",
        "name_slug": "soluta",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 9,
        "object": "tag",
        "name": "nihil",
        "name_slug": "nihil",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 10,
        "object": "tag",
        "name": "sit",
        "name_slug": "sit",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      }
    ],
    "statistics": {
      "number_of_calls": 0,
      "number_of_notes": 2,
      "number_of_activities": 2,
      "number_of_reminders": 0,
      "number_of_tasks": 0,
      "number_of_gifts": 7,
      "number_of_debts": 0
    },
    "url": "https:\/\/monica.test\/api\/contacts\/1",
    "account": {
      "id": 1
    },
    "created_at": "2020-01-19T15:06:17Z",
    "updated_at": "2020-02-01T01:33:35Z"
  }
}</code></pre>


<a id="markdown-update-a-contact-career" name="update-a-contact-career"></a>
## Update a contact career

<span class="url">
  PUT /contacts/:id/work
</span>

<a id="markdown-input-2" name="input-2"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| job | string | The job title. Max 255 characters. |
| company | string | The company name. Max 255 characters. |

<a id="markdown-example-2" name="example-2"></a>
### Example

<pre><code class="json">{
  "job": "Big boss",
  "company": "Monicahq"
}</code></pre>

<a id="markdown-response-4" name="response-4"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "contact",
    "hash_id": "h:Y5LOkAdWNDqgVomKPv",
    "first_name": "henri",
    "last_name": "troyat",
    "nickname": "Rambo",
    "complete_name": "henri troyat (Rambo) ⚰",
    "description": "kjlkjkl",
    "gender": "Man",
    "gender_type": "M",
    "pronouns": null,
    "is_starred": false,
    "is_partial": false,
    "is_active": true,
    "is_dead": true,
    "is_me": false,
    "last_called": null,
    "last_activity_together": "2019-05-19T00:00:00.000000Z",
    "stay_in_touch_frequency": null,
    "stay_in_touch_trigger_date": null,
    "information": {
      "relationships": {
        "love": {
          "total": 0,
          "contacts": []
        },
        "family": {
          "total": 0,
          "contacts": []
        },
        "friend": {
          "total": 0,
          "contacts": []
        },
        "work": {
          "total": 0,
          "contacts": []
        }
      },
      "dates": {
        "birthdate": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        }
      },
      "career": {
        "job": "sales",
        "company": "dunder mifflin"
      },
      "avatar": {
        "url": "https:\/\/monica.test\/storage\/avatars\/f7cd73b9-5027-4f66-ab8d-1d578b7a2274.jpg?1580520930",
        "source": "default",
        "default_avatar_color": "#ff9807"
      },
      "food_preferences": "First, she tried the roots of trees, and I've tried to get dry very soon. 'Ahem!' said the Cat. 'I don't think--' 'Then you shouldn't talk,' said the Mock Turtle, capering wildly about. 'Change.",
      "how_you_met": {
        "general_information": null,
        "first_met_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "first_met_through_contact": null
      }
    },
    "addresses": [
      {
        "id": 1,
        "object": "address",
        "name": "qui",
        "street": null,
        "city": "East Mabelleburgh",
        "province": null,
        "postal_code": "61454-4639",
        "latitude": null,
        "longitude": null,
        "country": {
          "id": "SZ",
          "object": "country",
          "name": "Eswatini",
          "iso": "SZ"
        },
        "url": "https:\/\/monica.test\/api\/addresses\/1",
        "account": {
          "id": 1
        },
        "contact": {
          "id": 1,
          "object": "contact",
          "hash_id": "h:Y5LOkAdWNDqgVomKPv",
          "first_name": "henri",
          "last_name": "troyat",
          "nickname": "Rambo",
          "complete_name": "henri troyat (Rambo) ⚰",
          "initials": "ht",
          "gender": "Man",
          "gender_type": "M",
          "is_partial": false,
          "is_dead": true,
          "is_me": false,
          "information": {
            "birthdate": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/f7cd73b9-5027-4f66-ab8d-1d578b7a2274.jpg?1580520930",
              "source": "default",
              "default_avatar_color": "#ff9807"
            }
          },
          "url": "https:\/\/monica.test\/api\/contacts\/1",
          "account": {
            "id": 1
          }
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      }
    ],
    "tags": [
      {
        "id": 1,
        "object": "tag",
        "name": "qui",
        "name_slug": "qui",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 2,
        "object": "tag",
        "name": "debitis",
        "name_slug": "debitis",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 3,
        "object": "tag",
        "name": "placeat",
        "name_slug": "placeat",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 4,
        "object": "tag",
        "name": "dolor",
        "name_slug": "dolor",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 5,
        "object": "tag",
        "name": "officiis",
        "name_slug": "officiis",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 6,
        "object": "tag",
        "name": "ad",
        "name_slug": "ad",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 7,
        "object": "tag",
        "name": "eligendi",
        "name_slug": "eligendi",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 8,
        "object": "tag",
        "name": "soluta",
        "name_slug": "soluta",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 9,
        "object": "tag",
        "name": "nihil",
        "name_slug": "nihil",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      },
      {
        "id": 10,
        "object": "tag",
        "name": "sit",
        "name_slug": "sit",
        "account": {
          "id": 1
        },
        "created_at": "2020-01-19T15:06:17Z",
        "updated_at": "2020-01-19T15:06:17Z"
      }
    ],
    "statistics": {
      "number_of_calls": 0,
      "number_of_notes": 2,
      "number_of_activities": 2,
      "number_of_reminders": 0,
      "number_of_tasks": 0,
      "number_of_gifts": 7,
      "number_of_debts": 0
    },
    "url": "https:\/\/monica.test\/api\/contacts\/1",
    "account": {
      "id": 1
    },
    "created_at": "2020-01-19T15:06:17Z",
    "updated_at": "2020-02-01T01:37:50Z"
  }
}</code></pre>

<a id="markdown-delete-a-contact" name="delete-a-contact"></a>
## Delete a contact

<span class="url">
  DELETE /contacts/:id
</span>

<a id="markdown-response-5" name="response-5"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 93135
}</code></pre>

<a id="markdown-search" name="search"></a>
## Search

You can search specific contacts. Here are the fields that search takes into account:
* first name
* last name
* food preferencies
* job
* company.

<span class="url">
  GET /contacts?query=regis
</span>

<a id="markdown-input-3" name="input-3"></a>
#### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| query | string | <strong>Required</strong>. The string you'd like to search. |

<a id="markdown-response-6" name="response-6"></a>
#### Response

This call returns a collection of contacts. Note that `body.meta.query` contains the query you wanted to search.

<pre><code class="json">{
    "data": [
        {
            "id": 117,
            "object": "contact",
            "first_name": "Collin",
            "last_name": "Moen",
            "nickname": "Rambo",
            "gender": "Man",
            "pronouns": null,
            "is_partial": false,
            "is_dead": false,
            "last_called": null,
            "last_activity_together": null,
            "stay_in_touch_frequency": 5,
            "stay_in_touch_trigger_date": "2018-04-26T09:25:43Z",
            "information": {
                "relationships": {
                  "love": {
                    "total": 0,
                    "contacts": []
                  },
                  "family": {
                    "total": 0,
                    "contacts": []
                  },
                  "friend": {
                    "total": 0,
                    "contacts": []
                  },
                  "work": {
                    "total": 0,
                    "contacts": []
                  }
                },
                "dates": {
                    "birthdate": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                    },
                    "deceased_date": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                    }
                },
                "career": {
                    "job": null,
                    "company": null
                },
                "avatar": {
                    "url": null,
                    "source": null,
                    "default_avatar_color": "#fdb660"
                },
                "food_preferencies": null,
                "how_you_met": {
                    "general_information": null,
                    "first_met_date": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                    },
                    "first_met_through_contact": null
                }
            },
            "addresses": [
                {
                    "id": 7,
                    "object": "address",
                    "name": "beatae",
                    "street": "88761 Hallie Walk Apt. 685",
                    "city": null,
                    "province": null,
                    "postal_code": null,
                    "country": {
                        "id": 154,
                        "object": "country",
                        "name": "Montenegro",
                        "iso": "me"
                    },
                    "created_at": "2018-02-18T10:36:02Z",
                    "updated_at": "2018-02-18T10:36:02Z"
                }
            ],
            "tags": [],
            "statistics": {
                "number_of_calls": 0,
                "number_of_notes": 2,
                "number_of_activities": 0,
                "number_of_reminders": 1,
                "number_of_tasks": 0,
                "number_of_gifts": 0,
                "number_of_debts": 4
            },
            "account": {
                "id": 1
            },
            "created_at": "2018-02-18T10:36:02Z",
            "updated_at": "2018-02-25T11:17:18Z"
        }
    ],
    "links": {
        "first": "http://monica.test/api/contacts?page=1",
        "last": "http://monica.test/api/contacts?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http://monica.test/api/contacts",
        "per_page": 15,
        "to": 1,
        "total": 1,
        "query": "collin"
    }
}</code></pre>
