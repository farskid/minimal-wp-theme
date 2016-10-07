
function lazyImage(src, elem) {
  if (!src) throw new Error('lazyImage requires source image, got ' + src);
  if (!elem) throw new Error('lazyImage requires elem, got ' + elem);
  var img = new Image();
  var _rand = 999 * Math.random() + 1;
  img.src = src;
  var plc = document.createElement('div');
  plc.style = "width: " + img.width + "px;height: " + img.height + "px";
  plc.id = "lazy-item-" + _rand;
  elem.insertBefore(plc, elem.firstChild);
  img.onload = function() {
    setTimeout(function() {
      elem.insertBefore(img, elem.firstChild);
    }, 50);
  }
}
