One of the biggest feature request is the ability to import contacts from
Google. Google allows to export data about your contacts in the vCard format,
which is the universal standard for exchanging contact information. Monica
0.2.0 adds the ability to import your data from a vCard file (either .vcard or
.vcf), so you can populate your account with most of your data instead of
having to add your friends one by one.

![Default import report](/img/posts/2017-06-30-v0.2.0-blank.png)

Right after your contacts are imported, you are redirected to a dashboard where
you can see the status of the import. Because users might have thousands of
contacts, Monica imports them asynchronously. You'll have to wait a bit before
all the contacts are imported.

![Default import dashboard](/img/posts/2017-06-30-v0.2.0-dashboard.png)

You can click on a specific import to see what happened.

![Default import dashboard](/img/posts/2017-06-30-v0.2.0-report.png)

Also, we've added a feature to reset your account, which will be handy if you
do import thousands of contacts and something goes wrong. Resetting an account
deletes everything, except you.

Version 0.2.0 is already in production, and as always, you can install it on a
server that you own.

Enjoy!
