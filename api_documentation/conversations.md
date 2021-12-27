# Conversations <!-- omit in toc -->

<!-- TOC -->

- [Overview](#overview)
- [List all the conversations in the account](#list-all-the-conversations-in-the-account)
  - [Response](#response)
- [List all the conversations of a contact](#list-all-the-conversations-of-a-contact)
  - [Response](#response-1)
- [Get a specific conversation](#get-a-specific-conversation)
  - [Response](#response-2)
- [Create a conversation](#create-a-conversation)
  - [Input](#input)
  - [Example](#example)
  - [Response](#response-3)
- [Update a conversation](#update-a-conversation)
  - [Input](#input-1)
  - [Example](#example-1)
  - [Response](#response-4)
- [Delete a conversation](#delete-a-conversation)
  - [Response](#response-5)
- [Add a message to a conversation](#add-a-message-to-a-conversation)
  - [Input](#input-2)
  - [Example](#example-2)
  - [Response](#response-6)
- [Update a message in a conversation](#update-a-message-in-a-conversation)
  - [Input](#input-3)
  - [Example](#example-3)
  - [Response](#response-7)
- [Delete a message](#delete-a-message)
  - [Response](#response-8)

<!-- /TOC -->

<a id="markdown-overview" name="overview"></a>
## Overview

The Conversation object represents a conversation made with a contact. A contact can have as many conversations as necessary.

A conversation happens somewhere - on the phone, on a social network or a SMS application. This list is pulled from the Contact Field Types in the account of the user. Therefore, a conversation must have a contact field type id to be saved.

A conversation is made of one or more messages. The Message object contains the body of the conversation in itself. A Message can't be orphan and belongs to a Conversation.

<a id="markdown-list-all-the-conversations-in-the-account" name="list-all-the-conversations-in-the-account"></a>
## List all the conversations in the account

<span class="url">
  GET /conversations
</span>

<a id="markdown-response" name="response"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 1,
      "object": "conversation",
      "happened_at": "1977-06-09T02:00:51Z",
      "messages": [
        {
          "id": 1,
          "object": "message",
          "content": "The other side of the conversation. Alice replied, so eagerly that the Mouse to tell me who YOU are, first.' 'Why?' said the Hatter. He came in with the Queen merely remarking that a moment's pause.",
          "written_at": "1953-04-02T14:28:10Z",
          "written_by_me": true,
          "account": {
            "id": 1
          },
          "contact": {
            "id": 1,
            "object": "contact",
            "hash_id": "h:Y5LOkAdWNDqgVomKPv",
            "first_name": "Soledad",
            "last_name": null,
            "nickname": null,
            "complete_name": "Soledad",
            "initials": "S",
            "gender": "Rather not say",
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
                "has_avatar": true,
                "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
                "default_avatar_color": "#ff9807"
              }
            },
            "account": {
              "id": 1
            }
          },
          "conversation": {
            "id": 1
          },
          "created_at": "2018-10-11T01:31:40Z",
          "updated_at": "2018-10-11T01:31:40Z"
        },
        {
          "id": 2,
          "object": "message",
          "content": "I should think it would like the largest telescope that ever was! Good-bye, feet!' (for when she caught it, and very soon finished it off. * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *.",
          "written_at": "1944-07-10T23:50:30Z",
          "written_by_me": true,
          "account": {
            "id": 1
          },
          "contact": {
            "id": 1,
            "object": "contact",
            "hash_id": "h:Y5LOkAdWNDqgVomKPv",
            "first_name": "Soledad",
            "last_name": null,
            "nickname": null,
            "complete_name": "Soledad",
            "initials": "S",
            "gender": "Rather not say",
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
                "has_avatar": true,
                "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
                "default_avatar_color": "#ff9807"
              }
            },
            "account": {
              "id": 1
            }
          },
          "conversation": {
            "id": 1
          },
          "created_at": "2018-10-11T01:31:40Z",
          "updated_at": "2018-10-11T01:31:40Z"
        },
        {
          "id": 3,
          "object": "message",
          "content": "I used to come yet, please your Majesty,' said the Mouse was bristling all over, and both creatures hid their faces in their paws. 'And how many hours a day did you call him Tortoise--' 'Why did you.",
          "written_at": "1943-12-31T14:17:43Z",
          "written_by_me": false,
          "account": {
            "id": 1
          },
          "contact": {
            "id": 1,
            "object": "contact",
            "hash_id": "h:Y5LOkAdWNDqgVomKPv",
            "first_name": "Soledad",
            "last_name": null,
            "nickname": null,
            "complete_name": "Soledad",
            "initials": "S",
            "gender": "Rather not say",
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
                "has_avatar": true,
                "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
                "default_avatar_color": "#ff9807"
              }
            },
            "account": {
              "id": 1
            }
          },
          "conversation": {
            "id": 1
          },
          "created_at": "2018-10-11T01:31:40Z",
          "updated_at": "2018-10-11T01:31:40Z"
        },
        {
          "id": 4,
          "object": "message",
          "content": "I can't take more.' 'You mean you can't think! And oh, I wish you could keep it to the little creature down, and was delighted to find that she was coming to, but it had gone. 'Well! I've often seen.",
          "written_at": "1961-04-09T17:17:50Z",
          "written_by_me": true,
          "account": {
            "id": 1
          },
          "contact": {
            "id": 1,
            "object": "contact",
            "hash_id": "h:Y5LOkAdWNDqgVomKPv",
            "first_name": "Soledad",
            "last_name": null,
            "nickname": null,
            "complete_name": "Soledad",
            "initials": "S",
            "gender": "Rather not say",
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
                "has_avatar": true,
                "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
                "default_avatar_color": "#ff9807"
              }
            },
            "account": {
              "id": 1
            }
          },
          "conversation": {
            "id": 1
          },
          "created_at": "2018-10-11T01:31:40Z",
          "updated_at": "2018-10-11T01:31:40Z"
        },
        {
          "id": 5,
          "object": "message",
          "content": "I can kick a little!' She drew her foot as far down the little door into that beautiful garden--how IS that to be a queer thing, to be two people! Why, there's hardly enough of it altogether; but.",
          "written_at": "1949-11-29T10:56:18Z",
          "written_by_me": true,
          "account": {
            "id": 1
          },
          "contact": {
            "id": 1,
            "object": "contact",
            "hash_id": "h:Y5LOkAdWNDqgVomKPv",
            "first_name": "Soledad",
            "last_name": null,
            "nickname": null,
            "complete_name": "Soledad",
            "initials": "S",
            "gender": "Rather not say",
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
                "has_avatar": true,
                "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
                "default_avatar_color": "#ff9807"
              }
            },
            "account": {
              "id": 1
            }
          },
          "conversation": {
            "id": 1
          },
          "created_at": "2018-10-11T01:31:40Z",
          "updated_at": "2018-10-11T01:31:40Z"
        }
      ],
      "contact_field_type": {
        "id": 4,
        "object": "contactfieldtype",
        "name": "Twitter",
        "fontawesome_icon": "fa fa-twitter-square",
        "protocol": null,
        "delible": true,
        "type": null,
        "account": {
          "id": 1
        },
        "created_at": "2018-10-11T01:31:37Z",
        "updated_at": "2018-10-11T01:31:37Z"
      },
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "hash_id": "h:Y5LOkAdWNDqgVomKPv",
        "first_name": "Soledad",
        "last_name": null,
        "nickname": null,
        "complete_name": "Soledad",
        "initials": "S",
        "gender": "Rather not say",
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
            "has_avatar": true,
            "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
            "default_avatar_color": "#ff9807"
          }
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2018-10-11T01:31:40Z",
      "updated_at": "2018-10-11T01:31:40Z"
    }
    ...
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/conversations?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/conversations?page=22",
    "prev": null,
    "next": "https:\/\/app.monicahq.com\/api\/conversations?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 22,
    "path": "https:\/\/app.monicahq.com\/api\/conversations",
    "per_page": 15,
    "to": 15,
    "total": 317
  }
}</code></pre>

<a id="markdown-list-all-the-conversations-of-a-contact" name="list-all-the-conversations-of-a-contact"></a>
## List all the conversations of a contact

<span class="url">
  GET /contacts/:id/conversations
</span>

<a id="markdown-response-1" name="response-1"></a>
### Response

<pre><code class="json">{
  "data": [
    {
      "id": 1,
      "object": "conversation",
      "happened_at": "1977-06-09T00:00:00Z",
      "messages": [
        {
          "id": 1,
          "object": "message",
          "content": "The other side of the conversation. Alice replied, so eagerly that the Mouse to tell me who YOU are, first.' 'Why?' said the Hatter. He came in with the Queen merely remarking that a moment's pause.",
          "written_at": "1953-04-02T00:00:00Z",
          "written_by_me": true,
          "account": {
            "id": 1
          },
          "contact": {
            "id": 1,
            "object": "contact",
            "hash_id": "h:Y5LOkAdWNDqgVomKPv",
            "first_name": "Soledad",
            "last_name": null,
            "nickname": null,
            "complete_name": "Soledad",
            "initials": "S",
            "gender": "Rather not say",
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
                "has_avatar": true,
                "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
                "default_avatar_color": "#ff9807"
              }
            },
            "account": {
              "id": 1
            }
          },
          "conversation": {
            "id": 1
          },
          "created_at": "2018-10-11T01:31:40Z",
          "updated_at": "2018-10-11T01:31:40Z"
        },
        {
          "id": 2,
          "object": "message",
          "content": "I should think it would like the largest telescope that ever was! Good-bye, feet!' (for when she caught it, and very soon finished it off. * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *.",
          "written_at": "1944-07-10T00:00:00Z",
          "written_by_me": true,
          "account": {
            "id": 1
          },
          "contact": {
            "id": 1,
            "object": "contact",
            "hash_id": "h:Y5LOkAdWNDqgVomKPv",
            "first_name": "Soledad",
            "last_name": null,
            "nickname": null,
            "complete_name": "Soledad",
            "initials": "S",
            "gender": "Rather not say",
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
                "has_avatar": true,
                "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
                "default_avatar_color": "#ff9807"
              }
            },
            "account": {
              "id": 1
            }
          },
          "conversation": {
            "id": 1
          },
          "created_at": "2018-10-11T01:31:40Z",
          "updated_at": "2018-10-11T01:31:40Z"
        },
        {
          "id": 3,
          "object": "message",
          "content": "I used to come yet, please your Majesty,' said the Mouse was bristling all over, and both creatures hid their faces in their paws. 'And how many hours a day did you call him Tortoise--' 'Why did you.",
          "written_at": "1943-12-31T00:00:00Z",
          "written_by_me": false,
          "account": {
            "id": 1
          },
          "contact": {
            "id": 1,
            "object": "contact",
            "hash_id": "h:Y5LOkAdWNDqgVomKPv",
            "first_name": "Soledad",
            "last_name": null,
            "nickname": null,
            "complete_name": "Soledad",
            "initials": "S",
            "gender": "Rather not say",
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
                "has_avatar": true,
                "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
                "default_avatar_color": "#ff9807"
              }
            },
            "account": {
              "id": 1
            }
          },
          "conversation": {
            "id": 1
          },
          "created_at": "2018-10-11T01:31:40Z",
          "updated_at": "2018-10-11T01:31:40Z"
        },
        {
          "id": 4,
          "object": "message",
          "content": "I can't take more.' 'You mean you can't think! And oh, I wish you could keep it to the little creature down, and was delighted to find that she was coming to, but it had gone. 'Well! I've often seen.",
          "written_at": "1961-04-09T00:00:00Z",
          "written_by_me": true,
          "account": {
            "id": 1
          },
          "contact": {
            "id": 1,
            "object": "contact",
            "hash_id": "h:Y5LOkAdWNDqgVomKPv",
            "first_name": "Soledad",
            "last_name": null,
            "nickname": null,
            "complete_name": "Soledad",
            "initials": "S",
            "gender": "Rather not say",
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
                "has_avatar": true,
                "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
                "default_avatar_color": "#ff9807"
              }
            },
            "account": {
              "id": 1
            }
          },
          "conversation": {
            "id": 1
          },
          "created_at": "2018-10-11T01:31:40Z",
          "updated_at": "2018-10-11T01:31:40Z"
        },
        {
          "id": 5,
          "object": "message",
          "content": "I can kick a little!' She drew her foot as far down the little door into that beautiful garden--how IS that to be a queer thing, to be two people! Why, there's hardly enough of it altogether; but.",
          "written_at": "1949-11-29T00:00:00Z",
          "written_by_me": true,
          "account": {
            "id": 1
          },
          "contact": {
            "id": 1,
            "object": "contact",
            "hash_id": "h:Y5LOkAdWNDqgVomKPv",
            "first_name": "Soledad",
            "last_name": null,
            "nickname": null,
            "complete_name": "Soledad",
            "initials": "S",
            "gender": "Rather not say",
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
                "has_avatar": true,
                "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
                "default_avatar_color": "#ff9807"
              }
            },
            "account": {
              "id": 1
            }
          },
          "conversation": {
            "id": 1
          },
          "created_at": "2018-10-11T01:31:40Z",
          "updated_at": "2018-10-11T01:31:40Z"
        }
      ],
      "contact_field_type": {
        "id": 4,
        "object": "contactfieldtype",
        "name": "Twitter",
        "fontawesome_icon": "fa fa-twitter-square",
        "protocol": null,
        "delible": true,
        "type": null,
        "account": {
          "id": 1
        },
        "created_at": "2018-10-11T01:31:37Z",
        "updated_at": "2018-10-11T01:31:37Z"
      },
      "account": {
        "id": 1
      },
      "contact": {
        "id": 1,
        "object": "contact",
        "hash_id": "h:Y5LOkAdWNDqgVomKPv",
        "first_name": "Soledad",
        "last_name": null,
        "nickname": null,
        "complete_name": "Soledad",
        "initials": "S",
        "gender": "Rather not say",
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
            "has_avatar": true,
            "avatar_url": "https:\/\/randomuser.me\/api\/portraits\/women\/37.jpg",
            "default_avatar_color": "#ff9807"
          }
        },
        "account": {
          "id": 1
        }
      },
      "created_at": "2018-10-11T01:31:40Z",
      "updated_at": "2018-10-11T01:31:40Z"
    }
    ...
  ],
  "links": {
    "first": "https:\/\/app.monicahq.com\/api\/conversations?page=1",
    "last": "https:\/\/app.monicahq.com\/api\/conversations?page=22",
    "prev": null,
    "next": "https:\/\/app.monicahq.com\/api\/conversations?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 22,
    "path": "https:\/\/app.monicahq.com\/api\/conversations",
    "per_page": 15,
    "to": 15,
    "total": 317
  }
}</code></pre>

<a id="markdown-get-a-specific-conversation" name="get-a-specific-conversation"></a>
## Get a specific conversation

Retrieving a conversation contains all the messages of this conversation.

<span class="url">
  GET /conversations/:id
</span>

<a id="markdown-response-2" name="response-2"></a>
### Response

<pre><code class="json">{
  "data": {
  "id": 3,
  "object": "conversation",
  "happened_at": "1981-10-29T00:00:00Z",
  "messages": [
    {
    "id": 4,
    "object": "message",
    "content": "lorem ipsum",
    "written_at": "1998-02-02T00:00:00Z",
    "written_by_me": true,
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "hash_id": "h:Y5LOkAdWNDqgVomKPv",
      "first_name": "John",
      "last_name": "Doe",
      "nickname": null,
      "complete_name": "John Doe",
      "initials": "JD",
      "gender": "Man",
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
        "default_avatar_color": "#93521e"
      }
      },
      "account": {
      "id": 1
      }
    },
    "conversation": {
      "id": 3
    },
    "created_at": "2018-08-19T19:29:09Z",
    "updated_at": "2018-08-19T19:29:09Z"
    }
  ],
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
    "created_at": "2018-08-18T19:07:58Z",
    "updated_at": "2018-08-18T19:07:58Z"
  },
  "account": {
    "id": 1
  },
  "contact": {
    "id": 1,
    "object": "contact",
    "hash_id": "h:Y5LOkAdWNDqgVomKPv",
    "first_name": "John",
    "last_name": "Doe",
    "nickname": null,
    "complete_name": "John Doe",
    "initials": "JD",
    "gender": "Man",
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
      "default_avatar_color": "#93521e"
    }
    },
    "account": {
    "id": 1
    }
  },
  "created_at": "2018-08-19T19:15:03Z",
  "updated_at": "2018-08-19T19:15:03Z"
  }
}</code></pre>

