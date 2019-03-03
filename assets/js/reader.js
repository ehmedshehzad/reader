// TOGGLE A CLASS
function toggleClass( element, className ) {

    if( !element || !className ) {
        return;
    }

    let theElement = document.querySelector( element );

    theElement.classList.toggle( className );

}

// ADD A CLASS
function addClass( element, className ) {

    if( !element || !className ) {
        return;
    }

    let theElement = document.querySelector( element );

    theElement.classList.add( className );

}

// REMOVE A CLASS
function removeClass( element, className ) {

    if( !element || !className ) return;

    let theElement = document.querySelector( element );

    theElement.classList.remove( className );

}

(function() {
    
    

})();