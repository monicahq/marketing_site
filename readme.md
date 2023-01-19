Welcome to the marketing site of [Monica](https://monicahq.com).

It also contains
* the documentation of the API
* the release notes generator.

### Deployment

* The site is hosted on Fortrabbit. DNS is on Cloudflare and Hover.
* To push new code in production: `git push fortrabbit master`.
* To update the sitemap: `php artisan sitemap:generate`. Then commit it and push to production.
* To ping Google and co about the new sitemap: `php artisan sitemap:submit`.

## Contact

If you need to talk, you can contact us at support AT monicahq DOT com.

## Thank you, open source

Monica use a lot of open source projects and we thank them with all our hearts. We hope that providing Monica as an free, open source project will help other people the same way those softwares have helped us.

## License

Copyright (c) 2016-2023 Monica

Licensed under the AGPL License. [View license](/LICENSE).