<a id="markdown-create-a-conversation" name="create-a-conversation"></a>
## Create a conversation

Creating a conversation only creates the conversation itself. You will have to add messages one by one to populate it with actual content.

<span class="url">
  POST /conversations/
</span>

<a id="markdown-input" name="input"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| happened_at | date | <strong>Required</strong>. The date the conversation happened. Format: YYYY-MM-DD. |
| contact_field_type_id | integer | <strong>Required</strong>. The type of the contact field. Has to be a valid, existing contact field type ID. You can retrieve the list of all the contact field types of an account <a href="contactfieldtypes">via the API</a>. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the conversation field is associated with. |

<a id="markdown-example" name="example"></a>
### Example

<pre><code class="json">{
  "happened_at": "1981-10-29",
  "contact_id": 1,
  "contact_field_type_id": 1
}</code></pre>

<a id="markdown-response-3" name="response-3"></a>
### Response

The API call returns a Conversation object if the call succeeds.

<pre><code class="json">{
  "data": {
  "id": 3,
  "object": "conversation",
  "happened_at": "1981-10-29T00:00:00Z",
  "messages": [],
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
    "created_at": "2018-08-18T19:07:58Z",
    "updated_at": "2018-08-18T19:07:58Z"
  },
  "account": {
    "id": 1
  },
  "contact": {
    "id": 1,
    "object": "contact",
    "hash_id": "h:Y5LOkAdWNDqgVomKPv",
    "first_name": "John",
    "last_name": "Doe",
    "nickname": null,
    "complete_name": "John Doe",
    "initials": "JD",
    "gender": "Man",
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
      "default_avatar_color": "#93521e"
    }
    },
    "account": {
    "id": 1
    }
  },
  "created_at": "2018-08-19T19:15:03Z",
  "updated_at": "2018-08-19T19:15:03Z"
  }
}</code></pre>

