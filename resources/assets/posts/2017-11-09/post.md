Monica is finally ready for v1.0.0.

We try to follow the [SemVer approach](http://semver.org/) here at Monica.
Changing a major version number indicates major API changes. This is why I'm
really excited to announce the release of v1.0.0. It adds a lot of features and
will serve as a foundation for all the great things I'm planning to ship in the
coming months. Let's talk first about the features, then the technical changes
that are introduced in this version.

### API

Monica finally has an API. Not everything is available right now through the
API, but most of the data about contacts are. A future version will bring all
the Settings and Account data as well. My goal is that everything is available
through the API. We do support Oauth 2.0 and personal tokens. Under the hood,
Laravel Passport deals with everything Oauth.

Nothing can help developers jump in a project more than a good documentation.
This is why we've also released a [new documentation
portal](https://monicahq.com/api/overview) that tries to be as exhaustive as
possible. On each page, we also indicate the date of last update, so you know
how fresh the documentation is.

![API](/img/posts/2017-11-09-api.png)

It's going to be up to the developers now to be creative in using Monica's data
and do great things with it. On our end, we are working on the first official
mobile application for Monica, both for Apple and Android, but you will have
more details on this later this year.

### How you've met someone (aka Introductions)

Monica's purpose is to help everyone remember important information about the
ones you care about, privately and for your eyes only. Sometimes, when you do
have a lot of contacts, it's hard to remember how and where you've met them.
This is why you can indicate how you've met someone or if you've been
introduced by another contact. You can even ask to be reminded of the
anniversary of this encounter if you want.

![introductions](/img/posts/2017-11-09-introductions.png)

### Mark a contact as deceased

Sometimes life is unfair and people die. We've added the possibility to mark a
contact as deceased, and indicate an optional date for this sad event.
Moreover, you can be reminded of this event if you choose to. When a contact is
marked as deceased, there is a small ⚰ next to the name of the contact
throughout the application.

![mark a contact as deceased](/img/posts/2017-11-09-deceased.png)

### Speed up the Add contacts screen

Our goal is to help you achieve what you want as fast as possible. This is why
we've added a small button on the Add contact screen to let you save the
current contact and add another one right after this one. It'll save you
precious seconds.

### Big changes under the hood

For v1.0.0, we've upgraded the codebase to Laravel 5.5, in order to take
advantage of the great [Resources
functionality](https://laravel.com/docs/5.5/eloquent-resources) introduced in
this version for our API.

Thanks to [@mauricew](https://github.com/monicahq/monica/pull/597), we've also
replaced the previous front end build system based on Gulp and Bower with mix,
the default build system that ships with Laravel now. We've been able to remove
lots of dependencies, clean up the code and more importantly, make sure that
there won't be any conflicts of CSS and JS files in our pull requests in the
future.

### Final words

Version 1.0.0 is already in production, and as always, you can install it on a
server that you own.

v1.0.0 has litteraly thousands of new lines of codes. It's the product of an
healthy community. On a personal level, I feel really blessed that Monica helps
so many people. Your continuous feedback helps me tremendously to continue
working as hard as I can on this product. The upcoming months will be very
busy: lots of new features, a mobile application and other surprises. The
future will be bright for our community.

Enjoy!
