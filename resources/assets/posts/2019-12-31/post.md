It’s been a long time. Actually, it’s been one year since the last blog post. In this post, we'll talk about the new 2.16 release that we just made, what happened during 2019 and what's next for Monica.

Version 2.16 contains 226 changes, most of them being bug fixes or improvements on the codebase. But we also have a bunch of new features, explained below.

### New way of adding activities

You can now add activities inline, instead of going to a new page to do so. Like the Call feature, you can now indicate the emotions you felt during an activity.

![image](/img/posts/2019-12-31-inline-activities.png)

### Enhance API settings page

Most of what you can do with Monica can be achieved through the API. It is extremely important for us to let people manipulate their data at will. This is why it was time to enhance the API settings page a little bit, by giving it more love.

![image](/img/posts/2019-12-31-api.png)

Also, we've added [many new API methods](https://github.com/monicahq/monica/pull/3302) to continue our openness to other systems.

### Lots of changes under the hood

We've also completely changed how data is stored by adding foreign keys to every table in the database. While this will have no impact on the end-user experience, it’s pretty major for us developers as it will allow us more control and flexibility overall. This was a huge change for us and the pull requests took almost 11 months to get merged.

We've also completely changed how the export process of data is handled and it should work flawlessly from now on (or as they say: 60% of the time, it works every time).

### What happened in 2019?

In 2019, we kind of slowed down a little bit in terms of annual releases. Also, the activity on this blog has been nonexistant. However, this didn't affect the number of signups, or the number of downloads, or the love of people on the Internet for this project.

Basically, Monica has never been stronger. We have nearly 5 million downloads of our official docker image. We have tens of thousands of users on [our hosted version](https://app.monicahq.com). Monica keeps popping on [Hacker News](https://news.ycombinator.com/item?id=21850155) and [our issue tracker on GitHub](https://github.com/monicahq/monica/issues) is as active as ever. Also, we've merged 875 pull requests in 2019.

So why this silence? This is mainly because of me (Regis). I've started Monica almost four years ago now. Having a popular project is a lot of fun, but it also takes a lot of energy and motivation. Especially since Monica is still a side project for both me and Alexis. But this year, Monica was too much for me to handle. I had a side-project burnout, if you will. Alexis has taken a lot of work on his shoulders to maintain and evolve the product, but I couldn't work on it as much as before. I had to do something else, clear my head and come back only when I'd be ready. Now I am, and I’m more than motivated to get back to work and have fun again.

### Monica in 2020

Four years ago, Monica was one of the first popular personal CRMs. Fast forward to today, and the competition is now bigger than ever (a dozen, last time I checked). But I do believe that we have an advantage that can not be overtaken by our competitors: we are open source, and we have no charges, no costs or almost, and we are not greedy. Everything we do, we do it for the community first. The more Monica instances there are out there, the happier we are: this means we don't have any control over our users' data.

In 2020:
* We want to continue our work of openness and transparency. That means more ways to export or import data in a standard format.
* We want to provide webhooks so external systems can be aware when data changes in your account (if you so desire, of course).
* I believe Monica is currently the best tool out there to document your personal contacts. You can log anything, really. Now that we have a very strong foundation, I believe it’s time for us to expand on that. It’s time we let you do something more with your contacts, by creating groups (or families), events, opportunities, etc... We will focus on simple concepts that will be gradually added to the platform, that will provide the most flexibility for you.

 Monica is a tool for you. Please keep sharing ideas, keep sending me emails about what we should do next. We are here for you.

 Also, happy new year 😀