<a id="markdown-update-a-conversation" name="update-a-conversation"></a>
## Update a conversation

This only updates the conversation object itself - not the messages in the conversation.

<span class="url">
  PUT /conversations/:id
</span>

<a id="markdown-input-1" name="input-1"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| happened_at | date | <strong>Required</strong>. The date the conversation happened. Format: YYYY-MM-DD. |

<a id="markdown-example-1" name="example-1"></a>
### Example

<pre><code class="json">{
  "happened_at": "2019-10-29"
}</code></pre>

<a id="markdown-response-4" name="response-4"></a>
### Response

<pre><code class="json">{
  "data": {
  "id": 3,
  "object": "conversation",
  "happened_at": "1981-10-29T00:00:00Z",
  "messages": [],
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
    "created_at": "2018-08-18T19:07:58Z",
    "updated_at": "2018-08-18T19:07:58Z"
  },
  "account": {
    "id": 1
  },
  "contact": {
    "id": 1,
    "object": "contact",
    "hash_id": "h:Y5LOkAdWNDqgVomKPv",
    "first_name": "John",
    "last_name": "Doe",
    "nickname": null,
    "complete_name": "John Doe",
    "initials": "JD",
    "gender": "Man",
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
      "default_avatar_color": "#93521e"
    }
    },
    "account": {
    "id": 1
    }
  },
  "created_at": "2018-08-19T19:15:03Z",
  "updated_at": "2018-08-19T19:15:03Z"
  }
}</code></pre>

