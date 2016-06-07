# ivona-speechcloud-php

## Config

Clone into a folder on your webserver (in this case the folder is called ivona)

Put your speechcloud credentials in IvonaClient.php:

```php
const   IVONA_ACCESS_KEY = "PUT_YOUR_ACCESS_KEY_HERE";
const   IVONA_SECRET_KEY = "PUT_YOUR_SECRET_HERE";
```

Remember to avoid publicly committing your access details back up to GitHub

Consider also changing $CacheDir to a directory writable for the user you run on.

## Usage

http://raspberrypi.local/ivona/api.php?t="hello world"

