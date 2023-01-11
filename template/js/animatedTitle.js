
const originalTitle = document.title;

function setTitle(title){
    document.title = title;
}

function createInterval(speed){
    return setInterval(()=>setTitle(document.title.substring(1) + document.title.charAt(0)), speed || 300);
}

function freeze(){
    clearInterval(interval);
}

function unfreeze(){
    interval = createInterval();
}

function reset(){
    freeze();
    setTitle(originalTitle);
}

document.addEventListener("mouseleave", ()=> reset());

document.addEventListener("mouseenter", ()=> unfreeze());

/**
 * We set page's title to the original one
 * to prevent weird names during changing title
 */
window.addEventListener("beforeprint", ()=> reset());

let interval = createInterval();