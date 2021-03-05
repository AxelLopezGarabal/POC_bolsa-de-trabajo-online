class Enterprice{
    constructor(aName, aCUIT, aProvince, aLocality, aDirection, aPhoneNro, aMail){
        this.__name = aName;
        this.__cuit = aCUIT;
        this.__province = aProvince;
        this.__locality = aLocality;
        this.__direction = aDirection;
        this.__phoneNro = aPhoneNro;
        this.__email = aMail;
        this.__jobs = [];
    }

    //GETTERS
    getName(){
        return this.__name;
    }

    getCUIT(){
        return this.__cuit;
    }

    getProvince(){
        return this.__province;
    }

    getLocality(){
        return this.__locality;
    }

    getDirection(){
        return this.__direction;
    }

    getPhoneNro(){
        return this.__phoneNro;
    }

    getEmail(){
        return this.__email;
    }

    getJobs(){
        return this.__jobs;
    }

    // JOBS METHODS
    addJob(newJob){
        return this.__jobs.push(newJob);
    }

    //SETTERS
    setName(aName){
        this.__name = aName;
    }

    setCUIT(aCUIT){
        this.__cuit = aCUIT;
    }

    setProvince(aProvince){
        this.__province = aProvince;
    }

    setLocality(aLocality){
        this.__locality = aLocality;
    }

    setDirection(aDirection){
        this.__direction = aDirection;
    }

    setPhoneNro(aPhoneNro){
        this.__phoneNro = aPhoneNro;
    }

    setEmail(aMail){
        this.__email = aMail;
    }

    setJobs(jobs){
        this.__jobs = jobs;
    }

}

module.exports = Enterprice