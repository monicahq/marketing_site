# Documents

## Overview

The Document object represents a document attached to a contact. A contact can have as many documents as necessary. There are two limitations though: the maximum allowed size of the document itself, and the maximum allowed total amount of Mb allowed by the instance.

## List all the documents in the account

<span class="url">
  GET /documents
</span>

### Response

<pre><code class="json">{
    "data": [
		{
			"id": 9,
			"object": "document",
			"original_filename": "3234 DE ROUEN - ENTENTE DE RESILIATION.pdf",
			"new_filename": "documents\/cb208lQzsZE0yn9YIPRml1LsZPfPGOmwZwEH1rSa.pdf",
			"filesize": 248942,
			"type": "pdf",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": null,
			"created_at": "2018-10-15T21:27:23Z",
			"updated_at": "2018-10-15T21:27:23Z"
		},
		{
			"id": 10,
			"object": "document",
			"original_filename": "20171212_174320.jpg",
			"new_filename": "documents\/f5T8bXqHCmZxsyrZUqkiKj07P4buMkjv6cUSpGzo.jpeg",
			"filesize": 2497939,
			"type": "jpeg",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": null,
			"created_at": "2018-10-15T21:28:42Z",
			"updated_at": "2018-10-15T21:28:42Z"
		},
		{
			"id": 11,
			"object": "document",
			"original_filename": "20180123_090414.jpg",
			"new_filename": "documents\/mIX1JkPrIPMpnwpH594SwmrovAVyT1jgUp3tzaoM.jpeg",
			"filesize": 3114608,
			"type": "jpeg",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": null,
			"created_at": "2018-10-15T22:04:49Z",
			"updated_at": "2018-10-15T22:04:49Z"
		},
		{
			"id": 12,
			"object": "document",
			"original_filename": "20180123_090140.jpg",
			"new_filename": "documents\/Y4wZOrqL6PfrXgqQScJJvNFhkOTcUOULsq6t5nxH.jpeg",
			"filesize": 3098677,
			"type": "jpeg",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": null,
			"created_at": "2018-10-15T22:14:59Z",
			"updated_at": "2018-10-15T22:14:59Z"
		},
		{
			"id": 13,
			"object": "document",
			"original_filename": "20180123_090140.jpg",
			"new_filename": "documents\/14ibItLsm4fSZTAgpETYDnbXBtLLOruW6sMwWI78.jpeg",
			"filesize": 3098677,
			"type": "jpeg",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": null,
			"created_at": "2018-10-15T22:16:09Z",
			"updated_at": "2018-10-15T22:16:09Z"
		},
		{
			"id": 14,
			"object": "document",
			"original_filename": "20180123_090140.jpg",
			"new_filename": "documents\/B1bXHEXiFz1VMcAS0bHZNyAqyHSA1pEo6X5vcsDK.jpeg",
			"filesize": 3098677,
			"type": "jpeg",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": null,
			"created_at": "2018-10-15T22:54:14Z",
			"updated_at": "2018-10-15T22:54:14Z"
		},
		{
			"id": 15,
			"object": "document",
			"original_filename": "receipt.pdf",
			"new_filename": "documents\/0v5XnPEe2lRCiXK2oFlJxZ5PQf64slRcMV6C26ch.pdf",
			"filesize": 193197,
			"type": "pdf",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": null,
			"created_at": "2018-10-15T22:58:23Z",
			"updated_at": "2018-10-15T22:58:23Z"
		}
	],
	"links": {
		"first": "http:\/\/monica.test\/api\/documents?page=1",
		"last": "http:\/\/monica.test\/api\/documents?page=1",
		"prev": null,
		"next": null
	},
	"meta": {
		"current_page": 1,
		"from": 1,
		"last_page": 1,
		"path": "http:\/\/monica.test\/api\/documents",
		"per_page": 15,
		"to": 7,
		"total": 7
	}
}</code></pre>

## List all the documents of a contact

<span class="url">
  GET /contacts/:id/documents
</span>

### Response

