<?php if(!defined('KIRBY')) exit ?>

title: Element
pages: false
  build:
    - title: View
      uid: view
      template: view
      num: 1
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    default: Place your text here
  htmlcode:
    label: HTML
    type:  textarea