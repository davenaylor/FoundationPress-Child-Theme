# FoundationPress Child Theme

A child theme for the FoundationPress WordPress starter theme

https://github.com/olefredrik/FoundationPress

This child theme uses its own Foundation installation.  All javascript, sass
files and bower packages are self contained and don't need to be referenced from
the parent theme. It's essentially a mirror of the FoundationPress structure.

## Requirements

This project requires Node.js v4.x.x to v6.11.x to be installed on your machine. Please be aware that you might encounter problems with the installation if you are using the most current Node version (bleeding edge) with all the latest features.

FoundationPress uses Sass (CSS with superpowers). In short, Sass is a CSS pre-processor that allows you to write styles more effectively and tidy.

The Sass is compiled using libsass, which requires the GCC to be installed on your machine. Windows users can install it through MinGW, and Mac users can install it through the Xcode Command-line Tools.

If you have not worked with a Sass-based workflow before, I would recommend reading FoundationPress for beginners, a short blog post that explains what you need to know.

## Quickstart

### 1. Clone the repository and install with npm

```bash
cd my-wordpress-installation/themes/
git clone https://github.com/olefredrik/FoundationPress.git
git clone https://github.com:davenaylor/FoundationPress-Child-Theme your-theme-name/
cd your-theme-name
Edit style.css to insert your own details/theme name
npm install
```

You don't need to run npm install in the parent theme since we've installed
all the required components in the child.

### 2. Configuration

#### YAML config file
FoundationPress includes a `config-default.yml` file. To make changes to the configuration, make a copy of `config-default.yml` and name it `config.yml` and make changes to that file. The `config.yml` file is ignored by git so that each environment can use a different configuration with the same git repo.

At the start of the build process a check is done to see if a `config.yml` file exists. If `config.yml` exists, the configuration will be loaded from `config.yml`. If `config.yml` does not exist, `config-default.yml` will be used as a fallback.

#### Browsersync setup
If you want to take advantage of [Browsersync](https://www.browsersync.io/) (automatic browser refresh when a file is saved), simply open your `config.yml` file after creating it in the previous step, and put your local dev-server address and port (e.g http://localhost:8888) in the `url` property under the `BROWSERSYNC` object.

### 3. Get started

```bash
$ npm start
```

### 4. Compile assets for production

When building for production, the CSS and JS will be minified. To minify the assets in your `/dist` folder, run

```bash
$ npm run build
```

### Project structure

In the `/src` folder you will the working files for all your assets. Every time you make a change to a file that is watched by Gulp, the output will be saved to the `/dist` folder. The contents of this folder is the compiled code that you should not touch (unless you have a good reason for it).

The `/page-templates` folder contains templates that can be selected in the Pages section of the WordPress admin panel. To create a new page-template, simply create a new file in this folder and make sure to give it a template name.

I guess the rest is quite self explanatory. Feel free to ask if you feel stuck.

### Styles and Sass Compilation

 * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

 * `src/assets/scss/app.scss`: Make imports for all your styles here
 * `src/assets/scss/global/*.scss`: Global settings
 * `src/assets/scss/components/*.scss`: Buttons etc.
 * `src/assets/scss/modules/*.scss`: Topbar, footer etc.
 * `src/assets/scss/templates/*.scss`: Page template styling

 * `dist/assets/css/app.css`: This file is loaded in the `<head>` section of your document, and contains the compiled styles for your project.

If you're new to Sass, please note that you need to have Gulp running in the background (``npm start``), for any changes in your scss files to be compiled to `app.css`.

### JavaScript Compilation

All JavaScript files in the `src/assets/js` folder, along ith Foundation and its dependencies, are bundled into one file called `app.js`. The files are imported using module dependency with [webpack](https://webpack.js.org/) as the module bundler.

If you're unfamiliar with modules and module bundling, check out [this resource for node style require/exports](http://openmymind.net/2012/2/3/Node-Require-and-Exports/) and [this resource to understand ES6 modules](http://exploringjs.com/es6/ch_modules.html).

Foundation modules are loaded in the `src/assets/js/app.js` file. By default all components are loaded. You can also pick and choose which modules to include. Just follow the instructions in the file.

