# BraintreeSubscription

Functions to create a weekly/monthly/yearly subscription in php. 

## Getting Started

testHelper.php : Just fill in your ids and keys.

brainTreeActiveCheck.php: Checks for an subscriptionID if the the subscription is active

braintreeCancleSubscription.php: also needs a subscriptionID as the parameter and cancels a subscription

braintreeToken.php: creates a token, which you need to make a transaction

braintreeTransaction: The function that creates the subscription. You have to change the subscription name. 

### Good to know

If you want to do a project that has anything to do with alcohol don't even think about working with braintree. For a project I'm working on I started using Stripe for my subscriptions but they only accept credit cards, which is very bad because of mostly german customers. Then I implemented Braintree, wrote every function and connected it to my backend. Everything worked, then I wanted to unlock my account to launch the project and they refused it because our app has something to do with alcohol (Don't get me wrong we don't sell alcohol). Now I implemented everything with the Fastspring API and they have a problem to show Euro as the currency. It's so hard and frustrating to find a suitable payment provider. 
