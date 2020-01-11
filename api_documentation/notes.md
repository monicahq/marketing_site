# Notes <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
- [List all the notes in your account](#list-all-the-notes-in-your-account)
  - [Parameters](#parameters)
  - [Response](#response)
- [List all the notes of a specific contact](#list-all-the-notes-of-a-specific-contact)
  - [Response](#response-1)
- [Get a specific note](#get-a-specific-note)
  - [Response](#response-2)
- [Create a note](#create-a-note)
  - [Input](#input)
  - [Example](#example)
  - [Response](#response-3)
- [Update a note](#update-a-note)
  - [Input](#input-1)
  - [Example](#example-1)
  - [Response](#response-4)
- [Delete a note](#delete-a-note)
  - [Response](#response-5)

<!-- /TOC -->

<a name="overview"></a>
<a id="markdown-overview" name="overview"></a>
## Overview

The Note object allows to associate notes to contacts. A note has to be
associated with an existing contact - it can't be orphan.

A note can be favorited. When favorited, it will be display on the dashboard
inside the application.

When retrieving a note, we always also return some basic information about the
related contact.

<a name="list-all-the-notes-in-your-account"></a>
<a id="markdown-list-all-the-notes-in-your-account" name="list-all-the-notes-in-your-account"></a>
## List all the notes in your account

<span class="url">
  GET /notes/
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
}</code></pre>

<a name="list-all-the-notes-of-a-specific-contact"></a>
<a id="markdown-list-all-the-notes-of-a-specific-contact" name="list-all-the-notes-of-a-specific-contact"></a>
## List all the notes of a specific contact

<span class="url">
  GET /contacts/:id/notes
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
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
}</code></pre>

<a name="get-a-specific-note"></a>
<a id="markdown-get-a-specific-note" name="get-a-specific-note"></a>
## Get a specific note

<span class="url">
  GET /notes/:id
</span>

<a id="markdown-response-2" name="response-2"></a>
### Response

<pre><code class="json">{
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
}</code></pre>

<a name="create-a-note"></a>
<a id="markdown-create-a-note" name="create-a-note"></a>
## Create a note

<span class="url">
  POST /notes/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| body | string | <strong>Required</strong>. The body of the note. Max 100000 characters. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the note is associated with. |
| is_favorited | integer | <strong>Required</strong>. Indicates whether the note is favorited or not. Can be `0` (false) or `1` (true). |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "body": "This is a sample of a note.",
  "contact_id": 1,
  "is_favorited": 0
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

The API call returns a note object if the call succeeds.

<pre><code class="json">{
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
}</code></pre>

<a name="update-a-note"></a>
<a id="markdown-update-a-note" name="update-a-note"></a>
## Update a note

<span class="url">
  PUT /notes/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| body | string | <strong>Required</strong>. The body of the note. Max 100000 characters. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the note is associated with. |
| is_favorited | integer | <strong>Required</strong>. Indicates whether the note is favorited or not. Can be `0` (false) or `1` (true). |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "body": "This is a test that is updated",
  "contact_id": 3
}</code></pre>

<a id="markdown-response-4" name="response-4"></a>
### Response

<pre><code class="json">{
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
}</code></pre>

<a name="delete-a-note"></a>
<a id="markdown-delete-a-note" name="delete-a-note"></a>
## Delete a note

<span class="url">
  DELETE /notes/:id
</span>

<a id="markdown-response-5" name="response-5"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
