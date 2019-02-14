# dated-exchange-rate
Generate a Salesforce oAuth API Access Token

This needs pushing to Heroku.

In Salesforce, create a Connected App with the following settings
Callback URL: the URL of the Heroku App
Require Secret for Web Server Flow: No
Selected OAuth Scopes:
 - Access and manage your data (api)
 - Perform requests on your behalf at any time (refresh_token, offline_access)
 
 You will need:
 <strong>myDomain</strong> = your Salesforce domain name
 #consumerKey# = The Consumer Key generated from the Connected App
 #herukoAppURL# = The URL of the Heroku App, this needs to be exactly as entered in the Connected App
 
 Navigate to the following URL:
 
 https://#myDomain#.my.salesforce.com/services/oauth2/authorize?response_type=code&client_id=#consumerKey#&redirect_uri=#herukoAppURL#
