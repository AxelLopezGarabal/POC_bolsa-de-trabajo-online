const Request = require("../Request");

class Job extends Request{
    constructor(details, fromDate, toDate){
        super();
        this.__details = details;
        this.__fromDate = fromDate;
        this.__toDate = toDate;
        this.__isAproved = false;
    }

    // GETTERS
    getDetails(){
        return this.__details;
    }

    getFromDate(){
        return this.__fromDate;
    }

    getToDate(){
        return this.__toDate;
    }

    // SETTERS
    setDetails(newDetails){
        this.__details = newDetails;
    }

    setFromDate(aDate){
        this.__fromDate = aDate;
    }

    setToDate(aDate){
        this.__toDate = aDate;
    }
}

module.exports = Job;