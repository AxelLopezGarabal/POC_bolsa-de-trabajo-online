class Request{
    constructor(){
        this.__isAproved = false;
    }

    getState(){ 
        return this.__isAproved;
    }

    // CHANGE THE STATE OF THE FIELD isAproved
    changeState(){
        this.__isAproved = !this.__isAproved;
    }
}

module.exports = Request;