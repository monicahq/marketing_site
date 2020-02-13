# Groups <!-- omit in toc -->

## Overview

The Group object represents a group of contacts. A group is generic on purpose, it’s up to the user to decide who should be in a group.

A group can have no contacts, up to an unlimited number of contacts.

A group can only contain real contacts. That means partial contacts are not supported in a group.

## List all your groups

<span class="url">
  GET /groups/
</span>

### Parameters

| Name | Type | Description |
| ---- | ----------- | ----------- |
| limit | integer | Indicates the page size. |
| page | integer | Indicates the page to return. |

### Response

<pre><code class="json">{
  "data": [
    {
      "id": 1,
      "object": "group",
      "name": "loving friends",
      "contacts": [
        {
          "id": 4,
          "object": "contact",
          "hash_id": "h:w7MAYJlq1nbR6BKj2p",
          "first_name": "Maximillian",
          "last_name": null,
          "nickname": null,
          "complete_name": "Maximillian",
          "description": null,
          "gender": "Woman",
          "gender_type": "F",
          "is_starred": false,
          "is_partial": false,
          "is_active": true,
          "is_dead": false,
          "is_me": false,
          "last_called": null,
          "last_activity_together": null,
          "stay_in_touch_frequency": null,
          "stay_in_touch_trigger_date": null,
          "information": {
            "relationships": {
              "love": {
                "total": 1,
                "contacts": [
                  {
                    "relationship": {
                      "id": 6,
                      "name": "ex_husband"
                    },
                    "contact": {
                      "id": 1,
                      "object": "contact",
                      "hash_id": "h:Y5LOkAdWNDqgVomKPv",
                      "first_name": "Celine",
                      "last_name": "Skiles",
                      "nickname": "Kendall Jakubowski",
                      "complete_name": "Celine Skiles (Kendall Jakubowski)",
                      "initials": "CSJ",
                      "gender": "Rather not say",
                      "gender_type": "O",
                      "is_partial": false,
                      "is_dead": false,
                      "is_me": false,
                      "information": {
                        "birthdate": {
                          "is_age_based": false,
                          "is_year_unknown": false,
                          "date": "1996-02-29T00:00:00Z"
                        },
                        "deceased_date": {
                          "is_age_based": null,
                          "is_year_unknown": null,
                          "date": null
                        },
                        "avatar": {
                          "url": "https:\/\/monica.test\/storage\/avatars\/88ce1570-3d8a-47a6-88d5-5e610dcd2bdb.jpg?1580940164",
                          "source": "default",
                          "default_avatar_color": "#709512"
                        }
                      },
                      "url": "https:\/\/monica.test\/api\/contacts\/1",
                      "account": {
                        "id": 1
                      }
                    }
                  }
                ]
              },
              "family": {
                "total": 0,
                "contacts": []
              },
              "friend": {
                "total": 0,
                "contacts": []
              },
              "work": {
                "total": 0,
                "contacts": []
              }
            },
            "dates": {
              "birthdate": {
                "is_age_based": false,
                "is_year_unknown": false,
                "date": "2015-12-03T00:00:00Z"
              },
              "deceased_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              }
            },
            "career": {
              "job": null,
              "company": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/5837b106-b878-4a29-9345-24fe775c4016.jpg?1580940164",
              "source": "default",
              "default_avatar_color": "#ff9807"
            },
            "food_preferences": null,
            "how_you_met": {
              "general_information": null,
              "first_met_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              },
              "first_met_through_contact": null
            }
          },
          "addresses": [],
          "tags": [],
          "statistics": {
            "number_of_calls": 0,
            "number_of_notes": 0,
            "number_of_activities": 0,
            "number_of_reminders": 0,
            "number_of_tasks": 0,
            "number_of_gifts": 0,
            "number_of_debts": 0
          },
          "url": "https:\/\/monica.test\/api\/contacts\/4",
          "account": {
            "id": 1
          },
          "created_at": "2020-02-05T22:02:44Z",
          "updated_at": "2020-02-05T22:02:44Z"
        },
        {
          "id": 5,
          "object": "contact",
          "hash_id": "h:GK7L1M6q8vWzRDN3we",
          "first_name": "Tyrel",
          "last_name": "Schamberger",
          "nickname": null,
          "complete_name": "Tyrel Schamberger",
          "description": null,
          "gender": "Woman",
          "gender_type": "F",
          "is_starred": false,
          "is_partial": false,
          "is_active": true,
          "is_dead": false,
          "is_me": false,
          "last_called": null,
          "last_activity_together": "2019-12-14T00:00:00.000000Z",
          "stay_in_touch_frequency": null,
          "stay_in_touch_trigger_date": null,
          "information": {
            "relationships": {
              "love": {
                "total": 1,
                "contacts": [
                  {
                    "relationship": {
                      "id": 17,
                      "name": "lover"
                    },
                    "contact": {
                      "id": 11,
                      "object": "contact",
                      "hash_id": "h:3xK6JaeqVJqGR2BlVO",
                      "first_name": "Cydney",
                      "last_name": "Crona",
                      "nickname": null,
                      "complete_name": "Cydney Crona",
                      "initials": "CC",
                      "gender": "Rather not say",
                      "gender_type": "O",
                      "is_partial": false,
                      "is_dead": false,
                      "is_me": false,
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
                          "url": "https:\/\/monica.test\/storage\/avatars\/02edd08d-f75d-47a3-b3ac-40b0b1f24986.jpg?1580940165",
                          "source": "default",
                          "default_avatar_color": "#93521e"
                        }
                      },
                      "url": "https:\/\/monica.test\/api\/contacts\/11",
                      "account": {
                        "id": 1
                      }
                    }
                  }
                ]
              },
              "family": {
                "total": 3,
                "contacts": [
                  {
                    "relationship": {
                      "id": 9,
                      "name": "child"
                    },
                    "contact": {
                      "id": 7,
                      "object": "contact",
                      "hash_id": "h:GK7L1M6q8vWzRDN3we",
                      "first_name": "Hilda",
                      "last_name": "Hagenes",
                      "nickname": "Wilburn Considine",
                      "complete_name": "Hilda Hagenes (Wilburn Considine)",
                      "initials": "HHC",
                      "gender": "Rather not say",
                      "gender_type": "O",
                      "is_partial": true,
                      "is_dead": false,
                      "is_me": false,
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
                          "url": "https:\/\/monica.test\/storage\/avatars\/50a2d1ca-ec9b-440f-b77d-34cf6139b65b.jpg?1580940164",
                          "source": "default",
                          "default_avatar_color": "#e5e5cd"
                        }
                      },
                      "account": {
                        "id": 1
                      }
                    }
                  },
                  {
                    "relationship": {
                      "id": 11,
                      "name": "sibling"
                    },
                    "contact": {
                      "id": 8,
                      "object": "contact",
                      "hash_id": "h:OxEj52krPNbR7VpJK8",
                      "first_name": "Manley",
                      "last_name": null,
                      "nickname": "Georgette Quigley",
                      "complete_name": "Manley (Georgette Quigley)",
                      "initials": "MQ",
                      "gender": "Rather not say",
                      "gender_type": "O",
                      "is_partial": false,
                      "is_dead": false,
                      "is_me": false,
                      "information": {
                        "birthdate": {
                          "is_age_based": true,
                          "is_year_unknown": false,
                          "date": "1959-01-01T00:00:00Z"
                        },
                        "deceased_date": {
                          "is_age_based": null,
                          "is_year_unknown": null,
                          "date": null
                        },
                        "avatar": {
                          "url": "https:\/\/monica.test\/storage\/avatars\/97b49ef2-a17b-463b-a545-35663bdd924d.jpg?1580940164",
                          "source": "default",
                          "default_avatar_color": "#e5e5cd"
                        }
                      },
                      "url": "https:\/\/monica.test\/api\/contacts\/8",
                      "account": {
                        "id": 1
                      }
                    }
                  },
                  {
                    "relationship": {
                      "id": 15,
                      "name": "stepparent"
                    },
                    "contact": {
                      "id": 10,
                      "object": "contact",
                      "hash_id": "h:a4OXL3BrZXbA5Kg9lD",
                      "first_name": "Larry",
                      "last_name": "Wisozk",
                      "nickname": "Prof. Hoyt Hamill DDS",
                      "complete_name": "Larry Wisozk (Prof. Hoyt Hamill DDS)",
                      "initials": "LWHHD",
                      "gender": "Rather not say",
                      "gender_type": "O",
                      "is_partial": false,
                      "is_dead": false,
                      "is_me": false,
                      "information": {
                        "birthdate": {
                          "is_age_based": true,
                          "is_year_unknown": false,
                          "date": "1986-01-01T00:00:00Z"
                        },
                        "deceased_date": {
                          "is_age_based": null,
                          "is_year_unknown": null,
                          "date": null
                        },
                        "avatar": {
                          "url": "https:\/\/monica.test\/storage\/avatars\/c933d535-6172-4866-8616-2858f9442918.jpg?1580940165",
                          "source": "default",
                          "default_avatar_color": "#bd5067"
                        }
                      },
                      "url": "https:\/\/monica.test\/api\/contacts\/10",
                      "account": {
                        "id": 1
                      }
                    }
                  }
                ]
              },
              "friend": {
                "total": 1,
                "contacts": [
                  {
                    "relationship": {
                      "id": 13,
                      "name": "bestfriend"
                    },
                    "contact": {
                      "id": 9,
                      "object": "contact",
                      "hash_id": "h:Q67vO3nqdjW2Z80lJj",
                      "first_name": "Elwin",
                      "last_name": "Turcotte",
                      "nickname": null,
                      "complete_name": "Elwin Turcotte",
                      "initials": "ET",
                      "gender": "Woman",
                      "gender_type": "F",
                      "is_partial": false,
                      "is_dead": false,
                      "is_me": false,
                      "information": {
                        "birthdate": {
                          "is_age_based": false,
                          "is_year_unknown": false,
                          "date": "1982-12-22T00:00:00Z"
                        },
                        "deceased_date": {
                          "is_age_based": null,
                          "is_year_unknown": null,
                          "date": null
                        },
                        "avatar": {
                          "url": "https:\/\/monica.test\/storage\/avatars\/4f4410e0-d24b-4fe9-bef5-df02be6455f6.jpg?1580940164",
                          "source": "default",
                          "default_avatar_color": "#93521e"
                        }
                      },
                      "url": "https:\/\/monica.test\/api\/contacts\/9",
                      "account": {
                        "id": 1
                      }
                    }
                  }
                ]
              },
              "work": {
                "total": 1,
                "contacts": [
                  {
                    "relationship": {
                      "id": 7,
                      "name": "mentor"
                    },
                    "contact": {
                      "id": 6,
                      "object": "contact",
                      "hash_id": "h:j9ePOdJb01WB6EN1Rl",
                      "first_name": "Ford",
                      "last_name": "Abbott",
                      "nickname": "Arthur Waelchi Jr.",
                      "complete_name": "Ford Abbott (Arthur Waelchi Jr.)",
                      "initials": "FAWJ",
                      "gender": "Rather not say",
                      "gender_type": "O",
                      "is_partial": false,
                      "is_dead": false,
                      "is_me": false,
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
                          "url": "https:\/\/monica.test\/storage\/avatars\/f7e6f20e-8133-487d-be7d-c77290708f7a.jpg?1580940164",
                          "source": "default",
                          "default_avatar_color": "#93521e"
                        }
                      },
                      "url": "https:\/\/monica.test\/api\/contacts\/6",
                      "account": {
                        "id": 1
                      }
                    }
                  }
                ]
              }
            },
            "dates": {
              "birthdate": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              },
              "deceased_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              }
            },
            "career": {
              "job": null,
              "company": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
              "source": "default",
              "default_avatar_color": "#b3d5fe"
            },
            "food_preferences": null,
            "how_you_met": {
              "general_information": null,
              "first_met_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              },
              "first_met_through_contact": {
                "id": 14,
                "object": "contact",
                "hash_id": "h:M0456darjZr9ozJVnX",
                "first_name": "Fabian",
                "last_name": null,
                "nickname": "Vincenzo Schimmel",
                "complete_name": "Fabian (Vincenzo Schimmel)",
                "initials": "FS",
                "gender": "Rather not say",
                "gender_type": "O",
                "is_partial": false,
                "is_dead": false,
                "is_me": false,
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
                    "url": "https:\/\/monica.test\/storage\/avatars\/669b3ebc-62f4-4037-a6b8-739de33decd3.jpg?1580940166",
                    "source": "default",
                    "default_avatar_color": "#fdb660"
                  }
                },
                "url": "https:\/\/monica.test\/api\/contacts\/14",
                "account": {
                  "id": 1
                }
              }
            }
          },
          "addresses": [
            {
              "id": 1,
              "object": "address",
              "name": "ea",
              "street": null,
              "city": "Lake Shaniyashire",
              "province": "Pennsylvania",
              "postal_code": null,
              "latitude": null,
              "longitude": null,
              "country": {
                "id": "CC",
                "object": "country",
                "name": "Cocos (Keeling) Islands",
                "iso": "CC"
              },
              "url": "https:\/\/monica.test\/api\/addresses\/1",
              "account": {
                "id": 1
              },
              "contact": {
                "id": 5,
                "object": "contact",
                "hash_id": "h:GK7L1M6q8vWzRDN3we",
                "first_name": "Tyrel",
                "last_name": "Schamberger",
                "nickname": null,
                "complete_name": "Tyrel Schamberger",
                "initials": "TS",
                "gender": "Woman",
                "gender_type": "F",
                "is_partial": false,
                "is_dead": false,
                "is_me": false,
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
                    "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
                    "source": "default",
                    "default_avatar_color": "#b3d5fe"
                  }
                },
                "url": "https:\/\/monica.test\/api\/contacts\/5",
                "account": {
                  "id": 1
                }
              },
              "created_at": "2020-02-05T22:02:45Z",
              "updated_at": "2020-02-05T22:02:45Z"
            }
          ],
          "tags": [
            {
              "id": 1,
              "object": "tag",
              "name": "nisi",
              "name_slug": "nisi",
              "account": {
                "id": 1
              },
              "created_at": "2020-02-05T22:02:44Z",
              "updated_at": "2020-02-05T22:02:44Z"
            },
            {
              "id": 2,
              "object": "tag",
              "name": "repudiandae",
              "name_slug": "repudiandae",
              "account": {
                "id": 1
              },
              "created_at": "2020-02-05T22:02:44Z",
              "updated_at": "2020-02-05T22:02:44Z"
            },
            {
              "id": 3,
              "object": "tag",
              "name": "eum",
              "name_slug": "eum",
              "account": {
                "id": 1
              },
              "created_at": "2020-02-05T22:02:44Z",
              "updated_at": "2020-02-05T22:02:44Z"
            },
            {
              "id": 4,
              "object": "tag",
              "name": "deleniti",
              "name_slug": "deleniti",
              "account": {
                "id": 1
              },
              "created_at": "2020-02-05T22:02:44Z",
              "updated_at": "2020-02-05T22:02:44Z"
            },
            {
              "id": 5,
              "object": "tag",
              "name": "voluptatum",
              "name_slug": "voluptatum",
              "account": {
                "id": 1
              },
              "created_at": "2020-02-05T22:02:44Z",
              "updated_at": "2020-02-05T22:02:44Z"
            },
            {
              "id": 6,
              "object": "tag",
              "name": "enim",
              "name_slug": "enim",
              "account": {
                "id": 1
              },
              "created_at": "2020-02-05T22:02:44Z",
              "updated_at": "2020-02-05T22:02:44Z"
            },
            {
              "id": 7,
              "object": "tag",
              "name": "assumenda",
              "name_slug": "assumenda",
              "account": {
                "id": 1
              },
              "created_at": "2020-02-05T22:02:44Z",
              "updated_at": "2020-02-05T22:02:44Z"
            },
            {
              "id": 8,
              "object": "tag",
              "name": "alias",
              "name_slug": "alias",
              "account": {
                "id": 1
              },
              "created_at": "2020-02-05T22:02:44Z",
              "updated_at": "2020-02-05T22:02:44Z"
            },
            {
              "id": 9,
              "object": "tag",
              "name": "ratione",
              "name_slug": "ratione",
              "account": {
                "id": 1
              },
              "created_at": "2020-02-05T22:02:44Z",
              "updated_at": "2020-02-05T22:02:44Z"
            },
            {
              "id": 10,
              "object": "tag",
              "name": "non",
              "name_slug": "non",
              "account": {
                "id": 1
              },
              "created_at": "2020-02-05T22:02:44Z",
              "updated_at": "2020-02-05T22:02:44Z"
            }
          ],
          "statistics": {
            "number_of_calls": 0,
            "number_of_notes": 5,
            "number_of_activities": 9,
            "number_of_reminders": 0,
            "number_of_tasks": 0,
            "number_of_gifts": 0,
            "number_of_debts": 0
          },
          "url": "https:\/\/monica.test\/api\/contacts\/5",
          "account": {
            "id": 1
          },
          "created_at": "2020-02-05T22:02:44Z",
          "updated_at": "2020-02-05T22:02:45Z"
        },
        {
          "id": 9,
          "object": "contact",
          "hash_id": "h:Q67vO3nqdjW2Z80lJj",
          "first_name": "Elwin",
          "last_name": "Turcotte",
          "nickname": null,
          "complete_name": "Elwin Turcotte",
          "description": null,
          "gender": "Woman",
          "gender_type": "F",
          "is_starred": false,
          "is_partial": false,
          "is_active": true,
          "is_dead": false,
          "is_me": false,
          "last_called": null,
          "last_activity_together": null,
          "stay_in_touch_frequency": null,
          "stay_in_touch_trigger_date": null,
          "information": {
            "relationships": {
              "love": {
                "total": 0,
                "contacts": []
              },
              "family": {
                "total": 0,
                "contacts": []
              },
              "friend": {
                "total": 1,
                "contacts": [
                  {
                    "relationship": {
                      "id": 14,
                      "name": "bestfriend"
                    },
                    "contact": {
                      "id": 5,
                      "object": "contact",
                      "hash_id": "h:GK7L1M6q8vWzRDN3we",
                      "first_name": "Tyrel",
                      "last_name": "Schamberger",
                      "nickname": null,
                      "complete_name": "Tyrel Schamberger",
                      "initials": "TS",
                      "gender": "Woman",
                      "gender_type": "F",
                      "is_partial": false,
                      "is_dead": false,
                      "is_me": false,
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
                          "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
                          "source": "default",
                          "default_avatar_color": "#b3d5fe"
                        }
                      },
                      "url": "https:\/\/monica.test\/api\/contacts\/5",
                      "account": {
                        "id": 1
                      }
                    }
                  }
                ]
              },
              "work": {
                "total": 0,
                "contacts": []
              }
            },
            "dates": {
              "birthdate": {
                "is_age_based": false,
                "is_year_unknown": false,
                "date": "1982-12-22T00:00:00Z"
              },
              "deceased_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              }
            },
            "career": {
              "job": null,
              "company": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/4f4410e0-d24b-4fe9-bef5-df02be6455f6.jpg?1580940164",
              "source": "default",
              "default_avatar_color": "#93521e"
            },
            "food_preferences": null,
            "how_you_met": {
              "general_information": null,
              "first_met_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              },
              "first_met_through_contact": null
            }
          },
          "addresses": [],
          "tags": [],
          "statistics": {
            "number_of_calls": 0,
            "number_of_notes": 0,
            "number_of_activities": 0,
            "number_of_reminders": 0,
            "number_of_tasks": 0,
            "number_of_gifts": 0,
            "number_of_debts": 0
          },
          "url": "https:\/\/monica.test\/api\/contacts\/9",
          "account": {
            "id": 1
          },
          "created_at": "2020-02-05T22:02:44Z",
          "updated_at": "2020-02-05T22:02:45Z"
        },
        {
          "id": 10,
          "object": "contact",
          "hash_id": "h:a4OXL3BrZXbA5Kg9lD",
          "first_name": "Larry",
          "last_name": "Wisozk",
          "nickname": "Prof. Hoyt Hamill DDS",
          "complete_name": "Larry Wisozk (Prof. Hoyt Hamill DDS)",
          "description": null,
          "gender": "Rather not say",
          "gender_type": "O",
          "is_starred": false,
          "is_partial": false,
          "is_active": true,
          "is_dead": false,
          "is_me": false,
          "last_called": null,
          "last_activity_together": null,
          "stay_in_touch_frequency": null,
          "stay_in_touch_trigger_date": null,
          "information": {
            "relationships": {
              "love": {
                "total": 0,
                "contacts": []
              },
              "family": {
                "total": 1,
                "contacts": [
                  {
                    "relationship": {
                      "id": 16,
                      "name": "stepchild"
                    },
                    "contact": {
                      "id": 5,
                      "object": "contact",
                      "hash_id": "h:GK7L1M6q8vWzRDN3we",
                      "first_name": "Tyrel",
                      "last_name": "Schamberger",
                      "nickname": null,
                      "complete_name": "Tyrel Schamberger",
                      "initials": "TS",
                      "gender": "Woman",
                      "gender_type": "F",
                      "is_partial": false,
                      "is_dead": false,
                      "is_me": false,
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
                          "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
                          "source": "default",
                          "default_avatar_color": "#b3d5fe"
                        }
                      },
                      "url": "https:\/\/monica.test\/api\/contacts\/5",
                      "account": {
                        "id": 1
                      }
                    }
                  }
                ]
              },
              "friend": {
                "total": 0,
                "contacts": []
              },
              "work": {
                "total": 0,
                "contacts": []
              }
            },
            "dates": {
              "birthdate": {
                "is_age_based": true,
                "is_year_unknown": false,
                "date": "1986-01-01T00:00:00Z"
              },
              "deceased_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              }
            },
            "career": {
              "job": null,
              "company": null
            },
            "avatar": {
              "url": "https:\/\/monica.test\/storage\/avatars\/c933d535-6172-4866-8616-2858f9442918.jpg?1580940165",
              "source": "default",
              "default_avatar_color": "#bd5067"
            },
            "food_preferences": null,
            "how_you_met": {
              "general_information": null,
              "first_met_date": {
                "is_age_based": null,
                "is_year_unknown": null,
                "date": null
              },
              "first_met_through_contact": null
            }
          },
          "addresses": [],
          "tags": [],
          "statistics": {
            "number_of_calls": 0,
            "number_of_notes": 0,
            "number_of_activities": 0,
            "number_of_reminders": 0,
            "number_of_tasks": 0,
            "number_of_gifts": 0,
            "number_of_debts": 0
          },
          "url": "https:\/\/monica.test\/api\/contacts\/10",
          "account": {
            "id": 1
          },
          "created_at": "2020-02-05T22:02:45Z",
          "updated_at": "2020-02-05T22:02:45Z"
        }
      ],
      "account": {
        "id": 1
      },
      "created_at": "2020-02-13T15:50:07Z",
      "updated_at": "2020-02-13T22:27:42Z"
    },
    {
      "id": 2,
      "object": "group",
      "name": "sales people",
      "contacts": [],
      "account": {
        "id": 1
      },
      "created_at": "2020-02-13T15:50:13Z",
      "updated_at": "2020-02-13T15:50:13Z"
    }
  ],
  "links": {
    "first": "https:\/\/monica.test\/api\/groups?page=1",
    "last": "https:\/\/monica.test\/api\/groups?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "path": "https:\/\/monica.test\/api\/groups",
    "per_page": 15,
    "to": 2,
    "total": 2
  }
}</code></pre>

