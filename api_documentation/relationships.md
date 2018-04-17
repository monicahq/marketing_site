# Relationships

<!-- TOC -->

- [Overview](#overview)
    - [All available relationship type groups](#all-available-relationship-type-groups)
- [List all the relationship type groups in an account](#list-all-the-relationship-type-groups-in-an-account)
    - [Response](#response)
- [Get a specific relationship type group](#get-a-specific-relationship-type-group)
    - [Response](#response-1)

<!-- /TOC -->

## Overview

A contact can be linked to other contacts. This link is called a relationship. For instance, a contact can have an uncle, a lover, a protégé.

Each relationship has a <a href="/api/relationshiptypes">relationship type</a>. A contact can have as many relationships as necessary.

A relationship is between two contacts. Let's say John has an uncle called Peter. In this case:
- the primary contact is John. In the API calls below, John is called `contact_is`.
- the secondary contact is Peter. In the API calls below, Peter is called `of_contact`.

They are named that way so you can read a call more easily: `contact_is` is friend `of_contact`.

## List a specific relationship

<span class="url">
  GET /relationships/{id}
</span>

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

## List all the relationships of a contact

<span class="url">
  GET /contacts/{contact}/relationships/
</span>

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
    "first": "http:\/\/monica.test\/api\/relationshiptypegroups?page=1",
    "last": "http:\/\/monica.test\/api\/relationshiptypegroups?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "http:\/\/monica.test\/api\/relationshiptypegroups",
    "per_page": 15,
    "to": 4,
    "total": 4
  }
}</code></pre>

## Create a relationship

<span class="url">
  POST /relationships/
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_is | integer | <strong>Required</strong>. The ID of the contact that the relationship will be linked to. |
| relationship_type_id | integer | <strong>Required</strong>. The nature of the relationship between the two contacts. |
| of_contact | integer | <strong>Required</strong>. The ID of the contact the relationship is made with. |

### Example

<pre><code class="json">{
  "contact_is": 1,
  "relationship_type_id": 2,
  "of_contact": 3
}</code></pre>

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

## Update a relationship

Updating a relationship will only update the relationship type.

<span class="url">
  PUT /relationships/{id}
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| relationship_type_id | integer | <strong>Required</strong>. The nature of the relationship between the two contacts. |

### Example

<pre><code class="json">{
  "relationship_type_id": 1
}</code></pre>

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

## Delete a relationship

<span class="url">
  DELETE /relationships/{id}
</span>

### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
