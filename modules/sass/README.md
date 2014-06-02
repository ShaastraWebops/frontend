SASS
=========

##Contents

####SASS
The original Repository where SASS code resides

##Tutorials
 - Official tutorial - http://sass-lang.com/guide

##Instructions to install SASS
 1. Unix (Ubuntu)
 	a. Install SASS directly 
 		- Execute
 			``` 
 				sudo apt-get install ruby-sass
 			```
 	b. Install SASS with GEMS
 		- Setup a Ruby environment
 			- Run the commands :
 				```
 					sudo apt-get update
 					sudo apt-get install curl
 					curl -L https://get.rvm.io | bash -s stable
 				```
 			- Close terminal and Open a new terminal and run.
	 			```
 					rvm requirements
 					gem install rails
 				```

 		- Install SASS
 			- Execute `sudo gem install sass`

 		- Check if installation is successful by executing `sass -v`

 2. Windows - *** Needs improvement ***
 	- Setup a Ruby environment
 		- Download and install http://www.rubyinstaller.org/
	
	- Install SASS 
		- Open cmd promt with ruby (search in start menu)
		- Run the commands :
			```
				gem install sass
			```if that doesn't work, try
			```
				sudo gem install sass
			```to double check installation, run 
			```
				sass -v
			```and it should return 
			```
				sass 3.3.8 (Maptastic Maple)
			```
				

	- Check if installation was successful
		- Refer http://sass-lang.com/install
	
