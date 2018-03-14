Note: this is a technical post.

After launching Monica on Hacker News, I received a lot of questions about why
I chose to write the tool with PHP and Laravel in particular.
I was actually surprised to receive so many questions about this topic because
I consider that a language does not matter - only counts what you do with it.

In this post I'll share why I chose PHP and Laravel and the difficulties I had
to overcome to build the first version of the product. This post is not meant
to start a war between languages.

PHP has an interesting history. A lot of great web developers, who probably do
not use PHP anymore, have learned the basics of programing with it. It was so
simple to use and get started with, and while it wasn't an elegant language, it
paved the way for making a career in web development. Then over time, PHP
became less loved, to the point where it was almost shameful to use PHP or even
say in meetups that your company was using it. Other languages, arguably more
elegant, gain a lot of popularity (Python, Ruby) thanks to wonderful frameworks
built upon them. At the same time, new PHP frameworks appeared. Symfony for
instance. But Symfony was still hard to learn and use. And then PHP died. Or so
that's what people said, ignoring apparently the fact that a **lot** of
business was still using it and loving it. Then PHP 5.5 was created, followed
by PHP 7, and a new framework with a weird name appeared, Laravel. And things
changed entirely in people's mindset. PHP is still not as elegant as other
popular languages, but things got a lot better. It became also fast.

But regardless of this, PHP is still the language people love to hate,
especially on Hacker News. They say PHP is not scalable. This is probably why
Facebook and Mailchimp, amongst other big names, use PHP today, at great
scale.

### Why this context in mind - why did I chose PHP and Laravel?

* PHP is simple to learn, and simple to use.
* There are a lot of PHP developers out there, and if people want to work with
me on the project, there is a potential larger pool of PHP developers, at least
from where I live, than Ruby or Python developers. Also, there are a lot of
people on GitHub using PHP, and if I wanted this open source project to gain
any traction, I had to write it in a language where people with different
coding level skills could contribute easily.
* The most important thing to consider when choosing a technology stack for a
new project, is how easy it'll be to maintain it on the long run. PHP is
simple. It's easy to debug (although it could be better) and easy to scale
(although it's not my concern right now at all).
* Laravel is by far the best PHP framework I've ever used. It makes it so easy
to do complex things. It's clear that the framework has been created to start
new web applications really quickly, and it's truly a pleasure to use. But
Laravel's killer feature is the quality of the documentation, compared to other
PHP frameworks or even a lot of frameworks in other languages. Everything is
extremely well documented. I can't emphasize how important a good documentation
is (this reminds me that I should document Monica even more).
* There is a huge community around PHP and Laravel in particular: Laracasts,
Forge, Envoyer, a strong Slack community to name a few. If you need help, there
is a lot of people out there ready to give a hand.

### What are the challenges I faced during the development of this project?

Overall I didn't have that many challenges while developing the current version
of Monica. It's not a complex application, and I don't have scaling challenges
as the user base is quite small still (around 7800 users total and 4300
active). But there are some implementation details that I did wrong - not
because it was bad coding practice, but because my technical skills were not
good enough to overcome those problems on the short term. Hopefully, listing
those mistakes will help others not make them - or nice people will send me
emails on how I could have  fixed them.

* In an earlier versions, I used a lot of events and listeners. While the
concept is awesome, I had a lot of problems with unit testing the base classes
because to them. Moreover, the more I was using them, the more magic happened
behind the hood. I thought that people who would jump in the codebase would
struggle to understand how come some stuff happened when an object was created
for instance. In my mind events and listeners would make the application harder
to understand, so I decided to remove them all (well, 99% of them, there is
still two listeners that I need to get rid off).
* At the beginning, the database was entirely encrypted. For reasons I still
haven't understood, from time to time there were bugs with the decryption
process, leading to data I couldn't recover. Because I didn't want to deal with
this problem at this stage, I decided to remove the encryption. Moreover,
having data encrypted made it impossible to operate any kind of sorting or
search in my queries, which could have been problematic on the long run. I'm
sure there are solutions to these two problems but I wanted to focus on
creating new features instead of fixing this single one problem.
* I didn't write unit tests before launching the application. This really hurt
me bad. I don't think we should aim for 100% test coverage, but at least, have
some kind of tests for the main features of your site. Otherwise you end up
with a s**t ton of bugs that you didn't think about, and while you try to fix
it, other parts of the application are affected by your fix. This becomes
quickly a nightmare. Laravel makes unit testing super easy - I should have
taken this more seriously. Starting with the next version of Laravel, no pull
request will be merged unless there are unit tests and perhaps even functional
tests.

### Conclusion

These are some reasons why I chose Laravel. As I said at the beginning of this
post, your project is not about the language. Unless your project is about
learning a new language, you should not spend weeks choosing a language or
framework. Stick with what you know, and just make something. Your users won't
care that your code is ugly or that you chose Python over Ruby.
