After more than a month of work, I am happy to announce the new version of Monica, with photo upload, improved security, improved phone calls management, weather support, the introduction of emotions and many more enhancements.

### Photo upload

You can now upload photos on a contact’s profile page. The number of photos you can store depends on your account’s storage limit, which is 512 Mb on https://monicahq.com (and is configurable per instance). The ability to upload photos unlocks a lot of possibilities in the future.

![image](/img/posts/2018-12-04-photo-upload.png)

### Recovery codes

Security is so important, especially in a tool like Monica which stores many intimate details. Monica already supports two-factor authentication (also known as 2FA) and U2F to help you secure your account. Starting with Monica 2.11, you can now generate recovery codes to unlock your account in the case you’ve lost the ability to login with 2FA. Beware though - as those codes can help access your account, make sure you keep them in a very secure place.

![image](/img/posts/2018-12-02-recovery-codes.png)

### Phone calls

Phone calls have had a lot of love in this release. First of all, we’ve redesigned the flow to record them. Then we’ve (finally) added the possibility to edit a phone call that was made in the past. And as a bonus, you can now indicate who initiated the call.

### Emotions

Wouldn’t it be awesome to be able to tell how you felt when something happened, in a very precise manner? Monica 2.11 introduces the notion of emotions, based on the work of [Dr. Phillip Shaver](http://changingminds.org/explanations/emotions/basic%20emotions.htm). In his work, emotions are sorted into 3 main categories:
- Primary emotions (love, joy, surprise, anger, sadness, and fear),
- Secondary emotions (Love -> Affection, Lust, Longing),
- Tertiary emotions (Love -> Affection -> Adoration, Love, Fondness, Attraction).

We’ve added those concepts in Monica, starting with phone calls. There is a new drop-down menu that lets you choose as many emotions you want, in order to represent very precisely what you felt during a call. We plan to add emotions to other key elements as well, like activities.

![image](/img/posts/2018-12-13-emotions.png)

### Weather

When you are talking with a friend that lives in another area than you, chances are you will eventually talk about the weather. Monica will help you here, by showing the current weather of the place your friend lives in. This information comes from the first address found on the contact profile page. That also means that if no address is currently set, no weather information will be shown.

Weather data is pulled from Darksky and is refreshed every 6 hours. The only information that is shared with Darksky is the latitude/longitude, and nothing else. For instance owners, Darksky has a free plan that lets you make 1,000 calls per day for free, which should be plenty enough.

![image](/img/posts/2018_12_22_weather.png)

### GPS coordinates

Speaking of latitude and longitude, we had to find a mechanism to get those two pieces of information for each address entered in Monica if we wanted to display the weather data. Monica 2.11 now has the ability to automatically geocode any address to find their latitude and longitude coordinates.

When you enter an address, and if the service is configured at your instance level, we’ll automatically try to geocode it - unless you provide the latitude/longitude for a given place yourself.

Geocoding is done by LocationIQ, a great and independent company that offers a very generous free plan of 10,000 calls per day for free. We don’t share any information with LocationIQ other than the address in order to fetch coordinates.

### Tasks

On your dashboard, you can now add tasks that are not linked to any contacts.

![image](/img/posts/2018-11-17-custom-tasks.png)

### Enhancements

We refactored a lot of how things are written internally. This is to continue our quest of having the most stable platform possible. Also, we've continued to increase the code coverage (i.e. the fact that our code is actually tested automatically). We are now at 66% code coverage for the entire codebase.

We hope you will like 2.11 as much as we do.