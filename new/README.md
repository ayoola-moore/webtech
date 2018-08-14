## UIPageScrolling

JQuery plugin that allows you to submit a web-page in a slideshow.
It supports the ability to scroll up \ down the left \ right.

## Demo
Vertical scrolling - http://xnimorz.github.io/UIPageScrolling/DEMO/UIPageScrolling-Vertical-DEMO.html
Horizontal scrolling - http://xnimorz.github.io/UIPageScrolling/DEMO/UIPageScrolling-Horizontal-DEMO.html

## Tested

Chrome \ Opera \ Mozilla \ Safari
IE10 +

Mobile brazuery engine with WebKit


## Use

To use this plugin, you need to connect JQuery version 1.8 and higher, connect the plug -
UIPageScrolling.js and add a table UIPageScrolling.css styles

The standard requires the use of the layout by type

`` `` Html
<Div class = main>
    <Section>
        ....
    </ Section>
    <Section>
        ....
    </ Section>
    <Section>
        ....
    </ Section>
</ Div>
`` ``

Standard call:
`` `` Javascript
$ ( "Main.") UIPageScrolling ().;
`` ``
Supported parameters:
`` `` Html
{String} sections: a user selector (default section)
{String} easing: transition-timing-function
{Number} time: the animation (Integer> 0)
{Function} beforeMoveFunc: function is executed before animation
{Function} afterMoveFunc: function is executed after the animation
{Boolean} isCyclic: cyclical scrolling
{Boolean} isVertical: vertical \ horizontal scrolling
{String} sectionsControl: selector to choose a slide
{Boolean} captureKeyboard: capture keyboard (arrow + Page Up \ Down)
{Boolean} captureTouch: capture finger scrolling and mouse (default - off (false)) </ div>
`` ``
Parameters are passed in the form of a JSON object:

An example is to transfer the default settings:
`` `` Javascript
$ ( ". Main"). UIPageScrolling ({
    sections: "section",
    easing: "ease",
    time: 1000
    beforeMoveFunc: null,
    afterMoveFunc: null,
    isCyclic: false,
    isVertical: true,
    sectionsControl: null,
    captureKeyboard: false
});
`` ``

Management page is displayed
after application:
`` `` Javascript
$ ( "Main.") UIPageScrolling ().;
`` ``

Perhaps with the help of a function call:
`` `` Javascript
$ ( "Main.") MoveNext ().; // Moves to the next page
$ ( "Main.") MovePrevious ().; // Moves to the previous page
$ ( "Main.") MoveTo (index).; // Converts the selected page (where index = 0 to pageCount - 1)
`` ``