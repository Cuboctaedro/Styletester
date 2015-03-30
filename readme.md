# StyleTester

StyleTester is a Kirby CMS theme for creating Style Guides. You can use the StyleTester backend to create, organize and comment html elements that will be rendered using your CSS and JS files. The StyleTester frontend will present these elements with comments, code snippets and all the controls you need to present them.

You can use the same StyleTester install to house various Style Guides and if you wish share CSS and JS files among them.

Html Elements are organized in Categories and Subcategories. The site structure created is something like this:
- guide 1
    -  category 1
        - subcategory 1
            - element 1
            -  element 2
            - element 3
        - subcategory 2
            - element 4
    -  category 2
        - subcategory 3
            - element 5
- guide 2

## How to use

Unzip the styletester.zip file and upload all the files to your root folder. The zip file contains the entire Kirby install so you once you have uploaded it is will be working. You should log in using username: styletester and password: styletester. Once logged in you should create a new admin user using your username and password and delete user styletester.

From the Pages menu you can add a new Guide and then inside this Guide add Categories, Subcategories and Elements. You should make all these pages visible and order them as you like. Once you have created the Guide you can go on the "Settings" section of the guide page to declare the css and js files that the Guide will use.

Inside each Guide, Category, Subcategory and Element you can add your own text to document it. In the Element page you should also add the element's html code.

Each time you create a Guide, Category, Subcategory or Element you will see that a "view" subpage is also created. You don't need to change anything on these pages or make them visible. They are here to create the "raw" views that present your elements without any additional markup or styling but your own.

With each new Guide you will also see a new "Docs" page. You can use this page to add extra documentation about your Guide. You can add subpages to it and structure your documentation as you like. If you don't need it just keep it invisible.

## Dependences

StyleTester is built with the Kirby CMS <http://getkirby.com/>. It requires at least version 2.06 (the latest version at the moment) since it makes use of page models that are not available in earlier versions. All Kirby files are included in the installation package.

The only Javascript used by StyleTester is uilang.js <http://uilang.com/>. If you wish to use uilang for your Style Guide simply load it again from your Guide's settings like any other Javascript file.

For rendering its default content StyleTester uses normalize.css <http://necolas.github.io/normalize.css/>. This is only done for demonstration purposes, you can delete or change it at any moment.

## Customize the look of StyleTester

StyleTester uses only one CSS file to render the header, menus and comments. If you want to change the look of your guide you can make a copy of this file (assets/css/ststyles.css), edit it, upload in your folder of choice and configure the guide to use it from the guide's edit page. Colors and typography are on the top of the stylesheet and they will be easy to change. Be more careful with changing the layout.

In the CSS file there is a separate section for the Home page, you can change it too. By default the Home page includes your site's title and description and a series of links to your visible Guides. If you wish to create a custom Home page (adding your logo or whatever) edit the home.php file in the templates folder. It does not depend on any other PHP snippet files and you can link it with your own stylesheets and js if you wish.

## Default Content

StyleTester comes loaded with some default content for demonstration purposes. This content is based on Brad Frost's Pattern Lab <http://patternlab.io/>. It is incomplete containing only some basic elements. If you wish you can use it as the basis for your own styleguides (it is an excellent choice) or you can delete it and create yours from scratch.