## Overview

The Debt object allows to record that you own to contacts, or what your contacts
own you.

A debt has to be linked to a contact, always.

If the user owns money to the contact, the `in_debt` will be `yes`. If the
contact owns money to the user, `in_debt` will be `no`.

## List all your debts

<url>
  GET /debts/
</url>

### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |

### Response

{% highlight json %}
{
  "data": [
    {
      "id": 428,
      "object": "debt",
      "in_debt": "yes",
      "status": "inprogress",
      "amount": 100,
      "reason": "",
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
        "information": {
          "dates": [
            {
              "name": "birthdate",
              "is_birthdate_approximate": "exact",
              "birthdate": "1978-10-01T16:20:55Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-06-14T17:43:13Z",
      "updated_at": "2017-06-14T17:43:20Z"
    },
    {
      "id": 831,
      "object": "debt",
      "in_debt": "no",
      "status": "inprogress",
      "amount": 123,
      "reason": "For the bar last time",
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
              "birthdate": "1983-10-23T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-10-21T15:59:14Z",
      "updated_at": "2017-10-21T15:59:14Z"
    },
    {
      "id": 832,
      "object": "debt",
      "in_debt": "yes",
      "status": "inprogress",
      "amount": 431,
      "reason": "For the coffee last time.",
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
              "birthdate": "1983-10-23T00:00:00Z"
            }
          ]
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2017-10-21T16:04:08Z",
      "updated_at": "2017-10-21T16:04:08Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/debts?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/debts?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/debts",
    "per_page": 10,
    "to": 3,
    "total": 3
  }
}
{% endhighlight %}

## Get a specific debt

<url>
  GET /debts/:id
</url>

{% highlight json %}
{
  "data": {
    "id": 832,
    "object": "debt",
    "in_debt": "yes",
    "status": "inprogress",
    "amount": 431,
    "reason": "For the coffee last time.",
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
            "birthdate": "1983-10-23T00:00:00Z"
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2017-10-21T16:04:08Z",
    "updated_at": "2017-10-21T16:04:08Z"
  }
}
{% endhighlight %}

## Create a debt

<url>
  POST /debts/
</url>

### Input

If a field is not required, you can send the `null` value as the content of the field.

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the debt is associated with. |
| in_debt | string | <strong>Required</strong>. Value: `yes` if the user owns money to the contact. `no` if the contact owns money to the user. |
| status | string | <strong>Required</strong>. State of the debt. Values: `inprogress` or `complete`. |
| amount | integer | <strong>Required</strong>. The amount of money owned. |
| reason | string | The reason the debt exists. Max 10000000 characters. |

### Example

{% highlight json %}
{
  "in_debt":"yes",
  "status":"inprogress",
  "amount":325,
  "reason":"He bought half the pizza",
  "contact_id": 1
}
{% endhighlight %}

### Response

The API call returns a debt object if the call succeeds.

{% highlight json %}
{
  "data": {
    "id": 835,
    "object": "debt",
    "in_debt": "yes",
    "status": "inprogress",
    "amount": 325,
    "reason": "He bought half the pizza",
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
            "birthdate": "1983-10-23T00:00:00Z"
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2017-10-21T16:16:26Z",
    "updated_at": "2017-10-21T16:16:26Z"
  }
}
{% endhighlight %}

## Update a debt

<url>
  PUT /debts/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the debt is associated with. |
| in_debt | string | <strong>Required</strong>. Value: `yes` if the user owns money to the contact. `no` if the contact owns money to the user. |
| status | string | <strong>Required</strong>. State of the debt. Values: `inprogress` or `complete`. |
| amount | integer | <strong>Required</strong>. The amount of money owned. |
| reason | string | The reason the debt exists. Max 10000000 characters. |

### Example

{% highlight json %}
{
  "in_debt":"yes",
  "status":"inprogress",
  "amount":23,
  "reason":"He bought half the pizza",
  "contact_id": 1
}
{% endhighlight %}

### Response

{% highlight json %}
{
  "data": {
    "id": 835,
    "object": "debt",
    "in_debt": "yes",
    "status": "inprogress",
    "amount": 23,
    "reason": "He bought half the pizza",
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
            "birthdate": "1983-10-23T00:00:00Z"
          }
        ]
      },
      "account": {
        "id": 1
      }
    },
    "created_at": "2017-10-21T16:16:26Z",
    "updated_at": "2017-10-21T16:19:54Z"
  }
}
{% endhighlight %}

## Delete a debt

<url>
  DELETE /debts/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 31
}
{% endhighlight %}
