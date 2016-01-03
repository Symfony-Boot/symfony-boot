symfony-bootstrap
=================
Standard Symfony installation with a handful of useful bundles preinstalled and configured. Also included are a few
custom components to enhance some of the bundles features.

Preinstalled Bundles
--------------------
- [FOS User Bundle](#fos-user-bundle)
- [KNP Paginator Bundle](#knp-paginator-bundle)
- [KNP Menu Bundle](#knp-menu-bundle)
- [Cnerta Breadcrumb Bundle](#cnerta-breadcrumb-bundle)
- [Doctrine Extensions Bundle](#doctrine-extensions-bundle)
- [Doctrine Fixtures Bundle](#doctrine-fixtures-bundle)
- [FOS Rest Bundle](#fos-rest-bundle)
- [FOS JsRouting Bundle](#fos-js-routing-bundle)
- [JMS Serializer Bundle](#jms-serializer-bundle)
- [Liip Theme Bundle](#liip-theme-bundle)


Preinstalled Libraries
----------------------
- [Carbon](#carbon)





## FOS User Bundle
Source: [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle)



## KNP Paginator Bundle
Source: [KNP Paginator Bundle](http://jmsyst.com/bundles/JMSSerializerBundle)

### Implementation Features

- Definable keys within **parameters.yml.dist**

```yaml
// parameters.yml.dist
paginator_param_page: page
paginator_param_sort: sort
paginator_param_direction: sort_dir
paginator_param_page_size: per_page
paginator_default_page_size: 5
paginator_default_distinct: false
```

### Event Listener
```
AppBundle\EventListener\PageRequestListener
```
The PageRequestListener will listen to the ```kernel.controller``` event, which fires just before the kernel issues the request to the assigned controller for the given route. This allows us to inject a **PageRequest** object for each request.

If the request parameters are missing, the page request object will still be available with default values. This ensures consistent usage.

If you choose to have your controller extend **AppBundle\Controller\BaseController** you will inherit this functionality





## KNP Menu Bundle
The [KnpMenuBundle](https://github.com/KnpLabs/KnpMenuBundle) integrates the [KnpMenu](https://github.com/KnpLabs/KnpMenu) PHP library with Symfony.

## Cnerta Breadcrumb Bundle
[Cnerta Breadcrumb Bundle](https://packagist.org/packages/cnerta/breadcrumb-bundle) provides an easy way to create a breadcrumb with KnpMenuBundle.

## Doctrine Extensions Bundle
[Doctrine Extensions Bundle](https://github.com/stof/StofDoctrineExtensionsBundle) provides integration for [DoctrineExtensions](https://github.com/Atlantic18/DoctrineExtensions) in your Symfony2 Project.

## Doctrine Fixtures Bundle
Fixtures are used to load a controlled set of data into a database. This data can be used for testing or could be the initial data required for the application to run smoothly. Symfony has no built in way to manage fixtures but Doctrine2 has a library to help you write fixtures for the Doctrine ORM or ODM.


## FOS Rest Bundle
[FOS Rest Bundle](https://github.com/FriendsOfSymfony/FOSRestBundle) provides various tools to rapidly develop RESTful API's & applications with Symfony2.

## FOS JS Routing Bundle
[FOS JS Routing Bundle](https://github.com/FriendsOfSymfony/FOSJsRoutingBundle) allows you to expose your routing in your JavaScript code. That means you'll be able to generate URL with given parameters like you can do with the Router component provided in the Symfony2 core.



## JMS Serializer Bundle
[JMSSerializerBundle](http://jmsyst.com/bundles/JMSSerializerBundle) allows you to serialize your data into a requested output format such as JSON, XML, or YAML, and vice versa.


## Liip Theme Bundle
[Liip Theme Bundle](https://github.com/liip/LiipThemeBundle) allows you to add and manage template themes per bundle.


## Carbon
---
[Carbon](https://github.com/briannesbitt/Carbon) is a simple PHP API extension for DateTime.