let offerName = 'Herbal of Hammer',
    offerElm = document.getElementsByClassName('offer-name');

document.title = offerName;

for (let i = 0; i < offerElm.length; i++) {
  let el = offerElm[i];
  el.innerHTML = offerName;
}