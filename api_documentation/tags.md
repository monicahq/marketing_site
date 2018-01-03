## Overview

The Tag object allows to tag contacts. Think of tags as labels, or folders, with
which you can group contacts who belong together.

## List all your tags

<url>
  GET /tags/
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
}
{% endhighlight %}

## Get a specific tag

<url>
  GET /tags/:id
</url>

{% highlight json %}
{
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
}
{% endhighlight %}

## Create a tag

<url>
  POST /tags/
</url>

### Input

If a field is not required, you can send the `null` value as the content of the field.

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the tag. Max 255 characters. |

### Example

{% highlight json %}
{
  "name":"friends"
}
{% endhighlight %}

### Response

The API call returns a tag object if the call succeeds.

{% highlight json %}
{
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
}
{% endhighlight %}

## Update a tag

<url>
  PUT /tags/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the tag. Max 255 characters. |

### Example

{% highlight json %}
{
  "name":"prison"
}
{% endhighlight %}

### Response

{% highlight json %}
{
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
}
{% endhighlight %}

## Delete a tag

<url>
  DELETE /tags/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 31
}
{% endhighlight %}
