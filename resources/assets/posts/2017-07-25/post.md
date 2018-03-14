If you install Monica on a server that you own, chances are that you will want
to be aware when a new version is available. With Monica 0.5.0, this is exactly
what you get.

### How does this work

In short, your Monica instance will send a daily ping to
https://version.monicahq.com. The ping contains three information:

* a UUID: the unique, anonymous identifier of your instance.
* the current version of your instance
* the number of contacts in your instance.

The last information is used to know the size of the instances of the people who
download Monica. I need to know this information (and only this information) so
I can move forward with better knowledge of how people use Monica. Also, there
is no way to know who you are: the UUID is random, unique and anonymous.

The code of https://version.monicahq.com is open-source, stored
[on GitHub](https://github.com/monicahq/version) like everything we do.

In return of this call, you will get a JSON with:

* if a new version is available as a boolean,
* what is the latest version available,
* all the release notes for each release that has been made since the version of
the ping,
* the number of versions available since the version of the ping.

This information will be used in the UI. In the footer, a new link will appear
if a new version is available. If you click on this link, a popup will appear,
with the release notes of the new version.

![footer](/img/posts/2017-07-25-v0.5.0-footer.png)

### How to disable this feature

Every feature that changes how Monica fundamentaly works can be disabled, and
this feature is no different. If you want to disable sending any information
to https://version.monicahq.com, simply add the following to your `.env` file:

* `CHECK_VERSION=false`

And that's it. No information will ever leave your server. The drawback is that
you won't be able to be automatically alerted when a new release is available.

### Search your contacts

You can now search your contacts with a new search box in the header. The search
will look at the following information in your contacts:

* First and last name
* Email
* Street
* City
* Postal code
* Province
* Food preferencies
* Job
* Company

Searches should be pretty fast too. We are super excited about this feature.

(![footer](/img/posts/2017-07-25-v0.5.0-search.png)

### Final words

Version 0.5.0 is already in production, and as always, you can install it on a
server that you own.

Enjoy!
