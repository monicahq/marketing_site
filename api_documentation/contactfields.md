# Contact fields

<!-- This uses the MarkdownTOC's Sublime Text plugin to autogenerate the TOC -->
<!-- Simply install the plugin, then press Save, and it does it magic -->
<!-- MarkdownTOC autolink="true" autoanchor="true" depth="1" bracket="round" list_bullets="*" -->

* [Overview](#overview)
* [List all the contact fields of a specific contact](#list-all-the-contact-fields-of-a-specific-contact)
* [Get a specific contact field](#get-a-specific-contact-field)
* [Create a contact field](#create-a-contact-field)
* [Update a contact field](#update-a-contact-field)
* [Delete a contact field](#delete-a-contact-field)

<!-- /MarkdownTOC -->

<a name="overview"></a>
## Overview

A contact can be contacted in multiple ways. It can be a phone number, an email address, a Twitter profile, a Telegram nickname, etc... We call these a contact field.

When retrieving a contact field, we always also return some basic information about the related contact.

<a name="list-all-the-contact-fields-of-a-specific-contact"></a>
## List all the contact fields of a specific contact

<span class="url">
  GET /contact/:id/contactfields
</span>

### Response

<pre><code class="json">{
  "data": [
    {
      "id": 1,
      "object": "contactfield",
      "data": "jim@dundermifflin.com",
      "contact_field_type": {
        "id": 1,
        "object": "contactfieldtype",
        "name": "Email",
        "fontawesome_icon": "fa fa-envelope-open-o",
        "protocol": "mailto:",
        "delible": false,
        "type": "email",
        "account": {
          "id": 1
        },
        "created_at": "2017-11-24T11:19:18Z",
        "updated_at": "2017-11-24T11:19:18Z"
      },
      "account": {
        "id": 1
      },
      "contact": {
        "id": 8,
        "object": "contact",
        "first_name": "Jim",
        "last_name": "Halpert",
        "gender": "male",
        "is_partial": false,
        "is_dead": false,
        "deceased_date": null,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1978-10-01T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-11-24T11:19:18Z",
      "updated_at": null
    },
    {
      "id": 2,
      "object": "contactfield",
      "data": "18003221",
      "contact_field_type": {
        "id": 2,
        "object": "contactfieldtype",
        "name": "Phone",
        "fontawesome_icon": "fa fa-volume-control-phone",
        "protocol": "tel:",
        "delible": false,
        "type": "phone",
        "account": {
          "id": 1
        },
        "created_at": "2017-11-24T11:19:18Z",
        "updated_at": "2017-11-24T11:19:18Z"
      },
      "account": {
        "id": 1
      },
      "contact": {
        "id": 8,
        "object": "contact",
        "first_name": "Jim",
        "last_name": "Halpert",
        "gender": "male",
        "is_partial": false,
        "is_dead": false,
        "deceased_date": null,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1978-10-01T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-11-24T11:19:18Z",
      "updated_at": null
    },
    {
      "id": 3,
      "object": "contactfield",
      "data": "https:\/\/facebook.com",
      "contact_field_type": {
        "id": 3,
        "object": "contactfieldtype",
        "name": "Facebook",
        "fontawesome_icon": "fa fa-facebook-official",
        "protocol": null,
        "delible": true,
        "type": null,
        "account": {
          "id": 1
        },
        "created_at": "2017-11-24T11:19:18Z",
        "updated_at": "2017-11-24T11:19:18Z"
      },
      "account": {
        "id": 1
      },
      "contact": {
        "id": 8,
        "object": "contact",
        "first_name": "Jim",
        "last_name": "Halpert",
        "gender": "male",
        "is_partial": false,
        "is_dead": false,
        "deceased_date": null,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1978-10-01T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-11-24T11:19:18Z",
      "updated_at": null
    },
    {
      "id": 62793,
      "object": "contactfield",
      "data": "123456",
      "contact_field_type": {
        "id": 1,
        "object": "contactfieldtype",
        "name": "Email",
        "fontawesome_icon": "fa fa-envelope-open-o",
        "protocol": "mailto:",
        "delible": false,
        "type": "email",
        "account": {
          "id": 1
        },
        "created_at": "2017-11-24T11:19:18Z",
        "updated_at": "2017-11-24T11:19:18Z"
      },
      "account": {
        "id": 1
      },
      "contact": {
        "id": 8,
        "object": "contact",
        "first_name": "Jim",
        "last_name": "Halpert",
        "gender": "male",
        "is_partial": false,
        "is_dead": false,
        "deceased_date": null,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1978-10-01T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-11-24T16:43:50Z",
      "updated_at": "2017-11-24T16:43:50Z"
    },
    {
      "id": 62794,
      "object": "contactfield",
      "data": "123456",
      "contact_field_type": {
        "id": 1,
        "object": "contactfieldtype",
        "name": "Email",
        "fontawesome_icon": "fa fa-envelope-open-o",
        "protocol": "mailto:",
        "delible": false,
        "type": "email",
        "account": {
          "id": 1
        },
        "created_at": "2017-11-24T11:19:18Z",
        "updated_at": "2017-11-24T11:19:18Z"
      },
      "account": {
        "id": 1
      },
      "contact": {
        "id": 8,
        "object": "contact",
        "first_name": "Jim",
        "last_name": "Halpert",
        "gender": "male",
        "is_partial": false,
        "is_dead": false,
        "deceased_date": null,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1978-10-01T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-11-25T08:40:54Z",
      "updated_at": "2017-11-25T08:40:54Z"
    }
  ],
  "links": {
    "first": "http:\/\/monica.app\/api\/contacts\/8\/contactfields?page=1",
    "last": "http:\/\/monica.app\/api\/contacts\/8\/contactfields?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "http:\/\/monica.app\/api\/contacts\/8\/contactfields",
    "per_page": 10,
    "to": 5,
    "total": 5
  }
}</code></pre>

<a name="get-a-specific-contact-field"></a>
## Get a specific contact field

<span class="url">
  GET /contactfields/:id
</span>

### Response

<pre><code class="json">{
  "id": 1,
  "object": "contactfield",
  "data": "jim@dundermifflin.com",
  "contact_field_type": {
    "id": 1,
    "object": "contactfieldtype",
    "name": "Email",
    "fontawesome_icon": "fa fa-envelope-open-o",
    "protocol": "mailto:",
    "delible": false,
    "type": "email",
    "account": {
      "id": 1
    },
    "created_at": "2017-11-24T11:19:18Z",
    "updated_at": "2017-11-24T11:19:18Z"
  },
  "account": {
    "id": 1
  },
  "contact": {
    "id": 8,
    "object": "contact",
    "first_name": "Jim",
    "last_name": "Halpert",
    "gender": "male",
    "is_partial": false,
    "is_dead": false,
    "deceased_date": null,
    "information": {
      "dates": [
        {
          "name": "birthdate",
          "is_birthdate_approximate": "exact",
          "birthdate": "1978-10-01T00:00:00Z"
        }
      ]
    },
    "account": {
      "id": 1
    }
  },
  "created_at": "2017-11-24T11:19:18Z",
  "updated_at": null
}</code></pre>

<a name="create-a-contact-field"></a>
## Create a contact field

<span class="url">
  POST /contactfields/
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| data | string | <strong>Required</strong>. The actual content of the contact field. Max 255 characters. |
| contact_field_type_id | integer | <strong>Required</strong>. The type of the contact field. Has to be a valid, existing contact field type ID. You can retrieve the list of all the contact field types of an account <a href="{{ "/api/countries" | prepend: site.baseurl | prepend: site.url }}">via the API</a>. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the content field is associated with. |

### Example

<pre><code class="json">{
  "contact_field_type_id": 1,
  "data": "123456",
  "contact_id": 8
}</code></pre>

### Response

The API call returns a Contact Field object if the call succeeds.

<pre><code class="json">{
  "id": 62795,
  "object": "contactfield",
  "data": "123456",
  "contact_field_type": {
    "id": 1,
    "object": "contactfieldtype",
    "name": "Email",
    "fontawesome_icon": "fa fa-envelope-open-o",
    "protocol": "mailto:",
    "delible": false,
    "type": "email",
    "account": {
      "id": 1
    },
    "created_at": "2017-11-24T11:19:18Z",
    "updated_at": "2017-11-24T11:19:18Z"
  },
  "account": {
    "id": 1
  },
  "contact": {
    "id": 8,
    "object": "contact",
    "first_name": "Jim",
    "last_name": "Halpert",
    "gender": "male",
    "is_partial": false,
    "is_dead": false,
    "deceased_date": null,
    "information": {
      "dates": [
        {
          "name": "birthdate",
          "is_birthdate_approximate": "exact",
          "birthdate": "1978-10-01T00:00:00Z"
        }
      ]
    },
    "account": {
      "id": 1
    }
  },
  "created_at": "2017-11-25T08:42:36Z",
  "updated_at": "2017-11-25T08:42:36Z"
}</code></pre>

<a name="update-a-contact-field"></a>
## Update a contact field

<span class="url">
  PUT /contactfields/:id
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| data | string | <strong>Required</strong>. The actual content of the contact field. Max 255 characters. |
| contact_field_type_id | integer | <strong>Required</strong>. The type of the contact field. Has to be a valid, existing contact field type ID. You can retrieve the list of all the contact field types of an account <a href="{{ "/api/countries" | prepend: site.baseurl | prepend: site.url }}">via the API</a>. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the content field is associated with. |

### Example

<pre><code class="json">{
  "contact_field_type_id": 1,
  "data": "456778",
  "contact_id": 8
}</code></pre>

### Response

<pre><code class="json">{
  "id": 62795,
  "object": "contactfield",
  "data": "456778",
  "contact_field_type": {
    "id": 1,
    "object": "contactfieldtype",
    "name": "Email",
    "fontawesome_icon": "fa fa-envelope-open-o",
    "protocol": "mailto:",
    "delible": false,
    "type": "email",
    "account": {
      "id": 1
    },
    "created_at": "2017-11-24T11:19:18Z",
    "updated_at": "2017-11-24T11:19:18Z"
  },
  "account": {
    "id": 1
  },
  "contact": {
    "id": 8,
    "object": "contact",
    "first_name": "Jim",
    "last_name": "Halpert",
    "gender": "male",
    "is_partial": false,
    "is_dead": false,
    "deceased_date": null,
    "information": {
      "dates": [
        {
          "name": "birthdate",
          "is_birthdate_approximate": "exact",
          "birthdate": "1978-10-01T00:00:00Z"
        }
      ]
    },
    "account": {
      "id": 1
    }
  },
  "created_at": "2017-11-25T08:42:36Z",
  "updated_at": "2017-11-25T08:43:47Z"
}</code></pre>

<a name="delete-a-contact-field"></a>
## Delete a contact field

<span class="url">
  DELETE /contactfields/:id
</span>

### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
