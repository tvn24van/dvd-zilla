class AnimatedTitle{
    static originalTitle = document.title;
    static interval;

    static setTitle(title){
        document.title = title;
    }

    static createInterval(speed=300){
        return setInterval(()=>
            AnimatedTitle.setTitle(document.title.substring(1) + document.title[0]),
            speed
        );
    }

    static freeze(){
        clearInterval(AnimatedTitle.interval);
    }

    static start(){
        AnimatedTitle.interval = AnimatedTitle.createInterval();
    }

    static reset(){
        AnimatedTitle.freeze();
        AnimatedTitle.setTitle(AnimatedTitle.originalTitle);
    }

    static initEvents(){
        document.addEventListener("mouseleave", ()=> AnimatedTitle.reset());

        document.addEventListener("mouseenter", ()=> AnimatedTitle.start());

        /**
         * We set page's title to the original one
         * to prevent weird names during changing title
         */
        window.addEventListener("beforeprint", ()=> AnimatedTitle.reset());
    }
}