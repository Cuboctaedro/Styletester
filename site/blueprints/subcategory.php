<?php if(!defined('KIRBY')) exit ?>

title: Subategory
pages:
  template:
    - element
  build:
    - title: View
      uid: view
      template: view
      num: 1
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    default: Place your text here