## Get a specific group

<span class="url">
  GET /groups/:id
</span>

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "group",
    "name": "loving friends",
    "contacts": [
      {
        "id": 4,
        "object": "contact",
        "hash_id": "h:w7MAYJlq1nbR6BKj2p",
        "first_name": "Maximillian",
        "last_name": null,
        "nickname": null,
        "complete_name": "Maximillian",
        "description": null,
        "gender": "Woman",
        "gender_type": "F",
        "is_starred": false,
        "is_partial": false,
        "is_active": true,
        "is_dead": false,
        "is_me": false,
        "last_called": null,
        "last_activity_together": null,
        "stay_in_touch_frequency": null,
        "stay_in_touch_trigger_date": null,
        "information": {
          "relationships": {
            "love": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 6,
                    "name": "ex_husband"
                  },
                  "contact": {
                    "id": 1,
                    "object": "contact",
                    "hash_id": "h:Y5LOkAdWNDqgVomKPv",
                    "first_name": "Celine",
                    "last_name": "Skiles",
                    "nickname": "Kendall Jakubowski",
                    "complete_name": "Celine Skiles (Kendall Jakubowski)",
                    "initials": "CSJ",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
                    "information": {
                      "birthdate": {
                        "is_age_based": false,
                        "is_year_unknown": false,
                        "date": "1996-02-29T00:00:00Z"
                      },
                      "deceased_date": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                      },
                      "avatar": {
                        "url": "https:\/\/monica.test\/storage\/avatars\/88ce1570-3d8a-47a6-88d5-5e610dcd2bdb.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#709512"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/1",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "family": {
              "total": 0,
              "contacts": []
            },
            "friend": {
              "total": 0,
              "contacts": []
            },
            "work": {
              "total": 0,
              "contacts": []
            }
          },
          "dates": {
            "birthdate": {
              "is_age_based": false,
              "is_year_unknown": false,
              "date": "2015-12-03T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            }
          },
          "career": {
            "job": null,
            "company": null
          },
          "avatar": {
            "url": "https:\/\/monica.test\/storage\/avatars\/5837b106-b878-4a29-9345-24fe775c4016.jpg?1580940164",
            "source": "default",
            "default_avatar_color": "#ff9807"
          },
          "food_preferences": null,
          "how_you_met": {
            "general_information": null,
            "first_met_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "first_met_through_contact": null
          }
        },
        "addresses": [],
        "tags": [],
        "statistics": {
          "number_of_calls": 0,
          "number_of_notes": 0,
          "number_of_activities": 0,
          "number_of_reminders": 0,
          "number_of_tasks": 0,
          "number_of_gifts": 0,
          "number_of_debts": 0
        },
        "url": "https:\/\/monica.test\/api\/contacts\/4",
        "account": {
          "id": 1
        },
        "created_at": "2020-02-05T22:02:44Z",
        "updated_at": "2020-02-05T22:02:44Z"
      },
      {
        "id": 5,
        "object": "contact",
        "hash_id": "h:GK7L1M6q8vWzRDN3we",
        "first_name": "Tyrel",
        "last_name": "Schamberger",
        "nickname": null,
        "complete_name": "Tyrel Schamberger",
        "description": null,
        "gender": "Woman",
        "gender_type": "F",
        "is_starred": false,
        "is_partial": false,
        "is_active": true,
        "is_dead": false,
        "is_me": false,
        "last_called": null,
        "last_activity_together": "2019-12-14T00:00:00.000000Z",
        "stay_in_touch_frequency": null,
        "stay_in_touch_trigger_date": null,
        "information": {
          "relationships": {
            "love": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 17,
                    "name": "lover"
                  },
                  "contact": {
                    "id": 11,
                    "object": "contact",
                    "hash_id": "h:3xK6JaeqVJqGR2BlVO",
                    "first_name": "Cydney",
                    "last_name": "Crona",
                    "nickname": null,
                    "complete_name": "Cydney Crona",
                    "initials": "CC",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
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
                        "url": "https:\/\/monica.test\/storage\/avatars\/02edd08d-f75d-47a3-b3ac-40b0b1f24986.jpg?1580940165",
                        "source": "default",
                        "default_avatar_color": "#93521e"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/11",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "family": {
              "total": 3,
              "contacts": [
                {
                  "relationship": {
                    "id": 9,
                    "name": "child"
                  },
                  "contact": {
                    "id": 7,
                    "object": "contact",
                    "hash_id": "h:GK7L1M6q8vWzRDN3we",
                    "first_name": "Hilda",
                    "last_name": "Hagenes",
                    "nickname": "Wilburn Considine",
                    "complete_name": "Hilda Hagenes (Wilburn Considine)",
                    "initials": "HHC",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": true,
                    "is_dead": false,
                    "is_me": false,
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
                        "url": "https:\/\/monica.test\/storage\/avatars\/50a2d1ca-ec9b-440f-b77d-34cf6139b65b.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#e5e5cd"
                      }
                    },
                    "account": {
                      "id": 1
                    }
                  }
                },
                {
                  "relationship": {
                    "id": 11,
                    "name": "sibling"
                  },
                  "contact": {
                    "id": 8,
                    "object": "contact",
                    "hash_id": "h:OxEj52krPNbR7VpJK8",
                    "first_name": "Manley",
                    "last_name": null,
                    "nickname": "Georgette Quigley",
                    "complete_name": "Manley (Georgette Quigley)",
                    "initials": "MQ",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
                    "information": {
                      "birthdate": {
                        "is_age_based": true,
                        "is_year_unknown": false,
                        "date": "1959-01-01T00:00:00Z"
                      },
                      "deceased_date": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                      },
                      "avatar": {
                        "url": "https:\/\/monica.test\/storage\/avatars\/97b49ef2-a17b-463b-a545-35663bdd924d.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#e5e5cd"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/8",
                    "account": {
                      "id": 1
                    }
                  }
                },
                {
                  "relationship": {
                    "id": 15,
                    "name": "stepparent"
                  },
                  "contact": {
                    "id": 10,
                    "object": "contact",
                    "hash_id": "h:a4OXL3BrZXbA5Kg9lD",
                    "first_name": "Larry",
                    "last_name": "Wisozk",
                    "nickname": "Prof. Hoyt Hamill DDS",
                    "complete_name": "Larry Wisozk (Prof. Hoyt Hamill DDS)",
                    "initials": "LWHHD",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
                    "information": {
                      "birthdate": {
                        "is_age_based": true,
                        "is_year_unknown": false,
                        "date": "1986-01-01T00:00:00Z"
                      },
                      "deceased_date": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                      },
                      "avatar": {
                        "url": "https:\/\/monica.test\/storage\/avatars\/c933d535-6172-4866-8616-2858f9442918.jpg?1580940165",
                        "source": "default",
                        "default_avatar_color": "#bd5067"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/10",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "friend": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 13,
                    "name": "bestfriend"
                  },
                  "contact": {
                    "id": 9,
                    "object": "contact",
                    "hash_id": "h:Q67vO3nqdjW2Z80lJj",
                    "first_name": "Elwin",
                    "last_name": "Turcotte",
                    "nickname": null,
                    "complete_name": "Elwin Turcotte",
                    "initials": "ET",
                    "gender": "Woman",
                    "gender_type": "F",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
                    "information": {
                      "birthdate": {
                        "is_age_based": false,
                        "is_year_unknown": false,
                        "date": "1982-12-22T00:00:00Z"
                      },
                      "deceased_date": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                      },
                      "avatar": {
                        "url": "https:\/\/monica.test\/storage\/avatars\/4f4410e0-d24b-4fe9-bef5-df02be6455f6.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#93521e"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/9",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "work": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 7,
                    "name": "mentor"
                  },
                  "contact": {
                    "id": 6,
                    "object": "contact",
                    "hash_id": "h:j9ePOdJb01WB6EN1Rl",
                    "first_name": "Ford",
                    "last_name": "Abbott",
                    "nickname": "Arthur Waelchi Jr.",
                    "complete_name": "Ford Abbott (Arthur Waelchi Jr.)",
                    "initials": "FAWJ",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
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
                        "url": "https:\/\/monica.test\/storage\/avatars\/f7e6f20e-8133-487d-be7d-c77290708f7a.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#93521e"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/6",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            }
          },
          "dates": {
            "birthdate": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            }
          },
          "career": {
            "job": null,
            "company": null
          },
          "avatar": {
            "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
            "source": "default",
            "default_avatar_color": "#b3d5fe"
          },
          "food_preferences": null,
          "how_you_met": {
            "general_information": null,
            "first_met_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "first_met_through_contact": {
              "id": 14,
              "object": "contact",
              "hash_id": "h:M0456darjZr9ozJVnX",
              "first_name": "Fabian",
              "last_name": null,
              "nickname": "Vincenzo Schimmel",
              "complete_name": "Fabian (Vincenzo Schimmel)",
              "initials": "FS",
              "gender": "Rather not say",
              "gender_type": "O",
              "is_partial": false,
              "is_dead": false,
              "is_me": false,
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
                  "url": "https:\/\/monica.test\/storage\/avatars\/669b3ebc-62f4-4037-a6b8-739de33decd3.jpg?1580940166",
                  "source": "default",
                  "default_avatar_color": "#fdb660"
                }
              },
              "url": "https:\/\/monica.test\/api\/contacts\/14",
              "account": {
                "id": 1
              }
            }
          }
        },
        "addresses": [
          {
            "id": 1,
            "object": "address",
            "name": "ea",
            "street": null,
            "city": "Lake Shaniyashire",
            "province": "Pennsylvania",
            "postal_code": null,
            "latitude": null,
            "longitude": null,
            "country": {
              "id": "CC",
              "object": "country",
              "name": "Cocos (Keeling) Islands",
              "iso": "CC"
            },
            "url": "https:\/\/monica.test\/api\/addresses\/1",
            "account": {
              "id": 1
            },
            "contact": {
              "id": 5,
              "object": "contact",
              "hash_id": "h:GK7L1M6q8vWzRDN3we",
              "first_name": "Tyrel",
              "last_name": "Schamberger",
              "nickname": null,
              "complete_name": "Tyrel Schamberger",
              "initials": "TS",
              "gender": "Woman",
              "gender_type": "F",
              "is_partial": false,
              "is_dead": false,
              "is_me": false,
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
                  "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
                  "source": "default",
                  "default_avatar_color": "#b3d5fe"
                }
              },
              "url": "https:\/\/monica.test\/api\/contacts\/5",
              "account": {
                "id": 1
              }
            },
            "created_at": "2020-02-05T22:02:45Z",
            "updated_at": "2020-02-05T22:02:45Z"
          }
        ],
        "tags": [
          {
            "id": 1,
            "object": "tag",
            "name": "nisi",
            "name_slug": "nisi",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 2,
            "object": "tag",
            "name": "repudiandae",
            "name_slug": "repudiandae",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 3,
            "object": "tag",
            "name": "eum",
            "name_slug": "eum",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 4,
            "object": "tag",
            "name": "deleniti",
            "name_slug": "deleniti",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 5,
            "object": "tag",
            "name": "voluptatum",
            "name_slug": "voluptatum",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 6,
            "object": "tag",
            "name": "enim",
            "name_slug": "enim",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 7,
            "object": "tag",
            "name": "assumenda",
            "name_slug": "assumenda",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 8,
            "object": "tag",
            "name": "alias",
            "name_slug": "alias",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 9,
            "object": "tag",
            "name": "ratione",
            "name_slug": "ratione",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 10,
            "object": "tag",
            "name": "non",
            "name_slug": "non",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          }
        ],
        "statistics": {
          "number_of_calls": 0,
          "number_of_notes": 5,
          "number_of_activities": 9,
          "number_of_reminders": 0,
          "number_of_tasks": 0,
          "number_of_gifts": 0,
          "number_of_debts": 0
        },
        "url": "https:\/\/monica.test\/api\/contacts\/5",
        "account": {
          "id": 1
        },
        "created_at": "2020-02-05T22:02:44Z",
        "updated_at": "2020-02-05T22:02:45Z"
      },
      {
        "id": 9,
        "object": "contact",
        "hash_id": "h:Q67vO3nqdjW2Z80lJj",
        "first_name": "Elwin",
        "last_name": "Turcotte",
        "nickname": null,
        "complete_name": "Elwin Turcotte",
        "description": null,
        "gender": "Woman",
        "gender_type": "F",
        "is_starred": false,
        "is_partial": false,
        "is_active": true,
        "is_dead": false,
        "is_me": false,
        "last_called": null,
        "last_activity_together": null,
        "stay_in_touch_frequency": null,
        "stay_in_touch_trigger_date": null,
        "information": {
          "relationships": {
            "love": {
              "total": 0,
              "contacts": []
            },
            "family": {
              "total": 0,
              "contacts": []
            },
            "friend": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 14,
                    "name": "bestfriend"
                  },
                  "contact": {
                    "id": 5,
                    "object": "contact",
                    "hash_id": "h:GK7L1M6q8vWzRDN3we",
                    "first_name": "Tyrel",
                    "last_name": "Schamberger",
                    "nickname": null,
                    "complete_name": "Tyrel Schamberger",
                    "initials": "TS",
                    "gender": "Woman",
                    "gender_type": "F",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
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
                        "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#b3d5fe"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/5",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "work": {
              "total": 0,
              "contacts": []
            }
          },
          "dates": {
            "birthdate": {
              "is_age_based": false,
              "is_year_unknown": false,
              "date": "1982-12-22T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            }
          },
          "career": {
            "job": null,
            "company": null
          },
          "avatar": {
            "url": "https:\/\/monica.test\/storage\/avatars\/4f4410e0-d24b-4fe9-bef5-df02be6455f6.jpg?1580940164",
            "source": "default",
            "default_avatar_color": "#93521e"
          },
          "food_preferences": null,
          "how_you_met": {
            "general_information": null,
            "first_met_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "first_met_through_contact": null
          }
        },
        "addresses": [],
        "tags": [],
        "statistics": {
          "number_of_calls": 0,
          "number_of_notes": 0,
          "number_of_activities": 0,
          "number_of_reminders": 0,
          "number_of_tasks": 0,
          "number_of_gifts": 0,
          "number_of_debts": 0
        },
        "url": "https:\/\/monica.test\/api\/contacts\/9",
        "account": {
          "id": 1
        },
        "created_at": "2020-02-05T22:02:44Z",
        "updated_at": "2020-02-05T22:02:45Z"
      },
      {
        "id": 10,
        "object": "contact",
        "hash_id": "h:a4OXL3BrZXbA5Kg9lD",
        "first_name": "Larry",
        "last_name": "Wisozk",
        "nickname": "Prof. Hoyt Hamill DDS",
        "complete_name": "Larry Wisozk (Prof. Hoyt Hamill DDS)",
        "description": null,
        "gender": "Rather not say",
        "gender_type": "O",
        "is_starred": false,
        "is_partial": false,
        "is_active": true,
        "is_dead": false,
        "is_me": false,
        "last_called": null,
        "last_activity_together": null,
        "stay_in_touch_frequency": null,
        "stay_in_touch_trigger_date": null,
        "information": {
          "relationships": {
            "love": {
              "total": 0,
              "contacts": []
            },
            "family": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 16,
                    "name": "stepchild"
                  },
                  "contact": {
                    "id": 5,
                    "object": "contact",
                    "hash_id": "h:GK7L1M6q8vWzRDN3we",
                    "first_name": "Tyrel",
                    "last_name": "Schamberger",
                    "nickname": null,
                    "complete_name": "Tyrel Schamberger",
                    "initials": "TS",
                    "gender": "Woman",
                    "gender_type": "F",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
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
                        "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#b3d5fe"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/5",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "friend": {
              "total": 0,
              "contacts": []
            },
            "work": {
              "total": 0,
              "contacts": []
            }
          },
          "dates": {
            "birthdate": {
              "is_age_based": true,
              "is_year_unknown": false,
              "date": "1986-01-01T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            }
          },
          "career": {
            "job": null,
            "company": null
          },
          "avatar": {
            "url": "https:\/\/monica.test\/storage\/avatars\/c933d535-6172-4866-8616-2858f9442918.jpg?1580940165",
            "source": "default",
            "default_avatar_color": "#bd5067"
          },
          "food_preferences": null,
          "how_you_met": {
            "general_information": null,
            "first_met_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "first_met_through_contact": null
          }
        },
        "addresses": [],
        "tags": [],
        "statistics": {
          "number_of_calls": 0,
          "number_of_notes": 0,
          "number_of_activities": 0,
          "number_of_reminders": 0,
          "number_of_tasks": 0,
          "number_of_gifts": 0,
          "number_of_debts": 0
        },
        "url": "https:\/\/monica.test\/api\/contacts\/10",
        "account": {
          "id": 1
        },
        "created_at": "2020-02-05T22:02:45Z",
        "updated_at": "2020-02-05T22:02:45Z"
      }
    ],
    "account": {
      "id": 1
    },
    "created_at": "2020-02-13T15:50:07Z",
    "updated_at": "2020-02-13T22:27:42Z"
  }
}</code></pre>

