# occupations

<!-- TOC -->

- [Overview](#overview)
- [List all the occupations in your account](#list-all-the-occupations-in-your-account)
    - [Parameters](#parameters)
    - [Response](#response)
- [Get a specific occupation](#get-a-specific-occupation)
    - [Response](#response-1)
- [Create an occupation](#create-an-occupation)
    - [Input](#input)
    - [Example](#example)
    - [Response](#response-2)
- [Update an occupation](#update-an-occupation)
    - [Input](#input-1)
    - [Example](#example-1)
    - [Response](#response-3)
- [Delete an occupation](#delete-an-occupation)
    - [Response](#response-4)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

The Occupation object represents a job a Contact has (or had). It is linked with a occupation object.

<a id="markdown-list-all-the-occupations-in-your-account" name="list-all-the-occupations-in-your-account"></a>
## List all the occupations in your account

<span class="url">
  GET /occupations/
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
      "id": 2,
      "object": "occupation",
      "title": "Waiter",
      "description": "Served beverages",
      "salary": 12000,
      "salary_unit": "year",
      "currently_works_here": false,
      "start_date": null,
      "end_date": null,
      "company": {
        "id": 1,
        "object": "company",
        "name": "Central Perk",
        "website": "http:\/\/url.com",
        "number_of_employees": 3,
        "account": {
          "id": 1
        },
        "created_at": "2019-01-02T14:44:30Z",
        "updated_at": "2019-01-02T14:47:07Z"
      },
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "hash_id": "h:Y5LOkAdWNDqgVomKPv",
        "first_name": "Misael",
        "last_name": null,
        "nickname": null,
        "complete_name": "Misael",
        "initials": "M",
        "gender": "Man",
        "is_partial": false,
        "is_dead": false,
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
            "has_avatar": true,
            "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/55.jpg",
            "default_avatar_color": "#e5e5cd"
          }
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2019-01-02T15:04:54Z",
      "updated_at": "2019-01-02T15:04:54Z"
    },
    {
      "id": 3,
      "object": "occupation",
      "title": "Waiter",
      "description": "Served beverages",
      "salary": 12000,
      "salary_unit": "year",
      "currently_works_here": false,
      "start_date": "1990-01-01",
      "end_date": "1994-02-02",
      "company": {
        "id": 1,
        "object": "company",
        "name": "Central Perk",
        "website": "http:\/\/url.com",
        "number_of_employees": 3,
        "account": {
          "id": 1
        },
        "created_at": "2019-01-02T14:44:30Z",
        "updated_at": "2019-01-02T14:47:07Z"
      },
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "hash_id": "h:Y5LOkAdWNDqgVomKPv",
        "first_name": "Misael",
        "last_name": null,
        "nickname": null,
        "complete_name": "Misael",
        "initials": "M",
        "gender": "Man",
        "is_partial": false,
        "is_dead": false,
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
            "has_avatar": true,
            "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/55.jpg",
            "default_avatar_color": "#e5e5cd"
          }
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2019-01-02T15:07:03Z",
      "updated_at": "2019-01-02T15:07:03Z"
    }
  ],
  "links": {
    "first": "http:\/\/monica.test\/api\/occupations?page=1",
    "last": "http:\/\/monica.test\/api\/occupations?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "http:\/\/monica.test\/api\/occupations",
    "per_page": 15,
    "to": 2,
    "total": 2
  }
}</code></pre>

<a id="markdown-get-a-specific-occupation" name="get-a-specific-occupation"></a>
## Get a specific occupation

<span class="url">
  GET /occupations/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
{
  "data": {
    "id": 2,
    "object": "occupation",
    "title": "Waiter",
    "description": "Served beverages",
    "salary": 12000,
    "salary_unit": "year",
    "currently_works_here": false,
    "start_date": null,
    "end_date": null,
    "company": {
      "id": 1,
      "object": "company",
      "name": "Central Perk",
      "website": "http:\/\/url.com",
      "number_of_employees": 3,
      "account": {
        "id": 1
      },
      "created_at": "2019-01-02T14:44:30Z",
      "updated_at": "2019-01-02T14:47:07Z"
    },
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "hash_id": "h:Y5LOkAdWNDqgVomKPv",
      "first_name": "Misael",
      "last_name": null,
      "nickname": null,
      "complete_name": "Misael",
      "initials": "M",
      "gender": "Man",
      "is_partial": false,
      "is_dead": false,
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
          "has_avatar": true,
          "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/55.jpg",
          "default_avatar_color": "#e5e5cd"
        }
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2019-01-02T15:04:54Z",
    "updated_at": "2019-01-02T15:04:54Z"
  }
}</code></pre>

<a id="markdown-create-an-occupation" name="create-an-occupation"></a>
## Create an occupation

<span class="url">
  POST /occupations/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The contact this occupation is about. |
| company_id | integer | <strong>Required</strong>. The company where this occupation took place. |
| title | string | <strong>Required</strong>. The job title. Max 255 characters. |
| description | string | Any additional description about this job. Max 1000 characters. |
| salary | integer | The estimated salary of the contact for this job. |
| salary_unit | string | The unit of the salary (ie. $12000/year). Possible values: year, month, week, day, hour. |
| currently_works_here | boolean | Indicates whether the contact currently works here. |
| start_date | date | The date the job started. Format: YYYY-MM-DD. |
| end_date | date | The date the job ended. Format: YYYY-MM-DD. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
	"contact_id": 1,
	"company_id": 1,
	"title": "Waiter",
	"description": "Served beverages",
	"salary": "12000",
	"salary_unit": "year",
	"currently_works_here": false,
	"start_date": "1990-01-01",
	"end_date": "1994-02-02"
}</code></pre>

<a id="markdown-response-2" name="response-2"></a>
### Response

The API call returns a occupation object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 3,
    "object": "occupation",
    "title": "Waiter",
    "description": "Served beverages",
    "salary": "12000",
    "salary_unit": "year",
    "currently_works_here": false,
    "start_date": "1990-01-01T00:00:00Z",
    "end_date": "1994-02-02T00:00:00Z",
    "company": {
      "id": 1,
      "object": "company",
      "name": "Central Perk",
      "website": "http:\/\/url.com",
      "number_of_employees": 3,
      "account": {
        "id": 1
      },
      "created_at": "2019-01-02T14:44:30Z",
      "updated_at": "2019-01-02T14:47:07Z"
    },
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "hash_id": "h:Y5LOkAdWNDqgVomKPv",
      "first_name": "Misael",
      "last_name": null,
      "nickname": null,
      "complete_name": "Misael",
      "initials": "M",
      "gender": "Man",
      "is_partial": false,
      "is_dead": false,
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
          "has_avatar": true,
          "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/55.jpg",
          "default_avatar_color": "#e5e5cd"
        }
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2019-01-02T15:07:03Z",
    "updated_at": "2019-01-02T15:07:03Z"
  }
}</code></pre>

<a id="markdown-update-an-occupation" name="update-an-occupation"></a>
## Update an occupation

<span class="url">
  PUT /occupations/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The contact this occupation is about. |
| company_id | integer | <strong>Required</strong>. The company where this occupation took place. |
| title | string | <strong>Required</strong>. The job title. Max 255 characters. |
| description | string | Any additional description about this job. Max 1000 characters. |
| salary | integer | The estimated salary of the contact for this job. |
| salary_unit | string | The unit of the salary (ie. $12000/year). Possible values: year, month, week, day, hour. |
| currently_works_here | boolean | Indicates whether the contact currently works here. |
| start_date | date | The date the job started. Format: YYYY-MM-DD. |
| end_date | date | The date the job ended. Format: YYYY-MM-DD. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
	"contact_id": 1,
	"company_id": 1,
	"title": "Waiter",
	"description": "Served beverages",
	"salary": "12000",
	"salary_unit": "year",
	"currently_works_here": false,
	"start_date": "1990-01-01",
	"end_date": "1994-02-02"
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "occupation",
    "title": "Waiter",
    "description": "Served beverages",
    "salary": "12000",
    "salary_unit": "year",
    "currently_works_here": false,
    "start_date": "1990-01-01T00:00:00Z",
    "end_date": "1994-02-02T00:00:00Z",
    "company": {
      "id": 1,
      "object": "company",
      "name": "Central Perk",
      "website": "http:\/\/url.com",
      "number_of_employees": 3,
      "account": {
        "id": 1
      },
      "created_at": "2019-01-02T14:44:30Z",
      "updated_at": "2019-01-02T14:47:07Z"
    },
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "hash_id": "h:Y5LOkAdWNDqgVomKPv",
      "first_name": "Misael",
      "last_name": null,
      "nickname": null,
      "complete_name": "Misael",
      "initials": "M",
      "gender": "Man",
      "is_partial": false,
      "is_dead": false,
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
          "has_avatar": true,
          "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/55.jpg",
          "default_avatar_color": "#e5e5cd"
        }
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2019-01-02T15:03:27Z",
    "updated_at": "2019-01-02T15:10:53Z"
  }
}</code></pre>

<a id="markdown-delete-an-occupation" name="delete-an-occupation"></a>
## Delete an occupation

<span class="url">
  DELETE /occupations/:id
</span>

<a id="markdown-response-4" name="response-4"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 1
}</code></pre>
