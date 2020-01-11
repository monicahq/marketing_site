# Contact field types <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
- [List all the contact field types in an account](#list-all-the-contact-field-types-in-an-account)
  - [Response](#response)
- [Get a specific contact type field](#get-a-specific-contact-type-field)
  - [Response](#response-1)
- [Create a contact field type](#create-a-contact-field-type)
  - [Input](#input)
  - [Example](#example)
  - [Response](#response-2)
- [Update a contact field type](#update-a-contact-field-type)
  - [Input](#input-1)
  - [Example](#example-1)
  - [Response](#response-3)
- [Delete a contact field type](#delete-a-contact-field-type)
  - [Response](#response-4)

<!-- /TOC -->

<a name="overview"></a>
<a id="markdown-overview" name="overview"></a>
## Overview

A contact can have as many <a href="contactfields">contact fields</a>
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

<a name="list-all-the-contact-field-types-in-an-account"></a>
<a id="markdown-list-all-the-contact-field-types-in-an-account" name="list-all-the-contact-field-types-in-an-account"></a>
## List all the contact field types in an account

<span class="url">
  GET /contactfieldtypes/
</span>

<a id="markdown-response" name="response"></a>
### Response

<pre><code class="json">{
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
}</code></pre>

<a name="get-a-specific-contact-type-field"></a>
<a id="markdown-get-a-specific-contact-type-field" name="get-a-specific-contact-type-field"></a>
## Get a specific contact type field

<span class="url">
  GET /contactfieldtypes/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
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
}</code></pre>

<a name="create-a-contact-field-type"></a>
<a id="markdown-create-a-contact-field-type" name="create-a-contact-field-type"></a>
## Create a contact field type

<span class="url">
  POST /contactfieldtypes/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. A short description of the contact field type. Max 255 characters. |
| fontawesome_icon | string | The class name of the Fontawesome icon that will be used when displaying the contact field. Max 255 characters. |
| protocol | string | The protocol (ie `mailto:`, `tel:`) used when clicking the contact field in the UI. Max 255 characters. |
| delible | integer | Indicates whether the contact field type can be deleted. Possible values: `0` (false), `1` (true). |
| type | string | Used on special occasions so we can manipulate data in the backend. Most of the time it has be set to null. Max 255 characters. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "name": "Telegram",
  "fontawesome_icon": "fa fa-bath",
  "protocol": "telegram:",
  "delible": 1,
  "type": null
}</code></pre>

<a id="markdown-response-2" name="response-2"></a>
### Response

The API call returns a contact field type object if the call succeeds.

<pre><code class="json">{
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
}</code></pre>

<a name="update-a-contact-field-type"></a>
<a id="markdown-update-a-contact-field-type" name="update-a-contact-field-type"></a>
## Update a contact field type

<span class="url">
  PUT /contactfieldtypes/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. A short description of the contact field type. Max 255 characters. |
| fontawesome_icon | string | The class name of the Fontawesome icon that will be used when displaying the contact field. Max 255 characters. |
| protocol | string | The protocol (ie `mailto:`, `tel:`) used when clicking the contact field in the UI. Max 255 characters. |
| delible | integer | Indicates whether the contact field type can be deleted. Possible values: `0` (false), `1` (true). |
| type | string | Used on special occasions so we can manipulate data in the backend. Most of the time it has be set to null. Max 255 characters. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "name": "Telegram",
  "fontawesome_icon": "fa fa-bath",
  "protocol": "telegram:",
  "delible": 0,
  "type": "telegram"
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

<pre><code class="json">{
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
}</code></pre>

<a name="delete-a-contact-field-type"></a>
<a id="markdown-delete-a-contact-field-type" name="delete-a-contact-field-type"></a>
## Delete a contact field type

<span class="url">
  DELETE /contactfieldtypes/:id
</span>

<a id="markdown-response-4" name="response-4"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
