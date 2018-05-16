# Compliance

<!-- TOC -->

- [Overview](#overview)
- [List all the contact fields of a specific contact](#list-all-the-contact-fields-of-a-specific-contact)
    - [Response](#response)
- [Get a specific contact field](#get-a-specific-contact-field)
    - [Response](#response-1)
- [Create a contact field](#create-a-contact-field)
    - [Input](#input)
    - [Example](#example)
    - [Response](#response-2)
- [Update a contact field](#update-a-contact-field)
    - [Input](#input-1)
    - [Example](#example-1)
    - [Response](#response-3)
- [Delete a contact field](#delete-a-contact-field)
    - [Response](#response-4)

<!-- /TOC -->

## Overview

Compliance is about terms of use and privacy policies.

Monica, like any other software, needs to be compliant with the laws. In that regard, we need to make sure users accept our privacy policy and our terms of use before using the software.

Per instance, we keep track of who have accepted the terms, when they've done it and from which IP address, as required by the law.

## List all the contact fields of a specific contact

<span class="url">
  GET /compliance
</span>

### Response

<pre><code class="json">{
  "data": [
    {
      "id": 3,
      "object": "term",
      "term_version": "3",
      "term_content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor.",
      "privacy_version": "3",
      "privacy_content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor.",
      "created_at": "2018-05-18T00:00:00Z",
      "updated_at": null
    },
    {
      "id": 1,
      "object": "term",
      "term_version": "2",
      "term_content": "\nScope of service\nMonica supports the following browsers:\n\nInternet Explorer (11+)\nFirefox (50+)\nChrome (latest)\nSafari (latest)\nI do not guarantee that the site will work with other browsers, but it’s very likely that it will just work.\n\nRights\nYou don’t have to provide your real name when you register to an account. You do however need a valid email address if you want to upgrade your account to the paid version, or receive reminders by email.\n\nYou have the right to close your account at any time.\n\nYou have the right to export your data at any time, in the SQL format.\n\nYour data will not be intentionally shown to other users or shared with third parties.\n\nYour personal data will not be shared with anyone without your consent.\n\nYour data is backed up every hour.\n\nIf the site ceases operation, you will receive an opportunity to export all your data before the site dies.\n\nAny new features that affect privacy will be strictly opt-in.\n\nResponsibilities\nYou will not use the site to store illegal information or data under the Canadian law (or any law).\n\nYou have to be at least 18+ to create an account and use the site.\n\nYou must not abuse the site by knowingly posting malicious code that could harm you or the other users.\n\nYou must only use the site to do things that are widely accepted as morally good.\n\nYou may not make automated requests to the site.\n\nYou may not abuse the invitation system.\n\nYou are responsible for keeping your account secure.\n\nI reserve the right to close accounts that abuse the system (thousands of contacts with hundred of thousands of reminders for instance) or use it in an unreasonable manner.\n\nOther important legal stuff\nThough I want to provide a great service, there are certain things about the service I cannot promise. For example, the services and software are provided “as-is”, at your own risk, without express or implied warranty or condition of any kind. I also disclaim any warranties of merchantability, fitness for a particular purpose or non-infringement. Monica will have no responsibility for any harm to your computer system, loss or corruption of data, or other harm that results from your access to or use of the Services or Software.\n\nThese Terms can change at any time, but I’ll never be a dick about it. Running this site is a dream come true to me, and I hope I’ll be able to run it as long as I can.\n        ",
      "privacy_version": "2",
      "privacy_content": "\nMonica is an open source project. The hosted version has a premium plan that let us collect money so we can pay for the servers and additional servers, but the main goal is not to make money (otherwise we wouldn’t have opened source it).\n\nMonica comes in two flavors: you can either use our hosted version, or download it and run it yourself. In the latter case, we do not track anything at all. We don’t know that you’ve even downloaded the product. Do whatever you want with it (but respect your local laws).\n\nWhen you create your account on our hosted version, you are giving the site information about yourself that we collect. This includes your name, your email address and your password, that is encrypted before being stored. We do not store any other personal information.\n\nWhen you login to the service, we are using cookies to remember your login credentials. This is the only use we do with the cookies.\n\nMonica runs on Linode and we are the only ones, apart from Linode’s employees, who have access to those servers.\n\nWe do hourly backups of the database.\n\nYour password is encrypted with bcrypt, a password hashing algorithm that is highly secure. You can also activate two factor authentication on your account if you need an extra layer of security. Apart from those encryptions mechanism, your data is not encrypted in the database. If someone gets access to the database, they will be able to read your data. We do our best to make sure that this will never happen, but it can happen.\n\nIf a data breach happens, we will contact the users who are affected to warn them about the breach.\n\nTransactional emails are dserved through Postmark.\n\nWe use an open source tool called Sentry to track errors that happen in production. Their service records the errors, but they don’t have access to any information apart the account ID, which lets me debug what’s going on.\n\nThe site does not currently and will never show ads. It also does not, and don’t intend to, sell data to a third party, with or without your consent. We are just against this. Fuck ads.\n\nWe do no use any tracking third parties, like Google Analytics or Intercom, that track user behaviours or data, neither on the marketing site or the hosted version. We are deeply against their principles as they would use those data to profile you, which we are totally against.\n\nAll the data you put on Monica belongs to you. We do not have any rights on it. Please don’t put illegal stuff on it, otherwise we’d be in trouble.\n\nAll the information about the contacts you put on Monica are private to you. We do not cross link information between accounts or use one information in an account to populate another account (unlike Facebook for instance).\n\nWe use Stripe to collect payments made to access the paid version. We do not store credit card information or anything concerning the transactions themselves on our servers. However, as per the open source library we use to process the payments (Laravel Cashier), we store the last 4 digits of the credit card, the brand name (VISA or MasterCard). As a user, you are identified on Stripe by a random number that they generate and use.\n\nRegarding the payments, you can downgrade to the free plan whenever you like. When you do, Stripe is automatically updated and we have no way to charge you again, even if we would like to. The less we deal with payment information, the happier we are.\n\nYou can export your data at any time. You can also use the API to export all your data if you know how to do it. You can also request that we process this ourselves and send it to you. Your data will be exported in the SQL format.\n\nWhen you close your account, we immediately destroy all your personal information and don’t keep any backup. While you have control over this, we can delete an account for you if you ask us.\n\nIn certain situations, we may be required to disclose peronal data in response to lawful requests by public authorities, including to met national security or law enforcements requirements. We just hope that this never happens.\n\nIf you violate the terms of use we will terminate your account and notify you about it. However if you follow the \"don’t be a dick\" policy, nothing should ever happen to you and we’ll all be happy.\n\nMonica uses only open-source projects that are mainly hosted on Github.\n\nWe will update this privacy policy as soon as we introduce new information practices. If we do, we will send an email to the email address specified in your account. We will never be a dick about it and will never, ever, introduce something in what we do that will affect your right to the absolute privacy.",
      "created_at": "2018-04-12T00:00:00Z",
      "updated_at": null
    }
  ]
}</code></pre>

## Get a specific contact field

<span class="url">
  GET /contacts/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "id": 1,
  "object": "contactfield",
  "data": "jim@dundermifflin.com",
  "contact_field_type": {
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
    "created_at": "2017-11-24T11:19:18Z",
    "updated_at": "2017-11-24T11:19:18Z"
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
  "created_at": "2017-11-24T11:19:18Z",
  "updated_at": null
}</code></pre>

<a name="create-a-contact-field"></a>
<a id="markdown-create-a-contact-field" name="create-a-contact-field"></a>
## Create a contact field

<span class="url">
  POST /contactfields/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| data | string | <strong>Required</strong>. The actual content of the contact field. Max 255 characters. |
| contact_field_type_id | integer | <strong>Required</strong>. The type of the contact field. Has to be a valid, existing contact field type ID. You can retrieve the list of all the contact field types of an account <a href="{{ "/api/countries" | prepend: site.baseurl | prepend: site.url }}">via the API</a>. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the content field is associated with. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "contact_field_type_id": 1,
  "data": "123456",
  "contact_id": 8
}</code></pre>

<a id="markdown-response-2" name="response-2"></a>
### Response

The API call returns a Contact Field object if the call succeeds.

<pre><code class="json">{
  "id": 62795,
  "object": "contactfield",
  "data": "123456",
  "contact_field_type": {
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
    "created_at": "2017-11-24T11:19:18Z",
    "updated_at": "2017-11-24T11:19:18Z"
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
  "created_at": "2017-11-25T08:42:36Z",
  "updated_at": "2017-11-25T08:42:36Z"
}</code></pre>

<a name="update-a-contact-field"></a>
<a id="markdown-update-a-contact-field" name="update-a-contact-field"></a>
## Update a contact field

<span class="url">
  PUT /contactfields/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| data | string | <strong>Required</strong>. The actual content of the contact field. Max 255 characters. |
| contact_field_type_id | integer | <strong>Required</strong>. The type of the contact field. Has to be a valid, existing contact field type ID. You can retrieve the list of all the contact field types of an account <a href="{{ "/api/countries" | prepend: site.baseurl | prepend: site.url }}">via the API</a>. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the content field is associated with. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "contact_field_type_id": 1,
  "data": "456778",
  "contact_id": 8
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

<pre><code class="json">{
  "id": 62795,
  "object": "contactfield",
  "data": "456778",
  "contact_field_type": {
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
    "created_at": "2017-11-24T11:19:18Z",
    "updated_at": "2017-11-24T11:19:18Z"
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
  "created_at": "2017-11-25T08:42:36Z",
  "updated_at": "2017-11-25T08:43:47Z"
}</code></pre>

<a name="delete-a-contact-field"></a>
<a id="markdown-delete-a-contact-field" name="delete-a-contact-field"></a>
## Delete a contact field

<span class="url">
  DELETE /contactfields/:id
</span>

<a id="markdown-response-4" name="response-4"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
