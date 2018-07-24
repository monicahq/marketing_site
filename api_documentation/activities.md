# Activities

<!-- TOC -->

- [Overview](#overview)
- [List all the activities in your account](#list-all-the-activities-in-your-account)
    - [Parameters](#parameters)
    - [Response](#response)
- [List all the activities of a specific contact](#list-all-the-activities-of-a-specific-contact)
    - [Response](#response-1)
- [Get a specific activity](#get-a-specific-activity)
    - [Response](#response-2)
- [Create an activity](#create-an-activity)
    - [Input](#input)
    - [Example](#example)
    - [Response](#response-3)
- [Update an activity](#update-an-activity)
    - [Input](#input-1)
    - [Example](#example-1)
    - [Response](#response-4)
- [Delete an activity](#delete-an-activity)
    - [Response](#response-5)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

The Activity object represents activities made with one or more contacts. Use it
to keep track of what you've done. An activity can't be orphan - it needs to be
linked to at least one contact.

When retrieving an activity, we always also return some basic information about
the related contact(s).

<a id="markdown-list-all-the-activities-in-your-account" name="list-all-the-activities-in-your-account"></a>
## List all the activities in your account

<span class="url">
  GET /activities/
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
      "object": "activity",
      "summary": "",
      "description": "On a mangé avec papi et mamie au restaurant indien.",
      "date_it_happened": "2016-10-04T07:59:14Z",
      "activity_type": {
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
}</code></pre>

<a id="markdown-list-all-the-activities-of-a-specific-contact" name="list-all-the-activities-of-a-specific-contact"></a>
## List all the activities of a specific contact

<span class="url">
  GET /contacts/:id/activities
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 2,
      "object": "activity",
      "summary": "Lunch with Dwight",
      "description": "We play handball and it was just awesome. He told me about a new girl he likes Cathy Simms, so he has to be careful.",
      "date_it_happened": "2016-10-18T13:09:47Z",
      "activity_type": {
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
}</code></pre>

<a id="markdown-get-a-specific-activity" name="get-a-specific-activity"></a>
## Get a specific activity

<span class="url">
  GET /activities/:id
</span>

<a id="markdown-response-2" name="response-2"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 2,
    "object": "activity",
    "summary": "Lunch with Dwight",
    "description": "We play handball and it was just awesome. He told me about a new girl he likes Cathy Simms, so he has to be careful.",
    "date_it_happened": "2016-10-18T13:09:47Z",
    "activity_type": {
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
}</code></pre>

<a id="markdown-create-an-activity" name="create-an-activity"></a>
## Create an activity

<span class="url">
  POST /activities/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| summary | string | <strong>Required</strong>. A short description of the activity. Max 255 characters. |
| description | string | An optional comment to add more details on what happened. Max 1000000 characters. |
| date_it_happened | string | <strong>Required</strong>. The date the event happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| activity_type_id | integer | The ID of the type of activity that the activity is associated with. |
| contacts | array | <strong>Required</strong>. The ID of the contact(s) that the call is associated with. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "summary": "We ate at an awesome restaurant.",
  "description": "We ate way too much, we had fun and we promised we'd see each other again in a couple of weeks.",
  "date_it_happened": "2018-02-02",
  "activity_type_id": 2,
  "contacts": [1,3,5]
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

The API call returns an Activity object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 4670,
    "object": "activity",
    "summary": "We ate at an awesome restaurant.",
    "description": "We ate way too much, we had fun and we promised we'd see each other again in a couple of weeks.",
    "date_it_happened": "2018-02-02T00:00:00Z",
    "activity_type": {
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
}</code></pre>

<a id="markdown-update-an-activity" name="update-an-activity"></a>
## Update an activity

<span class="url">
  PUT /activities/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| summary | string | <strong>Required</strong>. A short description of the activity. Max 255 characters. |
| description | string | An optional comment to add more details on what happened. Max 1000000 characters. |
| date_it_happened | string | <strong>Required</strong>. The date the event happened. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |
| activity_type_id | integer | The ID of the type of activity that the activity is associated with. |
| contacts | array | <strong>Required</strong>. The ID of the contact(s) that the call is associated with. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "summary": "We ate at an awesome restaurant.",
  "description": "We ate way too much, we had fun and we promised we'd see each other again in a couple of weeks.",
  "date_it_happened": "2018-02-02",
  "activity_type_id": 2,
  "contacts": [1,3]
}</code></pre>

<a id="markdown-response-4" name="response-4"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 4670,
    "object": "activity",
    "summary": "We ate at an awesome restaurant.",
    "description": "We ate way too much, we had fun and we promised we'd see each other again in a couple of weeks.",
    "date_it_happened": "2018-02-02T00:00:00Z",
    "activity_type": {
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
}</code></pre>

<a id="markdown-delete-an-activity" name="delete-an-activity"></a>
## Delete an activity

<span class="url">
  DELETE /activities/:id
</span>

<a id="markdown-response-5" name="response-5"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
