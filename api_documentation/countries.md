## Overview

The Country object is used in collaboration with the Address object. It
represents a country a contact lives in. The Country's API only allows read, as
there are not many new countries that are created every day. When you create an
address and need to indicate a country, use the Country object to retrieve the
`country_id` that you need for the address.

## List all the countries

Countries are order alphabetically.

<url>
  GET /countries/
</url>

### Response

{% highlight json %}
{
  "data": [
    {
      "id": 63,
      "object": "country",
      "name": "Afghanistan",
      "iso": "af"
    },
    {
      "id": 126,
      "object": "country",
      "name": "Aland Islands",
      "iso": "ax"
    },
    {
      "id": 124,
      "object": "country",
      "name": "Albania",
      "iso": "al"
    },
    ...,
    {
      "id": 62,
      "object": "country",
      "name": "Zimbabwe",
      "iso": "zw"
    }
  ]
}
{% endhighlight %}
