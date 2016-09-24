# Local Milk Wordpress Site

## Descriprion

Repsonsive blog built using wordpress, gulp, sass, and npm. The dev enviroment is using Vagrant (specifically VCCW). The Vagrant files have been ignored from this repo since developer collaboration is not neccesary, but instructions to install Vagrant with VCCW are below. 

##Wordpress Install
The Wordpress core is installed in a sub-directory called wordpress and the wp-config.php file is using a local-config.php, staging-config.php, and production-config.php  that supplies the appopriate variables for each approiate enviroment. The site content is also in a sub-directory within the root folder called content. Updating the wp-config.php and the index.php in the root folder is required to connect the install. for reference please check the wordpress [codex](https://codex.wordpress.org/Giving_WordPress_Its_Own_Directory)

## Theme
A custom theme was built for this sites using a stipped and modfifed version of [_underscores](http://underscores.me/). The theme is also built on Zurbs Foundation 6 [foundation-sites](http://foundation.zurb.com/sites/docs/) responsive framework. The theme is customized to display and organize blog post categories based on parent, child, and grandchildern categories. 

## Install Front-End 
`cd` into `/content/themes/localmilk` folder and run `npm install` to download all the dev dependencies followed by `gulp` to compile code from the necessary dependencies. Activate the Local Milk theme from the wordpress admin and you should be up and running with the front-end of the site.

## Install Database
This site is using DB-Migrate Pro plugin to push and pull the database as needed. Install the plugin and use the connection key from the production or staging site to pull the database to your local install. If you need access to the live or staging site contact Alchemy and Aim. 

### Optional Step for using Vagrant and VCCW as your local development enviroment
# VCCW (vagrant-chef-wordpress)

This is a Vagrant configuration designed for development of WordPress plugins, themes, or websites.

To get started, check out <http://vccw.cc/>

## Configuration

1. Copy `provision/default.yml` to `site.yml`.
1. Edit the `site.yml`.
1. Run `vagrant up`.

### Note

* The `site.yml` has to be in the same directory with Vagrantfile.
* You can put just difference to the `site.yml`.

## Contribute

### Setting up

1. Clone this git repository on your local machine.
2. Run `bundle install` to fetch all dependencies.

### Running and writing tests

There is automated tests using [Serverspec](http://serverspec.org/).

The tests files are in the `spec/` directory.


Before running the serverspec tests, you'll need some dependencies.

```
$ bundle install --path=vendor/bundle
```

Then to run the tests, just execute following.

```
$ bundle exec rake spec
```

 
