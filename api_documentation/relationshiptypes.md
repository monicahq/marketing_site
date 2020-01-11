# Relationship Types <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
  - [All available relationship types](#all-available-relationship-types)
- [List all the relationship types in an account](#list-all-the-relationship-types-in-an-account)
  - [Response](#response)
- [Get a specific relationship type](#get-a-specific-relationship-type)
  - [Response](#response-1)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

A contact can have multiple relationships, like a father, brother or lover. We call this a relationship type. Each relationship type belongs to a category, called <a href="relationshiptypegroups">relationship type group</a>. For instance, `father` belongs to the `family` category, `lover` belongs to the `love` category, etc...

Relationship types are account wide. At the moment, relationship types are in read-only mode. You can't create, edit or delete them.

Each relationship type has an opposite relationship type. This is due to the fact that when we create a relationship between two contacts, we actually create two relationships between those contacts. Let me explain with an example:
* You have a contact A
* You create a new relationship between contact A and contact B
* Contact A is the father of contact B. Therefore, we create a relationship of type "father" between A and B.
* However, when we consult contact B's record, we want to see that contact B is the child of contact A. Therefore, we create a second relationship in the database, linking B and A with a "child" relationship type.

<a id="markdown-all-available-relationship-types" name="all-available-relationship-types"></a>
### All available relationship types

Here are all the default relationship types of each account:

| Name | Reverse relationship name | Relationship type group | Description of the relationship |
| ---- | ----------- | ----------- | ----------- |
| partner | partner | love | Significant others |
| spouse | spouse | love | Husband/wife |
| date | date | love | Dates |
| lover | lover | love | Lovers |
| inlovewith | lovedby | love | The person the contact is in love with |
| lovedby | inlovewith | love | Someone who loves the contact |
| ex | ex | love | Exs (either spouse or partner) |
| parent | child | family | Parent/child |
| child | parent | family | Child/parent |
| sibling | sibling | family | Siblings |
| grandparent | grandchild | family | Grand parent/grand child |
| grandchild | grandparent | family | Grand child/grand parent |
| uncle | nephew | family | Uncle/nephew |
| nephew | uncle | family | Nephew/uncle |
| cousin | cousin | family | Cousins |
| godfather | godson | family | God father/god son |
| godson | godfather | family | God son/god father |
| friend | friend | friend | Friends |
| bestfriend | bestfriend | friend | Best friends |
| colleague | colleague | work | Colleagues |
| boss | subordonate | work | Boss/employee |
| subordonate | boss | work | Employee/Boss |
| mentor | protege | work | Mentor/protégé |
| protege | mentor | work | Protégé/mentor |

<a id="markdown-list-all-the-relationship-types-in-an-account" name="list-all-the-relationship-types-in-an-account"></a>
## List all the relationship types in an account

<span class="url">
  GET /relationshiptypes/
</span>

<a id="markdown-response" name="response"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 1,
      "object": "relationshiptype",
      "name": "partner",
      "name_reverse_relationship": "partner",
      "relationship_type_group_id": 1,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 2,
      "object": "relationshiptype",
      "name": "spouse",
      "name_reverse_relationship": "spouse",
      "relationship_type_group_id": 1,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 3,
      "object": "relationshiptype",
      "name": "date",
      "name_reverse_relationship": "date",
      "relationship_type_group_id": 1,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 4,
      "object": "relationshiptype",
      "name": "lover",
      "name_reverse_relationship": "lover",
      "relationship_type_group_id": 1,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 5,
      "object": "relationshiptype",
      "name": "inlovewith",
      "name_reverse_relationship": "inlovewith",
      "relationship_type_group_id": 1,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 6,
      "object": "relationshiptype",
      "name": "ex",
      "name_reverse_relationship": "ex",
      "relationship_type_group_id": 1,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 7,
      "object": "relationshiptype",
      "name": "parent",
      "name_reverse_relationship": "child",
      "relationship_type_group_id": 2,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 8,
      "object": "relationshiptype",
      "name": "child",
      "name_reverse_relationship": "parent",
      "relationship_type_group_id": 2,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 9,
      "object": "relationshiptype",
      "name": "sibling",
      "name_reverse_relationship": "sibling",
      "relationship_type_group_id": 2,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 10,
      "object": "relationshiptype",
      "name": "grandparent",
      "name_reverse_relationship": "grandchild",
      "relationship_type_group_id": 2,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 11,
      "object": "relationshiptype",
      "name": "grandchild",
      "name_reverse_relationship": "grandparent",
      "relationship_type_group_id": 2,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 12,
      "object": "relationshiptype",
      "name": "uncle",
      "name_reverse_relationship": "nephew",
      "relationship_type_group_id": 2,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 13,
      "object": "relationshiptype",
      "name": "nephew",
      "name_reverse_relationship": "uncle",
      "relationship_type_group_id": 2,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 14,
      "object": "relationshiptype",
      "name": "cousin",
      "name_reverse_relationship": "cousin",
      "relationship_type_group_id": 2,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    },
    {
      "id": 15,
      "object": "relationshiptype",
      "name": "godfather",
      "name_reverse_relationship": "godson",
      "relationship_type_group_id": 2,
      "delible": false,
      "account": {
        "id": 1
      },
      "created_at": "2018-03-25T23:59:54Z",
      "updated_at": "2018-03-25T23:59:54Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/relationshiptypes?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/relationshiptypes?page=2",
    "prev": null,
    "next": "https:\/\/app.monicahq.com\/api\/relationshiptypes?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 2,
    "path": "https:\/\/app.monicahq.com\/api\/relationshiptypes",
    "per_page": 15,
    "to": 15,
    "total": 23
  }
}</code></pre>

<a id="markdown-get-a-specific-relationship-type" name="get-a-specific-relationship-type"></a>
## Get a specific relationship type

<span class="url">
  GET /relationshiptypes/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "relationshiptype",
    "name": "partner",
    "name_reverse_relationship": "partner",
    "relationship_type_group_id": 1,
    "delible": false,
    "account": {
      "id": 1
    },
    "created_at": "2018-03-25T23:59:54Z",
    "updated_at": "2018-03-25T23:59:54Z"
  }
}</code></pre>
