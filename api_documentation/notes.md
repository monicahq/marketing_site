## Overview

The Note object allows to associate notes to contacts. A note has to be
associated with an existing contact - it can't be orphan.

A note can be favorited. When favorited, it will be display on the dashboard
inside the application.

When retrieving a note, we always also return some basic information about the
related contact.

## List all the notes in your account

<url>
  GET /notes/
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
      "id": 4724,
      "object": "note",
      "body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor.",
      "is_favorited": true,
      "favorited_at": "2017-12-04T00:00:00Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Usher",
        "last_name": "Misste",
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
      "created_at": "2017-10-07T09:00:35Z",
      "updated_at": "2017-10-07T09:00:35Z"
    },
    {
      "id": 4725,
      "object": "note",
      "body": "I should definitely see her more often, this is sad that I don't see her more often.",
      "is_favorited": true,
      "favorited_at": "2017-12-04T00:00:00Z",
      "account": {
        "id": 1
      },
      "contact": {
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
      "created_at": "2017-10-07T15:28:22Z",
      "updated_at": "2017-10-07T15:28:22Z"
    }
  ],
  "links": {
    "first": "https://app.monicahq.com/api/contacts/1/notes?page=1",
    "last": "https://app.monicahq.com/api/contacts/1/notes?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https://app.monicahq.com/api/contacts/1/notes",
    "per_page": 10,
    "to": 2,
    "total": 2
  }
}
{% endhighlight %}

## List all the notes of a specific contact

<url>
  GET /contacts/:id/notes
</url>

### Response

{% highlight json %}
{
  "data": [
    {
      "id": 4724,
      "object": "note",
      "body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor.",
      "is_favorited": true,
      "favorited_at": "2017-12-04T00:00:00Z",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Usher",
        "last_name": "Misste",
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
      "created_at": "2017-10-07T09:00:35Z",
      "updated_at": "2017-10-07T09:00:35Z"
    },
    {
      "id": 4725,
      "object": "note",
      "body": "I should definitely see her more often, this is sad that I don't see her more often.",
      "is_favorited": true,
      "favorited_at": "2017-12-04T00:00:00Z",
      "account": {
        "id": 1
      },
      "contact": {
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
      "created_at": "2017-10-07T15:28:22Z",
      "updated_at": "2017-10-07T15:28:22Z"
    }
  ],
  "links": {
    "first": "https://app.monicahq.com/api/contacts/1/notes?page=1",
    "last": "https://app.monicahq.com/api/contacts/1/notes?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https://app.monicahq.com/api/contacts/1/notes",
    "per_page": 10,
    "to": 2,
    "total": 2
  }
}
{% endhighlight %}

## Get a specific note

<url>
  GET /notes/:id
</url>

### Response

{% highlight json %}
{
  "data": {
    "id": 4724,
    "object": "note",
    "body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor.",
    "is_favorited": true,
      "favorited_at": "2017-12-04T00:00:00Z",
    "account": {
      "id": 1
    },
    "contact": {
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
    "created_at": "2017-10-07T09:00:35Z",
    "updated_at": "2017-10-07T09:00:35Z"
  }
}
{% endhighlight %}

## Create a note

<url>
  POST /notes/
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| body | string | <strong>Required</strong>. The body of the note. Max 100000 characters. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the note is associated with. |
| is_favorited | integer | <strong>Required</strong>. Indicates whether the note is favorited or not. Can be `0` (false) or `1` (true). |

### Example

{% highlight json %}
{
  "body": "This is a sample of a note.",
  "contact_id": 1,
  "is_favorited": 0
}
{% endhighlight %}

### Response

The API call returns a note object if the call succeeds.

{% highlight json %}
{
  "data": {
    "id": 4724,
    "object": "note",
    "body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor.",
    "is_favorited": true,
    "favorited_at": null,
    "account": {
      "id": 1
    },
    "contact": {
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
    "created_at": "2017-10-07T09:00:35Z",
    "updated_at": "2017-10-07T09:00:35Z"
  }
}
{% endhighlight %}

## Update a note

<url>
  PUT /notes/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| body | string | <strong>Required</strong>. The body of the note. Max 100000 characters. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the note is associated with. |
| is_favorited | integer | <strong>Required</strong>. Indicates whether the note is favorited or not. Can be `0` (false) or `1` (true). |

### Example

{% highlight json %}
{
  "body": "This is a test that is updated",
  "contact_id": 3
}
{% endhighlight %}

### Response

{% highlight json %}
{
  "data": {
    "id": 4724,
    "object": "note",
    "body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor.",
    "is_favorited": true,
    "favorited_at": "2017-12-04T00:00:00Z",
    "account": {
      "id": 1
    },
    "contact": {
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
    "created_at": "2017-10-07T09:00:35Z",
    "updated_at": "2017-10-07T09:00:35Z"
  }
}
{% endhighlight %}

## Delete a note

<url>
  DELETE /notes/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 31
}
{% endhighlight %}