<pre><code class="json">{
	"data": [
		{
			"id": 9,
			"object": "document",
			"original_filename": "23232 ROUEN - ENTENTE DE RESILIATION.pdf",
			"new_filename": "documents\/cb208lQzsZE0yn9YIPRml1LsZPfPGOmwZwEH1rSa.pdf",
			"filesize": 248942,
			"type": "pdf",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": {
				"id": 352,
				"object": "contact",
				"hash_id": "h:OxEj52krPN8bR7VpJK",
				"first_name": "Elance",
				"last_name": null,
				"nickname": null,
				"complete_name": "Elance",
				"initials": "E",
				"gender": "vCard",
				"is_partial": false,
				"is_dead": false,
				"information": {
					"birthdate": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"deceased_date": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"avatar": {
						"has_avatar": false,
						"avatar_url": null,
						"default_avatar_color": "#e5e5cd"
					}
				},
				"account": {
					"id": 1
				}
			},
			"created_at": "2018-10-15T21:27:23Z",
			"updated_at": "2018-10-15T21:27:23Z"
		},
		{
			"id": 10,
			"object": "document",
			"original_filename": "20171212_174320.jpg",
			"new_filename": "documents\/f5T8bXqHCmZxsyrZUqkiKj07P4buMkjv6cUSpGzo.jpeg",
			"filesize": 2497939,
			"type": "jpeg",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": {
				"id": 352,
				"object": "contact",
				"hash_id": "h:OxEj52krPN8bR7VpJK",
				"first_name": "Elance",
				"last_name": null,
				"nickname": null,
				"complete_name": "Elance",
				"initials": "E",
				"gender": "vCard",
				"is_partial": false,
				"is_dead": false,
				"information": {
					"birthdate": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"deceased_date": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"avatar": {
						"has_avatar": false,
						"avatar_url": null,
						"default_avatar_color": "#e5e5cd"
					}
				},
				"account": {
					"id": 1
				}
			},
			"created_at": "2018-10-15T21:28:42Z",
			"updated_at": "2018-10-15T21:28:42Z"
		},
		{
			"id": 11,
			"object": "document",
			"original_filename": "20180123_090414.jpg",
			"new_filename": "documents\/mIX1JkPrIPMpnwpH594SwmrovAVyT1jgUp3tzaoM.jpeg",
			"filesize": 3114608,
			"type": "jpeg",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": {
				"id": 352,
				"object": "contact",
				"hash_id": "h:OxEj52krPN8bR7VpJK",
				"first_name": "Elance",
				"last_name": null,
				"nickname": null,
				"complete_name": "Elance",
				"initials": "E",
				"gender": "vCard",
				"is_partial": false,
				"is_dead": false,
				"information": {
					"birthdate": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"deceased_date": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"avatar": {
						"has_avatar": false,
						"avatar_url": null,
						"default_avatar_color": "#e5e5cd"
					}
				},
				"account": {
					"id": 1
				}
			},
			"created_at": "2018-10-15T22:04:49Z",
			"updated_at": "2018-10-15T22:04:49Z"
		},
		{
			"id": 12,
			"object": "document",
			"original_filename": "20180123_090140.jpg",
			"new_filename": "documents\/Y4wZOrqL6PfrXgqQScJJvNFhkOTcUOULsq6t5nxH.jpeg",
			"filesize": 3098677,
			"type": "jpeg",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": {
				"id": 352,
				"object": "contact",
				"hash_id": "h:OxEj52krPN8bR7VpJK",
				"first_name": "Elance",
				"last_name": null,
				"nickname": null,
				"complete_name": "Elance",
				"initials": "E",
				"gender": "vCard",
				"is_partial": false,
				"is_dead": false,
				"information": {
					"birthdate": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"deceased_date": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"avatar": {
						"has_avatar": false,
						"avatar_url": null,
						"default_avatar_color": "#e5e5cd"
					}
				},
				"account": {
					"id": 1
				}
			},
			"created_at": "2018-10-15T22:14:59Z",
			"updated_at": "2018-10-15T22:14:59Z"
		},
		{
			"id": 13,
			"object": "document",
			"original_filename": "20180123_090140.jpg",
			"new_filename": "documents\/14ibItLsm4fSZTAgpETYDnbXBtLLOruW6sMwWI78.jpeg",
			"filesize": 3098677,
			"type": "jpeg",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": {
				"id": 352,
				"object": "contact",
				"hash_id": "h:OxEj52krPN8bR7VpJK",
				"first_name": "Elance",
				"last_name": null,
				"nickname": null,
				"complete_name": "Elance",
				"initials": "E",
				"gender": "vCard",
				"is_partial": false,
				"is_dead": false,
				"information": {
					"birthdate": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"deceased_date": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"avatar": {
						"has_avatar": false,
						"avatar_url": null,
						"default_avatar_color": "#e5e5cd"
					}
				},
				"account": {
					"id": 1
				}
			},
			"created_at": "2018-10-15T22:16:09Z",
			"updated_at": "2018-10-15T22:16:09Z"
		},
		{
			"id": 14,
			"object": "document",
			"original_filename": "20180123_090140.jpg",
			"new_filename": "documents\/B1bXHEXiFz1VMcAS0bHZNyAqyHSA1pEo6X5vcsDK.jpeg",
			"filesize": 3098677,
			"type": "jpeg",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": {
				"id": 352,
				"object": "contact",
				"hash_id": "h:OxEj52krPN8bR7VpJK",
				"first_name": "Elance",
				"last_name": null,
				"nickname": null,
				"complete_name": "Elance",
				"initials": "E",
				"gender": "vCard",
				"is_partial": false,
				"is_dead": false,
				"information": {
					"birthdate": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"deceased_date": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"avatar": {
						"has_avatar": false,
						"avatar_url": null,
						"default_avatar_color": "#e5e5cd"
					}
				},
				"account": {
					"id": 1
				}
			},
			"created_at": "2018-10-15T22:54:14Z",
			"updated_at": "2018-10-15T22:54:14Z"
		},
		{
			"id": 15,
			"object": "document",
			"original_filename": "receipt.pdf",
			"new_filename": "documents\/0v5XnPEe2lRCiXK2oFlJxZ5PQf64slRcMV6C26ch.pdf",
			"filesize": 193197,
			"type": "pdf",
			"number_of_downloads": 0,
			"account": {
				"id": 1
			},
			"contact": {
				"id": 352,
				"object": "contact",
				"hash_id": "h:OxEj52krPN8bR7VpJK",
				"first_name": "Elance",
				"last_name": null,
				"nickname": null,
				"complete_name": "Elance",
				"initials": "E",
				"gender": "vCard",
				"is_partial": false,
				"is_dead": false,
				"information": {
					"birthdate": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"deceased_date": {
						"is_age_based": null,
						"is_year_unknown": null,
						"date": null
					},
					"avatar": {
						"has_avatar": false,
						"avatar_url": null,
						"default_avatar_color": "#e5e5cd"
					}
				},
				"account": {
					"id": 1
				}
			},
			"created_at": "2018-10-15T22:58:23Z",
			"updated_at": "2018-10-15T22:58:23Z"
		}
	],
	"links": {
		"first": "http:\/\/monica.test\/api\/contacts\/352\/documents?page=1",
		"last": "http:\/\/monica.test\/api\/contacts\/352\/documents?page=1",
		"prev": null,
		"next": null
	},
	"meta": {
		"current_page": 1,
		"from": 1,
		"last_page": 1,
		"path": "http:\/\/monica.test\/api\/contacts\/352\/documents",
		"per_page": 15,
		"to": 7,
		"total": 7
	}
}</code></pre>

