class Admin{
    constructor(username, password){
        this.__username = username;
        this.__password = password;
    }

    //GETTERS
    getUserName(){
        return this.__username;
    }
    getPassword(){
        return this.__password;
    }

    //SETTERS
    setUsername(newName){
        this.__username = newName;
    }
    getPassword(newPassword){
        this.__password = newPassword;
    }

    //Approves a form pass in the a parameter
    approvesForm(request){
        request.changeState();
    }
}

module.exports = Admin;