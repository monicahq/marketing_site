The most requested feature on Monica (since the last one) was the ability to
designate an existing contact as a significant other or a child. With 0.6.3,
this is now possible.

### How does it work

When you add a significant other or a kid, you now have access to two new
things:
* You can either create a partial contact, or a real contact when adding this
new person. A partial contact is the old way of doing things: those contacts
are not listed in the list of contacts, and you can't add specific reminders or
notes about them. A "real" contact will actually create a new contact entry for
this person, and you will be able to add their own children or significant
others to them.

![create complete contact](/img/posts/2017-08-19-add-contact.png)

* Instead of creating a new contact, you can simply link an existing contact to
be a kid or a significant other of this contact.

![create complete contact](/img/posts/2017-08-19-link-contact.png)

This change was the biggest change in the codebase so far, and the one that
took the most time. For the ones who host Monica themselves, be careful when
updating your instance - make sure you backup the database before upgrading.

### Other important changes in this release

* For the ones who like polygamy, you can have more than one significant other
per contact.
* New translations added: Italian, German. Thank you to the community for this.
* Add support for Markdown on the Notes and the Log calls. This will let you
use lists, for instance.
* We now support all the currencies in the world.
* A lot of bug fixes as well as some security bugfixes.
* We've started to use [Tachyons](http://tachyons.io/) as a new CSS framework.
This will gradually replace Bootstrap.

### Final words

Version 0.6.3 is already in production, and as always, you can install it on a
server that you own.

Enjoy!
