Version 2.10.0 is our 51th release. It contains a significant amount of new features and is the result of a month of work from 10 developers, not counting all the translators who are nice enough to translate Monica in 11 languages. Here are some highlights of the changes.

**Tag autocompletion**

Tags are a great way to categorize people. With 2.10.0, finally, we support tag autocompletion. Go to a contact and edit the tags in the header - as you type, a menu will appear showing your tags. A small change for Monica - a big help for users.
A technical note: this feature has been entirely developed with VueJS, without other dependancy. We are moving away from JQuery and over the course of the next months, we'll sunset JQuery entirely.

![image](/img/posts/2018-11-26-tags.gif)

**New header**

Speaking of the header, as we were changing how tags work, we've taken this opportunity to redesign the header of a contact profile. This will let us add much more useful information in the future. It's also easier to read.

![image](/img/posts/2018-11-26-new-header.png)

**Documents**

You can now attach documents to a contact. There is a configurable limit per instance on how much storage an account can use. On our hosted version, the limit is 512Mb per paid account (storage is cheap - but not when you host ten of thousands of accounts).

There is also a new tab in your Settings page called Storage that shows your current account usage and your account limit.

![image](/img/posts/2018-11-26-documents.gif)

**Archive a contact**

Sometimes you want to add a contact but not have him appear on the contact list. Archiving a contact lets you do that. You can access this feature from the bottom left of the contact profile.

**Other improvements**

- We've fixed a lot of bugs.
- We've improved how we support S3 to store assets (images, documents,...)
- We've dramatically increased our test coverage. 6 months ago we were at 25% test coverage. With our continuous effort of increasing them, we are now at 65%. This gives us much more confidence that we don't break things as we move forward.
- We now automatically set the currency and the timezone for new users, based on their location.
- We've rewritten how we import/export vCard.
- We also now parse FN properties correctly when we import vCards.

Have fun with version 2.10!