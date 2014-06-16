Google App Engine
=========

##Getting Started
 - Ubuntu : 
 	- Download the "Google App Engine for Python" from https://developers.google.com/appengine/downloads - I am using the 1.9.6 version.

 	- Use the GUI I have put in the gui folder of this directory. Copy paste it somwehere in a folder on your computer.

 	- Install python 2.7 and some dependencies
 		`sudo apt-get install python python-wxversion python-wxglade python-mysqldb`

 	- Go into the folder and run `GoogleAppEngineLauncher.py`
 		`cd gui`
 		`python GoogleAppEngineLauncher.py

 	- Set the Preferences for "Google App Engine for Python"
 		- Go to Edit > Preferences
 		- Change "App Engine SDK" to the path you downloaded and uncompressed the first file (in the first point) to.
 		- Restart the gui.

 	- Create a new project using File > Create project or add existing project using File > Add existing application.

 	- To run a server, execute 
 		`python /path/to/google_app_engine_for_python/dev_appserver.py path/to/appengine/project`
 		And it will execute the server.

 	- To see the server, go to `localhost:<port>` as what you had set in the GUI.



##Running Django on Google App Engine
 - Create a django project and the app.yaml file associated to it should have
 ```
 	application: appname
	version: 1
	runtime: python27
	api_version: 1
	threadsafe: true

	libraries:
	- name: django
	  version: "1.4"

	builtins:
	- django_wsgi: on

	handlers:
	- url: /static/admin
	  static_dir: static/admin
	  expiration: '0'

	env_variables:
  	  DJANGO_SETTINGS_MODULE: 'configs.settings'
  ```



##Contents 

####GUI
The gui to use with the "Google App Engine for Python" version for Ubuntu.