## Create a group

<span class="url">
  POST /groups/
</span>

### Input

If a field is not required, you can send the `null` value as the content of the field.

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the group. |

### Example

<pre><code class="json">{
  "name": "best friends bff"
}</code></pre>

### Response

The API call returns a group object if the call succeeds.

<pre><code class="json">{
  "data": {
    "id": 4,
    "object": "group",
    "name": "best friends bff",
    "contacts": [],
    "account": {
      "id": 1
    },
    "created_at": "2020-02-13T23:53:15Z",
    "updated_at": "2020-02-13T23:53:15Z"
  }
}</code></pre>

## Update a group

<span class="url">
  PUT /groups/:id
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| name | string | <strong>Required</strong>. The name of the group. |

### Example

<pre><code class="json">{
  "name":"loving friends"
}</code></pre>

### Response

<pre><code class="json">{
  "data": {
    "id": 4,
    "object": "group",
    "name": "best friends bff",
    "contacts": [],
    "account": {
      "id": 1
    },
    "created_at": "2020-02-13T23:53:15Z",
    "updated_at": "2020-02-13T23:53:15Z"
  }
}</code></pre>

## Delete a group

<span class="url">
  DELETE /groups/:id
</span>

### Response

The response sends back the id that was just deleted.

<pre><code class="json">{
  "deleted": true,
  "id": 31
}</code></pre>

