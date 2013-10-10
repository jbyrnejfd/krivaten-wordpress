#Krivaten for Wordpress#
This is a Wordpress theme I built using various libraries I've grown quite fond of in my experience.

It was largely built to suit my particular workflow, but if you by chance use the same set up I do (Or want to adopt it), then you will likely love this theme. So enjoy it.

##Features##
* Swipable mobile nav drawer using [touchSwipe](https://github.com/mattbryson/TouchSwipe-Jquery-Plugin)
* Styles for [Gravity Forms](http://www.gravityforms.com/)
* Theme admin for Social Networking URLs and Google Analytics code
* LESS and JS compiled and minified using [PrePros](https://github.com/sbspk/Prepros)
* Menu walkers for navbar and drawer to add necessary classes

##Shortcodes##
I did my best to create shortcodes for all the Bootstrap elements (And then some) that I felt one would be likely to use. How to use them is documented below and note that attributes in parenthesis are not required but may contain a default value if not manually set.

**Accordion**

```
[accordion title="Title" (tag="h3" open="false")]Content[/accordion]
```
**Alert**
```
[alert (type="danger")]Content[/alert]
```
**Checklist**
```
[checklist (class="")]Content[/checklist]
```
**Grid**
```
[row][/row]
[col (xs="" sm="" md="" lg="" class="" style="")]Content[/col]
```
**Icon**
```
[icon icon="ok" (class="")] 
```
**Map**
```
[map src="" (width="100%" height"360")]
```
**Pre**
```
[pre]Content[/pre]
```
**Quote**
```
[quote]Content[/quote]
```
**Vimeo Video**
```
[vimeo video="52596685" (title="Vimeo Video")]
```
**Well**
```
[well]Content[/well]
```
**YouTube Video**
```
[youtube video="1aBSPn2P9bg" (title="YouTube Video")] 
```

##Examples##
* [ProTheist](http://protheist.com)

##Dependencies##
* [Bootstrap 3](https://github.com/twbs/bootstrap)
* [Font Awesome](https://github.com/FortAwesome/Font-Awesome)
* [touchSwipe](https://github.com/mattbryson/TouchSwipe-Jquery-Plugin)
* [wp-bootstrap-navwalker](https://github.com/twittem/wp-bootstrap-navwalker)
* [PrePros](https://github.com/sbspk/Prepros)

##Author##
* Email: <krivaten@gmail.com>
* Twitter: <http://twtter.com/krivaten>
* GitHub: <http://github.com/krivaten>

##Known Issues##
* No structure in place for comments, because I use [Disqus](http://disqus.com). If you want it, ask nicely.