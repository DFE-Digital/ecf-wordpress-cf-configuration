# ECF Wordpress CF Deployment Manifest

This repository contains a manifest to deploy the ECF wordpress instance.

to push this instance  [(assuming single sign on)](https://docs.cloud.service.gov.uk/get_started.html#use-your-gov-uk-paas-account)

`cf login -a api.london.cloud.service.gov.uk --sso`
`cf push`

This will standup wordpress and a predeployed [mysql service as per these instruvtions](https://docs.cloud.service.gov.uk/deploying_services/mysql/#mysql)


Modifications had to be madwe to the source as per [this documentation to enable ssl connections](https://docs.cloud.service.gov.uk/guidance.html#connect-wordpress-to-mysql)



The current deployment has no volume mounted so things like plugins and configuratino may be volotile.


The guide that was followed to setup this deployment can be found [here](https://www.cloudfoundry.org/blog/install-scale-wordpress-cloud-foundry-2018/)

## Local Development

```bash
docker-compose up
```

The `wordpress/wp-content` directory will be automatically mounted and synced.


## ToDo:

1. establish if we need to add volume storage for plugins
2. figure out how to add something like volume storage


### Resources related to volume storage
 - [cloud foundry docs](https://docs.cloudfoundry.org/devguide/services/using-vol-services.html)
 