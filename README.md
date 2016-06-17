# svgtheme - Zeek Starter Theme

This is the Zeek Starter theme, based on <a href="http://underscores.me/">Underscores</a> and Foundation for Sites, version 6.1.1.


## Prerequisites
* Node.js 4.x.x and npm 2.x.x
* Gulp.js - from Terminal or Command Prompt run `npm install --global gulp`

**Note: if you run into errors when using Terminal, you may have to use the sudo command to install Gulp.js. For instance, `sudo npm install -g gulp`**

## How to get started
1. Clone or [download](https://github.com/ZeekInteractive/svgtheme/archive/master.zip "Download the svgtheme Zip") the project onto your `themes` directory `(./wp-content/themes)`
2. From the theme directory, run `npm install`. All of the theme dependencies will be installed into `node_modules`.
3. Run a find and replace to remove the `svgtheme` slug/string throughout with your project name.
4. Run `gulp`

## Gulp
Gulp will handle Sass compiling, vendor-prefixing, CSS/JS minification and browser reloading. It will watch your Sass, JS and PHP files and will compile when a change is made, inject new CSS after compilation and will reload the browser when your PHP and JS files change.

**CSS/Sass Tasks** – gulp will compile a compressed CSS and sourcemap file for you.

**JavaScript Tasks** - gulp will concatenate all of the JavaScript files located in `./assets/js` into a new file named `app.js`. It will also create a minified version of the file and place both files in the `./assets/dist/js` directory.  Feel free to create as many JS files as you'd like rather than one long one. Gulp also uses the JSLint plugin check for any JavaScript errors for you (code quality). Read about the project here http://www.jslint.com/help.html.

**What's up with the 'dist' directory?** - the `./assets/dist` directory is where gulp will send prepared JS and CSS files. The logic behind this is simply a nice segregated place to send and enqueue our files generated by gulp (outputs). That way we can keep our inputs and outputs separated. If you're not a fan and want it to go somewhere else, just adjust the `gulp.dest()` paths in the `gulpfile.js` for the 'js' and 'styles' tasks. Be sure to adjust your enqueue path in `functions.php` as well.

## How to use the Foundation Sass files
Using the `_settings.scss` file, you can overwrite a Foundation default style before things get compiled, thereby making your final CSS lighter.  To do so, find the variable in the file, uncomment it, and set the value you desire.  The file is located in `./assets/sass`.

Also, in the `app.scss` file, you can remove a Foundation CSS module by commenting out the associated mixin. For instance, if your project doesn't use Foundation's Orbit module, simply comment out the `@include foundation-orbit` mixin and the code will never reach your final `app.css` file.

Be sure to check <a href="http://foundation.zurb.com/sites/docs/sass.html" title="Zurb Foundation documentation on using Sass">Foundation’s docs on using Sass</a> and their mixins for custom control on styles.

## Assets + NPM architecture
```
assets/
	|- dist/						# Gulp generated files enqueued by theme go here
	|	|
	|	|- css/
	|	|
	|	|	|- app.css 				# Our compressed CSS file
	|	|	|- app.css.map 			# Our sourcemap file
	|	|	|- login.css 			# Login page styles
	|
	|	|- js/
	|	|
	|	|	|- app.js 				# Our non-minified development JavaScript file
	|	|	|- app.min.js 			# Our minified production JavaScript file
	|
	|- img/						# Images
	|
	|- js/						# JavaScript files
	|
	|- sass/
	|	|
	|	|– base/ 				 # Base element custom styles such as type, buttons, colors, etc. (non-Foundation stuff)
	|	|   |– _buttons.scss     # Buttons
	|	|   |– _mixins.scss      # Starting mixin library
	|	|   |– _typography.scss  # Typography rules
	|	|   |– _variables.scss   # Forms
	|	|   ...                  # Etc.
	|	|
	|	|– components/  		 # Element items that are a combination of base items
	|	|   |– _navigation.scss  # Navigation
	|	|   ...                  # Etc.
	|	|
	|	|
	|	|– sections/ 			 # Element items that make up large sections of the application
	|	|   |– _header.scss      # Header
	|	|   |– _footer.scss      # Footer
	|	|   |– _sidebar.scss     # Sidebar
	|	|   ...                  # Etc.
	|	|
	|	|– vendors/ 			 # 3rd-party element items such as plugins and core WordPress overwrites
	|	|   |– _wordpress.scss   # WordPress style adjustments
	|	|   ...                  # Etc.
	|	|
	|	|– pages/ 				 # Page specific styles
	|	|   |– _front-page.scss  # Home specific styles
	|	|	|– _page.scss  		 # Page specific styles
	|	|   ...                  # Etc.
	|	|
	|	|
	|	|– _settings.scss 		 # Foundation settings file
	|	|- _shame.scss 			 # Temporary work arounds
	|	|– app.scss              # Primary Sass file
	| |
	| |- login.scss				# Styles for the WordPress login page
	| |
node_modules/					# Foundation for sites + gulp plugins
	| |
	| |-foundation-sites/
```
## WordPress files
Our starter theme follows the Codex Template Hierarchy as found on http://codex.wordpress.org/Template_Hierarchy.

Site Front Page 		-	`front-page.php`

## History

This project is based off of Automattic's `_s` project, based on the distribution zip
generated off of commit [`f6ddaaa21ef562fe85881f7e3cc5bdd1e592bb0e`](https://github.com/Automattic/_s/tree/f6ddaaa21ef562fe85881f7e3cc5bdd1e592bb0e).
