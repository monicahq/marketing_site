I’m Regis Freyd and I’ve been developing Monica for one year and a half now. Monica is an open-source personal relationship management software and is currently a side project, as it doesn't generate enough revenues to allow me to work on it full time. The journey of 2017 has been pretty great and this is what I’d like to write about today.

### How Monica became popular

Monica was built originally in June 2016. I worked on and off on it for a couple of months, then submitted it to Reddit. Few people cared, even fewer people registered (a dozen of people) so I stopped working on it and focused on my career. In May 2017, after having changed jobs, I wanted to go back to work on something I love very much: side projects. So every day after work, I worked on Monica. I did this for a month, open sourced it on GitHub, and got discouraged again. I called a friend, told him that I’d been working on a project for a year now and told him that I wanted to delete the project because no one cared at all. I said that I would delete the entire repository on Monday (we were Sunday). I went to bed, and in the morning, before deleting the project, I wanted to try one last thing: posting the project to Hacker News. Since all my other projects in the past never caught any interest on HN, I didn't have any optimism for this story. I posted the link, and went away for two hours.

When I came back to make sure that no one cared, I saw that I was on page 2 on Hacker News. I was mind blown. I got like 30 upvotes and a few comments. I couldn’t believe it. People seemed to like the project and the idea behind it. They also loved the open source aspect of it. Then it escalated quickly.

In less than an hour, Monica reached the first page on Hacker News. Then, a few minutes later, I reached #3, #2. And then it reached #1. And stayed number 1 for two days in a row, with almost 1100 upvotes and hundreds of comments.

We went from 10 users to 5600 users in a couple of hours.

The next day we bumped at 7000 users. Monica became the most trending repository on GitHub, went from 0 star to 1700 stars in an hour.

And then, people started to send emails. I spent the next three days replying to hundred of emails of users saying that they’ve been waiting for a tool like that for years now. A few VCs reached out to me and wanted to talk. All in all, I talked to 4 venture capitalists from New York and San Francisco. I quickly realized that VCs didn’t have at all the same vision that I had for the product, and wanted to put ads and other “intelligent” ways of feeding data to Monica. This was so against my values that the discussion stopped there.

Today, Monica has around 10,300 users and 90,000+ contacts. The repository on GitHub has 3788 stars and 409 forks. We’ve received hundreds of pull requests, and the community has opened 300+ issues. It’s clear that the project has become popular and that there is a clear interest. The Docker images have been pulled more than 13,000 times - it’s almost impossible right now to know how many instances of Monica run in the wild, but I guess a few hundreds. I have around 45 paying customers - but to be fair, at the moment, there is almost no incentive in having a paying account, so people who take a paying account are doing so to support the development, basically.

I hesitated a lot before open sourcing Monica. My biggest fear was that people would criticize my code, see how bad it was. I had no unit tests. I took some shortcuts to reach my goals, and the code was far from being great. To my surprise, only one person mentioned the quality of the code. No one else even talked about it. People were just grateful that the tool was there and open. The secret is to not be scared of sharing your work in the fear of being judged.

### What now?

* The initial growth has slowed down. Around 10-20 users subscribe each day. Keep in mind that I have done no marketing whatsoever except this one post on Hacker News. So while the number is low, I find it quite incredible to have that many signups.
* I receive a lot of feature requests. I’m really grateful for them, but I can’t do everything. In part because this is to much work, and in part because I want to focus on features that people will want to pay for. This is the only way to make this project sustainable in the long term. Keep in mind that I work on this at night and on the weekend, but at 20-30 hours per week, it will be harder and harder to keep this rhythm in the future.
* Letterbox is a huge source of inspiration for me in terms of business model, and their Pro offering is probably something I’ll copy.
* One of the things I’d like to do is to ship a mobile application in 2018. I believe this is what people want the most, and this is why I’ve shipped an API two months ago. I have a lot of work to do for this, and the first part would be to learn how to actually develop a native mobile application.
* I think Monica can become the only source of truth about your contacts and your agenda. This is where we are going in 2018, as well as a great place to store your feelings.