<a id="markdown-delete-a-conversation" name="delete-a-conversation"></a>
## Delete a conversation

<span class="url">
  DELETE /conversations/:id
</span>

<a id="markdown-response-5" name="response-5"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>

<a id="markdown-add-a-message-to-a-conversation" name="add-a-message-to-a-conversation"></a>
## Add a message to a conversation

<span class="url">
  POST /conversations/:id/messages
</span>

<a id="markdown-input-2" name="input-2"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| written_at | date | <strong>Required</strong>. The date the message has been written. Format: YYYY-MM-DD. |
| written_by_me | boolean | <strong>Required</strong>. True if the user has written the message. False if the contact has written the message. |
| content | text | <strong>Required</strong>. The actual message. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the conversation is associated with. |

<a id="markdown-example-2" name="example-2"></a>
### Example

<pre><code class="json">{
  "contact_id": 1,
  "written_at": "1998-02-02",
  "written_by_me": true,
  "content": "this is a message"
}</code></pre>

<a id="markdown-response-6" name="response-6"></a>
### Response

The API call returns a Conversation object if the call succeeds.

<pre><code class="json">{
  "data": {
  "id": 3,
  "object": "conversation",
  "happened_at": "1981-10-29T00:00:00Z",
  "messages": [
    {
    "id": 4,
    "object": "message",
    "content": "this is a message",
    "written_at": "1998-02-02T00:00:00Z",
    "written_by_me": true,
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "hash_id": "h:Y5LOkAdWNDqgVomKPv",
      "first_name": "John",
      "last_name": "Doe",
      "nickname": null,
      "complete_name": "John Doe",
      "initials": "JD",
      "gender": "Man",
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
        "default_avatar_color": "#93521e"
      }
      },
      "account": {
      "id": 1
      }
    },
    "conversation": {
      "id": 3
    },
    "created_at": "2018-08-19T19:29:09Z",
    "updated_at": "2018-08-19T19:29:09Z"
    }
  ],
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
    "created_at": "2018-08-18T19:07:58Z",
    "updated_at": "2018-08-18T19:07:58Z"
  },
  "account": {
    "id": 1
  },
  "contact": {
    "id": 1,
    "object": "contact",
    "hash_id": "h:Y5LOkAdWNDqgVomKPv",
    "first_name": "John",
    "last_name": "Doe",
    "nickname": null,
    "complete_name": "John Doe",
    "initials": "JD",
    "gender": "Man",
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
      "default_avatar_color": "#93521e"
    }
    },
    "account": {
    "id": 1
    }
  },
  "created_at": "2018-08-19T19:15:03Z",
  "updated_at": "2018-08-19T19:15:03Z"
  }
}</code></pre>

