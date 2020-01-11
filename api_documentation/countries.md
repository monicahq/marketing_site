# Countries <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
- [List all the countries](#list-all-the-countries)
  - [Response](#response)

<!-- /TOC -->

<a name="overview"></a>
<a id="markdown-overview" name="overview"></a>
## Overview

The Country object is used in collaboration with the Address object. It
represents a country a contact lives in. The Country's API only allows read, as
there are not many new countries that are created every day. When you create an
address and need to indicate a country, use the Country object to retrieve the
`country_id` that you need for the address.

<a name="list-all-the-countries"></a>
<a id="markdown-list-all-the-countries" name="list-all-the-countries"></a>
## List all the countries

Countries are order alphabetically by their name regarding the user's locale.

<span class="url">
  GET /countries/
</span>

<a id="markdown-response" name="response"></a>
### Response

<pre><code class="json">{
  "data": {
    "AFG": {
      "id": "AF",
      "object": "country",
      "name": "Afghanistan",
      "iso": "AF"
    },
    "WSB": {
      "id": "WSB",
      "object": "country",
      "name": "Akrotiri",
      "iso": "WSB"
    },
    ...
    "ZMB": {
      "id": "ZM",
      "object": "country",
      "name": "Zambia",
      "iso": "ZM"
    },
    "ZWE": {
      "id": "ZW",
      "object": "country",
      "name": "Zimbabwe",
      "iso": "ZW"
    }
  }
}</code></pre>
