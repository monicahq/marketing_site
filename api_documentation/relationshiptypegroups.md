# Relationship Type Groups <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
  - [All available relationship type groups](#all-available-relationship-type-groups)
- [List all the relationship type groups in an account](#list-all-the-relationship-type-groups-in-an-account)
  - [Response](#response)
- [Get a specific relationship type group](#get-a-specific-relationship-type-group)
  - [Response](#response-1)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

A contact can have multiple relationships, like a father, brother or lover. We call this a <a href="relationshiptypes">relationship type</a>. Each relationship type belongs to a category. For instance, `father` belongs to the `family` category, `lover` belongs to the `love` category, etc...

Relationship type groups are account wide. At the moment, relationship type groups are in read-only mode. You can't create, edit or delete them.

<a id="markdown-all-available-relationship-type-groups" name="all-available-relationship-type-groups"></a>
### All available relationship type groups

Here are all the default relationship type groups of each account:

| Name |
| ---- |
| love |
| family |
| friend |
| work |

<a id="markdown-list-all-the-relationship-type-groups-in-an-account" name="list-all-the-relationship-type-groups-in-an-account"></a>
## List all the relationship type groups in an account

<span class="url">
  GET /relationshiptypegroups/
</span>

<a id="markdown-response" name="response"></a>
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

<a id="markdown-get-a-specific-relationship-type-group" name="get-a-specific-relationship-type-group"></a>
## Get a specific relationship type group

<span class="url">
  GET /contactfieldtypes/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "relationshiptypegroup",
    "name": "love",
    "delible": false,
    "account": {
      "id": 1
    },
    "created_at": null,
    "updated_at": null
  }
}</code></pre>
