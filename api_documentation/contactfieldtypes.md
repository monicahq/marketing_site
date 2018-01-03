## Overview

A contact can have as many <a href="{{ "/api/contactfields" | prepend: site.baseurl | prepend: site.url }}">contact fields</a>
 as possible. Each contact field has a type: a phone number, email address,
 Twitter profile, Telegram nickname, etc... Each one of these means of
 communication is called a Contact Field Type. A contact can have as many
 contact field types as necessary.

Contact field types are account wide, and will be applied to all contacts.
Also, if a contact field type is deleted, Monica will delete all the Contact
Field objects that have the deleted contact field type associated with it.

A contact field type can have an icon. This icon will be displayed next to the
contact field. It has to be a [FontAwesome icon](http://fontawesome.io/) and
the data we need is the class name of this icon (like `fa fa-envelope-open-o`
for instance).

A contact field type can also have a protocol. The protocol is used to make the
contact field clickable and launch whatever protocol the contact field type
has. For instance, if the contact field type is a phone number, the protocol
will be `tel:`. We'll add this when displaying the phone number, in order for
the browser to know which actions it should take when the user clicks on it.

A contact field type can be `delible`, meaning that it's impossible to delete
it. This concept exists because in the case of an import of data for instance,
vCard assumes you have a phone number and an email address fields. Moreover, as
the name of a contact field type can change, the `type` column is there to
indicate the type of contact field.

## List all the contact field types in an account

<url>
  GET /contactfieldtypes/
</url>

### Response

{% highlight json %}
{
  "data": [
    {
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
      "created_at": "2017-11-22T12:51:10Z",
      "updated_at": "2017-11-22T12:51:10Z"
    },
    {
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
      "created_at": "2017-11-22T12:51:10Z",
      "updated_at": "2017-11-22T12:51:10Z"
    },
    {
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
      "created_at": "2017-11-22T12:51:10Z",
      "updated_at": "2017-11-22T12:51:10Z"
    }
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/contactfieldtypes?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/contactfieldtypes?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/app.monicahq.com\/api\/contactfieldtypes",
    "per_page": 10,
    "to": 3,
    "total": 3
  }
}
{% endhighlight %}

## Get a specific contact type field

<url>
  GET /contactfieldtypes/:id
</url>

### Response

{% highlight json %}
{
  "data": {
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
    "created_at": "2017-11-22T12:51:10Z",
    "updated_at": "2017-11-22T12:51:10Z"
  }
}
{% endhighlight %}

## Create a contact field type

<url>
  POST /contactfieldtypes/
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. A short description of the contact field type. Max 255 characters. |
| fontawesome_icon | string | The class name of the Fontawesome icon that will be used when displaying the contact field. Max 255 characters. |
| protocol | string | The protocol (ie `mailto:`, `tel:`) used when clicking the contact field in the UI. Max 255 characters. |
| delible | integer | Indicates whether the contact field type can be deleted. Possible values: `0` (false), `1` (true). |
| type | string | Used on special occasions so we can manipulate data in the backend. Most of the time it has be set to null. Max 255 characters. |

### Example

{% highlight json %}
{
  "name": "Telegram",
  "fontawesome_icon": "fa fa-bath",
  "protocol": "telegram:",
  "delible": 1,
  "type": null
}
{% endhighlight %}

### Response

The API call returns a contact field type object if the call succeeds.

{% highlight json %}
{
  "data": {
    "id": 37305,
    "object": "contactfieldtype",
    "name": "Telegram",
    "fontawesome_icon": "fa fa-bath",
    "protocol": "telegram:",
    "delible": true,
    "type": null,
    "account": {
      "id": 1
    },
    "created_at": "2017-11-24T09:24:31Z",
    "updated_at": "2017-11-24T09:24:31Z"
  }
}
{% endhighlight %}

## Update a contact field type

<url>
  PUT /contactfieldtypes/:id
</url>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. A short description of the contact field type. Max 255 characters. |
| fontawesome_icon | string | The class name of the Fontawesome icon that will be used when displaying the contact field. Max 255 characters. |
| protocol | string | The protocol (ie `mailto:`, `tel:`) used when clicking the contact field in the UI. Max 255 characters. |
| delible | integer | Indicates whether the contact field type can be deleted. Possible values: `0` (false), `1` (true). |
| type | string | Used on special occasions so we can manipulate data in the backend. Most of the time it has be set to null. Max 255 characters. |

### Example

{% highlight json %}
{
  "name": "Telegram",
  "fontawesome_icon": "fa fa-bath",
  "protocol": "telegram:",
  "delible": 0,
  "type": "telegram"
}
{% endhighlight %}

### Response

{% highlight json %}
{
  "data": {
    "id": 37305,
    "object": "contactfieldtype",
    "name": "Telegram",
    "fontawesome_icon": "fa fa-bath",
    "protocol": "telegram:",
    "delible": false,
    "type": "telegram",
    "account": {
      "id": 1
    },
    "created_at": "2017-11-24T09:24:31Z",
    "updated_at": "2017-11-24T10:16:19Z"
  }
}
{% endhighlight %}

## Delete a contact field type

<url>
  DELETE /contactfieldtypes/:id
</url>

### Response

The response sends back the id that was just deleted.

{% highlight json %}
{
  "deleted": true,
  "id": 31
}
{% endhighlight %}
