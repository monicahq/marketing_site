I receive emails asking for a mobile application almost every single day since the public launch in June 2017.

I understand why. A mobile app for Monica makes so much sense. You want to have the information immediately available wherever you are, at the right moment. Not when you are at home in front of your desktop.

We started working on the mobile application 6 months ago. It’s a long time. However, I don't think most people realize the work that needs to be done to ship a mobile application. Especially when 99.9% of the code is made by one person (the awesome @mokto). Who has a daily job. Who is not paid to work on it.

In those months, we've put a lot of efforts to create all the things the mobile application would need. The API has changed a lot to allow some features. We've stabilized the backend to make sure it will work flawlessly. We've also spent a lot of time setting up everything the right way on the mobile app repository on GitHub, that will allow us to move faster in the future (here we are talking about a great CI, unit tests, auto publishing in the stores,...).

And six months later we are proud to announce that the first version of the mobile application is available [on iOS](https://itunes.apple.com/ca/app/monica-personal-crm/id1339447754?mt=8) and [Android](https://play.google.com/store/apps/details?id=com.monicahq.app).

![image](/img/posts/2018-05-28-mobile-app.png)

There is one caveat though: *this first version is read-only*. That means you can't add or edit something. We want to have a great application, but we want to move slowly and make sure it's working well. As soon as we are confident this version works for everyone, we'll add features that will let you completely manipulate your data as you want (hint: we’ve already started working on a new version).

Apart from this, this mobile app has everything you come to expect from us:

* A simple and friendly user interface.
* You can connect to our hosted version of Monica, or login to your own instance.
* [The code is open source](https://github.com/monicahq/chandler). You can read the code, submit issues, contribute to the code. Everything we do is open and transparent, and we believe that only collaboration can lead to the best product.
* Open source means you can *build and run the mobile application without having to go through the official Apple and Google stores* - which is kind of amazing, in my opinion.
* We don't display ads, we don't resell your data.
* The app is free. No strings attached.

### How can you help?

We need people who want to test the application and [tell us if there are bugs](https://github.com/monicahq/chandler/issues), basically. Also, we'd like your opinion on what we should build next, or how we could make the app better (in terms of user experience or in terms of layout).

### What's next?

In the coming days we'll improve the documentation on the [official GitHub repository](https://github.com/monicahq/chandler), in order to make it super easy for developers who want to help to join the project.

In the coming months we'll add the possibility to modify your data within the mobile application. The end goal is that everything you can do on the web, you can do on mobile (with the exception of exporting your data, because how would you store a file on iOS for instance...). This is why we are now building features in the API first, then in the UI (both web and mobile).

As a conclusion, I'd say that I'm very proud of what we've accomplished so far, and even prouder by the community who help us every single day. Your feedback and your help make Monica possible.

Download the apps [on iOS](https://itunes.apple.com/ca/app/monica-personal-crm/id1339447754?mt=8) or [Android](https://play.google.com/store/apps/details?id=com.monicahq.app).
