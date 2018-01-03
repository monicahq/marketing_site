Note: the API is in alpha mode at the moment. It's not considered to be production
ready and we will stabilize it over the next months.

## Overview

This document describes how to use Monica's API. This document is heavily
inspired by [GitHub's](https://developer.github.com/v3) and
[Stripe's](https://stripe.com/docs/api) API. Please use the API in a nice way
and don't be a jerk.

## Current version

By default, all requests to <url>https://app.monicahq.com/api</url> receive the
v1 version of the API.

## Schema

All API access is over HTTPS, and accessed from the
<url>https://app.monicahq.com/api</url> URL. All data is sent and received as
JSON.

If you do have a custom instance of Monica, replace the URL above with the URL
of your instance. The endpoint will always be <url>YOUR_URL/api</url>.

{% highlight bash %}
Server: nginx/1.11.9
Content-Type: application/json
Transfer-Encoding: chunked
Connection: keep-alive
Cache-Control: no-cache, private
Date: Thu, 14 Sep 2017 02:24:19 GMT
X-RateLimit-Limit: 60
X-RateLimit-Remaining: 58
{% endhighlight %}

All timestamps return in ISO 8601 format:

<url>
YYYY-MM-DDTHH:MM:SSZ
</url>

### Summary Representations

When you fetch a list of resources, for instance the list of reminders, you will
always get a subset of a contact attached to it, giving you just enough
information so you don't need to fetch the full information of the contact to do
something with it.

## HTTP verbs

Monica tries to use the appropriate HTTP verbs wherever it can. Note that the
`PATCH` HTTP verb is not used right now.

| Verb | Description |
| ---- | ----------- |
| GET | Used for retrieving resources. |
| POST | Used for creating resources. |
| PUT | Used for replacing resources or collections. |
| DELETE | Used for deleting resources. |

## Client errors

### Invalid JSON

Sending an invalid JSON during a POST or a PUT will result in a error.

{% highlight json %}
{
  "error": {
    "message": "Problems parsing JSON",
    "error_code": 37
  }
}
{% endhighlight %}

### All custom errors

| Code | Message | Explanation |
| ---- | ----------- | ----------- |
| 30 | The limit parameter is too big. | The maximum number for the limit parameter in a request is 100. |
| 31 | The resource has not been found. | Comes along with a 404 HTTP error code. |
| 32 | Error while trying to save the data. | Happens when the validation (during a `POST` or `PUT`) fails for some reason. |
| 33 | Too many parameters. | Happens when we try to save the data from the JSON, but the object expected different parameters. |
| 34 | Too many attempts, please slow down the request. | You are limited to 60 API calls per minute. |
| 35 | This email address is already taken. | An email address should be unique in the account. |
| 36 | You can't set a partner or a child to a partial contact. | |
| 37 | Problems parsing JSON. | When doing a `PUT` or a `POST`, returns an error if the JSON is not a valid JSON or badly formatted. |

## Authentication

There are several ways to authenticate to the API. All requests to the API require authentication.

### OAuth 2 Token (sent in a header)

<url>
  curl -H "Authorization: Bearer OAUTH-TOKEN" https://monicahq.com/api
</url>

### OAuth2 Key/Secret

This is meant to be used in server to server scenarios. Never reveal your OAuth
application's client secret to your users. To use this authentication method,
you need to first register an application in your Monica's instance.

## Pagination

Requests that return multiple items will be paginated to 10 items by default.
You can specify further pages with the `?page` parameter. For some resources,
you can also set a custom page size up to 100 with the `?limit` parameter.
Omitting the `?page` parameter will return the first page.

<url>
curl 'https://app.monicahq.com/api/contacts?page=2&limit=100'
</url>

## Rate limiting

The returned HTTP headers of any API request show your current rate limit status:

{% highlight bash %}
Date: Thu, 14 Sep 2017 02:24:19 GMT
X-RateLimit-Limit: 60
X-RateLimit-Remaining: 58
{% endhighlight %}

| Header name | Description |
| ----------- | ----------- |
| X-RateLimit-Limit | The maximum number of requests you're permitted to make per hour. |
| X-RateLimit-Remaining | The number of requests remaining in the current rate limit window. |

If you exceed the rate limit, an `429` error response returns with a JSON:

{% highlight bash %}
X-RateLimit-Limit   60
X-RateLimit-Remaining   0
Retry-After 55
{% endhighlight %}

{% highlight json %}
{
    "error": {
        "message": "Too many attempts, please slow down the request.",
        "error_code": 34
    }
}
{% endhighlight %}