<a id="markdown-update-a-message-in-a-conversation" name="update-a-message-in-a-conversation"></a>
## Update a message in a conversation

<span class="url">
  PUT /conversations/:id/messages/:id
</span>

<a id="markdown-input-3" name="input-3"></a>
### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| written_at | date | <strong>Required</strong>. The date the message has been written. Format: YYYY-MM-DD. |
| written_by_me | boolean | <strong>Required</strong>. True if the user has written the message. False if the contact has written the message. |
| content | text | <strong>Required</strong>. The actual message. |
| contact_id | integer | <strong>Required</strong>. The ID of the contact that the conversation is associated with. |

<a id="markdown-example-3" name="example-3"></a>
### Example

<pre><code class="json">{
  "contact_id": 1,
  "written_at": "1998-02-02",
  "written_by_me": true,
  "content": "this is a message"
}</code></pre>

<a id="markdown-response-7" name="response-7"></a>
### Response

The API call returns a Conversation object if the call succeeds.

<pre><code class="json">{
  "data": {
  "id": 3,
  "object": "conversation",
  "happened_at": "1981-10-29T00:00:00Z",
  "messages": [
    {
    "id": 4,
    "object": "message",
    "content": "this is a message",
    "written_at": "1998-02-02T00:00:00Z",
    "written_by_me": true,
    "account": {
      "id": 1
    },
    "contact": {
      "id": 1,
      "object": "contact",
      "hash_id": "h:Y5LOkAdWNDqgVomKPv",
      "first_name": "John",
      "last_name": "Doe",
      "nickname": null,
      "complete_name": "John Doe",
      "initials": "JD",
      "gender": "Man",
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
        "default_avatar_color": "#93521e"
      }
      },
      "account": {
      "id": 1
      }
    },
    "conversation": {
      "id": 3
    },
    "created_at": "2018-08-19T19:29:09Z",
    "updated_at": "2018-08-19T19:29:09Z"
    }
  ],
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
    "created_at": "2018-08-18T19:07:58Z",
    "updated_at": "2018-08-18T19:07:58Z"
  },
  "account": {
    "id": 1
  },
  "contact": {
    "id": 1,
    "object": "contact",
    "hash_id": "h:Y5LOkAdWNDqgVomKPv",
    "first_name": "John",
    "last_name": "Doe",
    "nickname": null,
    "complete_name": "John Doe",
    "initials": "JD",
    "gender": "Man",
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
      "default_avatar_color": "#93521e"
    }
    },
    "account": {
    "id": 1
    }
  },
  "created_at": "2018-08-19T19:15:03Z",
  "updated_at": "2018-08-19T19:15:03Z"
  }
}</code></pre>

<a id="markdown-delete-a-message" name="delete-a-message"></a>
## Delete a message

<span class="url">
  DELETE /conversations/:id/messages/:id
</span>

<a id="markdown-response-8" name="response-8"></a>
### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>
