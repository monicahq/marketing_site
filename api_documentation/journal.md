# Journal <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
- [List all the entries in your journal](#list-all-the-entries-in-your-journal)
  - [Parameters](#parameters)
  - [Response](#response)
- [Get a specific journal entry](#get-a-specific-journal-entry)
  - [Response](#response-1)
- [Create a journal entry](#create-a-journal-entry)
  - [Input](#input)
  - [Example](#example)
  - [Response](#response-2)
- [Update a journal entry](#update-a-journal-entry)
  - [Input](#input-1)
  - [Example](#example-1)
  - [Response](#response-3)
- [Delete a journal entry](#delete-a-journal-entry)
  - [Response](#response-4)

<!-- /TOC -->

<a name="overview"></a>
<a id="markdown-overview" name="overview"></a>
## Overview

The Journal object allows to enter information that are not linked to a specific
contact. You can use this to store general notes, or to use it like a personal
diary.

<a name="list-all-the-entries-in-your-journal"></a>
<a id="markdown-list-all-the-entries-in-your-journal" name="list-all-the-entries-in-your-journal"></a>
## List all the entries in your journal

<span class="url">
  GET /journal/
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
}</code></pre>

<a name="get-a-specific-journal-entry"></a>
<a id="markdown-get-a-specific-journal-entry" name="get-a-specific-journal-entry"></a>
## Get a specific journal entry

<span class="url">
  GET /journal/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
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
}</code></pre>

<a name="create-a-journal-entry"></a>
<a id="markdown-create-a-journal-entry" name="create-a-journal-entry"></a>
## Create a journal entry

<span class="url">
  POST /journal/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. A title for this journal entry. Max 255 characters. |
| post | string | <strong>Required</strong>. The content of the post. Max 1000000 characters. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "title":"Amd there we go again",
  "post":"The birthday party got cancelled. My boyfriend felt the invitees had enough time to respond. They did not. So he cancelled it. I thought he jumped the gun, but it was not all in my hands. My son got some lizards instead. I did not really like that idea either, but it was his birthday. His grandfather still has to get him something. And my parents also have a gift for him."
}</code></pre>

<a id="markdown-response-2" name="response-2"></a>
### Response

The API call returns a journal entry object if the call succeeds.

<pre><code class="json">{
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
}</code></pre>

<a name="update-a-journal-entry"></a>
<a id="markdown-update-a-journal-entry" name="update-a-journal-entry"></a>
## Update a journal entry

<span class="url">
  PUT /journal/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| title | string | <strong>Required</strong>. A title for this journal entry. Max 255 characters. |
| post | string | <strong>Required</strong>. The content of the post. Max 1000000 characters. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "title":"Amd there we go again",
  "post":"The birthday party got cancelled. My boyfriend felt the invitees had enough time to respond. They did not. So he cancelled it. I thought he jumped the gun, but it was not all in my hands. My son got some lizards instead. I did not really like that idea either, but it was his birthday. His grandfather still has to get him something. And my parents also have a gift for him."
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

<pre><code class="json">{
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
}</code></pre>

<a name="delete-a-journal-entry"></a>
<a id="markdown-delete-a-journal-entry" name="delete-a-journal-entry"></a>
## Delete a journal entry

<span class="url">
  DELETE /calls/:id
</span>

<a id="markdown-response-4" name="response-4"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
