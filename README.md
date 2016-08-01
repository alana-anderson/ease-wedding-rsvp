# Ease Wedding RSVP
All **dev** files can be found within _/app_
All **distribution/production** files are placed within _/dist_ after running `grunt build`.

## Project Build
 - [PHP](https://php.net)
 - [Node](https://nodejs.org/en/)
 - [SASS](http://sass-lang.com/)
 - [modernizr](https://modernizr.com/)
 - [Grunt](http://gruntjs.com/)
 - [jQuery](https://jquery.com/)
 - [Bower](http://bower.io/)

## Local Setup (CLI)
###### Please install the following on your machine before proceeding
[Node](https://nodejs.org/en/)
Node comes with **npm** installed. But you should make sure it's the latest version.
```
npm install npm -g
```

###### Run the following commands for environment setup
```
npm install bower // install bower
npm install -g grunt-cli  // install grunt
sudo gem install -n /usr/local/bin sass // install sass
```

###### Run the following commands for project setup
```
npm install
bower install
grunt server
```

## Production setup
```
grunt build
```
the `grunt build` task will "build" the project making it ready for deployment to production environment.
