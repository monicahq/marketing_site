# Gifts <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
- [List all the gifts in your account](#list-all-the-gifts-in-your-account)
  - [Parameters](#parameters)
  - [Response](#response)
- [List all the gifts of a specific contact](#list-all-the-gifts-of-a-specific-contact)
  - [Response](#response-1)
- [Get a specific gift](#get-a-specific-gift)
  - [Response](#response-2)
- [Create a gift](#create-a-gift)
  - [Input](#input)
  - [Example](#example)
  - [Response](#response-3)
- [Update a gift](#update-a-gift)
  - [Input](#input-1)
  - [Example](#example-1)
  - [Response](#response-4)
- [Delete a gift](#delete-a-gift)
  - [Response](#response-5)
- [Associate a photo to a gift](#associate-a-photo-to-a-gift)
  - [Input](#input-2)
  - [Response](#response-6)

<!-- /TOC -->

<a name="overview"></a>
<a id="markdown-overview" name="overview"></a>
## Overview

The Gift object allows to record gifts you have offered, or wish to offer to
your contacts. A gift has to be associated with an existing contact - it can't
be orphan.

Apart from being linked to a contact, a gift can also be linked to a partner or
a child of the given contact. This is defined by the `is_for` tab.

When retrieving a gift, we always also return some basic information about the
related contact.

<a name="list-all-the-gifts-in-your-account"></a>
<a id="markdown-list-all-the-gifts-in-your-account" name="list-all-the-gifts-in-your-account"></a>
## List all the gifts in your account

<span class="url">
  GET /gifts/
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
      "object": "gift",
      "name": "Nice gift for Dwight",
      "comment": "I'm sure he'll love it",
      "url": "https:\/\/www.amazon.ca\/Culturenik-815-640-AMA-Office-Worlds-Television\/dp\/B00PCVCW80\/ref=sr_1_1?ie=UTF8&qid=1508272830&sr=8-1&keywords=dunder+mifflin+mug",
      "amount": "123",
      "amount_with_currency": "$123.00",
      "status": "idea",
      "date": null,
      "recipient": null,
      "photos": [],
      "contact": {
        "id": 1,
        "object": "contact",
        "first_name": "Henri",
        "last_name": "Troyat",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "approximate",
              "birthdate": "1987-01-01T21:56:44Z"
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "account": {
        "id": 5
      },
      "created_at": "2017-10-17T16:40:38Z",
      "updated_at": "2017-10-17T16:40:38Z"
    },
    {
      "id": 2,
      "object": "gift",
      "name": "For my friend Ron Swanson",
      "comment": "",
      "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
      "amount": "43",
      "amount_with_currency": "$43.00",
      "status": "idea",
      "date": null,
      "recipient": null,
      "photos": [],
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "account": {
        "id": 5
      },
      "created_at": "2017-10-17T16:41:27Z",
      "updated_at": "2017-10-17T16:41:27Z"
    },
    {
      "id": 3,
      "object": "gift",
      "name": "A giant cup of tea",
      "comment": "",
      "url": "",
      "amount": "21",
      "amount_with_currency": "$21.00",
      "status": "offered",
      "date": null,
      "recipient": {
        "id": 4,
        "object": "contact",
        "first_name": "Ben",
        "last_name": "Wyatt",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "approximate",
              "birthdate": "1974-01-01T16:42:11Z"
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "photos": [],
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "account": {
        "id": 5
      },
      "created_at": "2017-10-17T16:42:25Z",
      "updated_at": "2017-10-17T16:42:25Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/gifts?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/gifts?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/gifts",
    "per_page": 10,
    "to": 3,
    "total": 3
  }
}</code></pre>

<a name="list-all-the-gifts-of-a-specific-contact"></a>
<a id="markdown-list-all-the-gifts-of-a-specific-contact" name="list-all-the-gifts-of-a-specific-contact"></a>
## List all the gifts of a specific contact

<span class="url">
  GET /contacts/:id/gifts
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 2,
      "object": "gift",
      "name": "For my friend Ron Swanson",
      "comment": "",
      "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
      "amount": "43",
      "amount_with_currency": "$43.00",
      "status": "offered",
      "date": null,
      "recipient": null,
      "photos": [],
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "account": {
        "id": 5
      },
      "created_at": "2017-10-17T16:41:27Z",
      "updated_at": "2017-10-17T16:41:27Z"
    },
    {
      "id": 3,
      "object": "gift",
      "name": "A giant cup of tea",
      "comment": "",
      "url": "",
      "amount": "21",
      "amount_with_currency": "$21.00",
      "status": "offered",
      "date": null,
      "recipient": {
        "id": 4,
        "object": "contact",
        "first_name": "Ben",
        "last_name": "Wyatt",
        "gender": "male",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "approximate",
              "birthdate": "1974-01-01T16:42:11Z"
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "photos": [
        {
          "id": 44,
          "object": "photo",
          "original_filename": "EBeVa4qXsAIMnaC.jpeg",
          "new_filename": "photos\/POWVMVuauZ2xPsG9ZNoZdE0jLaMRz1FGZtCUrjDH.jpeg",
          "filesize": 484289,
          "mime_type": "image\/jpeg",
          "link": "https:\/\/app.monicahq.com\/storage\/photos\/POWVMVuauZ2xPsG9ZNoZdE0jLaMRz1FGZtCUrjDH.jpeg",
          "contact": {
            "id": 3,
            "object": "contact",
            "first_name": "Leslie",
            "last_name": "Knope",
            "gender": "none",
            "is_partial": false,
            "information": {
              "dates": [
                {
                  "name": "birthdate",
                  "is_birthdate_approximate": "unknown",
                  "birthdate": null
                }
              ]
            },
            "account": {
              "id": 5
            }
          },
          "account":{
            "id": 5
          },
          "created_at": "2017-10-17T16:42:25Z",
          "updated_at": "2017-10-17T16:42:25Z",
        }
      ]
      "contact": {
        "id": 3,
        "object": "contact",
        "first_name": "Leslie",
        "last_name": "Knope",
        "gender": "none",
        "is_partial": false,
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "unknown",
              "birthdate": null
            }
          ]
        },
        "account": {
          "id": 5
        }
      },
      "account": {
        "id": 5
      },
      "created_at": "2017-10-17T16:42:25Z",
      "updated_at": "2017-10-17T16:42:25Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/contacts\/3\/gifts?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/contacts\/3\/gifts?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/contacts\/3\/gifts",
    "per_page": 10,
    "to": 2,
    "total": 2
  }
}</code></pre>

<a name="get-a-specific-gift"></a>
<a id="markdown-get-a-specific-gift" name="get-a-specific-gift"></a>
## Get a specific gift

<span class="url">
  GET /gifts/:id
</span>

<a id="markdown-response-2" name="response-2"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 2,
    "object": "gift",
    "name": "For my friend Ron Swanson",
    "comment": "",
    "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
    "amount": "43",
    "amount_with_currency": "$43.00",
    "status": "offered",
    "date": null,
    "recipient": null,
    "photos": [],
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "Leslie",
      "last_name": "Knope",
      "gender": "none",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 5
      }
    },
    "account": {
      "id": 5
    },
    "created_at": "2017-10-17T16:41:27Z",
    "updated_at": "2017-10-17T16:41:27Z"
  }
}</code></pre>

<a name="create-a-gift"></a>
<a id="markdown-create-a-gift" name="create-a-gift"></a>
## Create a gift

<span class="url">
  POST /gifts/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the gift is associated with. |
| recipient_id | integer | The ID of the contact the gift is for. It is either one of the partner or a child of the contact. |
| name | string | <strong>Required</strong>. The description of the gift. Max 255 characters. |
| comment | string | More details about the gift. Max 1000000 characters. |
| url | string | The URL where the gift can be find (for instance, on Amazon). Max 1000000 characters. |
| amount | number | The amount (in the currency of the user) of the gift. |
| status | string | <strong>Required</strong>. Status of the gift. Could be one of: <em>idea</em>: if the gift is an idea, <em>offered</em>: if the gift has been offered, <em>received</em>: if it's a gift from the contact. |
| date | string | The date the gift has been offered. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "name":"For my friend Ron Swanson",
  "comment":"This is going to be so awesome",
  "url":"https://www.amazon.ca/Culturenik-182-390-Recreation-Swanson-Pyramid/dp/B00UTPTOHG/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
  "amount":291,
  "status":"offered",
  "date":"2015-02-24",
  "contact_id": 3,
  "recipient_id": 1
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

The API returns a gift object if the gift succeeds.

<pre><code class="json">{
  "data": {
    "id": 676,
    "object": "gift",
    "name": "For my friend Ron Swanson",
    "comment": "This is going to be so awesome",
    "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
    "amount": "291",
    "amount_with_currency": "$291.00",
    "status": "offered",
    "date": "2015-02-24T00:00:00Z",
    "recipient": {
      "id": 1,
      "object": "contact",
      "first_name": "Henri",
      "last_name": "Troyat",
      "gender": "male",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "photos": [],
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "David",
      "last_name": "Olsdwaer",
      "gender": "male",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-10-19T21:51:15Z",
    "updated_at": "2017-10-19T21:51:15Z"
  }
}</code></pre>

<a name="update-a-gift"></a>
<a id="markdown-update-a-gift" name="update-a-gift"></a>
## Update a gift

<span class="url">
  PUT /gifts/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the gift is associated with. |
| recipient_id | integer | The ID of the contact the gift is for. It is either one of the partner or a child of the contact. |
| name | string | <strong>Required</strong>. The description of the gift. Max 255 characters. |
| comment | string | More details about the gift. Max 1000000 characters. |
| url | string | The URL where the gift can be find (for instance, on Amazon). Max 1000000 characters. |
| amount | number | The amount (in the currency of the user) of the gift. |
| status | string | <strong>Required</strong>. Status of the gift. Could be one of: <em>idea</em>: if the gift is an idea, <em>offered</em>: if the gift has been offered, <em>received</em>: if it's a gift from the contact. |
| date | string | The date the gift has been offered. Can be in the past or future - the latter being dumb, but well. Format: YYYY-MM-DD. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "name":"For my friend Ron Swanson",
  "comment":"This is going to be so awesome",
  "url":"https://www.amazon.ca/Culturenik-182-390-Recreation-Swanson-Pyramid/dp/B00UTPTOHG/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
  "amount":"293",
  "status":"offered",
  "date":"2015-02-24",
  "contact_id": 3,
  "recipient_id": null
}</code></pre>

<a id="markdown-response-4" name="response-4"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 678,
    "object": "gift",
    "name": "For my friend Ron Swanson",
    "comment": "This is going to be so awesome",
    "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
    "amount": "293",
    "amount_with_currency": "$293.00",
    "status": "offered",
    "date": "2015-02-24T00:00:00Z",
    "recipient": null,
    "photos": [],
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "David",
      "last_name": "Olsdwaer",
      "gender": "male",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-10-19T21:52:53Z",
    "updated_at": "2017-10-19T21:52:53Z"
  }
}</code></pre>

<a name="delete-a-gift"></a>
<a id="markdown-delete-a-gift" name="delete-a-gift"></a>
## Delete a gift

<span class="url">
  DELETE /gifts/:id
</span>

<a id="markdown-response-5" name="response-5"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>


<a name="associate-a-photo-to-a-gift"></a>
## Associate a photo to a gift

<span class="url">
  PUT /gifts/:id/photo/:photoId
</span>

A [photo](photos) can be associated to a gift. You will have to [create a photo](photos#create-a-photo) first, associate with the contact, and then associate it.

<a id="markdown-input-2" name="input-2"></a>
### Input

No input needed.

<a id="markdown-response-6" name="response-6"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 678,
    "object": "gift",
    "name": "For my friend Ron Swanson",
    "comment": "This is going to be so awesome",
    "url": "https:\/\/www.amazon.ca\/Culturenik-182-390-Recreation-Swanson-Pyramid\/dp\/B00UTPTOHG\/ref=sr_1_1?ie=UTF8&qid=1508272877&sr=8-1&keywords=ron+swanson",
    "amount": "293",
    "amount_with_currency": "$293.00",
    "status": "offered",
    "date": "2015-02-24T00:00:00Z",
    "recipient": null,
    "photos": [
      {
        "id": 44,
        "object": "photo",
        "original_filename": "EBeVa4qXsAIMnaC.jpeg",
        "new_filename": "photos\/POWVMVuauZ2xPsG9ZNoZdE0jLaMRz1FGZtCUrjDH.jpeg",
        "filesize": 484289,
        "mime_type": "image\/jpeg",
        "link": "https:\/\/app.monicahq.com\/storage\/photos\/POWVMVuauZ2xPsG9ZNoZdE0jLaMRz1FGZtCUrjDH.jpeg",
        "contact": {
          "id": 3,
          "object": "contact",
          "first_name": "David",
          "last_name": "Olsdwaer",
          "gender": "male",
          "is_partial": false,
          "information": {
            "dates": [
              {
                "name": "birthdate",
                "is_birthdate_approximate": "unknown",
                "birthdate": null
              }
            ]
          },
          "account":{
            "id": 1
          },
        },
        "account":{
          "id": 1
        },
        "created_at": "2017-10-17T16:42:25Z",
        "updated_at": "2017-10-17T16:42:25Z",
      }
    ],
    "contact": {
      "id": 3,
      "object": "contact",
      "first_name": "David",
      "last_name": "Olsdwaer",
      "gender": "male",
      "is_partial": false,
      "information": {
        "dates": [
          {
            "name": "birthdate",
            "is_birthdate_approximate": "unknown",
            "birthdate": null
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "account": {
      "id": 1
    },
    "created_at": "2017-10-19T21:52:53Z",
    "updated_at": "2017-10-19T21:52:53Z"
  }
}</code></pre>

