const Request = require('../Request');

const career = (require('./Career'));
const type = (require('./TypeOfDocument'));

class Student extends Request{
    constructor(name, lastName, typeOfDocument, documentNro, email, career, year, detail){
        super();
        this.__name = name;
        this.__lastName = lastName;
        this.__typeOfDocument = typeOfDocument;
        this.__documentNro = documentNro;
        this.__email = email;
        this.__career = career;
        this.__year = year;
        this.__detail = detail;
        this.__isApproved = false;
    }

/*
 *  GETTERS 
 */

    getName(){
        return this.__name;
    }

    getLastName(){
        return this.__lastName;
    }

    getTypeOfDocument(){
        return this.__typeOfDocument;
    }

    getDocumentNro(){
        return this.__documentNro;
    }

    getEmail(){
        return this.__email;
    }

    getCareer(){
        return this.__career;
    }

    getYear(){
        return this.__year;
    }

    getDetails(){
        return this.__detail;
    }

/*
 *  SETTERS
 */

    setName(newName){
        this.__name = newName;
    }

    setLastName(newLastName){
        this.__lastName = newLastName;
    }

    setTypeOfDocument(newType){
        this.__typeOfDocument = newType;
    }

    setDocumentNro(newNro){
        this.__documentNro = newNro;
    }

    setEmail(newEmail){
        this.__email = newEmail;
    }

    setCareer(newCareer){
        this.__career = newCareer;
    }

    setYear(newYear){
        this.__year = newYear;
    }

    setDetails(newDetails){
        this.__detail = newDetails;
    }


}

module.exports = Student;