<?php if(!defined('KIRBY')) exit ?>

title: Section
pages:
  template: section
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
  htmlcode:
    label: HTML
    type:  textarea