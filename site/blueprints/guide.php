<?php if(!defined('KIRBY')) exit ?>

title: Guide
pages:
  template:
    - category
  build:
    - title: View
      uid: view
      template: view
      num: 1
    - title: Docs
      uid: docs
      template: docs
      num: 2
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  settings:
    label: Settings
    type: headline
  stylefiles:
    label: CSS files
    type: structure
    fields:
      path:
        label: file
        type: text
        placeholder: Please enter path/to/file.css
  headerjs:
    label: Javascript files in header
    type: structure
    fields:
      path:
        label: file
        type: text
        placeholder: Please enter path/to/file.js
  footerjs:
    label: Javascript files in footer
    type: structure
    fields:
      path:
        label: file
        type: text
        placeholder: Please enter path/to/file.js
  look:
    label: Appearance
    type: headline
  guidestyle:
    label: CSS files for StyleTester
    type: structure
    fields:
      path:
        label: file
        type: text
        placeholder: Please enter path/to/file.css
