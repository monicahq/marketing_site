## Overview

The Activity object represents activities made with one or more contacts. Use it
to keep track of what you've done. An activity can't be orphan - it needs to be
linked to at least one contact.

When retrieving an activity, we always also return some basic information about
the related contact(s).

## List all the activities in your account

<url>
  GET /activities/
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
      "id": 1,
      "object": "activity",
      "summary": "",
      "description": "On a mangé avec papi et mamie au restaurant indien.",
      "date_it_happened": "2016-10-04T07:59:14Z",
      "activity_type": {
        "id": 9,
        "object": "activityType",
        "type": "ate_restaurant",
        "group": "food",
        "location_type": "outside",
        "created_at": "2017-01-17T17:06:34Z",
        "updated_at": "2017-01-17T17:06:34Z"
      },
      "attendees": {
        "total": 1,
        "contacts": [
          {
            "id": 1,
            "object": "contact",
            "first_name": "Henri",
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
          }
        ]
      },
      "account": {
        "id": 1
      },
      "created_at": "2016-10-07T11:59:14Z",
      "updated_at": "2017-05-03T01:42:28Z"
    },
    {
      "id": 2,
      "object": "activity",
      "summary": "Lunch with Dwight",
      "description": "We play handball and it was just awesome. He told me about a new girl he likes Cathy Simms, so he has to be careful.",
      "date_it_happened": "2016-10-18T13:09:47Z",
      "activity_type": {
        "id": 4,
        "object": "activityType",
        "type": "did_sport_activities_together",
        "group": "sport",
        "location_type": "outside",
        "created_at": "2017-01-17T17:06:34Z",
        "updated_at": "2017-01-17T17:06:34Z"
      },
      "attendees": {
        "total": 1,
        "contacts": [
          {
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
          }
        ]
      },
      "account": {
        "id": 1
      },
      "created_at": "2016-10-18T23:58:18Z",
      "updated_at": "2017-06-07T13:09:47Z"
    },
    {
      "id": 42,
      "object": "activity",
      "summary": "",
      "description": null,
      "date_it_happened": "2017-02-18T23:59:47Z",
      "activity_type": {
        "id": 4,
        "object": "activityType",
        "type": "did_sport_activities_together",
        "group": "sport",
        "location_type": "outside",
        "created_at": "2017-01-17T17:06:34Z",
        "updated_at": "2017-01-17T17:06:34Z"
      },
      "attendees": {
        "total": 1,
        "contacts": [
          {
            "id": 1,
            "object": "contact",
            "first_name": "Henri",
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
          }
        ]
      },
      "account": {
        "id": 1
      },
      "created_at": "2017-02-18T23:59:47Z",
      "updated_at": "2017-02-18T23:59:47Z"
    },
    {
      "id": 4667,
      "object": "activity",
      "summary": "Theater",
      "description": "We had such an incredible time doing all this.",
      "date_it_happened": "2017-10-25T00:00:00Z",
      "activity_type": null,
      "attendees": {
        "total": 3,
        "contacts": [
          {
            "id": 7,
            "object": "contact",
            "first_name": "Alexandre",
            "last_name": "Trioi",
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
          {
            "id": 1,
            "object": "contact",
            "first_name": "Henri",
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
          {
            "id": 79120,
            "object": "contact",
            "first_name": "Cecelia Marie",
            "last_name": null,
            "gender": "female",
            "is_partial": true,
            "information": {
              "dates": [
                {
                  "name": "birthdate",
                  "is_birthdate_approximate": "approximate",
                  "birthdate": "2013-01-01T23:55:58Z"
                }
              ]
            },
            "account": {
              "id": 1
            }
          }
        ]
      },
      "account": {
        "id": 1
      },
      "created_at": "2017-10-25T11:12:20Z",
      "updated_at": "2017-10-25T11:12:20Z"
    },
    {
      "id": 4669,
      "object": "activity",
      "summary": "We ate at an awesome restaurant.",
      "description": "We ate way too much, we had fun and we promised we'd see each other again in a couple of weeks.",
      "date_it_happened": "2018-02-02T00:00:00Z",
      "activity_type": {
        "id": 2,
        "object": "activityType",
        "type": "watched_movie_at_home",
        "group": "simple_activities",
        "location_type": "my_place",
        "created_at": "2017-01-17T17:06:34Z",
        "updated_at": "2017-01-17T17:06:34Z"
      },
      "attendees": {
        "total": 1,
        "contacts": [
          {
            "id": 1,
            "object": "contact",
            "first_name": "Henri",
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
          }
        ]
      },
      "account": {
        "id": 1
      },
      "created_at": "2017-10-25T11:44:49Z",
      "updated_at": "2017-10-25T11:44:49Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/activities?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/activities?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/activities",
    "per_page": 10,
    "to": 5,
    "total": 5
  }
}
{% endhighlight %}

## List all the activities of a specific contact

<url>
  GET /contacts/:id/activities
</url>

### Response

{% highlight json %}
{
  "data": [
    {
      "id": 2,
      "object": "activity",
      "summary": "Lunch with Dwight",
      "description": "We play handball and it was just awesome. He told me about a new girl he likes Cathy Simms, so he has to be careful.",
      "date_it_happened": "2016-10-18T13:09:47Z",
      "activity_type": {
        "id": 4,
        "object": "activityType",
        "type": "did_sport_activities_together",
        "group": "sport",
        "location_type": "outside",
        "created_at": "2017-01-17T17:06:34Z",
        "updated_at": "2017-01-17T17:06:34Z"
      },
      "attendees": {
        "total": 1,
        "contacts": [
          {
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
          }
        ]
      },
      "account": {
        "id": 1
      },
      "created_at": "2016-10-18T23:58:18Z",
      "updated_at": "2017-06-07T13:09:47Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/contacts\/8\/activities?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/contacts\/8\/activities?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/contacts\/8\/activities",
    "per_page": 10,
    "to": 1,
    "total": 1
  }
}
{% endhighlight %}

## Get a specific activity

<url>
  GET /activities/:id
</url>

### Response

{% highlight json %}
{
  "data": {
    "id": 2,
    "object": "activity",
    "summary": "Lunch with Dwight",
    "description": "We play handball and it was just awesome. He told me about a new girl he likes Cathy Simms, so he has to be careful.",
    "date_it_happened": "2016-10-18T13:09:47Z",
    "activity_type": {
      "id": 4,
      "object": "activityType",
      "type": "did_sport_activities_together",
      "group": "sport",
      "location_type": "outside",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    "attendees": {
      "total": 1,
      "contacts": [
        {
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
        }
      ]
    },
    "account": {
      "id": 1
    },
    "created_at": "2016-10-18T23:58:18Z",
    "updated_at": "2017-06-07T13:09:47Z"
  }
}
{% endhighlight %}

## Create an activity

<url>
  POST /activities/
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| summary | string | <strong>Required</strong>. A short description of the activity. Max 255 characters. |
| description | string | An optional comment to add more details on what happened. Max 1000000 characters. |
| date_it_happened | string | <strong>Required</strong>. The date the event happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| activity_type_id | integer | The ID of the type of activity that the activity is associated with. |
| contacts | array | <strong>Required</strong>. The ID of the contact(s) that the call is associated with. |

### Example

{% highlight json %}
{
  "summary": "We ate at an awesome restaurant.",
  "description": "We ate way too much, we had fun and we promised we'd see each other again in a couple of weeks.",
  "date_it_happened": "2018-02-02",
  "activity_type_id": 2,
  "contacts": [1,3,5]
}
{% endhighlight %}

### Response

The API call returns an Activity object if the call succeeds.

{% highlight json %}
{
  "data": {
    "id": 4670,
    "object": "activity",
    "summary": "We ate at an awesome restaurant.",
    "description": "We ate way too much, we had fun and we promised we'd see each other again in a couple of weeks.",
    "date_it_happened": "2018-02-02T00:00:00Z",
    "activity_type": {
      "id": 2,
      "object": "activityType",
      "type": "watched_movie_at_home",
      "group": "simple_activities",
      "location_type": "my_place",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    "attendees": {
      "total": 3,
      "contacts": [
        {
          "id": 1,
          "object": "contact",
          "first_name": "Henri",
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
        {
          "id": 2,
          "object": "contact",
          "first_name": "Nicolas",
          "last_name": "Loriu",
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
        {
          "id": 7,
          "object": "contact",
          "first_name": "Alexandre",
          "last_name": "Loap",
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
        }
      ]
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-10-25T12:46:55Z",
    "updated_at": "2017-10-25T12:46:55Z"
  }
}
{% endhighlight %}

## Update an activity

<url>
  PUT /activities/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| summary | string | <strong>Required</strong>. A short description of the activity. Max 255 characters. |
| description | string | An optional comment to add more details on what happened. Max 1000000 characters. |
| date_it_happened | string | <strong>Required</strong>. The date the event happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| activity_type_id | integer | The ID of the type of activity that the activity is associated with. |
| contacts | array | <strong>Required</strong>. The ID of the contact(s) that the call is associated with. |

### Example

{% highlight json %}
{
  "summary": "We ate at an awesome restaurant.",
  "description": "We ate way too much, we had fun and we promised we'd see each other again in a couple of weeks.",
  "date_it_happened": "2018-02-02",
  "activity_type_id": 2,
  "contacts": [1,3]
}
{% endhighlight %}

### Response

{% highlight json %}
{
  "data": {
    "id": 4670,
    "object": "activity",
    "summary": "We ate at an awesome restaurant.",
    "description": "We ate way too much, we had fun and we promised we'd see each other again in a couple of weeks.",
    "date_it_happened": "2018-02-02T00:00:00Z",
    "activity_type": {
      "id": 2,
      "object": "activityType",
      "type": "watched_movie_at_home",
      "group": "simple_activities",
      "location_type": "my_place",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    "attendees": {
      "total": 2,
      "contacts": [
        {
          "id": 1,
          "object": "contact",
          "first_name": "Henri",
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
        {
          "id": 3,
          "object": "contact",
          "first_name": "David",
          "last_name": "Calir",
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
        }
      ]
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-10-25T12:46:55Z",
    "updated_at": "2017-10-25T12:46:55Z"
  }
}
{% endhighlight %}

## Delete an activity

<url>
  DELETE /activities/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 31
}
{% endhighlight %}

## List of all activity types

An activity can optionally be associated with an activity type, like
"restaurant" or "talked at home". At the moment, it's not possible to create
custom activity types, but this feature will eventually be implemented. Activity
types are a bit useless at the moment, but we'll use them to display to a user
what kind of activities he's doing with his contacts.

<url>
  GET /activitytypes
</url>

### Response

{% highlight json %}
{
  "data": [
    {
      "id": 1,
      "object": "activityType",
      "type": "just_hung_out",
      "group": "simple_activities",
      "location_type": "outside",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 2,
      "object": "activityType",
      "type": "watched_movie_at_home",
      "group": "simple_activities",
      "location_type": "my_place",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 3,
      "object": "activityType",
      "type": "talked_at_home",
      "group": "simple_activities",
      "location_type": "my_place",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 4,
      "object": "activityType",
      "type": "did_sport_activities_together",
      "group": "sport",
      "location_type": "outside",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 5,
      "object": "activityType",
      "type": "ate_at_his_place",
      "group": "food",
      "location_type": "his_place",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 6,
      "object": "activityType",
      "type": "went_bar",
      "group": "food",
      "location_type": "outside",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 7,
      "object": "activityType",
      "type": "ate_at_home",
      "group": "food",
      "location_type": "my_place",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 8,
      "object": "activityType",
      "type": "picknicked",
      "group": "food",
      "location_type": "outside",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 9,
      "object": "activityType",
      "type": "ate_restaurant",
      "group": "food",
      "location_type": "outside",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 10,
      "object": "activityType",
      "type": "went_theater",
      "group": "cultural_activities",
      "location_type": "outside",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 11,
      "object": "activityType",
      "type": "went_concert",
      "group": "cultural_activities",
      "location_type": "outside",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 12,
      "object": "activityType",
      "type": "went_play",
      "group": "cultural_activities",
      "location_type": "outside",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    },
    {
      "id": 13,
      "object": "activityType",
      "type": "went_museum",
      "group": "cultural_activities",
      "location_type": "outside",
      "created_at": "2017-01-17T17:06:34Z",
      "updated_at": "2017-01-17T17:06:34Z"
    }
  ]
}
{% endhighlight %}
