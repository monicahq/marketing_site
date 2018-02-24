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
* [Associate a tag to a contact](#associate-a-tag-to-a-contact)
* [Remove a specific tag from a contact](#remove-a-specific-tag-from-a-contact)
* [Remove all the tags from a contact](#remove-all-the-tags-from-a-contact)

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


<a name="associate-a-tag-to-a-contact"></a>
## Associate a tag to a contact

A tag is only useful if linked to a contact. To associate a tag to a contact, simply call the following method and give an array of tag name. The call automatically manages whether a tag with the given name already exists and will only create tags that do not exist yet.

Let's say that you have one tag in your account, called `family`. Let's also assume that you are sending this array:

<pre><code class="json">{
  "tags": ["family", "friend"]
}</code></pre>

`friend` does not exist yet in the user's account, therefore it will be automatically created, whereas the `family` tag will not be created and only be associated with the contact.

Please note that calling this method will add the given tags to the contact without removing those which might already be associated with the contact.

<span class="url">
  POST /contacts/:id/setTags
</span>

### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| tags | array | <strong>Required</strong>. A list of tags, as string, separated by a comma. |

### Example

<pre><code class="json">{
  "tags": ["family", "friend"]
}</code></pre>

### Response

The response sends back a standard Contact object.

<pre><code class="json">{
    "data": {
        "id": 1,
        "object": "contact",
        "first_name": "Odell",
        "last_name": "McKenzie",
        "gender": "Man",
        "is_partial": false,
        "is_dead": false,
        "last_called": null,
        "last_activity_together": {
            "date": "2017-10-22 00:00:00.000000",
            "timezone_type": 3,
            "timezone": "US/Eastern"
        },
        "information": {
            "family": {
                "kids": {
                    "total": 4,
                    "kids": [
                        {
                            "id": 2,
                            "object": "contact",
                            "first_name": "Oleta",
                            "last_name": "Hintz",
                            "gender": "Woman",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-08-16T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 3,
                            "object": "contact",
                            "first_name": "Lloyd",
                            "last_name": "Connelly",
                            "gender": "Woman",
                            "is_partial": false,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-06-18T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 4,
                            "object": "contact",
                            "first_name": "Burley",
                            "last_name": null,
                            "gender": "Woman",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": false,
                                    "date": "1922-11-06T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 5,
                            "object": "contact",
                            "first_name": "Ben",
                            "last_name": null,
                            "gender": "Man",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-03-17T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        }
                    ]
                },
                "partners": {
                    "total": 3,
                    "partners": [
                        {
                            "id": 6,
                            "object": "contact",
                            "first_name": "Weston",
                            "last_name": "Lowe",
                            "gender": "Man",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": false,
                                    "date": "1950-12-21T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 7,
                            "object": "contact",
                            "first_name": "Zelda",
                            "last_name": "Kessler",
                            "gender": "Rather not say",
                            "is_partial": false,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-08-04T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 8,
                            "object": "contact",
                            "first_name": "Annetta",
                            "last_name": null,
                            "gender": "Woman",
                            "is_partial": false,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": false,
                                    "date": "1967-06-19T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        }
                    ]
                },
                "progenitors": {
                    "total": 0,
                    "progenitors": []
                }
            },
            "dates": {
                "birthdate": {
                    "is_age_based": false,
                    "is_year_unknown": false,
                    "date": "1979-01-08T00:00:00Z"
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
                "url": "https://randomuser.me/api/portraits/men/62.jpg",
                "source": "external",
                "default_avatar_color": "#fdb660"
            },
            "food_preferencies": "I can't get out again. Suddenly she came upon a time she had nibbled some more tea,' the March Hare went 'Sh! sh!' and the bright flower-beds and the other side of WHAT? The other guests had taken.",
            "how_you_met": {
                "general_information": null,
                "first_met_date": {
                    "is_age_based": false,
                    "is_year_unknown": true,
                    "date": "2018-06-08T00:00:00Z"
                },
                "first_met_through_contact": null
            }
        },
        "addresses": [],
        "tags": [
            {
                "id": 1,
                "object": "tag",
                "name": "friends",
                "name_slug": "friends",
                "account": {
                    "id": 1
                },
                "created_at": "2018-02-24T09:27:05Z",
                "updated_at": "2018-02-24T09:27:05Z"
            },
            {
                "id": 2,
                "object": "tag",
                "name": "family",
                "name_slug": "family",
                "account": {
                    "id": 1
                },
                "created_at": "2018-02-24T09:27:05Z",
                "updated_at": "2018-02-24T09:27:05Z"
            }
        ],
        "statistics": {
            "number_of_calls": 1,
            "number_of_notes": 5,
            "number_of_activities": 6,
            "number_of_reminders": 2,
            "number_of_tasks": 2,
            "number_of_gifts": 0,
            "number_of_debts": 2
        },
        "account": {
            "id": 1
        },
        "created_at": "2018-02-18T10:35:59Z",
        "updated_at": "2018-02-18T10:35:59Z"
    }
}</code></pre>


<a name="remove-a-specific-tag-from-a-contact"></a>
## Remove a specific tag from a contact

The call lets you remove one or multiple tags from a contact. The difference with the tag creation method is the fact that this call accepts a list of ids of the tags, not a list of tag names. This is because when you create a tag, you don't want to deal with creating a tag first, then take the id and pass it to the creation method call. However, when you remove a tag, you know the id of the tag you want to remove.

The call does not delete the actual tag. It only removes the association.

<span class="url">
  POST /contacts/:id/unsetTag
</span>

### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| tags | array | <strong>Required</strong>. A list of tag ids, as integer, separated by a comma. |

### Example

<pre><code class="json">{
  "tags": [1]
}</code></pre>

### Response

The response sends back a standard Contact object.

<pre><code class="json">{
    "data": {
        "id": 1,
        "object": "contact",
        "first_name": "Odell",
        "last_name": "McKenzie",
        "gender": "Man",
        "is_partial": false,
        "is_dead": false,
        "last_called": null,
        "last_activity_together": {
            "date": "2017-10-22 00:00:00.000000",
            "timezone_type": 3,
            "timezone": "US/Eastern"
        },
        "information": {
            "family": {
                "kids": {
                    "total": 4,
                    "kids": [
                        {
                            "id": 2,
                            "object": "contact",
                            "first_name": "Oleta",
                            "last_name": "Hintz",
                            "gender": "Woman",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-08-16T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 3,
                            "object": "contact",
                            "first_name": "Lloyd",
                            "last_name": "Connelly",
                            "gender": "Woman",
                            "is_partial": false,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-06-18T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 4,
                            "object": "contact",
                            "first_name": "Burley",
                            "last_name": null,
                            "gender": "Woman",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": false,
                                    "date": "1922-11-06T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 5,
                            "object": "contact",
                            "first_name": "Ben",
                            "last_name": null,
                            "gender": "Man",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-03-17T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        }
                    ]
                },
                "partners": {
                    "total": 3,
                    "partners": [
                        {
                            "id": 6,
                            "object": "contact",
                            "first_name": "Weston",
                            "last_name": "Lowe",
                            "gender": "Man",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": false,
                                    "date": "1950-12-21T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 7,
                            "object": "contact",
                            "first_name": "Zelda",
                            "last_name": "Kessler",
                            "gender": "Rather not say",
                            "is_partial": false,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-08-04T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 8,
                            "object": "contact",
                            "first_name": "Annetta",
                            "last_name": null,
                            "gender": "Woman",
                            "is_partial": false,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": false,
                                    "date": "1967-06-19T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        }
                    ]
                },
                "progenitors": {
                    "total": 0,
                    "progenitors": []
                }
            },
            "dates": {
                "birthdate": {
                    "is_age_based": false,
                    "is_year_unknown": false,
                    "date": "1979-01-08T00:00:00Z"
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
                "url": "https://randomuser.me/api/portraits/men/62.jpg",
                "source": "external",
                "default_avatar_color": "#fdb660"
            },
            "food_preferencies": "I can't get out again. Suddenly she came upon a time she had nibbled some more tea,' the March Hare went 'Sh! sh!' and the bright flower-beds and the other side of WHAT? The other guests had taken.",
            "how_you_met": {
                "general_information": null,
                "first_met_date": {
                    "is_age_based": false,
                    "is_year_unknown": true,
                    "date": "2018-06-08T00:00:00Z"
                },
                "first_met_through_contact": null
            }
        },
        "addresses": [],
        "tags": [
            {
                "id": 2,
                "object": "tag",
                "name": "family",
                "name_slug": "family",
                "account": {
                    "id": 1
                },
                "created_at": "2018-02-24T09:27:05Z",
                "updated_at": "2018-02-24T09:27:05Z"
            }
        ],
        "statistics": {
            "number_of_calls": 1,
            "number_of_notes": 5,
            "number_of_activities": 6,
            "number_of_reminders": 2,
            "number_of_tasks": 2,
            "number_of_gifts": 0,
            "number_of_debts": 2
        },
        "account": {
            "id": 1
        },
        "created_at": "2018-02-18T10:35:59Z",
        "updated_at": "2018-02-18T10:35:59Z"
    }
}</code></pre>


<a name="remove-all-the-tags-from-a-contact"></a>
## Remove all the tags from a contact

If you need to remove all the tags associated with a contact, you can use this method. Note that the call does not delete the tags, it only removes the association.

<span class="url">
  POST /contacts/:id/unsetTags
</span>

### Response

The response sends back a standard Contact object.

<pre><code class="json">{
    "data": {
        "id": 1,
        "object": "contact",
        "first_name": "Odell",
        "last_name": "McKenzie",
        "gender": "Man",
        "is_partial": false,
        "is_dead": false,
        "last_called": null,
        "last_activity_together": {
            "date": "2017-10-22 00:00:00.000000",
            "timezone_type": 3,
            "timezone": "US/Eastern"
        },
        "information": {
            "family": {
                "kids": {
                    "total": 4,
                    "kids": [
                        {
                            "id": 2,
                            "object": "contact",
                            "first_name": "Oleta",
                            "last_name": "Hintz",
                            "gender": "Woman",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-08-16T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 3,
                            "object": "contact",
                            "first_name": "Lloyd",
                            "last_name": "Connelly",
                            "gender": "Woman",
                            "is_partial": false,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-06-18T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 4,
                            "object": "contact",
                            "first_name": "Burley",
                            "last_name": null,
                            "gender": "Woman",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": false,
                                    "date": "1922-11-06T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 5,
                            "object": "contact",
                            "first_name": "Ben",
                            "last_name": null,
                            "gender": "Man",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-03-17T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        }
                    ]
                },
                "partners": {
                    "total": 3,
                    "partners": [
                        {
                            "id": 6,
                            "object": "contact",
                            "first_name": "Weston",
                            "last_name": "Lowe",
                            "gender": "Man",
                            "is_partial": true,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": false,
                                    "date": "1950-12-21T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 7,
                            "object": "contact",
                            "first_name": "Zelda",
                            "last_name": "Kessler",
                            "gender": "Rather not say",
                            "is_partial": false,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": true,
                                    "date": "2018-08-04T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        },
                        {
                            "id": 8,
                            "object": "contact",
                            "first_name": "Annetta",
                            "last_name": null,
                            "gender": "Woman",
                            "is_partial": false,
                            "information": {
                                "birthdate": {
                                    "is_age_based": false,
                                    "is_year_unknown": false,
                                    "date": "1967-06-19T00:00:00Z"
                                }
                            },
                            "account": {
                                "id": 1
                            }
                        }
                    ]
                },
                "progenitors": {
                    "total": 0,
                    "progenitors": []
                }
            },
            "dates": {
                "birthdate": {
                    "is_age_based": false,
                    "is_year_unknown": false,
                    "date": "1979-01-08T00:00:00Z"
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
                "url": "https://randomuser.me/api/portraits/men/62.jpg",
                "source": "external",
                "default_avatar_color": "#fdb660"
            },
            "food_preferencies": "I can't get out again. Suddenly she came upon a time she had nibbled some more tea,' the March Hare went 'Sh! sh!' and the bright flower-beds and the other side of WHAT? The other guests had taken.",
            "how_you_met": {
                "general_information": null,
                "first_met_date": {
                    "is_age_based": false,
                    "is_year_unknown": true,
                    "date": "2018-06-08T00:00:00Z"
                },
                "first_met_through_contact": null
            }
        },
        "addresses": [],
        "tags": [],
        "statistics": {
            "number_of_calls": 1,
            "number_of_notes": 5,
            "number_of_activities": 6,
            "number_of_reminders": 2,
            "number_of_tasks": 2,
            "number_of_gifts": 0,
            "number_of_debts": 2
        },
        "account": {
            "id": 1
        },
        "created_at": "2018-02-18T10:35:59Z",
        "updated_at": "2018-02-18T10:35:59Z"
    }
}</code></pre>
