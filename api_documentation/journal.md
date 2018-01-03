## Overview

The Journal object allows to enter information that are not linked to a specific
contact. You can use this to store general notes, or to use it like a personal
diary.

## List all the entries in your journal

<url>
  GET /journal/
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
      "id": 1470,
      "object": "entry",
      "title": "Just another winter",
      "post": "Christmas has just past and tomorrow is New Years' Eve. We had a quiet Christmas, actually it got messed up. My father-in-law decided to act like an ass. So I had a bad start to the holidays. Now I find I have a reacurring bladder infection. I am now on my second round of antibiotics. I am still waiting for a break in my writing career. I was sent an email to write articles so I decided to go for it. The only problem is the pay is not great, but at this point I will do it. I am still waiting for a reply. As for New Year's I don't know what we are doing. I just hope this year brings some good fortune.",
      "account": {
        "id": 1
      },
      "created_at": "2017-10-21T16:35:17Z",
      "updated_at": "2017-10-21T16:35:17Z"
    },
    {
      "id": 1471,
      "object": "entry",
      "title": "Amd there we go again",
      "post": "The birthday party got cancelled. My boyfriend felt the invitees had enough time to respond. They did not. So he cancelled it. I thought he jumped the gun, but it was not all in my hands. My son got some lizards instead. I did not really like that idea either, but it was his birthday. His grandfather still has to get him something. And my parents also have a gift for him.",
      "account": {
        "id": 1
      },
      "created_at": "2017-10-21T16:37:09Z",
      "updated_at": "2017-10-21T16:37:09Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/journal?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/journal?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/journal",
    "per_page": 10,
    "to": 2,
    "total": 2
  }
}
{% endhighlight %}

## Get a specific journal entry

<url>
  GET /journal/:id
</url>

### Response

{% highlight json %}
{
  "data": {
    "id": 1470,
    "object": "entry",
    "title": "Just another winter",
    "post": "Christmas has just past and tomorrow is New Years' Eve. We had a quiet Christmas, actually it got messed up. My father-in-law decided to act like an ass. So I had a bad start to the holidays. Now I find I have a reacurring bladder infection. I am now on my second round of antibiotics. I am still waiting for a break in my writing career. I was sent an email to write articles so I decided to go for it. The only problem is the pay is not great, but at this point I will do it. I am still waiting for a reply. As for New Year's I don't know what we are doing. I just hope this year brings some good fortune.",
    "account": {
      "id": 1
    },
    "created_at": "2017-10-21T16:35:17Z",
    "updated_at": "2017-10-21T16:35:17Z"
  }
}
{% endhighlight %}

## Create a journal entry

<url>
  POST /journal/
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. A title for this journal entry. Max 255 characters. |
| post | string | <strong>Required</strong>. The content of the post. Max 1000000 characters. |

### Example

{% highlight json %}
{
  "title":"Amd there we go again",
  "post":"The birthday party got cancelled. My boyfriend felt the invitees had enough time to respond. They did not. So he cancelled it. I thought he jumped the gun, but it was not all in my hands. My son got some lizards instead. I did not really like that idea either, but it was his birthday. His grandfather still has to get him something. And my parents also have a gift for him."
}
{% endhighlight %}

### Response

The API call returns a journal entry object if the call succeeds.

{% highlight json %}
{
  "data": {
    "id": 1471,
    "object": "entry",
    "title": "Amd there we go again",
    "post": "The birthday party got cancelled. My boyfriend felt the invitees had enough time to respond. They did not. So he cancelled it. I thought he jumped the gun, but it was not all in my hands. My son got some lizards instead. I did not really like that idea either, but it was his birthday. His grandfather still has to get him something. And my parents also have a gift for him.",
    "account": {
      "id": 1
    },
    "created_at": "2017-10-21T16:37:09Z",
    "updated_at": "2017-10-21T16:37:09Z"
  }
}
{% endhighlight %}

## Update a journal entry

<url>
  PUT /journal/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. A title for this journal entry. Max 255 characters. |
| post | string | <strong>Required</strong>. The content of the post. Max 1000000 characters. |

### Example

{% highlight json %}
{
  "title":"Amd there we go again",
  "post":"The birthday party got cancelled. My boyfriend felt the invitees had enough time to respond. They did not. So he cancelled it. I thought he jumped the gun, but it was not all in my hands. My son got some lizards instead. I did not really like that idea either, but it was his birthday. His grandfather still has to get him something. And my parents also have a gift for him."
}
{% endhighlight %}

### Response

{% highlight json %}
{
  "data": {
    "id": 1471,
    "object": "entry",
    "title": "Amd there we go again",
    "post": "The birthday party got cancelled. My boyfriend felt the invitees had enough time to respond. They did not. So he cancelled it. I thought he jumped the gun, but it was not all in my hands. My son got some lizards instead. I did not really like that idea either, but it was his birthday. His grandfather still has to get him something. And my parents also have a gift for him.",
    "account": {
      "id": 1
    },
    "created_at": "2017-10-21T16:37:09Z",
    "updated_at": "2017-10-21T16:37:09Z"
  }
}
{% endhighlight %}

## Delete a journal entry

<url>
  DELETE /calls/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 31
}
{% endhighlight %}
