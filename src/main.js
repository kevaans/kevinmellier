const $ = require('jquery')
const PopperJS = require('popper.js')

require("bootstrap/js/src/index");
require("bootstrap/js/src/modal");
require("bootstrap/js/src/carousel");
require("bootstrap/js/src/collapse");

$(".tiptext")
  .mouseover(function() {
    $(this)
      .children(".description")
      .show();
  })
  .mouseout(function() {
    $(this)
      .children(".description")
      .hide();
  });

