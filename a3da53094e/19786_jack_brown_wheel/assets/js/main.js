"use strict";

(function () {
  var app = function app() {
    var pin = document.querySelector('.js__pin');
    var bar = document.querySelector('.js__bar');
    var textPlace = document.querySelector('.js__value');
    var state = {
      value: 1
    };

    var render = function render(value) {
      textPlace.textContent = value;
    };

    pin.addEventListener('mousedown', function (e) {
      var barCoords = bar.getBoundingClientRect();
      var pinCoords = pin.getBoundingClientRect();
      var barWidth = bar.offsetWidth;
      var pinWidth = pin.offsetWidth;
      var startCoords = e.clientX;
      var clickShift = startCoords - pinCoords.left;

      var onMouseMove = function onMouseMove(moveEvt) {
        moveEvt.preventDefault();
        var shift = startCoords - moveEvt.clientX;
        startCoords = moveEvt.clientX;

        if (moveEvt.clientX > barCoords.right + clickShift - pinWidth) {
          pin.style.left = "".concat(barWidth - pinWidth, "px");
          startCoords = barCoords.right;
        } else if (moveEvt.clientX < barCoords.left + clickShift) {
          pin.style.left = "0px";
          startCoords = barCoords.left;
        } else {
          pin.style.left = "".concat(pin.offsetLeft - shift, "px");
        }

        state.value = Math.floor((pinWidth + pin.offsetLeft) / barWidth * 2) < 1 ? 1 : 2;
        render(state.value);
      };

      var onMouseUp = function onMouseUp(upEvt) {
        upEvt.preventDefault();
        document.removeEventListener('mousemove', onMouseMove);
        document.removeEventListener('mouseup', onMouseUp);
      };

      document.addEventListener('mousemove', onMouseMove);
      document.addEventListener('mouseup', onMouseUp);
    });
    pin.addEventListener('touchstart', function (e) {
      var barCoords = bar.getBoundingClientRect();
      var pinCoords = pin.getBoundingClientRect();
      var barWidth = bar.offsetWidth;
      var pinWidth = pin.offsetWidth;
      var startCoords = e.touches[0].clientX;
      console.log('startCoords: ', startCoords);
      var clickShift = startCoords - pinCoords.left;

      var onMouseMove = function onMouseMove(moveEvt) {
        var shift = startCoords - moveEvt.touches[0].clientX;
        startCoords = moveEvt.touches[0].clientX;

        if (moveEvt.touches[0].clientX > barCoords.right + clickShift - pinWidth) {
          pin.style.left = "".concat(barWidth - pinWidth, "px");
          startCoords = barCoords.right;
        } else if (moveEvt.touches[0].clientX < barCoords.left + clickShift) {
          pin.style.left = "0px";
          startCoords = barCoords.left;
        } else {
          pin.style.left = "".concat(pin.offsetLeft - shift, "px");
        }

        state.value = Math.floor((pinWidth + pin.offsetLeft) / barWidth * 2) < 1 ? 1 : 2;
        render(state.value);
      };

      var onMouseUp = function onMouseUp(upEvt) {
        document.removeEventListener('touchmove', onMouseMove);
        document.removeEventListener('touchend', onMouseUp);
      };

      document.addEventListener('touchmove', onMouseMove);
      document.addEventListener('touchend', onMouseUp);
    });
    render(state.value);
  };

  app();
})();
//# sourceMappingURL=main.js.map
