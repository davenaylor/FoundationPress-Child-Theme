# FoundationPress Child Theme

A child theme for the FoundationPress WordPress starter theme

https://github.com/olefredrik/FoundationPress

This child theme uses its own Foundation installation.  All javascript, sass
files and bower packages are self contained and don't need to be referenced from
the parent theme. It's essentially a mirror of the FoundationPress structure. 

**Okay, so you'll need to have the following items installed before continuing.**

  * [Node.js](http://nodejs.org): Due to an unresolved incompability issue with node-sass, we will need to use Node v. 0.10.33 (stable). [See this issue for a more detailed description](https://github.com/zurb/foundation-libsass-template/issues/16#issuecomment-76017152)
    * [Mac installer](https://nodejs.org/dist/v0.10.33/node-v0.10.33.pkg)
    * [Windows installer](https://nodejs.org/dist/v0.10.33/node-v0.10.33-x86.msi)
    * [Windows x64 installer](https://nodejs.org/dist/v0.10.33/x64/node-v0.10.33-x64.msi)
    * [Other release files](https://nodejs.org/dist/v0.10.33/)
    * [Documentation](https://nodejs.org/docs/v0.10.33/api/)
  * [Grunt](http://gruntjs.com/): Run `[sudo] npm install -g grunt-cli`
  * [Bower](http://bower.io): Run `[sudo] npm install -g bower`


## Quickstart

```bash
cd your-wordpress-directory/wp-content/themes/
git clone git@github.com:olefredrik/FoundationPress
git clone git@github.com:davenaylor/FoundationPress-Child-Theme your-theme-name
cd your-theme-name
npm install && bower install && grunt build
```
You don't need the bower/node installation in the parent theme since we've installed
all the required components in the child.

**Tip 1:** 
If you get an error saying Permission denied (publickey) when cloning the
repository, use the https protocol instead:
```git clone https://github.com/olefredrik/FoundationPress```
```git clone https://github.com/davenaylor/FoundationPress-Child-Theme your-theme-name```

**Tip 2:**
If you get a fatal error during installation, it might be related to a libsass
incompability issue with the latest version of nodejs. Check the guide at the
bottom of this page: https://github.com/olefredrik/FoundationPress/issues/209

While you're working on your project, run:

`grunt watch`

And you're set!

