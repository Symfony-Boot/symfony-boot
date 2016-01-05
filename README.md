# symfony-boot
An attempt to port Spring Boot benefits to Symfony. Given the language differences, there will surely be some hurdles. But the end goal is to get as close as possible.

Goals:
- Standard Symfony installation 
- Opinionated set of pre-installed bundles
- Opinionated set of pre-installed libraries
- Opinionated glue configuration
- **Simply install SF-Boot via composer and begin to write your app instead of doing a ton of bootstrapping and configuration**

* Would love to mimic the way the boot starters work and have this be less opinionated as to what is installed. A way to detect existing configuration which would disable the sf-boot auto configuration would be nice also. Anyhow, more to come. Lots to do.

## Preinstalled Bundles

- Doctrine Extensions Bundle
- Doctrine Fixtures Bundle
- FOS User Bundle
- FOS Rest Bundle
- FOS JsRouting Bundle
- JMS Serializer Bundle
- KNP Paginator Bundle
- KNP Menu Bundle
- Liip Theme Bundle
- Cnerta Breadcrumb Bundle

## Preinstalled Libraries

- Nesbot Carbon
- Debug