## Attach contact(s) to a group

<span class="url">
  POST /groups/:id/attach
</span>

### Input

| Name | Type | Description |
| ---- | ----------- | ----------- |
| contacts | array | <strong>Required</strong>. The ids (as integer) of the contacts to add. |

### Example

<pre><code class="json">{
  "contacts": [1,2,3]
}</code></pre>

### Response

<pre><code class="json">{
  "data": {
    "id": 1,
    "object": "group",
    "name": "loving friends",
    "contacts": [
      {
        "id": 4,
        "object": "contact",
        "hash_id": "h:w7MAYJlq1nbR6BKj2p",
        "first_name": "Maximillian",
        "last_name": null,
        "nickname": null,
        "complete_name": "Maximillian",
        "description": null,
        "gender": "Woman",
        "gender_type": "F",
        "is_starred": false,
        "is_partial": false,
        "is_active": true,
        "is_dead": false,
        "is_me": false,
        "last_called": null,
        "last_activity_together": null,
        "stay_in_touch_frequency": null,
        "stay_in_touch_trigger_date": null,
        "information": {
          "relationships": {
            "love": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 6,
                    "name": "ex_husband"
                  },
                  "contact": {
                    "id": 1,
                    "object": "contact",
                    "hash_id": "h:Y5LOkAdWNDqgVomKPv",
                    "first_name": "Celine",
                    "last_name": "Skiles",
                    "nickname": "Kendall Jakubowski",
                    "complete_name": "Celine Skiles (Kendall Jakubowski)",
                    "initials": "CSJ",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
                    "information": {
                      "birthdate": {
                        "is_age_based": false,
                        "is_year_unknown": false,
                        "date": "1996-02-29T00:00:00Z"
                      },
                      "deceased_date": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                      },
                      "avatar": {
                        "url": "https:\/\/monica.test\/storage\/avatars\/88ce1570-3d8a-47a6-88d5-5e610dcd2bdb.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#709512"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/1",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "family": {
              "total": 0,
              "contacts": []
            },
            "friend": {
              "total": 0,
              "contacts": []
            },
            "work": {
              "total": 0,
              "contacts": []
            }
          },
          "dates": {
            "birthdate": {
              "is_age_based": false,
              "is_year_unknown": false,
              "date": "2015-12-03T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            }
          },
          "career": {
            "job": null,
            "company": null
          },
          "avatar": {
            "url": "https:\/\/monica.test\/storage\/avatars\/5837b106-b878-4a29-9345-24fe775c4016.jpg?1580940164",
            "source": "default",
            "default_avatar_color": "#ff9807"
          },
          "food_preferences": null,
          "how_you_met": {
            "general_information": null,
            "first_met_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "first_met_through_contact": null
          }
        },
        "addresses": [],
        "tags": [],
        "statistics": {
          "number_of_calls": 0,
          "number_of_notes": 0,
          "number_of_activities": 0,
          "number_of_reminders": 0,
          "number_of_tasks": 0,
          "number_of_gifts": 0,
          "number_of_debts": 0
        },
        "url": "https:\/\/monica.test\/api\/contacts\/4",
        "account": {
          "id": 1
        },
        "created_at": "2020-02-05T22:02:44Z",
        "updated_at": "2020-02-05T22:02:44Z"
      },
      {
        "id": 5,
        "object": "contact",
        "hash_id": "h:GK7L1M6q8vWzRDN3we",
        "first_name": "Tyrel",
        "last_name": "Schamberger",
        "nickname": null,
        "complete_name": "Tyrel Schamberger",
        "description": null,
        "gender": "Woman",
        "gender_type": "F",
        "is_starred": false,
        "is_partial": false,
        "is_active": true,
        "is_dead": false,
        "is_me": false,
        "last_called": null,
        "last_activity_together": "2019-12-14T00:00:00.000000Z",
        "stay_in_touch_frequency": null,
        "stay_in_touch_trigger_date": null,
        "information": {
          "relationships": {
            "love": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 17,
                    "name": "lover"
                  },
                  "contact": {
                    "id": 11,
                    "object": "contact",
                    "hash_id": "h:3xK6JaeqVJqGR2BlVO",
                    "first_name": "Cydney",
                    "last_name": "Crona",
                    "nickname": null,
                    "complete_name": "Cydney Crona",
                    "initials": "CC",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
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
                        "url": "https:\/\/monica.test\/storage\/avatars\/02edd08d-f75d-47a3-b3ac-40b0b1f24986.jpg?1580940165",
                        "source": "default",
                        "default_avatar_color": "#93521e"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/11",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "family": {
              "total": 3,
              "contacts": [
                {
                  "relationship": {
                    "id": 9,
                    "name": "child"
                  },
                  "contact": {
                    "id": 7,
                    "object": "contact",
                    "hash_id": "h:GK7L1M6q8vWzRDN3we",
                    "first_name": "Hilda",
                    "last_name": "Hagenes",
                    "nickname": "Wilburn Considine",
                    "complete_name": "Hilda Hagenes (Wilburn Considine)",
                    "initials": "HHC",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": true,
                    "is_dead": false,
                    "is_me": false,
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
                        "url": "https:\/\/monica.test\/storage\/avatars\/50a2d1ca-ec9b-440f-b77d-34cf6139b65b.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#e5e5cd"
                      }
                    },
                    "account": {
                      "id": 1
                    }
                  }
                },
                {
                  "relationship": {
                    "id": 11,
                    "name": "sibling"
                  },
                  "contact": {
                    "id": 8,
                    "object": "contact",
                    "hash_id": "h:OxEj52krPNbR7VpJK8",
                    "first_name": "Manley",
                    "last_name": null,
                    "nickname": "Georgette Quigley",
                    "complete_name": "Manley (Georgette Quigley)",
                    "initials": "MQ",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
                    "information": {
                      "birthdate": {
                        "is_age_based": true,
                        "is_year_unknown": false,
                        "date": "1959-01-01T00:00:00Z"
                      },
                      "deceased_date": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                      },
                      "avatar": {
                        "url": "https:\/\/monica.test\/storage\/avatars\/97b49ef2-a17b-463b-a545-35663bdd924d.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#e5e5cd"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/8",
                    "account": {
                      "id": 1
                    }
                  }
                },
                {
                  "relationship": {
                    "id": 15,
                    "name": "stepparent"
                  },
                  "contact": {
                    "id": 10,
                    "object": "contact",
                    "hash_id": "h:a4OXL3BrZXbA5Kg9lD",
                    "first_name": "Larry",
                    "last_name": "Wisozk",
                    "nickname": "Prof. Hoyt Hamill DDS",
                    "complete_name": "Larry Wisozk (Prof. Hoyt Hamill DDS)",
                    "initials": "LWHHD",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
                    "information": {
                      "birthdate": {
                        "is_age_based": true,
                        "is_year_unknown": false,
                        "date": "1986-01-01T00:00:00Z"
                      },
                      "deceased_date": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                      },
                      "avatar": {
                        "url": "https:\/\/monica.test\/storage\/avatars\/c933d535-6172-4866-8616-2858f9442918.jpg?1580940165",
                        "source": "default",
                        "default_avatar_color": "#bd5067"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/10",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "friend": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 13,
                    "name": "bestfriend"
                  },
                  "contact": {
                    "id": 9,
                    "object": "contact",
                    "hash_id": "h:Q67vO3nqdjW2Z80lJj",
                    "first_name": "Elwin",
                    "last_name": "Turcotte",
                    "nickname": null,
                    "complete_name": "Elwin Turcotte",
                    "initials": "ET",
                    "gender": "Woman",
                    "gender_type": "F",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
                    "information": {
                      "birthdate": {
                        "is_age_based": false,
                        "is_year_unknown": false,
                        "date": "1982-12-22T00:00:00Z"
                      },
                      "deceased_date": {
                        "is_age_based": null,
                        "is_year_unknown": null,
                        "date": null
                      },
                      "avatar": {
                        "url": "https:\/\/monica.test\/storage\/avatars\/4f4410e0-d24b-4fe9-bef5-df02be6455f6.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#93521e"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/9",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "work": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 7,
                    "name": "mentor"
                  },
                  "contact": {
                    "id": 6,
                    "object": "contact",
                    "hash_id": "h:j9ePOdJb01WB6EN1Rl",
                    "first_name": "Ford",
                    "last_name": "Abbott",
                    "nickname": "Arthur Waelchi Jr.",
                    "complete_name": "Ford Abbott (Arthur Waelchi Jr.)",
                    "initials": "FAWJ",
                    "gender": "Rather not say",
                    "gender_type": "O",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
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
                        "url": "https:\/\/monica.test\/storage\/avatars\/f7e6f20e-8133-487d-be7d-c77290708f7a.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#93521e"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/6",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            }
          },
          "dates": {
            "birthdate": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            }
          },
          "career": {
            "job": null,
            "company": null
          },
          "avatar": {
            "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
            "source": "default",
            "default_avatar_color": "#b3d5fe"
          },
          "food_preferences": null,
          "how_you_met": {
            "general_information": null,
            "first_met_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "first_met_through_contact": {
              "id": 14,
              "object": "contact",
              "hash_id": "h:M0456darjZr9ozJVnX",
              "first_name": "Fabian",
              "last_name": null,
              "nickname": "Vincenzo Schimmel",
              "complete_name": "Fabian (Vincenzo Schimmel)",
              "initials": "FS",
              "gender": "Rather not say",
              "gender_type": "O",
              "is_partial": false,
              "is_dead": false,
              "is_me": false,
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
                  "url": "https:\/\/monica.test\/storage\/avatars\/669b3ebc-62f4-4037-a6b8-739de33decd3.jpg?1580940166",
                  "source": "default",
                  "default_avatar_color": "#fdb660"
                }
              },
              "url": "https:\/\/monica.test\/api\/contacts\/14",
              "account": {
                "id": 1
              }
            }
          }
        },
        "addresses": [
          {
            "id": 1,
            "object": "address",
            "name": "ea",
            "street": null,
            "city": "Lake Shaniyashire",
            "province": "Pennsylvania",
            "postal_code": null,
            "latitude": null,
            "longitude": null,
            "country": {
              "id": "CC",
              "object": "country",
              "name": "Cocos (Keeling) Islands",
              "iso": "CC"
            },
            "url": "https:\/\/monica.test\/api\/addresses\/1",
            "account": {
              "id": 1
            },
            "contact": {
              "id": 5,
              "object": "contact",
              "hash_id": "h:GK7L1M6q8vWzRDN3we",
              "first_name": "Tyrel",
              "last_name": "Schamberger",
              "nickname": null,
              "complete_name": "Tyrel Schamberger",
              "initials": "TS",
              "gender": "Woman",
              "gender_type": "F",
              "is_partial": false,
              "is_dead": false,
              "is_me": false,
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
                  "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
                  "source": "default",
                  "default_avatar_color": "#b3d5fe"
                }
              },
              "url": "https:\/\/monica.test\/api\/contacts\/5",
              "account": {
                "id": 1
              }
            },
            "created_at": "2020-02-05T22:02:45Z",
            "updated_at": "2020-02-05T22:02:45Z"
          }
        ],
        "tags": [
          {
            "id": 1,
            "object": "tag",
            "name": "nisi",
            "name_slug": "nisi",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 2,
            "object": "tag",
            "name": "repudiandae",
            "name_slug": "repudiandae",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 3,
            "object": "tag",
            "name": "eum",
            "name_slug": "eum",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 4,
            "object": "tag",
            "name": "deleniti",
            "name_slug": "deleniti",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 5,
            "object": "tag",
            "name": "voluptatum",
            "name_slug": "voluptatum",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 6,
            "object": "tag",
            "name": "enim",
            "name_slug": "enim",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 7,
            "object": "tag",
            "name": "assumenda",
            "name_slug": "assumenda",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 8,
            "object": "tag",
            "name": "alias",
            "name_slug": "alias",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 9,
            "object": "tag",
            "name": "ratione",
            "name_slug": "ratione",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          },
          {
            "id": 10,
            "object": "tag",
            "name": "non",
            "name_slug": "non",
            "account": {
              "id": 1
            },
            "created_at": "2020-02-05T22:02:44Z",
            "updated_at": "2020-02-05T22:02:44Z"
          }
        ],
        "statistics": {
          "number_of_calls": 0,
          "number_of_notes": 5,
          "number_of_activities": 9,
          "number_of_reminders": 0,
          "number_of_tasks": 0,
          "number_of_gifts": 0,
          "number_of_debts": 0
        },
        "url": "https:\/\/monica.test\/api\/contacts\/5",
        "account": {
          "id": 1
        },
        "created_at": "2020-02-05T22:02:44Z",
        "updated_at": "2020-02-05T22:02:45Z"
      },
      {
        "id": 9,
        "object": "contact",
        "hash_id": "h:Q67vO3nqdjW2Z80lJj",
        "first_name": "Elwin",
        "last_name": "Turcotte",
        "nickname": null,
        "complete_name": "Elwin Turcotte",
        "description": null,
        "gender": "Woman",
        "gender_type": "F",
        "is_starred": false,
        "is_partial": false,
        "is_active": true,
        "is_dead": false,
        "is_me": false,
        "last_called": null,
        "last_activity_together": null,
        "stay_in_touch_frequency": null,
        "stay_in_touch_trigger_date": null,
        "information": {
          "relationships": {
            "love": {
              "total": 0,
              "contacts": []
            },
            "family": {
              "total": 0,
              "contacts": []
            },
            "friend": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 14,
                    "name": "bestfriend"
                  },
                  "contact": {
                    "id": 5,
                    "object": "contact",
                    "hash_id": "h:GK7L1M6q8vWzRDN3we",
                    "first_name": "Tyrel",
                    "last_name": "Schamberger",
                    "nickname": null,
                    "complete_name": "Tyrel Schamberger",
                    "initials": "TS",
                    "gender": "Woman",
                    "gender_type": "F",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
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
                        "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#b3d5fe"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/5",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "work": {
              "total": 0,
              "contacts": []
            }
          },
          "dates": {
            "birthdate": {
              "is_age_based": false,
              "is_year_unknown": false,
              "date": "1982-12-22T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            }
          },
          "career": {
            "job": null,
            "company": null
          },
          "avatar": {
            "url": "https:\/\/monica.test\/storage\/avatars\/4f4410e0-d24b-4fe9-bef5-df02be6455f6.jpg?1580940164",
            "source": "default",
            "default_avatar_color": "#93521e"
          },
          "food_preferences": null,
          "how_you_met": {
            "general_information": null,
            "first_met_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "first_met_through_contact": null
          }
        },
        "addresses": [],
        "tags": [],
        "statistics": {
          "number_of_calls": 0,
          "number_of_notes": 0,
          "number_of_activities": 0,
          "number_of_reminders": 0,
          "number_of_tasks": 0,
          "number_of_gifts": 0,
          "number_of_debts": 0
        },
        "url": "https:\/\/monica.test\/api\/contacts\/9",
        "account": {
          "id": 1
        },
        "created_at": "2020-02-05T22:02:44Z",
        "updated_at": "2020-02-05T22:02:45Z"
      },
      {
        "id": 10,
        "object": "contact",
        "hash_id": "h:a4OXL3BrZXbA5Kg9lD",
        "first_name": "Larry",
        "last_name": "Wisozk",
        "nickname": "Prof. Hoyt Hamill DDS",
        "complete_name": "Larry Wisozk (Prof. Hoyt Hamill DDS)",
        "description": null,
        "gender": "Rather not say",
        "gender_type": "O",
        "is_starred": false,
        "is_partial": false,
        "is_active": true,
        "is_dead": false,
        "is_me": false,
        "last_called": null,
        "last_activity_together": null,
        "stay_in_touch_frequency": null,
        "stay_in_touch_trigger_date": null,
        "information": {
          "relationships": {
            "love": {
              "total": 0,
              "contacts": []
            },
            "family": {
              "total": 1,
              "contacts": [
                {
                  "relationship": {
                    "id": 16,
                    "name": "stepchild"
                  },
                  "contact": {
                    "id": 5,
                    "object": "contact",
                    "hash_id": "h:GK7L1M6q8vWzRDN3we",
                    "first_name": "Tyrel",
                    "last_name": "Schamberger",
                    "nickname": null,
                    "complete_name": "Tyrel Schamberger",
                    "initials": "TS",
                    "gender": "Woman",
                    "gender_type": "F",
                    "is_partial": false,
                    "is_dead": false,
                    "is_me": false,
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
                        "url": "https:\/\/monica.test\/storage\/avatars\/3db57fb2-687b-41ef-8df5-71ae9e38fe86.jpg?1580940164",
                        "source": "default",
                        "default_avatar_color": "#b3d5fe"
                      }
                    },
                    "url": "https:\/\/monica.test\/api\/contacts\/5",
                    "account": {
                      "id": 1
                    }
                  }
                }
              ]
            },
            "friend": {
              "total": 0,
              "contacts": []
            },
            "work": {
              "total": 0,
              "contacts": []
            }
          },
          "dates": {
            "birthdate": {
              "is_age_based": true,
              "is_year_unknown": false,
              "date": "1986-01-01T00:00:00Z"
            },
            "deceased_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            }
          },
          "career": {
            "job": null,
            "company": null
          },
          "avatar": {
            "url": "https:\/\/monica.test\/storage\/avatars\/c933d535-6172-4866-8616-2858f9442918.jpg?1580940165",
            "source": "default",
            "default_avatar_color": "#bd5067"
          },
          "food_preferences": null,
          "how_you_met": {
            "general_information": null,
            "first_met_date": {
              "is_age_based": null,
              "is_year_unknown": null,
              "date": null
            },
            "first_met_through_contact": null
          }
        },
        "addresses": [],
        "tags": [],
        "statistics": {
          "number_of_calls": 0,
          "number_of_notes": 0,
          "number_of_activities": 0,
          "number_of_reminders": 0,
          "number_of_tasks": 0,
          "number_of_gifts": 0,
          "number_of_debts": 0
        },
        "url": "https:\/\/monica.test\/api\/contacts\/10",
        "account": {
          "id": 1
        },
        "created_at": "2020-02-05T22:02:45Z",
        "updated_at": "2020-02-05T22:02:45Z"
      }
    ],
    "account": {
      "id": 1
    },
    "created_at": "2020-02-13T15:50:07Z",
    "updated_at": "2020-02-13T22:27:42Z"
  }
}</code></pre>
