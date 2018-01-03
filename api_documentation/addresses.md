## Overview

The Address object represents an address of a contact. A contact can have as
many addresses as necessary. An address can't be orphan - it needs to be linked to
at least one contact.

When retrieving an address, we always also return some basic information about
the related contact(s).

## List all the addresses of a specific contact

<url>
  GET /contacts/:id/addresses
</url>

### Response

{% highlight json %}
{
  "data": [
    {
      "id": 3,
      "object": "address",
      "name": "default",
      "street": null,
      "city": "Scranton",
      "province": null,
      "postal_code": null,
      "country": {
        "id": 1,
        "object": "country",
        "name": "United States",
        "iso": "us"
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
      "created_at": null,
      "updated_at": null
    },
    {
      "id": 11163,
      "object": "address",
      "name": "Work (The Office)",
      "street": "1725 Slough Avenue",
      "city": "Scranton",
      "province": "PA",
      "postal_code": null,
      "country": {
        "id": 1,
        "object": "country",
        "name": "United States",
        "iso": "us"
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
      "created_at": "2017-11-23T08:28:47Z",
      "updated_at": "2017-11-23T08:33:07Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/contacts\/8\/addresses?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/contacts\/8\/addresses?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/contacts\/8\/addresses",
    "per_page": 10,
    "to": 2,
    "total": 2
  }
}
{% endhighlight %}

## Get a specific address

<url>
  GET /addresses/:id
</url>

### Response

{% highlight json %}
{
  "data": {
    "id": 11163,
    "object": "address",
    "name": "Work (The Office)",
    "street": "1725 Slough Avenue",
    "city": "Scranton",
    "province": "PA",
    "postal_code": null,
    "country": {
      "id": 1,
      "object": "country",
      "name": "United States",
      "iso": "us"
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
    "created_at": "2017-11-23T08:28:47Z",
    "updated_at": "2017-11-23T08:33:07Z"
  }
}
{% endhighlight %}

## Create an address

<url>
  POST /addresses/
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. A short description of the address. Max 255 characters. |
| street | string | The number and street name. Max 255 characters. |
| city | string | The city the contact lives in. Max 255 characters. |
| province | string | The province the contact is in. Max 255 characters. |
| postal_code | string | The postal code of the city the contact lives in. Max 255 characters. |
| country_id | integer | The country ID of the country the contact lives in. Country IDs are retrieved through the <a href="{{ "/api/countries" | prepend: site.baseurl | prepend: site.url }}">Country's API</a>. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the address is associated with. |

### Example

{% highlight json %}
{
  "name": "Work",
  "street": "1725 Slough Avenue",
  "city": "Scranton",
  "province": "PA",
  "postal_code": null,
  "country_id": 1,
  "contact_id": 8
}
{% endhighlight %}

### Response

The API call returns an address object if the call succeeds.

{% highlight json %}
{
  "data": {
    "id": 11164,
    "object": "address",
    "name": "Work",
    "street": "1725 Slough Avenue",
    "city": "Scranton",
    "province": "PA",
    "postal_code": null,
    "country": {
      "id": 1,
      "object": "country",
      "name": "United States",
      "iso": "us"
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
    "created_at": "2017-11-23T09:26:54Z",
    "updated_at": "2017-11-23T09:26:54Z"
  }
}
{% endhighlight %}

## Update an address

<url>
  PUT /addresses/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. A short description of the address. Max 255 characters. |
| street | string | The number and street name. Max 255 characters. |
| city | string | The city the contact lives in. Max 255 characters. |
| province | string | The province the contact is in. Max 255 characters. |
| postal_code | string | The postal code of the city the contact lives in. Max 255 characters. |
| country_id | integer | The country ID of the country the contact lives in. Country IDs are retrieved through the <a href="{{ "/api/countries" | prepend: site.baseurl | prepend: site.url }}">Country's API</a>. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the address is associated with. |

### Example

{% highlight json %}
{
  "name": "Work (The Office)",
  "street": "1725 Slough Avenue",
  "city": "Scranton",
  "province": "PA",
  "postal_code": null,
  "country_id": 1,
  "contact_id": 8
}
{% endhighlight %}

### Response

{% highlight json %}
{
  "data": {
    "id": 11163,
    "object": "address",
    "name": "Work (The Office)",
    "street": "1725 Slough Avenue",
    "city": "Scranton",
    "province": "PA",
    "postal_code": null,
    "country": {
      "id": 1,
      "object": "country",
      "name": "United States",
      "iso": "us"
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
    "created_at": "2017-11-23T08:28:47Z",
    "updated_at": "2017-11-23T08:33:07Z"
  }
}
{% endhighlight %}

## Delete an address

<url>
  DELETE /addresses/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 31
}
{% endhighlight %}
