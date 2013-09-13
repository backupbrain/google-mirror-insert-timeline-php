Google Mirror Insert Timeline with PHP
=============================
This code is a very simple PHP implementation for Google's OAuth 2.0 authentication service as well as a way to post static content to the Google Glass timeline through Google's Mirror API

It is intended as a complement to my tutorial:
http://20missionglass.tumblr.com/post/61150784385/post-content-to-the-glass-timeline

Configuration
--------------
Log into your Google APIs console (http://code.google.com/apis/console), navigate to the API Overview,
and set up your web app.  Copy and paste your Client ID, Client Secret, and Redirect URI into config.php:
 


    $oauth2_client_id = 'OAUTH_2_CLIENT_ID';
    $oauth2_secret = 'OAUTH_2_SECRET';
    $oauth2_redirect = 'https://example.com/oauth2callback';

Now You should be good to go.


