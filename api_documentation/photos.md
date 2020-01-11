# Photos <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
- [List all the photos of your account](#list-all-the-photos-of-your-account)
  - [Response](#response)
- [List all the photos of a specific contact](#list-all-the-photos-of-a-specific-contact)
  - [Response](#response-1)
- [Get a specific photo](#get-a-specific-photo)
  - [Response](#response-2)
- [Create a photo](#create-a-photo)
  - [Input](#input)
  - [Example](#example)
  - [Response](#response-3)
  - [Associate a photo to a gift](#associate-a-photo-to-a-gift)
- [Delete a photo](#delete-a-photo)
  - [Response](#response-4)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

The Photo object represents a photo attached to a contact. A contact can have as many photos as necessary. There are two limitations though: the maximum allowed size of the photo itself, and the maximum allowed total amount of Mb allowed by the instance.

<a name="list-all-photos-of-your-account"></a>
## List all the photos of your account

<span class="url">
  GET /photos/
</span>

<a id="markdown-response" name="response"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 44,
      "object": "photo",
      "original_filename": "EBeV.jpeg",
      "new_filename": "photos\/POWVMVuauZ2xPsG9ZNoZdE0jLaMRz1FGZtCUrjDH.jpeg",
      "filesize": 484289,
      "mime_type": "image\/jpeg",
      "link": "https:\/\/app.monicahq.com\/storage\/photos\/POWVMVuauZ2xPsG9ZNoZdE0jLaMRz1FGZtCUrjDH.jpeg",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "hash_id": "h:Y5LOkAdWNDqgVomKPv",
        "first_name": "Julia",
        "last_name": null,
        "nickname": null,
        "complete_name": "Julia",
        "initials": "J",
        "gender": "Femme",
        "gender_type": "F",
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
            "url": "",
            "source": "default",
            "default_avatar_color": "#b3d5fe"
          }
        },
        "url": "https:\/\/app.monicahq.com\/api\/contacts\/1",
        "account": {
          "id": 1
        }
      },
      "created_at": "2020-01-04T10:26:48Z",
      "updated_at": "2020-01-04T10:26:48Z"
    },
    {
      "id": 45,
      "object": "photo",
      "original_filename": "z.jpg",
      "new_filename": "photos\/FbTRT8vYf5eCaxXzKWqVOw07sceY5IdDUNpVy3sQ.jpeg",
      "filesize": 43389,
      "mime_type": "image\/jpeg",
      "link": "https:\/\/app.monicahq.com\/storage\/photos\/FbTRT8vYf5eCaxXzKWqVOw07sceY5IdDUNpVy3sQ.jpeg",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "hash_id": "h:Y5LOkAdWNDqgVomKPv",
        "first_name": "Julia",
        "last_name": null,
        "nickname": null,
        "complete_name": "Julia",
        "initials": "J",
        "gender": "Femme",
        "gender_type": "F",
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
            "url": "",
            "source": "default",
            "default_avatar_color": "#b3d5fe"
          }
        },
        "url": "https:\/\/app.monicahq.com\/api\/contacts\/1",
        "account": {
          "id": 1
        }
      },
      "created_at": "2020-01-04T11:55:43Z",
      "updated_at": "2020-01-04T11:55:43Z"
    },
    {
      "id": 46,
      "object": "photo",
      "original_filename": "25832602.png",
      "new_filename": "photos\/DGp8XlpBvwa7Vlh6f7XJX4xFjhdFafVkqIqUgS7A.png",
      "filesize": 19951,
      "mime_type": "image\/png",
      "link": "https:\/\/app.monicahq.com\/storage\/photos\/DGp8XlpBvwa7Vlh6f7XJX4xFjhdFafVkqIqUgS7A.png",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 2,
        "object": "contact",
        "hash_id": "h:kxPeaNArJeWyE27lgM",
        "first_name": "Chase",
        "last_name": null,
        "nickname": null,
        "complete_name": "Chase",
        "initials": "C",
        "gender": null,
        "gender_type": null,
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
            "url": "",
            "source": "default",
            "default_avatar_color": "#bd5067"
          }
        },
        "url": "https:\/\/app.monicahq.com\/api\/contacts\/2",
        "account": {
          "id": 1
        }
      },
      "created_at": "2020-01-11T11:37:13Z",
      "updated_at": "2020-01-11T11:37:13Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/photos?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/photos?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/photos",
    "per_page": 15,
    "to": 3,
    "total": 3
  }
}</code></pre>

## List all the photos of a specific contact

<span class="url">
  GET /contacts/:id/photos
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 44,
      "object": "photo",
      "original_filename": "EBeV.jpeg",
      "new_filename": "photos\/POWVMVuauZ2xPsG9ZNoZdE0jLaMRz1FGZtCUrjDH.jpeg",
      "filesize": 484289,
      "mime_type": "image\/jpeg",
      "link": "https:\/\/app.monicahq.com\/storage\/photos\/POWVMVuauZ2xPsG9ZNoZdE0jLaMRz1FGZtCUrjDH.jpeg",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "hash_id": "h:Y5LOkAdWNDqgVomKPv",
        "first_name": "Julia",
        "last_name": null,
        "nickname": null,
        "complete_name": "Julia",
        "initials": "J",
        "gender": "Femme",
        "gender_type": "F",
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
            "url": "",
            "source": "default",
            "default_avatar_color": "#b3d5fe"
          }
        },
        "url": "https:\/\/app.monicahq.com\/api\/contacts\/1",
        "account": {
          "id": 1
        }
      },
      "created_at": "2020-01-04T10:26:48Z",
      "updated_at": "2020-01-04T10:26:48Z"
    },
    {
      "id": 45,
      "object": "photo",
      "original_filename": "z.jpg",
      "new_filename": "photos\/FbTRT8vYf5eCaxXzKWqVOw07sceY5IdDUNpVy3sQ.jpeg",
      "filesize": 43389,
      "mime_type": "image\/jpeg",
      "link": "https:\/\/app.monicahq.com\/storage\/photos\/FbTRT8vYf5eCaxXzKWqVOw07sceY5IdDUNpVy3sQ.jpeg",
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "hash_id": "h:Y5LOkAdWNDqgVomKPv",
        "first_name": "Julia",
        "last_name": null,
        "nickname": null,
        "complete_name": "Julia",
        "initials": "J",
        "gender": "Femme",
        "gender_type": "F",
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
            "url": "",
            "source": "default",
            "default_avatar_color": "#b3d5fe"
          }
        },
        "url": "https:\/\/app.monicahq.com\/api\/contacts\/1",
        "account": {
          "id": 1
        }
      },
      "created_at": "2020-01-04T11:55:43Z",
      "updated_at": "2020-01-04T11:55:43Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/contacts\/1\/photos?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/contacts\/1\/photos?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/contacts\/1\/photos",
    "per_page": 15,
    "to": 2,
    "total": 2
  }
}</code></pre>

