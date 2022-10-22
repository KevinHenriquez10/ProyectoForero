toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

// PAGE SERVER SMTP "SENDGRID"
var tokenEmails = "875bc651-9be8-4859-b102-b2dfb35c6fce";
var emailFrom = "www.j.corzo@gmail.com";
var idUser = "";
var nombreUser = "";
var nombreCortoUser = "";
var isAdminUser = "";

if (typeof loginBack !== "undefined") {
    if (loginBack == false) {
        localStorage.setItem('userLogin', false);
    }
}

if (localStorage.getItem("userLogin") == null) {
    localStorage.setItem('userLogin', false);
}

if (localStorage.getItem("userLogin") === "true") {
    menuLogin();
} else {
    menuLogout();
}

$("#btnLogin").click(function () {
    $(location).attr('href', urlProyect() + 'login');
});

$("#btnAdminPage").click(function () {
    $(location).attr('href', urlProyect() + 'admin');
});

$("#btnSalir").click(function () {
    logout();
});

$("body").on("click", ".divLogo", function (event) {
    $(location).attr('href', urlProyectShort());
});

function logout() {
    $.post(urlProyect() + "c_app/setLogout", {}, function (data) {
        toastr.success(data.message);
        localStorage.setItem('userLogin', false);
        localStorage.removeItem('userAccess');
        localStorage.removeItem('dataUser');
        menuLogout();
        //$(location).attr('href', urlProyectShort());
    }, "json"); //post
}

function menuLogin() {
    let decrypted = decrypter(localStorage.getItem("dataUser"), "userAccess");
    let dataUser = JSON.parse(decrypted);
    idUser = dataUser.id;
    nombreUser = dataUser.nombre;
    nombreCortoUser = dataUser.nombre_corto;
    isAdminUser = (dataUser.admin==1)?true:false;
    $("#lblNombreUser").text(nombreCortoUser);
    $("#opcMenuLogin").removeClass("display-inline");
    $("#opcMenuLogin").addClass("display-none");
    $("#opcMenuUser").removeClass("display-none");
    $("#opcMenuUser").addClass("display-inline");
    if(isAdminUser){
        $("#divBtnAdminPage").removeClass("display-none");
        $("#divBtnAdminPage").addClass("display-block");
    }else{
        $("#divBtnAdminPage").removeClass("display-block");
        $("#divBtnAdminPage").addClass("display-none");
    }
}

function menuLogout() {
    var idUser = "";
    var nombreUser = "";
    var nombreCortoUser = "";
    var isAdminUser = "";
    $("#opcMenuLogin").removeClass("display-none");
    $("#opcMenuLogin").addClass("display-inline");
    $("#opcMenuUser").removeClass("display-inline");
    $("#opcMenuUser").addClass("display-none");
    $("#divBtnAdminPage").removeClass("display-block");
    $("#divBtnAdminPage").addClass("display-none");
}

function urlProyect() {
    return "http://localhost/henryforero/";
}

function urlProyectShort() {
    return "http://localhost/henryforero/";
}

$(".aRedirectLink").click(function () {
    $(location).attr('href', urlProyect() + $(this).data("url"));
});

function generateRandomNumber() {
    return Math.floor(Math.random() * 1000000) + 500000;
}

function validEmail(string) {
    var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    if (testEmail.test(string)) {
        return true;
    } else {
        return false;
    }
}

function createEmail_Template(title, email, body) {
    let msg = '<div style="text-align: center;">' + body + '</div><br>';
    Email.send({
        SecureToken: tokenEmails,
        To: email,
        From: emailFrom,
        Subject: title,
        Body: msg
    }).then(
        message => console.log(message)
    );
}

function createEmail(title, email, body) {
    Email.send({
        SecureToken: tokenEmails,
        To: email,
        From: emailFrom,
        Subject: title,
        Body: body
    }).then(
        message => console.log(message)
    );
}

function toCapitalize(string){
    let titulo = string.toLowerCase();
    return titulo.charAt(0).toUpperCase() + titulo.slice(1);
}

function encrypter(string, hash){
    return String(CryptoJS.AES.encrypt(string, hash));
}

function decrypter(string, hash){
    return CryptoJS.AES.decrypt(string, hash).toString(CryptoJS.enc.Utf8);
}