## Get a specific document

<span class="url">
  GET /documents/:id
</span>

### Response

<pre><code class="json">{
	"data": {
		"id": 9,
		"object": "document",
		"original_filename": "receipt.pdf",
		"new_filename": "documents\/cb208lQzsZE0yn9YIPRml1LsZPfPGOmwZwEH1rSa.pdf",
		"filesize": 248942,
		"type": "pdf",
		"number_of_downloads": 0,
		"account": {
			"id": 1
		},
		"contact": {
			"id": 352,
			"object": "contact",
			"hash_id": "h:OxEj52krPN8bR7VpJK",
			"first_name": "Elance",
			"last_name": null,
			"nickname": null,
			"complete_name": "Elance",
			"initials": "E",
			"gender": "vCard",
			"is_partial": false,
			"is_dead": false,
			"information": {
				"birthdate": {
					"is_age_based": null,
					"is_year_unknown": null,
					"date": null
				},
				"deceased_date": {
					"is_age_based": null,
					"is_year_unknown": null,
					"date": null
				},
				"avatar": {
					"has_avatar": false,
					"avatar_url": null,
					"default_avatar_color": "#e5e5cd"
				}
			},
			"account": {
				"id": 1
			}
		},
		"created_at": "2018-10-15T21:27:23Z",
		"updated_at": "2018-10-15T21:27:23Z"
	}
}</code></pre>