<a name="get-a-specific-photo"></a>
## Get a specific photo

<span class="url">
  GET /photos/:id
</span>

<a id="markdown-response-2" name="response-2"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 44,
    "object": "photo",
    "original_filename": "EBeV.jpeg",
    "new_filename": "photos\/POWVMVuauZ2xPsG9ZNoZdE0jLaMRz1FGZtCUrjDH.jpeg",
    "filesize": 484289,
    "mime_type": "image\/jpeg",
    "link": "https:\/\/app.monicahq.com\/storage\/photos\/POWVMVuauZ2xPsG9ZNoZdE0jLaMRz1FGZtCUrjDH.jpeg",
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "hash_id": "h:Y5LOkAdWNDqgVomKPv",
      "first_name": "Julia",
      "last_name": null,
      "nickname": null,
      "complete_name": "Julia",
      "initials": "J",
      "gender": "Femme",
      "gender_type": "F",
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
          "url": "",
          "source": "default",
          "default_avatar_color": "#b3d5fe"
        }
      },
      "url": "https:\/\/app.monicahq.com\/api\/contacts\/1",
      "account": {
        "id": 1
      }
    },
    "created_at": "2020-01-04T10:26:48Z",
    "updated_at": "2020-01-04T10:26:48Z"
  }
}</code></pre>

<a name="create-a-photo"></a>
## Create a photo

<span class="url">
  POST /photos/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the document is associated with. |
| photo | file | <strong>Required</strong>. The photo content to upload. |

<a id="markdown-example" name="example"></a>
### Example

You can send the photo file using a `multipart/form-data` Content-type.
Example with curl:

<span class="url">
<code>
curl -sSL -H "Authorization: Bearer $TOKEN" https://app.monicahq.com/api/documents -X POST
   -F contact_id=1
   -F photo=@avatar.png
</code>
</span>

<a id="markdown-response-3" name="response-3"></a>
### Response

The API call returns a Photo object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 47,
    "object": "photo",
    "original_filename": "avatar.png",
    "new_filename": "photos\/zFx8jyaoXArR0Wl4lbQFUjslX7xdVRTCLfdvy8a9.png",
    "filesize": 2760,
    "mime_type": "image\/png",
    "link": "https:\/\/app.monicahq.com\/storage\/photos\/zFx8jyaoXArR0Wl4lbQFUjslX7xdVRTCLfdvy8a9.png",
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "hash_id": "h:Y5LOkAdWNDqgVomKPv",
      "first_name": "Julia",
      "last_name": null,
      "nickname": null,
      "complete_name": "Julia",
      "initials": "J",
      "gender": "Femme",
      "gender_type": "F",
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
          "url": "",
          "source": "default",
          "default_avatar_color": "#b3d5fe"
        }
      },
      "url": "https:\/\/app.monicahq.com\/api\/contacts\/1",
      "account": {
        "id": 1
      }
    },
    "created_at": "2020-01-11T11:41:09Z",
    "updated_at": "2020-01-11T11:41:09Z"
  }
}</code></pre>

<a name="associate-a-photo-to-a-gift"></a>
### Associate a photo to a gift

You can [associate a photo to a gift](gifts#associate-a-photo-to-a-gift).

<a name="delete-a-photo"></a>
## Delete a photo

<span class="url">
  DELETE /photos/:id
</span>

<a id="markdown-response-5" name="response-5"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 47
}</code></pre>
