# Observer Design Pattern

## When to use observer design pattern

> When you have a system where multiple entities are interested in any possible update to some particular second entity object.
> The flow is very simple to understand. Application creates the concrete subject object. All concrete observers register themselves to be notified for any further update in the state of subject.

## Real world example of observer pattern

> It is suitable for any scenario that requires push-based (pub-sub) notification, message oriented applications.

- Any social media platform such as Facebook or twitter. When a person updates his status – all his followers gets the notification. A follower can follow or unfollow another person at any point of time. Once unfollowed, person will not get the notifications from subject in future.
- In message oriented applications. When a application has updated it’s state, it notifies the subscribers about updates.

## How to Apply the Pattern

- An object of **provider** that sends notifications to observers. The provider must implement a single method of ProviderInterface. Subscribe, which is called by observers that wish to receive notifications from the subject.
- An observer, which is an object that receives notifications from a subject implements the `ObserverInterface`. 
- A mechanism that allows the provider to keep track of observers.
- An detach implementation that enables the provider to remove observers when notification is complete.
- An object that contains the `data` that the provider sends to its observers.
