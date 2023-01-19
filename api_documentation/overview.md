# Overview <!-- omit in toc -->

<!-- TOC -->

- [Current version](#current-version)
- [Schema](#schema)
  - [Summary Representations](#summary-representations)
- [HTTP verbs](#http-verbs)
- [Client errors](#client-errors)
  - [Invalid JSON](#invalid-json)
  - [All custom errors](#all-custom-errors)
- [Authentication](#authentication)
  - [OAuth 2 Token (sent in a header)](#oauth-2-token-sent-in-a-header)
  - [OAuth2 Key/Secret](#oauth2-keysecret)
- [Pagination](#pagination)
- [Rate limiting](#rate-limiting)

<!-- /TOC -->

This document describes how to use Monica's API. This document is heavily
inspired by [GitHub's](https://developer.github.com/v3) and
[Stripe's](https://stripe.com/docs/api) API. Please use the API in a nice way
and don't be a jerk.

<a id="markdown-current-version" name="current-version"></a>
## Current version

By default, all requests to <span>https://app.monicahq.com/api</span> receive the
v1 version of the API.

<a id="markdown-schema" name="schema"></a>
## Schema

All API access is over HTTPS, and accessed from the
<span>https://app.monicahq.com/api</span> URL. All data is sent and received as
JSON.

If you do have a custom instance of Monica, replace the URL above with the URL
of your instance. The endpoint will always be <span>YOUR_URL/api</span>.

<pre><code class="bash hljs">Server: nginx/1.11.9
Content-Type: application/json
Transfer-Encoding: chunked
Connection: keep-alive
Cache-Control: no-cache, private
Date: Thu, 14 Sep 2017 02:24:19 GMT
X-RateLimit-Limit: 60
X-RateLimit-Remaining: 58
</code></pre>

All timestamps return in ISO 8601 format:

<span class="url">
YYYY-MM-DDTHH:MM:SSZ
</span>

<a id="markdown-summary-representations" name="summary-representations"></a>
### Summary Representations

When you fetch a list of resources, for instance the list of reminders, you will
always get a subset of a contact attached to it, giving you just enough
information so you don't need to fetch the full information of the contact to do
something with it.

<a id="markdown-http-verbs" name="http-verbs"></a>
## HTTP verbs

Monica tries to use the appropriate HTTP verbs wherever it can. Note that the
`PATCH` HTTP verb is not used right now.

| Verb | Description |
| ---- | ----------- |
| GET | Used for retrieving resources. |
| POST | Used for creating resources. |
| PUT | Used for replacing resources or collections. |
| DELETE | Used for deleting resources. |

<a id="markdown-client-errors" name="client-errors"></a>
## Client errors

<a id="markdown-invalid-json" name="invalid-json"></a>
### Invalid JSON

Sending an invalid JSON during a POST or a PUT will result in a error.

<pre><code class="json">{
  "error": {
    "message": "Problems parsing JSON",
    "error_code": 37
  }
}</code>
</pre>

<a id="markdown-all-custom-errors" name="all-custom-errors"></a>
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
| 38 | Date should be in the future. | When setting up a reminder, the date should be in the future. |
| 39 | The sorting criteria is invalid. | Sorting query only allows a few criterion. |
| 40 | Invalid query. | The query is invalid for obscure reasons. It might be an invalid method call, an invalid sorting criteria, or something else. This should not happen often. |
| 41 | Invalid parameters. | Parameters in the JSON request are invalid. |

<a id="markdown-authentication" name="authentication"></a>
## Authentication

There are several ways to authenticate to the API. All requests to the API require authentication.

<a id="markdown-oauth-2-token-sent-in-a-header" name="oauth-2-token-sent-in-a-header"></a>
### OAuth 2 Token (sent in a header)

<span class="url">
  curl -H "Authorization: Bearer OAUTH-TOKEN" https://app.monicahq.com/api
</span>

<a id="markdown-oauth2-keysecret" name="oauth2-keysecret"></a>
### OAuth2 Key/Secret

This is meant to be used in server to server scenarios. Never reveal your OAuth
application's client secret to your users. To use this authentication method,
you need to first register an application in your Monica's instance.

<a id="markdown-pagination" name="pagination"></a>
## Pagination

Requests that return multiple items will be paginated to 10 items by default.
You can specify further pages with the `?page` parameter. For some resources,
you can also set a custom page size up to 100 with the `?limit` parameter.
Omitting the `?page` parameter will return the first page.

<span class="url">
curl 'https://app.monicahq.com/api/contacts?page=2&limit=100'
</span>

<a id="markdown-rate-limiting" name="rate-limiting"></a>
## Rate limiting

The returned HTTP headers of any API request show your current rate limit status:

<pre><code class="bash">Date: Thu, 14 Sep 2017 02:24:19 GMT
X-RateLimit-Limit: 60
X-RateLimit-Remaining: 58</code></pre>

| Header name | Description |
| ----------- | ----------- |
| X-RateLimit-Limit | The maximum number of requests you're permitted to make per minute. |
| X-RateLimit-Remaining | The number of requests remaining in the current rate limit window. |

If you exceed the rate limit, an `429` error response returns with a JSON:

<pre><code class="bash hljs">X-RateLimit-Limit   60
X-RateLimit-Remaining   0
Retry-After 55</code></pre>

<pre><code class="json hljs">{
    "error": {
        "message": "Too many attempts, please slow down the request.",
        "error_code": 34
    }
}</code></pre>
