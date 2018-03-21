# Notes

<!-- This uses the MarkdownTOC's Sublime Text plugin to autogenerate the TOC -->
<!-- Simply install the plugin, then press Save, and it does it magic -->
<!-- MarkdownTOC autolink="true" autoanchor="true" depth="1" bracket="round" list_bullets="*" -->

* [Overview](#overview)
* [List all the notes in your account](#list-all-the-notes-in-your-account)
* [List all the notes of a specific contact](#list-all-the-notes-of-a-specific-contact)
* [Get a specific note](#get-a-specific-note)
* [Create a note](#create-a-note)
* [Update a note](#update-a-note)
* [Delete a note](#delete-a-note)

<!-- /MarkdownTOC -->

<a name="overview"></a>
<a id="overview"></a>
## Overview

The Note object allows to associate notes to contacts. A note has to be
associated with an existing contact - it can't be orphan.

A note can be favorited. When favorited, it will be display on the dashboard
inside the application.

When retrieving a note, we always also return some basic information about the
related contact.

<a name="list-all-the-notes-in-your-account"></a>
<a id="list-all-the-notes-in-your-account"></a>
## List all the notes in your account

<span class="url">
  GET /notes/
</span>

### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |
| sort | string | Indicates a sorting criteria. |

### Sorting

You can sort this query. Accepted criteria are:

| Name | Description |
| ---- | ----------- |
| `created_at` | Will add `order by created_at asc` to the query |
| `-created_at` | Will add `order by created_at desc` to the query |
| `updated_at` | Will add `order by updated_at asc` to the query |
| `-updated_at` | Will add `order by updated_at desc` to the query |

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
<a id="list-all-the-notes-of-a-specific-contact"></a>
## List all the notes of a specific contact

<span class="url">
  GET /contacts/:id/notes
</span>

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
<a id="get-a-specific-note"></a>
## Get a specific note

<span class="url">
  GET /notes/:id
</span>

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
<a id="create-a-note"></a>
## Create a note

<span class="url">
  POST /notes/
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| body | string | <strong>Required</strong>. The body of the note. Max 100000 characters. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the note is associated with. |
| is_favorited | integer | <strong>Required</strong>. Indicates whether the note is favorited or not. Can be `0` (false) or `1` (true). |

### Example

<pre><code class="json">{
  "body": "This is a sample of a note.",
  "contact_id": 1,
  "is_favorited": 0
}</code></pre>

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
<a id="update-a-note"></a>
## Update a note

<span class="url">
  PUT /notes/:id
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| body | string | <strong>Required</strong>. The body of the note. Max 100000 characters. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the note is associated with. |
| is_favorited | integer | <strong>Required</strong>. Indicates whether the note is favorited or not. Can be `0` (false) or `1` (true). |

### Example

<pre><code class="json">{
  "body": "This is a test that is updated",
  "contact_id": 3
}</code></pre>

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
<a id="delete-a-note"></a>
## Delete a note

<span class="url">
  DELETE /notes/:id
</span>

### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
