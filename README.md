# FoundationPress Child Theme

A child theme for the FoundationPress WordPress starter theme

https://github.com/olefredrik/FoundationPress

This child theme uses its own Foundation installation.  All javascript, sass
files and bower packages are self contained and don't need to be referenced from
the parent theme. It's essentially a mirror of the FoundationPress structure. 

**Okay, so you'll need to have the following items installed before continuing.**

  * [Node.js](http://nodejs.org)
  * [Grunt](http://gruntjs.com/): Run `[sudo] npm install -g grunt-cli`
  * [Bower](http://bower.io): Run `[sudo] npm install -g bower`

## Quickstart

```bash
cd your-wordpress-directory/wp-content/themes/
git clone git@github.com:olefredrik/FoundationPress foundationpress/
git clone git@github.com:davenaylor/FoundationPress-Child-Theme your-theme-name
cd your-theme-name
npm install
```
It's important the parent foundationpress theme directory is all lowercase:
**foundationpress**
You don't need the bower/node installation in the parent theme since we've installed
all the required components in the child.

**Tip** 
If you get an error saying Permission denied (publickey) when cloning the
repository, use the https protocol instead:
```git clone https://github.com/olefredrik/FoundationPress foundationpress/```
```git clone https://github.com/davenaylor/FoundationPress-Child-Theme your-theme-name```

### browserSync

If you want to watch realtime updates as you work, edit the `local.dev` line in
the Gruntfile.js file to reflect your own local development URL

While you're working on your project, run:

`grunt` for watching and browserSync or `grunt watch` to just watch your
project.




