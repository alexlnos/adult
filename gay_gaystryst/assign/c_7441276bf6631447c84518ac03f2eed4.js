
function ready(){var copyrightBox=document.getElementsByClassName('hash-copyright')[0];if(copyrightBox!==undefined){var text=atob(copyrightBox.innerHTML);copyrightBox.insertAdjacentHTML('beforeBegin',text);copyrightBox.parentNode.removeChild(copyrightBox);}}
document.addEventListener("DOMContentLoaded",ready);