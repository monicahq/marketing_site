# Audit logs

- [Overview](#overview)
- [List all the audit logs in the account](#list-all-the-audit-logs-in-the-account)
    - [Parameters](#parameters)
    - [Response](#response)

<a id="markdown-overview" name="overview"></a>
## Overview

The Audit log object represents what happened in the account. An audit log can be about a user, a contact or else. Right now, only audit logs about contacts are supported.

<a id="markdown-list-all-the-audit-logs-in-the-account" name="list-all-the-audit-logs-in-the-account"></a>
## List all the audit logs in the account

<span class="url">
  GET /logs
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
      "id": 1,
      "object": "auditlog",
      "author": {
        "id": 1,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Meghan",
        "contact_id": 1
      },
      "audited_at": "2020-02-05T02:28:57Z",
      "created_at": "2020-02-05T02:28:57Z",
      "updated_at": "2020-02-05T02:28:57Z"
    },
    {
      "id": 2,
      "object": "auditlog",
      "author": {
        "id": 2,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Kip Williamson",
        "contact_id": 2
      },
      "audited_at": "2020-02-05T02:28:58Z",
      "created_at": "2020-02-05T02:28:58Z",
      "updated_at": "2020-02-05T02:28:58Z"
    },
    {
      "id": 3,
      "object": "auditlog",
      "author": {
        "id": 3,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Catalina",
        "contact_id": 3
      },
      "audited_at": "2020-02-05T02:28:58Z",
      "created_at": "2020-02-05T02:28:58Z",
      "updated_at": "2020-02-05T02:28:58Z"
    },
    {
      "id": 4,
      "object": "auditlog",
      "author": {
        "id": 4,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Creola Pagac",
        "contact_id": 4
      },
      "audited_at": "2020-02-05T02:28:58Z",
      "created_at": "2020-02-05T02:28:58Z",
      "updated_at": "2020-02-05T02:28:58Z"
    },
    {
      "id": 5,
      "object": "auditlog",
      "author": {
        "id": 5,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Alycia Goldner",
        "contact_id": 5
      },
      "audited_at": "2020-02-05T02:28:58Z",
      "created_at": "2020-02-05T02:28:58Z",
      "updated_at": "2020-02-05T02:28:58Z"
    },
    {
      "id": 6,
      "object": "auditlog",
      "author": {
        "id": 6,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Krystal",
        "contact_id": 6
      },
      "audited_at": "2020-02-05T02:28:58Z",
      "created_at": "2020-02-05T02:28:58Z",
      "updated_at": "2020-02-05T02:28:58Z"
    },
    {
      "id": 7,
      "object": "auditlog",
      "author": {
        "id": 7,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Micah Schowalter",
        "contact_id": 7
      },
      "audited_at": "2020-02-05T02:28:58Z",
      "created_at": "2020-02-05T02:28:58Z",
      "updated_at": "2020-02-05T02:28:58Z"
    },
    {
      "id": 8,
      "object": "auditlog",
      "author": {
        "id": 8,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Hubert Dietrich",
        "contact_id": 8
      },
      "audited_at": "2020-02-05T02:28:58Z",
      "created_at": "2020-02-05T02:28:58Z",
      "updated_at": "2020-02-05T02:28:58Z"
    },
    {
      "id": 9,
      "object": "auditlog",
      "author": {
        "id": 9,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Ryleigh",
        "contact_id": 9
      },
      "audited_at": "2020-02-05T02:28:58Z",
      "created_at": "2020-02-05T02:28:58Z",
      "updated_at": "2020-02-05T02:28:58Z"
    },
    {
      "id": 10,
      "object": "auditlog",
      "author": {
        "id": 10,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Alessia Lind",
        "contact_id": 10
      },
      "audited_at": "2020-02-05T02:28:58Z",
      "created_at": "2020-02-05T02:28:58Z",
      "updated_at": "2020-02-05T02:28:58Z"
    },
    {
      "id": 11,
      "object": "auditlog",
      "author": {
        "id": 11,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Julianne Rippin",
        "contact_id": 11
      },
      "audited_at": "2020-02-05T02:28:58Z",
      "created_at": "2020-02-05T02:28:58Z",
      "updated_at": "2020-02-05T02:28:58Z"
    },
    {
      "id": 12,
      "object": "auditlog",
      "author": {
        "id": 12,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Henriette",
        "contact_id": 12
      },
      "audited_at": "2020-02-05T02:28:59Z",
      "created_at": "2020-02-05T02:28:59Z",
      "updated_at": "2020-02-05T02:28:59Z"
    },
    {
      "id": 13,
      "object": "auditlog",
      "author": {
        "id": 13,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Electa",
        "contact_id": 13
      },
      "audited_at": "2020-02-05T02:28:59Z",
      "created_at": "2020-02-05T02:28:59Z",
      "updated_at": "2020-02-05T02:28:59Z"
    },
    {
      "id": 14,
      "object": "auditlog",
      "author": {
        "id": 14,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Anjali Boehm",
        "contact_id": 14
      },
      "audited_at": "2020-02-05T02:28:59Z",
      "created_at": "2020-02-05T02:28:59Z",
      "updated_at": "2020-02-05T02:28:59Z"
    },
    {
      "id": 15,
      "object": "auditlog",
      "author": {
        "id": 15,
        "name": null
      },
      "action": "contact_created",
      "objects": {
        "contact_name": "Alfredo",
        "contact_id": 15
      },
      "audited_at": "2020-02-05T02:28:59Z",
      "created_at": "2020-02-05T02:28:59Z",
      "updated_at": "2020-02-05T02:28:59Z"
    }
  ],
  "links": {
    "first": "https:\/\/monica.test\/api\/logs?page=1",
    "last": "https:\/\/monica.test\/api\/logs?page=20",
    "prev": null,
    "next": "https:\/\/monica.test\/api\/logs?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 20,
    "path": "https:\/\/monica.test\/api\/logs",
    "per_page": 15,
    "to": 15,
    "total": 293
  }
}</code></pre>
