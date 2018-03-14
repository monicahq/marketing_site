Some people have one physical address and one Twitter account. Others have multiple addresses, no Twitter at all and one Quora account. It's hard to take all use cases into account, but we want to let users organize their contacts the way they want it.

A physical address, a Twitter account,... we call all these ways of contacting someone a **contact field**.

Starting now, you can add as many contact fields per contact as you want. Previously you could only have 5 pre-defined fields.

![image](/img/posts/2017-11-28-inline.gif)

Each contact field has a type: it can be an email, a Facebook account, a fax number. Each account comes with 6 generic contact field types:
* Email
* Phone number
* Facebook
* Twitter
* Whatsapp
* Telegram

You can add or remove contact field types on your account at your leisure, and set their names as you want, in the new [Personalization tab](https://app.monicahq.com/settings/personalization) under Settings.

Each contact field type can also have a protocol associated with it. A protocol is what the browser should do when you click on a contact field. For instance, for a phone number, the `tel:` protocol will tell the browser to launch the software that you use on your computer to make phone calls.

![image](/img/posts/2017-11-28-personalization.png)

[The API](https://monicahq.com/api/overview) has been updated to support those two new concepts (contact fields and contact field types).

We've also reordered a little bit the sidebar when viewing a contact. Information about the partners and children are now at the top of the sidebar, as I believe this is a much more important information that knowing the address of the contact for instance.

These changes are in the version 1.1.0 which is already in production, and as always, you can install it on a server that you own.

Enjoy!
