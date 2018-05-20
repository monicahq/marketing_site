# Compliance

<!-- TOC -->

- [Overview](#overview)
- [List all the currencies](#list-all-the-currencies)
    - [Response](#response)
- [Get a specific currency](#get-a-specific-currency)
    - [Response](#response-1)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

This is the list of currencies we support.

<a id="markdown-list-all-the-currencies" name="list-all-the-currencies"></a>
## List all the currencies

<span class="url">
  GET /currencies
</span>

<a id="markdown-response" name="response"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 1,
      "object": "currency",
      "iso": "CAD",
      "name": "Canadian Dollar",
      "symbol": "$"
    },
    {
      "id": 2,
      "object": "currency",
      "iso": "USD",
      "name": "US Dollar",
      "symbol": "$"
    },
    {
      "id": 3,
      "object": "currency",
      "iso": "GBP",
      "name": "British Pound",
      "symbol": "£"
    },
    {
      "id": 4,
      "object": "currency",
      "iso": "EUR",
      "name": "Euro",
      "symbol": "€"
    },
    {
      "id": 5,
      "object": "currency",
      "iso": "RUB",
      "name": "Russian Ruble",
      "symbol": "₽"
    },
    {
      "id": 6,
      "object": "currency",
      "iso": "ZAR",
      "name": "South African Rand",
      "symbol": "R "
    },
    {
      "id": 7,
      "object": "currency",
      "iso": "DKK",
      "name": "Danish krone",
      "symbol": "kr."
    },
    {
      "id": 8,
      "object": "currency",
      "iso": "INR",
      "name": "Indian rupee",
      "symbol": "₹"
    },
    {
      "id": 9,
      "object": "currency",
      "iso": "BRL",
      "name": "Brazilian Real",
      "symbol": "R$"
    },
    {
      "id": 10,
      "object": "currency",
      "iso": "AED",
      "name": "Emirati Dirham",
      "symbol": ".د.ب"
    },
    {
      "id": 11,
      "object": "currency",
      "iso": "AFN",
      "name": "Afghan Afghani",
      "symbol": "؋"
    },
    {
      "id": 12,
      "object": "currency",
      "iso": "ALL",
      "name": "Albanian lek",
      "symbol": "lek"
    },
    {
      "id": 13,
      "object": "currency",
      "iso": "AMD",
      "name": "Armenian dram",
      "symbol": ""
    },
    {
      "id": 14,
      "object": "currency",
      "iso": "ANG",
      "name": "Dutch Guilder",
      "symbol": "ƒ"
    },
    {
      "id": 15,
      "object": "currency",
      "iso": "AOA",
      "name": "Angolan Kwanza",
      "symbol": "Kz"
    }
  ],
  "links": {
    "first": "http:\/\/monica.test\/api\/currencies?page=1",
    "last": "http:\/\/monica.test\/api\/currencies?page=11",
    "prev": null,
    "next": "http:\/\/monica.test\/api\/currencies?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 11,
    "path": "http:\/\/monica.test\/api\/currencies",
    "per_page": 15,
    "to": 15,
    "total": 156
  }
}</code></pre>

<a id="markdown-get-a-specific-currency" name="get-a-specific-currency"></a>
## Get a specific currency

<span class="url">
  GET /currencies/:id
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "currency",
    "iso": "CAD",
    "name": "Canadian Dollar",
    "symbol": "$"
  }
}</code></pre>
