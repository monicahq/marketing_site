# Relationships <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
- [List a specific relationship](#list-a-specific-relationship)
  - [Response](#response)
- [List all the relationships of a contact](#list-all-the-relationships-of-a-contact)
  - [Response](#response-1)
- [Create a relationship](#create-a-relationship)
  - [Input](#input)
  - [Example](#example)
  - [Response](#response-2)
- [Update a relationship](#update-a-relationship)
  - [Input](#input-1)
  - [Example](#example-1)
  - [Response](#response-3)
- [Delete a relationship](#delete-a-relationship)
  - [Response](#response-4)

<!-- /TOC -->

## Overview

A contact can be linked to other contacts. This link is called a relationship. For instance, a contact can have an uncle, a lover, a protégé.

Each relationship has a <a href="relationshiptypes">relationship type</a>. A contact can have as many relationships as necessary.

A relationship is between two contacts. Let's say John has an uncle called Peter. In this case:
- the primary contact is John. In the API calls below, John is called `contact_is`.
- the secondary contact is Peter. In the API calls below, Peter is called `of_contact`.

They are named that way so you can read a call more easily: `contact_is` is friend `of_contact`.

<a name="list-a-specific-relationship"></a>
## List a specific relationship

<span class="url">
  GET /relationships/:id
</span>

<a name="response"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 20,
    "object": "relationship",
    "contact_is": {
      "id": 1,
      "hash_ID": "h:Y5LOkAdWNDqgVomKPv",
      "object": "contact",
      "first_name": "Bailey",
      "last_name": "Rolfson",
      "complete_name": "Bailey Rolfson",
      "initials": "BR",
      "gender": "Man",
      "pronouns": null,
      "is_partial": false,
      "is_dead": false,
      "information": {
        "birthdate": {
          "is_age_based": true,
          "is_year_unknown": false,
          "date": "1949-01-01T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "avatar": {
          "has_avatar": true,
          "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/men\/42.jpg",
          "default_avatar_color": "#5f479a"
        }
      },
      "account": {
        "id": 1
      }
    },
    "relationship_type": {
      "id": 2,
      "object": "relationshiptype",
      "name": "spouse",
      "name_reverse_relationship": "spouse",
      "relationship_type_group_id": 1,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-04-14T23:24:49Z",
      "updated_at": "2018-04-14T23:24:49Z"
    },
    "of_contact": {
      "id": 3,
      "hash_ID": "h:65JGY7ZWDkbpOvPQR4",
      "object": "contact",
      "first_name": "Yoshiko",
      "last_name": "Ziemann",
      "complete_name": "Yoshiko Ziemann",
      "initials": "YZ",
      "gender": "Woman",
      "pronouns": "she/her",
      "is_partial": false,
      "is_dead": false,
      "information": {
        "birthdate": {
          "is_age_based": false,
          "is_year_unknown": false,
          "date": "1939-04-05T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "avatar": {
          "has_avatar": false,
          "avatar_url": null,
          "default_avatar_color": "#bd5067"
        }
      },
      "account": {
        "id": 1
      }
    },
    "account": {
      "id": 1
    },
    "created_at": "2018-04-16T20:49:04Z",
    "updated_at": "2018-04-16T20:49:04Z"
  }
}</code></pre>

<a name="list-all-the-relationships-of-a-contact"></a>
## List all the relationships of a contact

<span class="url">
  GET /contacts/:id/relationships/
</span>

<a name="response-1"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 1,
      "object": "relationshiptypegroup",
      "name": "love",
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 2,
      "object": "relationshiptypegroup",
      "name": "family",
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 3,
      "object": "relationshiptypegroup",
      "name": "friend",
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 4,
      "object": "relationshiptypegroup",
      "name": "work",
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": null,
      "updated_at": null
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/relationshiptypegroups?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/relationshiptypegroups?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/relationshiptypegroups",
    "per_page": 15,
    "to": 4,
    "total": 4
  }
}</code></pre>

<a name="create-a-relationship"></a>
## Create a relationship

<span class="url">
  POST /relationships/
</span>

<a name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_is | integer | <strong>Required</strong>. The ID of the contact that the relationship will be linked to. |
| relationship_type_id | integer | <strong>Required</strong>. The nature of the relationship between the two contacts. |
| of_contact | integer | <strong>Required</strong>. The ID of the contact the relationship is made with. |

<a name="example"></a>
### Example

<pre><code class="json">{
  "contact_is": 1,
  "relationship_type_id": 2,
  "of_contact": 3
}</code></pre>

<a name="response-2"></a>
### Response

The API returns a Relationship object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 20,
    "object": "relationship",
    "contact_is": {
      "id": 1,
      "hash_ID": "h:Y5LOkAdWNDqgVomKPv",
      "object": "contact",
      "first_name": "Bailey",
      "last_name": "Rolfson",
      "complete_name": "Bailey Rolfson",
      "initials": "BR",
      "gender": "Man",
      "pronouns": null,
      "is_partial": false,
      "is_dead": false,
      "information": {
        "birthdate": {
          "is_age_based": true,
          "is_year_unknown": false,
          "date": "1949-01-01T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "avatar": {
          "has_avatar": true,
          "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/men\/42.jpg",
          "default_avatar_color": "#5f479a"
        }
      },
      "account": {
        "id": 1
      }
    },
    "relationship_type": {
      "id": 2,
      "object": "relationshiptype",
      "name": "spouse",
      "name_reverse_relationship": "spouse",
      "relationship_type_group_id": 1,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-04-14T23:24:49Z",
      "updated_at": "2018-04-14T23:24:49Z"
    },
    "of_contact": {
      "id": 3,
      "hash_ID": "h:65JGY7ZWDkbpOvPQR4",
      "object": "contact",
      "first_name": "Yoshiko",
      "last_name": "Ziemann",
      "complete_name": "Yoshiko Ziemann",
      "initials": "YZ",
      "gender": "Woman",
      "pronouns": "she/her",
      "is_partial": false,
      "is_dead": false,
      "information": {
        "birthdate": {
          "is_age_based": false,
          "is_year_unknown": false,
          "date": "1939-04-05T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "avatar": {
          "has_avatar": false,
          "avatar_url": null,
          "default_avatar_color": "#bd5067"
        }
      },
      "account": {
        "id": 1
      }
    },
    "account": {
      "id": 1
    },
    "created_at": "2018-04-16T20:49:04Z",
    "updated_at": "2018-04-16T20:49:04Z"
  }
}</code></pre>

<a name="update-a-relationship"></a>
## Update a relationship

Updating a relationship will only update the relationship type.

<span class="url">
  PUT /relationships/:id
</span>

<a name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| relationship_type_id | integer | <strong>Required</strong>. The nature of the relationship between the two contacts. |

<a name="example-1"></a>
### Example

<pre><code class="json">{
  "relationship_type_id": 1
}</code></pre>

<a name="reponse-3"></a>
### Response

The API returns a Relationship object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 20,
    "object": "relationship",
    "contact_is": {
      "id": 1,
      "hash_ID": "h:Y5LOkAdWNDqgVomKPv",
      "object": "contact",
      "first_name": "Bailey",
      "last_name": "Rolfson",
      "complete_name": "Bailey Rolfson",
      "initials": "BR",
      "gender": "Man",
      "pronouns": null,
      "is_partial": false,
      "is_dead": false,
      "information": {
        "birthdate": {
          "is_age_based": true,
          "is_year_unknown": false,
          "date": "1949-01-01T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "avatar": {
          "has_avatar": true,
          "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/men\/42.jpg",
          "default_avatar_color": "#5f479a"
        }
      },
      "account": {
        "id": 1
      }
    },
    "relationship_type": {
      "id": 2,
      "object": "relationshiptype",
      "name": "spouse",
      "name_reverse_relationship": "spouse",
      "relationship_type_group_id": 1,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-04-14T23:24:49Z",
      "updated_at": "2018-04-14T23:24:49Z"
    },
    "of_contact": {
      "id": 3,
      "hash_ID": "h:65JGY7ZWDkbpOvPQR4",
      "object": "contact",
      "first_name": "Yoshiko",
      "last_name": "Ziemann",
      "complete_name": "Yoshiko Ziemann",
      "initials": "YZ",
      "gender": "Woman",
      "pronouns": null,
      "is_partial": false,
      "is_dead": false,
      "information": {
        "birthdate": {
          "is_age_based": false,
          "is_year_unknown": false,
          "date": "1939-04-05T00:00:00Z"
        },
        "deceased_date": {
          "is_age_based": null,
          "is_year_unknown": null,
          "date": null
        },
        "avatar": {
          "has_avatar": false,
          "avatar_url": null,
          "default_avatar_color": "#bd5067"
        }
      },
      "account": {
        "id": 1
      }
    },
    "account": {
      "id": 1
    },
    "created_at": "2018-04-16T20:49:04Z",
    "updated_at": "2018-04-16T20:49:04Z"
  }
}</code></pre>

<a name="delete-a-relationship"></a>
## Delete a relationship

<span class="url">
  DELETE /relationships/:id
</span>

<a name="response-4"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
