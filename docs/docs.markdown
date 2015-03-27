#About StyleTester

StyleTester is a Kirby CMS theme built for Style Guides. You can use StyleTester backend to create, organize and comment html elements that will be rendered using your CSS and JS files. The StyleTester frontend will present these elements with comments, code snippets and all the controls you need to present them.

You can use the same StyleTester install to house various Style Guides and if you wish share CSS and JS files among them.

By default StyleTester comes "loaded" with one Style Guide based on Brad Frost's Pattern Lab and using only a simple CSS file (an extension of normalize.css). If you wish you can use it as a base for your projects or you can create your own guides from scratch.

##How to use

Unzip the styletester.zip file and upload all the files to your root folder. The zip file contains the entire Kirby install so you once you have uploaded it is will be working. You should log in using username: styletester and password: styletester. Once logged in you should create a new admin user using your username and password and delete user styletester.

From the Pages menu you can add a new Guide and then inside this guide add categories, subcategories and elements. You should make all these pages visible and order them as you like.

Once you have created the guide you can go on the "Settings" section of the guide page to declare the css and js files that the guide will use.

Each time you create a guide, category, subcategory or element you will see that a "view" subpage is also created. You don't need to change anything on these pages or make them visible. They are here to create the "raw" views that present your elements without any additional markup or styling but your own.

With each new guide you will also see a new "Docs" page. You can use this page to add subpages containing extra documentation about your Guide. If you don't need it just keep it invisible.

Inside each guide, category, subcategory and element you can add your own text to document it. In the element page you should also add the element's html code.

##Default CSS and javascript

StyleTester uses only one css file to render the header, menus and comments. If you want to change the look of your guide you can make a copy of this file (assets/css/ststyles.css), edit it, upload in your folder of choice and configure the guide to use it from the guide's edit page. Colors and typography are on the top of the stylesheet and they will be easy to change. Be more carefull with changing the layout. In the css file there are different sections for the homepage and the docs pages, you can change them too.

The only javascript used by StyleTester is uilang.js. If you wish to use uilang for your guide simply load it from your guide's settings so that it will be available in "raw" views.

##Customizing the Home Page

By default the Home page includes your site's title and description and a series of links to your visible Guides. If you wish to create a custom home page (adding your logo or whatever) edit the home.php file in the templates folder. It does not use any other php files and you can link it with your own stylesheets and js if you wish.